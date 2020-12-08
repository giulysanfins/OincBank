@extends('layouts/app', ['activePage' => '','activeButton' => '','title' => 'Campanhas | OincBank'])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-6">
            <div class="card card-stats">
                <div class="card-header">
                    <h3>Parametros Gerais</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table">
                                <tr>
                                    <th>Nome do Parametro</th>
                                    <th>Valor</th>
                                    <th></th>
                                </tr>
                                @foreach ($parametros as $parametro)
                                    <tr>
                                        <td>{{$parametro->nome}}</td>
                                        <td>{{$parametro->valor}}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editParam{{$parametro->id}}">Editar</button>
                                        </td>
                                    </tr>

                                    @component('admin.config.parametros.components.edit',[
                                        'parametro' => $parametro
                                    ])@endcomponent
                                @endforeach
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

@endsection
