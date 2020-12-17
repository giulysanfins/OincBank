@extends('layouts.app', ['activePage' => '', 'title' => 'Usuários | OinkBank', 'navName' => 'Usuários', 'activeButton' => ''])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="section-image">
            <div class="row">

                <div class="card col-md-12">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <h3 class="mb-0">Usuários</h3>
                            </div>
                        </div>
                    </div>
                    <div class="toolbar">

                    </div>
                    <div class="card-body ">
                        <div class="table-responsive table-full-width">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Criado em:</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <th scope="row">{{$cliente->id}}</th>
                                            <td>{{$cliente->name}}</td>
                                            <td>{{$cliente->email}}</td>
                                            <td>
                                                @if ($cliente->status == 1)
                                                    Ativo
                                                @elseif ($cliente->status == 2)
                                                    Desativado
                                                @endif
                                            </td>
                                            <td>{{$cliente->created_at->format('d/m/Y h:i:s')}}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Exemplo básico">
                                                    <a href="{{route('usuario.edit',$cliente->id)}}" class="btn btn-info">Editar</a>
                                                    @if ($cliente->status == 1)
                                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#desativar_{{$cliente->id}}">Desativar</button>
                                                    @elseif ($cliente->status == 2)
                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ativar_{{$cliente->id}}">Ativar</button>
                                                    @endif
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletar_{{$cliente->id}}">Deletar</button>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>

                                        @component('admin.config.users.components.active',[
                                            'user' => $cliente,
                                        ])@endcomponent

                                        @component('admin.config.users.components.disable',[
                                            'user' => $cliente,
                                        ])@endcomponent

                                        @component('admin.config.users.components.delete',[
                                            'user' => $cliente,
                                        ])@endcomponent

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
$(document).ready(function() {
    $('.table').DataTable({
        "language":{
            "url": '//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json'
        }
    });
});
</script>
@endsection
