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
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Data Criacao</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($campanhas as $campanha)
                                            <tr>
                                                <th scope="row">{{$campanha->id}}</th>
                                                <td>{{$campanha->titulo}}</td>
                                                <td>{{$campanha->categoria_id}}</td>
                                                <td>{{$campanha->created_at->format('d/m/Y h:i:s')}}</td>
                                                <td>
                                                    <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Campanhas">
                                                        <a href="" class="btn btn-secondary btn-sm">Editar</a>
                                                    </div>
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

@endsection
