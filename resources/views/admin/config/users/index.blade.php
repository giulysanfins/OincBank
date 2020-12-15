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
                                        <th scope="col"># Cofrinhos</th>
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
                                            <td></td>
                                            <td>{{$cliente->created_at->format('d/m/Y h:i:s')}}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Exemplo básico">
                                                    <a href="{{route('usuario.edit',$cliente->id)}}" class="btn btn-info">Editar</a>
                                                    {{-- <button type="button" class="btn btn-secondary">Cofrinhos</button>
                                                    <button type="button" class="btn btn-warning">Bloquear</button>
                                                    <button type="button" class="btn btn-danger">Deletar</button> --}}
                                                </div>
                                            </td>
                                            <td></td>
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
$(document).ready(function() {
    $('.table').DataTable({
        "language":{
            "url": '//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json'
        }
    });
});
</script>
@endsection
