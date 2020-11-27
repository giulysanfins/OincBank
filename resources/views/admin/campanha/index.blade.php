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
                                    @if (auth()->user()->role == 2)
                                        <a href="{{route('campanha.store')}}" class="btn btn-primary">Adicionar campanha</a>
                                    @endif
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
                                        @foreach ($campanhas_aprovadas as $campanha)
                                            <tr>
                                                {{-- @dd($campanha) --}}
                                                <th scope="row">{{$campanha->id}}</th>
                                                <td>{{$campanha->titulo}}</td>
                                                <td>{{$campanha->categoria->name}}</td>
                                                <td>{{$campanha->created_at->format('d/m/Y h:i:s')}}</td>
                                                <td>
                                                    <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Clientes">


                                                        <form action="{{ route('campanha.desativar', $campanha->id) }}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                            <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-secondary">Visualizar</a>
                                                            <button type="submit" class="btn btn-danger">Desativar</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{-- fim da tabela das ativas --}}
                                @if($campanhas_pendentes->count() >0)
                                    {{-- comeco tabela pendentes --}}
                                    <h2>Campanhas Pendentes</h2>
                                    <table class="table">
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
                                            @foreach ($campanhas_pendentes as $campanha)
                                                <tr>
                                                    <th scope="row">{{$campanha->id}}</th>
                                                    <td>{{$campanha->titulo}}</td>
                                                    <td>{{$campanha->categoria->name}}</td>
                                                    <td>{{$campanha->created_at->format('d/m/Y h:i:s')}}</td>
                                                    <td>
                                                        <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Clientes">

                                                            <form action="{{ route('campanha.desativar', $campanha->id) }}" method="POST">
                                                                @csrf
                                                                @method('put')
                                                                <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-secondary">Visualizar</a>
                                                                <button type="submit" class="btn btn-danger">Desativar</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                                {{-- fim tabela pendente --}}
                                @if($campanhas_desativadas->count() >0)
                                    {{-- comeco tabela pendentes --}}
                                    <h2>Campanhas Desativadas</h2>
                                    <table class="table">
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
                                            @foreach ($campanhas_desativadas as $campanha)
                                                <tr>
                                                    <th scope="row">{{$campanha->id}}</th>
                                                    <td>{{$campanha->titulo}}</td>
                                                    <td>{{$campanha->categoria->name}}</td>
                                                    <td>{{$campanha->created_at->format('d/m/Y h:i:s')}}</td>
                                                    <td>
                                                        <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Clientes">

                                                            <form action="{{ route('campanha.ativar', $campanha->id) }}" method="POST">
                                                                @csrf
                                                                @method('put')
                                                                <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-secondary">Visualizar</a>
                                                                <button type="submit" class="btn btn-success">Ativar</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                        {{-- fim tabela desativada --}}

                                @if($campanhas_rejeitadas->count() >0)
                                            {{-- comeco tabela rejeitada --}}
                                            <h2>Campanhas Rejeitadas</h2>
                                            <table class="table">
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
                                                    @foreach ($campanhas_rejeitadas as $campanha)
                                                        <tr>
                                                            <th scope="row">{{$campanha->id}}</th>
                                                            <td>{{$campanha->titulo}}</td>
                                                            <td>{{$campanha->categoria->name}}</td>
                                                            <td>{{$campanha->created_at->format('d/m/Y h:i:s')}}</td>
                                                            <td>
                                                                <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Clientes">

                                                                    <form action="{{ route('campanha.ativar', $campanha->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('put')
                                                                        <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                        <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-secondary">Visualizar</a>
                                                                        <button type="submit" class="btn btn-danger">Re-Ativar</button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                @endif
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
