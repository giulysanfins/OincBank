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

                                <div class="accordion" id="acoordion_campanhas">

                                    <div class="card">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#pendentes" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="card-header" id="headerPendentes">
                                                <h5 class="mb-0 text-left">
                                                    Campanhas Pendentes
                                                </h5>
                                            </div>
                                        </button>
                                    
                                        <div id="pendentes" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                @if($campanhas_pendentes->count() >0)
                                                    
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
                                                                            <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                            <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-info">Visualizar</a>
                                                                            <form action="{{ route('campanha.desativar', $campanha->id) }}" method="POST">
                                                                                @csrf
                                                                                @method('put')
                                                                                <button type="submit" class="btn btn-danger">Desativar</button>
                                                                            </form>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @else 
                                                    <p class="text-center"> Sem resultados </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="card-header" id="expirados">
                                                <h5 class="mb-0 text-left">
                                                    Campanhas Expiradas
                                                </h5>
                                            </div>
                                        </button>

                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                @if($campanhas_expiradas->count() >0)
                                                    
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
                                                            @foreach ($campanhas_expiradas as $campanha)
                                                                <tr>
                                                                    <th scope="row">{{$campanha->id}}</th>
                                                                    <td>{{$campanha->titulo}}</td>
                                                                    <td>{{$campanha->categoria->name}}</td>
                                                                    <td>{{$campanha->created_at->format('d/m/Y h:i:s')}}</td>
                                                                    <td>
                                                                        <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Clientes">
                                                                            <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                            <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-info">Visualizar</a>
                                                                            <form action="{{ route('campanha.desativar', $campanha->id) }}" method="POST">
                                                                                @csrf
                                                                                @method('put')
                                                                                <button type="submit" class="btn btn-danger">Desativar</button>
                                                                            </form>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @else 
                                                    <p class="text-center"> Sem resultados </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ativos" aria-expanded="false" aria-controls="collapseThree">
                                            <div class="card-header" id="header_ativos">
                                                <h5 class="mb-0 text-left">
                                                    Campanhas Ativas
                                                </h5>
                                            </div>
                                        </button>

                                        <div id="ativos" class="collapse" aria-labelledby="headingThree" data-parent="#ativos">
                                            <div class="card-body"> 
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
                                                        @foreach ($campanhas_aprovadas as $campanha)
                                                            <tr>
                                                                <th scope="row">{{$campanha->id}}</th>
                                                                <td>{{$campanha->titulo}}</td>
                                                                <td>{{$campanha->categoria->name}}</td>
                                                                <td>{{$campanha->created_at->format('d/m/Y h:i:s')}}</td>
                                                                <td>
                                                                    <div class="btn-group float-right" role="group" aria-labe   l="Botões de Ação - Clientes">
                                                                        <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                        <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-info">Visualizar</a>
                                                                        <form action="{{ route('campanha.desativar', $campanha->id) }}" method="POST">
                                                                            @csrf
                                                                            @method('put')
                                                                            <button type="submit" class="btn btn-danger">Desativar</button>
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#desativadas" aria-expanded="false" aria-controls="header_desativadas">
                                            <div class="card-header" id="header_desativadas">
                                                <h5 class="mb-0 text-left">
                                                    Campanhas Desativadas
                                                </h5>
                                            </div>
                                        </button>

                                        <div id="desativadas" class="collapse" aria-labelledby="body_desativadas" data-parent="#desativadas">
                                            <div class="card-body">
                                                @if($campanhas_desativadas->count() >0)
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
                                                                            <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                            <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-info">Visualizar</a>
                                                                            <form action="{{ route('campanha.ativar', $campanha->id) }}" method="POST">
                                                                                @csrf
                                                                                @method('put')
                                                                                <button type="submit" class="btn btn-success">Ativar</button>
                                                                            </form>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @else 
                                                    <p class="text-center"> Sem resultados </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
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

@endsection
