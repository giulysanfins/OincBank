@extends('layouts.app', ['activePage' => 'usuarios', 'title' => 'Criar Usuário | OinkBank', 'navName' => 'Criar Usuário', 'activeButton' => 'usuarios'])

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
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nome" value="{{ old('name') }}" required autofocus>
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="E-mail" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label>Permissão</label>
                                    <select class="custom-select" id="inputGroupSelect02">
                                        <option selected disabled>Escolher...</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Usuário</option>
                                    </select>
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