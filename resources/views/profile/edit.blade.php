@extends('layouts.app', ['activePage' => 'user', 'title' => 'Perfil - Usuário', 'navName' => 'Perfil', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="section-image">
                <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                <div class="row">

                    <div class="card col-md-8">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h3 class="mb-0">Editar Perfil</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('profile.update') }}" autocomplete="off" enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <h6 class="heading-small text-muted mb-4">Informação do usuário</h6>
                                        
                                <div class="pl-lg-4 row">

                                    <div class="col-8" style="padding: 6px;">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-name">
                                                <i class="w3-xxlarge fas fa-user"></i> Nome
                                            </label>
                                            <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nome" value="{{ old('name', auth()->user()->name) }}" required autofocus>
                                        </div>
                                    </div>

                                    @if (auth()->user()->tipo == 1)
                                        <div class="col-12 col-md-4">
                                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="documento"><i class="w3-xxlarge far fa-id-card"></i> CPF</label>
                                                <input type="text" name="documento" id="documento" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="CPF" value="{{ old('documento', auth()->user()->documento) }}" required>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <div class="form-group{{ $errors->has('data_nascimento') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="documento"><i class="w3-xxlarge far fa-id-card"></i> Data Nascimento</label>
                                                <input type="date" name="data_nascimento" id="data_nascimento" class="form-control{{ $errors->has('data_nascimento') ? ' is-invalid' : '' }}" placeholder="CPF" value="{{ old('documento', auth()->user()->data_nascimento) }}" required>
                                            </div>
                                        </div>

                                    @elseif (auth()->user()->tipo == 2)
                                        <div class="col-12 col-md-4">
                                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="documento"><i class="w3-xxlarge far fa-id-card"></i> CNPJ</label>
                                                <input type="text" name="documento" id="documento" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="CNPJ" value="{{ old('documento', auth()->user()->documento) }}" required>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <div class="form-group{{ $errors->has('inscricao_estadual') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="inscricao_estadual"><i class="w3-xxlarge far fa-id-card"></i> Inscricao Estadual</label>
                                                <input type="text" name="inscricao_estadual" id="inscricao_estadual" class="form-control{{ $errors->has('inscricao_estadual') ? ' is-invalid' : '' }}" placeholder="Inscricao Estadual" value="{{ old('inscricao_estadual', auth()->user()->inscricao_estadual) }}" required>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="col-12 col-md-5">
                                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-email"><i class="w3-xxlarge far fa-envelope"></i> E-mail</label>
                                            <input type="email" name="email" id="input-email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail" value="{{ old('email', auth()->user()->email) }}" required>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-3">
                                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-photo_perfil"><i class="w3-xxlarge fas fa-portrait"></i> Foto Perfil</label>
                                            <br />
                                            <label for="files" class="btn btn-default">Selecionar Imagem</label>
                                            <input id="files" style="display: none;" type="file" name="photo_perfil">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-description"><i class="w3-xxlarge far fa-edit"></i> Descrição</label>
                                            <textarea rows="6" name="description" class="form-control form-control-textarea" >{{ auth()->user()->description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-default mt-4">Salvar</button>
                                    </div>
                                </div>
                            </form>
                            <hr class="my-4" />
                            <form method="post" action="{{ route('profile.password') }}">
                                @csrf
                                @method('patch')
        
                                <h6 class="heading-small text-muted mb-4">Senha</h6>
        
                                <div class="pl-lg-3">
                                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-current-password">
                                            <i class="w3-xxlarge fa fa-eye-slash"></i> Senha atual
                                        </label>
                                        <input type="password" name="old_password" id="input-current-password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="Senha atual" value="" required>

                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">
                                            <i class="w3-xxlarge fa fa-eye-slash"></i> Digite uma nova senha
                                        </label>
                                        <input type="password" name="password" id="input-password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Digite uma nova senha" value="" required>
        
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-password-confirmation">
                                            <i class="w3-xxlarge fa fa-eye-slash"></i> Digitar novamente a nova senha
                                        </label>
                                        <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control" placeholder="Digitar novamente a nova senha" value="" required>
                                    </div>
        
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-default mt-4">Alterar Senha</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="card-image">
                                <img src="{{asset('helpo-theme')}}/img/promo_3.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="author">
                                    <a href="#">
                                        
                                        @if ($photo != null)
                                            <img class="avatar border-gray" src="{{ asset('storage') }}/profile/{{$photo->path}}" alt="...">
                                        @else
                                            <img class="avatar border-gray" src="{{ asset('pig-pork.jpg') }}" alt="..."> 
                                        @endif
                                        
                                        <h5 class="title">{{ auth()->user()->name }}</h5>
                                    </a>
                                    <p class="description">
                                        {{ auth()->user()->email }}
                                    </p>
                                </div>
                                <p class="description text-center" style="white-space: pre-line">
                                    {!! auth()->user()->description !!}
                                </p>
                            </div>

                            <div class="button-container mr-auto ml-auto">

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

</script>
@endsection