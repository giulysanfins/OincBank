@extends('layouts/app', ['activePage' => '',
'activeButton' => '',
'title' => 'Criação de Campanhas'])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('campanha.store')}}" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="">Crie sua campanha</h3>
                                </div>
                                <br>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="titulo">Titulo*</label>
                                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ex: Ajuda para Maria" value="{{old('titulo')}}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="categoria">Categoria*</label>
                                        <br>
                                        <select class="form-control custom-select" id="categoria_id" name="categoria_id" >
                                            <option selected>Selecione</option>
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
                                        <input type="number" class="form-control" id="valor" name="valor" placeholder="EX: 10.000,00" value="{{old('valor')}}">
                                    </div>
                                </div>
                                {{-- data encerramento --}}
                                <div class="col-md-4" >
                                    <label for="data_encerramento">Que data a campanha deve encerrar?*</label>
                                    <br>
                                    <div class="form-group">
                                        <input type="date" name="data_encerramento" max="3000-12-31"
                                               min="2020-01-01" class="form-control" data-date-format="DD MM YYYY">
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group{{ $errors->has('descricao') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-description"><i class="w3-xxlarge far fa-edit"></i> Descrição</label>
                                        <textarea rows="6" name="descricao" class="form-control form-control-textarea" >{{ auth()->user()->description }}</textarea>
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
                                    <label class="form-control-label" for="input-photo_perfil">Foto Campanha</label>
                                    <br />
                                    <label for="photo_perfil" class="btn btn-info">Selecionar Imagem</label>
                                    <input id="photo_perfil" style="display: none;" type="file" name="photo_perfil" required>
                                </div>

                                <div class="col-md-10" >
                                    <label for="data_encerramento">Vídeo*(url)</label>
                                    <br>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="video" name="video" placeholder="Ex: Coloque seu URL">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection