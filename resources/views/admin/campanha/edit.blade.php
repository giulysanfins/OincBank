@extends('layouts/app', ['activePage' => '', 'activeButton' => '', 'title' => 'Edição de Cofrinhos'])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('campanha.update',$campanha->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="">Edite seu Cofrinho</h3>
                                </div>
                                <br>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="titulo">Titulo*</label>
                                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ex: Ajuda para Maria" value="{{old('titulo',$campanha->titulo)}}" required
                                        oninvalid="this.setCustomValidity('Por favor preencha o título.')"
                                        oninput="this.setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="categoria">Categoria*</label>
                                        <br>
                                        <select class="form-control" id="categoria_id" name="categoria_id" oninvalid="this.setCustomValidity('Por favor selecione uma categoria.')"
                                        oninput="this.setCustomValidity('')">
                                                @foreach ($categorias as $categoria)
                                                    <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- valor --}}
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="apelido">Valor*<small>(em Real)</small></label>
                                        <input type="text" class="form-control" id="valor" name="valor" placeholder="EX: 100.000,00" value="{{old('valor',$campanha->valor)}}" oninvalid="this.setCustomValidity('Por favor preencha o valor.')"
                                        oninput="this.setCustomValidity('')">
                                    </div>
                                </div>
                                {{-- data encerramento --}}
                                <div class="col-md-4" >
                                    <label for="data_encerramento">Que data o cofrinho deve encerrar?*</label>
                                    <br>
                                    <div class="form-group">
                                        <input  class="form-control data_encerramento" type="text" id="data_encerramento"
                                        name="data_encerramento" 
                                        value="{{(old('data_encerramento',$campanha->data_encerramento->format('d/m/Y')))}}"
                                        required
                                        oninvalid="this.setCustomValidity('Por favor preencha a data.')"
                                        oninput="this.setCustomValidity('')">
                                        <small id="erro_encerramento" class="text-danger d-none">Data de encerramento inválida.</small>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group{{ $errors->has('descricao') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-description"><i class="w3-xxlarge far fa-edit"></i> Descrição</label>
                                        <textarea rows="6" name="descricao" class="form-control form-control-textarea"  required oninvalid="this.setCustomValidity('Por favor preencha a descrição.')"
                                        oninput="this.setCustomValidity('')" >{{old('descricao',$campanha->descricao)}}{{ auth()->user()->description }}</textarea>
                                        <label><small>(Máximo de 3000 caracteres)</small></label>
                                    </div>
                                </div>

                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-success">Alterar</button>
                                    </form>
                                </div>

                                <div class="col-12">
                                    <hr />
                                    <h4>Mídia</h4>
                                    <form method="POST" action="{{route('foto.principal',$campanha->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                </div>

                                {{-- img upload --}}
                                <div class="col-md-3">
                                    {{-- @include('pages.campanha.imageUpload') --}}
                                    <label class="form-control-label" for="input-photo_perfil">Foto Principal Cofrinho</label>
                                    <br />
                                    <label for="photo_perfil" class="btn btn-info">Selecionar Imagem</label>
                                    <input id="photo_perfil" style="display: none;" onchange="return fileValidation()" type="file" name="photo_perfil">
                                    <img class="img-thumbnail border-gray" src="{{asset('storage')}}/images/{{$campanha->profile_image}}" alt="foto_{{$campanha->titulo}}" id="foto_antiga">
                                    <div id="imagePreview"></div>
                                </div>

                                <div class="col-md-9">
                                    <label for="data_encerramento">Vídeo*(url)</label>
                                    <br>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="video" name="video" placeholder="Ex: Coloque seu URL" value="{{old('video',$campanha->video)}}" >
                                    </div>
                                </div>

                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-success">Alterar</button>
                                    <hr />
                                    </form>
                                </div>

                                {{-- outras img upload --}}
                                <div class="col-md-12 mt-3">
                                    <label class="form-control-label" for="input-photo_perfil">Outras Fotos do Cofrinho</label>
                                    <form method="POST" action="{{route('foto.insert')}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <input type="hidden" name="cofrinho_id" value="{{$campanha->id}}">
                                    <div class="input-group">
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input d-none" name="fotos[]" id="fotos" multiple accept="image/*">
                                          <label class="custom-file-label btn btn-info" for="fotos">Selecionar imagens</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">Alterar</button>

                                    </form>
                                </div>

                                @foreach ($photos as $photo)
                                    <div class="col-12 col-md-2">
                                        <button type="button" class="btn-remove" data-toggle="modal" data-target="#deleteFoto-{{$photo->id}}">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                        <img class="img-thumbnail border-gray" src="{{asset('storage')}}/images/{{$photo->path}}" alt="foto_{{$photo->titulo}}" id="">
                                    </div>

                                    @component('admin.campanha.components.delete-foto',[
                                        'foto' => $photo
                                    ])@endcomponent
                                @endforeach


                            </div>
                        </div>


                    </div>



            </div>

        </div>

    </div>
@endsection

@section('scripts')
<script src="{{ asset('light-bootstrap') }}/js/cofrinho.js"></script>

<script>
    $(document).ready(function(){
        $('#valor').mask("#.##0,00", {reverse: true});
        $('.data_encerramento').mask('00/00/0000');
    });

</script>
<script>
    function fileValidation() {
        var fileInput =
            document.getElementById('photo_perfil');

        var filePath = fileInput.value;

        // Allowing file type
        var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif|\.webp)$/i;

        if (!allowedExtensions.exec(filePath)) {
            swal("Oops", "Não aceitamos essa extensão. Por favor tente novamente!", "error");
            fileInput.value = '';
            return false;
        } else {

            // Image preview
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var myobj = document.getElementById("foto_antiga");
                    myobj.remove();
                    document.getElementById(
                            'imagePreview').innerHTML =
                        '<img class="img-thumbnail border-gray" src="' + e.target.result +
                        '"/>';
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    }

</script>
@endsection
