@extends('layouts/app', ['activePage' => '',
'activeButton' => '',
'title' => 'Criação de Campanhas'])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12 text-right">
                <a href="{{route('campanha.store')}}" class="btn btn-primary btn-sm">Adicionar campanha</a>
            </div>

            <div class="col-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">Apelido</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($clientes as $cliente)
                                            <tr>
                                                <th scope="row">{{$cliente->id}}</th>
                                                <td>{{$cliente->empresa}}</td>
                                                <td>{{$cliente->apelido}}</td>
                                                <td>
                                                    <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Clientes">
                                                        <a href="{{route('clientes.edit',$cliente->id)}}" class="btn btn-secondary btn-sm">Editar</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach --}}
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

@endsection
