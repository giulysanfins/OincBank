@extends('layouts/app', ['activePage' => '', 'activeButton' => '', 'title' => 'Visualização Cofrinhos'])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-3 pb-4">
                <div class="card" style="height:200px;">
                    <div class="card-header">
                         <h4 class="card-title">Balanço</h4>
                    </div>
                    <div class="card-body">
                        <h3>R$ {{number_format($balanco,2,",",".")}} <br />
                            <small> (Apenas os confirmados)</small>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-3 pb-4" >
                <div class="card" style="height:200px;">
                    <div class="card-header">
                         <h4 class="card-title">Valor Arrecadado:</h4>
                    </div>
                    <div class="card-body">
                        <h3>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{$perc}}%" aria-valuenow="{{$perc}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small><b>R$ {{number_format($valorTotal,2,",",".")}}</b> de R$ {{number_format($campanha->valor ,2,",",".")}}</small>
                            <p> (Apenas os confirmados)</p>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-3 pb-4">
                <div class="card" style="height:200px;">
                    <div class="card-header">
                         <h4 class="card-title">Dono</h4>
                    </div>
                    <div class="card-body d-flex align-items-center px-4">
                        <img class="rounded-circle" style="width: 100px; height: 100px;" src="{{ asset('/storage/profile/' . $ownerPhoto->path) }}" alt="">
                        <span class="mx-auto">{{ $campanha->user->name }}</span>
                    </div>
                </div>
            </div>
            
            <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="">Informações do Cofrinho"{{$campanha->titulo}}"</h3>
                        </div>
                        <br>
                        <div class="col-lg-12">
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="apelido">Valor*<small>(em Real)</small></label>
                                <p>R$ {{number_format($campanha->valor ,2,",",".")}}</p>
                            </div>
                        </div>
                        {{-- data encerramento --}}
                        <div class="col-md-4" >
                            <label for="data_encerramento">Que data o cofrinho deve encerrar?*</label>
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
                            <label class="form-control-label" for="input-photo_perfil">Foto Principal Cofrinho</label>
                            <br />
                            <img class="img-thumbnail border-gray w-25" src="{{asset('storage')}}/images/{{$campanha->profile_image}}" alt="foto_{{$campanha->titulo}}">
                            <div class="row">
                                
                            </div>
                        </div>

                            <div class="col-md-6" >
                                <label for="data_encerramento">Vídeo*(url)</label>
                                <br>
                                <div class="form-group">
                                    @if ($campanha->video != NULL)
                                        <iframe id="ytplayer" type="text/html" width="100%" height="360"
                                        src="{{$campanha->video}}"
                                        frameborder="0" ></iframe>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-9">
                                <h3 class="">Doações para o Cofrinho</h3>
                            </div>

                            <div class="col-3 mt-3 text-right">
                                @if (auth()->user()->role == 2)
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sacar{{$campanha->id}}">Sacar valor</button>
                                @endif
                            </div>


                            @if (auth()->user()->role == 2)
                                @component('admin.campanha.components.solicitar',[
                                    'campanha' => $campanha,
                                    'bancos' => $bancos
                                ])@endcomponent
                            @endif
                            <div class="col-12 table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>

                                                <th>Doador Por:</th>

                                            <th>Valor</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $valorTotal = 0;
                                        @endphp
                                        @foreach ($pagamentos as $pagamento)
                                            <tr>
                                                <td>{{$pagamento->id}}</td>
                                                @if (auth()->user()->role == 1)
                                                    <td>{{$pagamento->user->name}}</td>

                                                @else
                                                    @if($pagamento->anonimo == 0)
                                                    <td>{{$pagamento->user->name}}</td>
                                                    @else
                                                    <td>Doação Anônima</td>
                                                    @endif
                                                @endif

                                                <td class="{{($pagamento->tipo == 2?'text-danger':'')}}"> {{($pagamento->tipo == 2?'-':'')}} R$ {{number_format($pagamento->valor ,2,",",".")}}</td>
                                                <td>
                                                    @if ($pagamento->status == 1)
                                                        Pendente
                                                    @elseif ($pagamento->status == 2)
                                                        Pago
                                                    @elseif ($pagamento->status == 3)
                                                        Pendente Pagamento - Mercado Pago
                                                    @elseif ($pagamento->status == 4)
                                                        Falha no pagamento
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
