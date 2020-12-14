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
                                        <select class="custom-select" id="categoria_id" name="categoria_id" oninvalid="this.setCustomValidity('Por favor selecione uma categoria.')"
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
                                        <input type="text" class="form-control" id="valor" name="valor" placeholder="EX: 100.000,00"   value="{{old('valor',$campanha->valor)}}"   oninvalid="this.setCustomValidity('Por favor preencha o valor.')"
                                        oninput="this.setCustomValidity('')">
                                    </div>
                                </div>
                                {{-- data encerramento --}}
                                <div class="col-md-4" >
                                    <label for="data_encerramento">Que data o cofrinho deve encerrar?*</label>
                                    <br>
                                    <div class="form-group">

                                        <input type="date" name="data_encerramento" max="3000-12-31"
                                        min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" class="form-control"  value="{{(old('data_encerramento',$campanha->data_encerramento->format('Y-m-d')))}}"  required
                                        oninvalid="this.setCustomValidity('Por favor preencha a data.')"
                                        oninput="this.setCustomValidity('')">
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

                                <div class="col-12">
                                    <hr />
                                    <h4>Mídia</h4>
                                </div>

                                {{-- img upload --}}
                                <div class="col-md-2">
                                    {{-- @include('pages.campanha.imageUpload') --}}
                                    <label class="form-control-label" for="input-photo_perfil">Foto Cofrinho</label>
                                    <br />
                                    <label for="photo_perfil" class="btn btn-info">Selecionar Imagem</label>
                                    <input id="photo_perfil" style="display: none;" type="file" name="photo_perfil">
                                    <img class="img-thumbnail border-gray" src="{{asset('storage')}}/images/{{$campanha->profile_image}}" alt="foto_{{$campanha->titulo}}">
                                </div>

                                <div class="col-md-10" >
                                    <label for="data_encerramento">Vídeo*(url)</label>
                                    <br>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="video" name="video" placeholder="Ex: Coloque seu URL" value="{{old('video',$campanha->video)}}" >
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-success">Alterar</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('#valor').mask("#.##0,00", {reverse: true});
    });

</script>
@endsection
