@extends('layouts/app', ['activePage' => '',
'activeButton' => '',
'title' => 'Criação de Campanhas'])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                {{-- @dd($campanhas) --}}
                <form method="GET" action="{{route('campanha.index')}}" >
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                <h3 class="">Informações da Campanha "{{$campanhas->titulo}}"</h3>
                                </div>
                                <br>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="titulo">Titulo*</label>
                                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ex: Ajuda para Maria" value="{{old('titulo',$campanhas->titulo)}}" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="categoria">Categoria*</label>
                                        <br>
                                        <select class="custom-select" id="categoria_id" name="categoria_id" disabled="true" >
                                            <option selected >
                                                 {{old('categoria_id',$campanhas->categoria_id)}}

                                                </option>
                                            <option value="1">Animais</option>
                                            <option value="2">Casamento / Lua-de-Mel / Chá de Panela</option>
                                            <option value="3">Educação / Formatura / Cursos</option>
                                            <option value="4">Evento / Festa / Aniversário</option>
                                            <option value="5">Nascimento / Bebê</option>
                                            <option value="6">Projetos / Produtos</option>
                                            <option value="7">Solidariedade / Pessoas / Saúde / Caridade</option>
                                            <option value="8">Vaquinha / Outros / Dinheiro</option>
                                            <option value="9">Viagem / Turismo</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- valor --}}
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="apelido">Valor*<small>(em Real)</small></label>
                                        <input type="text" class="form-control" id="valor" name="valor" placeholder="EX: 100.000,00"   value="{{old('valor',$campanhas->valor)}}" readonly>
                                    </div>
                                </div>
                                {{-- data encerramento --}}
                                <div class="col-md-4" >
                                    <label for="data_encerramento">Que data a campanha deve encerrar?*</label>
                                    <br>
                                    <div class="form-group">
                                        <input type="date" name="data_encerramento" max="3000-12-31"
                                               min="2020-01-01" class="form-control" data-date-format="DD MM YYYY" value="{{old('data_encerramento',$campanhas->data_encerramento)}}" readonly>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group{{ $errors->has('descricao') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-description"><i class="w3-xxlarge far fa-edit"></i> Descrição</label>
                                        <textarea rows="6" name="descricao" class="form-control form-control-textarea"  readonly>{{old('descricao',$campanhas->descricao)}}{{ auth()->user()->description }}</textarea>
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
                                    {{-- @if ($photo != null) --}}
                                    <div class="col-md-6">
                                        <img class="img-thumbnail avatar border-gray" src="{{asset('storage')}}/images/{{$campanhas->profile_image}}" alt="foto_{{$campanhas->titulo}}" style="height:300%; width:300%";>
                                    </div>
                                    {{-- @else
                                        <img class="avatar border-gray" src="{{ asset('pig-pork.jpg') }}" alt="...">
                                    @endif --}}
                                </div>

                                <div class="col-md-10" >
                                    <label for="data_encerramento">Vídeo*(url)</label>
                                    <br>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="video" name="video" placeholder="Ex: Coloque seu URL" value="{{old('video',$campanhas->video)}} " readonly >
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-success BTN-LG">Voltar</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </div>


    <script>
        $(document).ready(function(){
            $('#valor').mask("#.##0,00", {reverse: true});
            console.log('sddf');
        });
    </script>
@endsection

@section('scripts')

@endsection
