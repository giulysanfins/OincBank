@extends('layouts/app', ['activePage' => '',
'activeButton' => '',
'title' => 'Criação de Cofrinhos'])

@section('content')


    <div class="content">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('campanha.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="">Crie seu cofrinho</h3>
                                </div>
                                <br>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="titulo">Titulo *</label>
                                        <input type="text" class="form-control" id="titulo" name="titulo"
                                            placeholder="Ex: Ajuda para Maria" value="{{ old('titulo') }}" required
                                            oninvalid="this.setCustomValidity('Por favor preencha o título.')"
                                            oninput="this.setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="categoria">Categoria*</label>
                                        <br>
                                        <select class="form-control custom-select" id="categoria_id" name="categoria_id"
                                            required
                                            oninvalid="this.setCustomValidity('Por favor selecione uma categoria.')"
                                            oninput="this.setCustomValidity('')">
                                            <option value="" selected>Selecione</option>
                                            @foreach ($categorias as $categoria)
                                                <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- valor --}}
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="apelido"> Valor*<small>(em Real)</small></label>
                                        <input type="text" class="form-control" id="valor" name="valor"
                                            placeholder="EX: 10.000,00" value="{{ old('valor') }}" required
                                            oninvalid="this.setCustomValidity('Por favor preencha o valor.')"
                                            oninput="this.setCustomValidity('')">
                                    </div>
                                </div>
                                {{-- data encerramento --}}
                                <div class="col-md-4">
                                    <label for="data_encerramento"></i> Que data a campanha deve encerrar?*</label>
                                    <br>
                                    <div class="form-group">
                                        <input type="date" name="data_encerramento" max="3000-12-31"
                                            min="{{ \Carbon\Carbon::today()->format('Y-m-d') }}" class="form-control"
                                            required
                                            oninvalid="this.setCustomValidity('Por favor preencha a data.')"
                                            oninput="this.setCustomValidity('')">
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group{{ $errors->has('descricao') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-description"></i> Descrição*</label>
                                        <textarea rows="6" name="descricao" class="form-control form-control-textarea"
                                            required oninvalid="this.setCustomValidity('Por favor preencha a descrição.')"
                                            oninput="this.setCustomValidity('')">{{ auth()->user()->description }}</textarea>
                                        <label><small>(Máximo de 3000 caracteres)</small></label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <hr />
                                    <h4>Mídia</h4>
                                </div>

                                {{-- img upload --}}
                                <div class="col-md-2">

                                    <label class="form-control-label" for="input-photo_perfil"> Foto Cofrinho*</label>
                                    <br />
                                    <label for="photo_perfil" class="btn btn-info">Selecionar Imagem</label>
                                    <input id="photo_perfil" required onchange="return fileValidation()"
                                        style="display: none;" type="file" name="photo_perfil" multiple>
                                    {{-- usei https://sweetalert.js.org/docs/#configuration
                                    --}}
                                    <!-- Image preview -->
                                    <div id="imagePreview"></div>
                                </div>



                                <div class="col-md-10">
                                    <label for="data_encerramento">Vídeo
                                    </label>

                                    <br>

                                    <div class="input-group">
                                        <input type="text" class="form-control" id="video" name="video" placeholder="Ex: Coloque seu URL">
                                            <a href="#dica" class="edit" data-toggle="modal"><i class="fas fa-2x fa-question" style="color: black"></i></a>
                                            <div id="dica" class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Dica Vídeo</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>
                                                                    Coloque seu vídeo no youtube ou alguma plataforma de hospedagem e cole o URL aqui.


                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="button" class="btn btn-danger" data-dismiss="modal" value="Sair">
                                                            </div>

                                                    </div>
                                                </div>
                                            </div>
                                        {{-- <span class="input-group-btn">
                                            <button type="button" class="btn btn-secondary" data-toggle="tooltip"
                                                data-placement="left" title="Coloque seu vídeo no youtube">
                                                Dica
                                            </button>
                                        </span> --}}


                                    </div>

                                </div>
                            </div>

                            <div class="card-footer text-right">
                                <button type="submit" id="upload" class="btn btn-success">Salvar</button>
                            </div>
                        </div>

                </form>


            </div>

        </div>

    </div>

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('#valor').mask("#.##0,00", {
                reverse: true
            });
        });

    </script>
        {{-- script para validar extensão --}}
        <script>
            function fileValidation() {
                var fileInput =
                    document.getElementById('photo_perfil');

                var filePath = fileInput.value;

                // Allowing file type
                var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;

                if (!allowedExtensions.exec(filePath)) {
                    swal("Oops", "Não aceitamos essa extensão. Por favor tente novamente!", "error");
                    fileInput.value = '';
                    return false;
                } else {

                    // Image preview
                    if (fileInput.files && fileInput.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
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
        {{-- script para validar se foto esta lá --}}
        <script type="text/javascript">
            $(document).ready(function() {
                $('#upload').bind("click", function() {
                    var imgVal = $('#photo_perfil').val();
                    if (imgVal == '') {
                        swal("Oops", "Por favor inclua uma foto!", "error");
                        return false;
                    }


                });
            });

        </script>
@endsection
