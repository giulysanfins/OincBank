@extends('layouts/app', ['activePage' => '',
'activeButton' => '',
'title' => 'Criação de Campanhas'])

@section('content')
    <div class="content">
        <div class="row">


            <div class="col-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="col-12 text-right">
                                    <a href="{{route('campanha.store')}}" class="btn btn-primary">Adicionar campanha</a>
                                </div>
                                {{-- comeco tabelas ativas --}}
                                <table class="table">
                                    <h2>Campanhas Ativas</h2>
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Data Criacao</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($campanhas as $campanha)
                                            @if($campanha->status == 2)
                                            <tr>
                                                <th scope="row">{{$campanha->id}}</th>
                                                <td>{{$campanha->titulo}}</td>
                                                <td>{{$campanha->categoria->name}}</td>
                                                <td>{{$campanha->created_at->format('d/m/Y h:i:s')}}</td>
                                                <td>

                                                        <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Clientes">
                                                            <form action="{{ route('campanha.desativar', $campanha->id) }}" method="POST">
                                                                <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                @csrf
                                                                @method('put')
                                                                <button type="submit" class="btn btn-danger">Excluir</button>
                                                            </form>
                                                        </div>

                                                </td>
                                            </tr>
                                            @endif

                                        @endforeach
                                    </tbody>
                                </table>
                                {{-- fim da tabela das ativas --}}
                        @foreach ($campanhas as $campanha)
                            @if($campanha->status == 0)
                                {{-- comeco tabela desativadas --}}
                                <table class="table">
                                    <h2>Campanhas Desativadas</h2>
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Data Criacao</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                            <tr>
                                                <th scope="row">{{$campanha->id}}</th>
                                                <td>{{$campanha->titulo}}</td>
                                                <td>{{$campanha->categoria_id}}</td>
                                                <td>{{$campanha->created_at->format('d/m/Y h:i:s')}}</td>
                                                <td>

                                                        <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Clientes">
                                                            <form action="{{ route('campanha.ativar', $campanha->id) }}" method="POST">
                                                                <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                @csrf
                                                                @method('put')
                                                                <button type="submit" class="btn btn-success">Ativar</button>
                                                            </form>
                                                        </div>

                                                </td>
                                            </tr>

                                    </tbody>
                                </table>

                            @endif

                        @endforeach
                                {{-- fim tabela desativada --}}
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
