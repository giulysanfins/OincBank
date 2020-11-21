@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'campanha'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
            <a href="{{route('clientes.index')}}" class="btn btn-secondary btn-sm"> Voltar</a>
            </div>
            <div class="col-12">
                <form method="POST" action="{{route('clientes.update',$cliente->id)}}">
                    @csrf
                    @method('put')
                    <div class="card">
                        <div class="card-header">
                            <h3>Editar - {{$cliente->apelido}}</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="empresa">Nome da Empresa</label>
                                        <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Nome da Empresa" value="{{old('empresa',$cliente->empresa)}}">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="apelido">Apelido</label>
                                        <input type="text" class="form-control" id="apelido" name="apelido" placeholder="Apelido" value="{{old('apelido',$cliente->apelido)}}">
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="apelido">Intervalo de Medição <small>(em Minutos)</small></label>
                                        <input type="number" class="form-control" id="intervalo_medicao" name="intervalo_medicao" placeholder="Intervalo de Medição" value="{{old('intervalo_medicao',$cliente->intervalo_medicao)}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-success ">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
