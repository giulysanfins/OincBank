@extends('layouts/app', ['activePage' => '',
'activeButton' => '',
'title' => 'Visualização Campanha'])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                <h3 class="">Informações da Campanha "{{$campanha->titulo}}"</h3>
                                </div>
                                <br>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="titulo">Titulo*</label>
                                        <p>{{$campanha->titulo}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="categoria">Categoria*</label>
                                        <p>{{$campanha->categoria->name}}</p>
                                    </div>
                                </div>
                                {{-- valor --}}
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="apelido">Valor*<small>(em Real)</small></label>
                                        <p>R$ {{number_format($campanha->valor ,2,",",".")}}</p>
                                    </div>
                                </div>
                                {{-- data encerramento --}}
                                <div class="col-md-4" >
                                    <label for="data_encerramento">Que data a campanha deve encerrar?*</label>
                                    <p>{{$campanha->data_encerramento->format('d/m/Y')}}</p>
                                </div>


                                <div class="col-12">
                                    <div class="form-group{{ $errors->has('descricao') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-description"><i class="w3-xxlarge far fa-edit"></i> Descrição</label>
                                        <p>{!! nl2br($campanha->descricao) !!}</p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <hr />
                                    <h4>Mídia</h4>
                                </div>

                                {{-- img upload --}}
                                <div class="col-md-6">
                                    <label class="form-control-label" for="input-photo_perfil">Foto Campanha</label>
                                    <br />
                                    <img class="img-thumbnail border-gray" src="{{asset('storage')}}/images/{{$campanha->profile_image}}" alt="foto_{{$campanha->titulo}}">
                                </div>

                                <div class="col-md-6" >
                                    <label for="data_encerramento">Vídeo*(url)</label>
                                    <br>
                                    <div class="form-group">
                                        @if ($campanha->video != NULL)
                                            <iframe id="ytplayer" type="text/html" width="100%" height="360"
                                            src="{{$campanha->video}}"
                                            frameborder="0" />
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
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
