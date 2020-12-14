@extends('layouts/app', ['activePage' => 'login', 'title' => 'Oincbank'])

@section('content')
    <div class="full-page section-image" data-color="black" data-image="{{ asset('charity.jpg') }}">
        <div class="content pt-5">
            <div class="container mt-5">
                <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card card-login card-hidden">
                            <div class="card-header ">
                                <h3 class="header text-center">Entrar</h3>
                            </div>
                            <div class="card-body ">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="email" class="col-md-6 col-form-label">E-mail</label>

                                        <div class="col-12">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-md-6 col-form-label">Senha</label>

                                            <div class="col-12">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">


                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto pt-0">
                                    <div class="container text-center" >
                                        <button type="submit" class="btn btn-oinc-primary btn-wd">Entrar</button>
                                    </div>
                                    <div class="d-flex justify-content-between ">
                                        <a class="btn btn-link" style="color:#23CCEF" href="{{ route('password.request') }}">
                                            Perdeu sua senha?
                                        </a>
                                        <a class="btn btn-link" style="color:#23CCEF" href="{{ route('register') }}">
                                            Criar uma conta
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- acaba aqui --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();

            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
@endpush
