@extends('layouts.app', ['activePage' => 'usuarios', 'title' => 'Editar Usuário | OinkBank', 'navName' => 'Editar Usuário', 'activeButton' => 'usuarios'])

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
                        <form action="{{route('usuario.update',$user->id)}}" method="post">
                            @csrf
                            @method('put')
                        <div class="row">
                            
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nome" value="{{ old('name',$user->name) }}" required autofocus>
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" name="email" value="{{ old('email',$user->email) }}" placeholder="E-mail" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label>Permissão</label>
                                    <select class="form-control" id="role" name="role">
                                        <option selected disabled>Escolher...</option>
                                        <option value="1" {{$user->role == 1?'selected':''}}>Administrador</option>
                                        <option value="2" {{$user->role == 2?'selected':''}}>Usuário</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection