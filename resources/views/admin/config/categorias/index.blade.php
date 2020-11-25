@extends('layouts.app', ['activePage' => '', 'title' => 'Categorias | OinkBank', 'navName' => 'Categorias', 'activeButton' => ''])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="section-image">
            <div class="row">

                <div class="card col-md-12">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <h3 class="mb-0">Categorias</h3>
                            </div>
                        </div>
                    </div>
                    <div class="toolbar text-right">
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createCategoria">Add Categoria</button>
                        @component('admin.config.categorias.components.create',[
                            
                        ])@endcomponent
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive table-full-width">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome da categoria</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                        <tr>
                                            <th scope="row">{{$categoria->id}}</th>
                                            <td>{{$categoria->name}}</td>
                                            <td>
                                                @if ($categoria->status == 1)
                                                    Ativo
                                                @else
                                                    Inativo
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label=" ">
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editCategoria{{$categoria->id}}">Editar</button>
                                                    @if ($categoria->status == 1)
                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#desativarCategoria{{$categoria->id}}">Desativar</button>
                                                    @else
                                                        <button type="button" class="btn btn-sucess" data-toggle="modal" data-target="#ativarCategoria{{$categoria->id}}">Ativar</button>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>

                                        @component('admin.config.categorias.components.edit',[
                                            'categoria' => $categoria
                                        ])@endcomponent

                                        @component('admin.config.categorias.components.deactive',[
                                            'categoria' => $categoria
                                        ])@endcomponent

                                        @component('admin.config.categorias.components.active',[
                                            'categoria' => $categoria
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