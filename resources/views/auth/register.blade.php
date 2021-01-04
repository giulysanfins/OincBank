@extends('layouts.app', ['activePage' => 'register', 'title' => 'Cadstre um novo Usúario'])
@section('content')
<head>
      <meta name="grecaptcha-key" content="{{ config('recaptcha.v3.public_key') }}">
      <script src="https://www.google.com/recaptcha/api.js?render={{ config('recaptcha.v3.public_key') }}"></script>
</head>
<div class="full-page section-image" data-color="pink" data-image="{{ asset('charity.jpg') }}">
    <div class="content pt-5">
        <div class="container">
            <div class="col-md-10 ml-auto mr-auto">
                <a class="btn btn-oinc-white" href="{{route('website.index')}}">Voltar</a>
                <form class="form" method="POST" action="{{ route('register') }}" data-grecaptcha-action="message">
                    @csrf
                    @method('post')

                    <div class="card card-login card-hidden">
                        <div class="card-header ">
                            <h3 class="header text-center">Crie Sua Conta</h3>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="btn-group d-flex justify-content-center " data-toggle="buttons">
                                                    <button class="btn btn-oinc-primary active" id="btn_pessoa">
                                                        Sou uma pessoa
                                                    </button>
                                                    <button class="btn btn-oinc-primary" id="btn_empresa">
                                                        Sou uma empresa
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-12 col-md-4">
                                                {{-- Pessoa fisica --}}

                                                <div class="form-group" id="gr-cpf">
                                                    <label>CPF</label>
                                                    <input type="text" name="documento_cpf" id="documento_cpf" class="form-control cpf"  value="{{ old('documento') }}"
                                                        onchange="return validateCPF()" required autofocus >
                                                    <small id="passwordHelp" class="text-danger">
                                                    </small>
                                                </div>
                                                {{-- Pessoa juridica --}}
                                                <div class="form-group" id="gr-cnpj" style="display: none">
                                                    <label>CNPJ</label>
                                                    <input type="text" name="documento_cnpj" id="documento_cnpj" class="form-control cnpj"
                                                        onchange="return validateCNPJ()" value="{{ old('documento') }}" required autofocus>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                {{-- Pessoa fisica --}}
                                                <div class="form-group" id="gr-nome_pessoa">
                                                    <label>Nome Completo</label>
                                                    <input type="text" name="name_pessoa" id="name_pessoa" class="form-control"  value="{{ old('name') }}"
                                                        required>
                                                </div>
                                                {{-- Pessoa juridica --}}
                                                <div class="form-group" id="gr-name_empresa" style="display: none">
                                                    <label>Nome da Empresa</label>
                                                    <input type="text" name="name_empresa" id="name_empresa" class="form-control"  value="{{ old('name') }}" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                {{-- Pessoa fisica --}}
                                                <div class="form-group" id="gr-nascimento">
                                                    <label>Data de Nascimento</label>
                                                    <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" max="{{ \Carbon\Carbon::today()->format('Y-m-d') }}"
                                                    min="1900-12-31" class="form-control" placeholder="Data de Nascimento" value="{{ old('name') }}" required>
                                                </div>
                                                {{-- Pessoa juridica --}}
                                                <div class="form-group" id="gr-inscricao" style="display: none">
                                                    <label>Inscricao Estadual</label>
                                                    <input type="text" name="inscricao_estadual" id="inscricao_estadual" class="form-control"  value="{{ old('name') }}">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Telefone</label>
                                                    <input type="text" id="telefone" class="form-control telefone" name="telefone" value="{{ old('telefone') }}"  required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Entre com seu email</label>
                                                    <input type="email" id="email" name="email" value="{{ old('email') }}" onchange="validateEmail1()"  class="form-control" required>
                                                    <small id="emailValidate" class="text-danger">

                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Insira novamente seu e-mail</label>
                                                    <input type="email" id="confirm_email" name="email" value="{{ old('email') }}" onchange="validateEmail1()"  class="form-control" required>
                                                    <small id="emailValidate2" class="text-danger">

                                                    </small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Digite sua senha</label>
                                                    <input type="password" name="password" id="password"  class="form-control"
                                                        onchange="passwordValid()" required >
                                                    <small id="passwordValidate" class="text-danger">

                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Insira novamente sua Senha</label>
                                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                                                        onchange="passowordValid()" required>
                                                    <small id="passwordValidate2" class="text-danger">


                                                    </small>
                                                </div>
                                            </div>
                                        </div>


                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group d-flex justify-content-center">
                                                <div class="form-check rounded col-md-12 text-left">
                                                    <small style="color: grey">
                                                        Esse site é protegido pelo reCAPTCHA e Google.
                                                        <a href="https://policies.google.com/privacy">Política de Privacidade</a> e
                                                        <a href="https://policies.google.com/terms">Termos de Condições</a> são aplicados.
                                                </small>
                                                </div>

                                            </div>
                                                </label>
                                            </div>
                                            <input type="hidden" name="tipo" id="tipo" value="1">
                                        </div>
                                    </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group d-flex justify-content-center">
                                                    <div class="form-check rounded col-md-12 text-left">
                                                        <label class="form-check-label text-white d-flex align-items-center">
                                                            <input class="form-check-input" name="agree" type="checkbox" required >
                                                            <span class="form-check-sign"></span>

                                                            <b style="color: grey">Concordo com os  <a href="https://oincbank.com.br/termos-e-condicoes" target="_blank">Termos e Condições</a>.</b>

                                                        </label>
                                                    </div>
                                                    <input type="hidden" name="tipo" id="tipo" value="1">
                                                </div>

                                            </div>
                                        </div>


                                    </div>

                                    <div class="footer text-center">
                                        <button type="submit" class="btn btn-oinc-primary btn-wd">Crie Sua Conta</button>
                                    </div>
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

@section('scripts')
    <script src="{{ asset('light-bootstrap') }}/js/register.js"></script>

    <script>
        $('.cpf').mask('000.000.000-00', {
            reverse: true
        });

        $('.cnpj').mask('00.000.000/0000-00', {
            reverse: true
        });

        $('.telefone').mask('(00) 00000-0000');
    </script>
    <script>
        var cpf = document.getElementById('gr-cpf');
        var nome_pessoa = document.getElementById('gr-nome_pessoa');
        var nascimento = document.getElementById('gr-nascimento');

        var cnpj = document.getElementById('gr-cnpj');
        var name_empresa = document.getElementById('gr-name_empresa');
        var inscricao = document.getElementById('gr-inscricao');

        var inp_documento_cpf = document.getElementById('documento_cpf');
        var inp_name_pessoa = document.getElementById('name_pessoa');
        var inp_data_nascimento = document.getElementById('data_nascimento');
        var inp_documento_cnpj = document.getElementById('documento_cnpj');
        var inp_name_empresa = document.getElementById('name_empresa');
        var inp_inscricao_estadual = document.getElementById('inscricao_estadual');
        var inp_tipo = document.getElementById('tipo');

        var btn_pessoa = document.getElementById('btn_pessoa');
        var btn_empresa = document.getElementById('btn_empresa');

        var input_cp = document.getElementById('password_confirmation');
        var input_ps = document.getElementById('password');
        var span_cp = document.getElementById('error_confirmation');

        function validateCPF() {
            var input = document.getElementById('documento_cpf').value;

            if (input.length < 14) {
                document.getElementById("passwordHelp").innerHTML = 'Por favor insira um CPF válido.';
            } else {
                document.getElementById("passwordHelp").innerHTML = '';
            }
        }

        function validateCNPJ() {
            var cnpj = document.getElementById('documento_cnpj').value;

            if (cnpj.length < 18) {
                document.getElementById("validarCNPJ").innerHTML = 'Por favor insira um CNPJ válido.';
            } else {
                document.getElementById("validarCNPJ").innerHTML = '';
            }

        }

        function validateEmail1() {
            var reg =
                /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var email_valida = document.getElementById('email').value;
            var email_confirma = document.getElementById('confirm_email').value;
            if (reg.test(email_valida) == false) {

                document.getElementById("emailValidate").innerHTML = 'Por favor insira um e-mail válido.';

            } else if (reg.test(email_valida) == true) {
                document.getElementById("emailValidate").innerHTML = '';

                if (email_valida == '') {
                    document.getElementById("emailValidate").innerHTML = 'Por favor preencha seu email.';

                } else if (email_confirma == '') {
                    document.getElementById("emailValidate2").innerHTML = 'Por favor preencha seu email.';
                } else if (email_valida != email_confirma) {
                    document.getElementById("emailValidate2").innerHTML = 'Os emails não coincidem.';
                } else {
                    // console.log('entrei');
                    document.getElementById("emailValidate").innerHTML = '';
                    document.getElementById("emailValidate2").innerHTML = '';
                }
            }
        }

        function passwordValid() {
            var minMaxLength = /^[\s\S]{8,32}$/,
                upper = /[A-Z]/,
                lower = /[a-z]/,
                number = /[0-9]/;
            var password = document.getElementById('password').value;
            var password_confirmation = document.getElementById('password_confirmation').value;
            if ((minMaxLength.test(password) && upper.test(password) && lower.test(password) && number.test(password)) ==
                false) {
                // console.log('min ' + minMaxLength.test(password));
                // console.log('maiscula ' + upper.test(password));
                // console.log('minusc ' + lower.test(password));
                // console.log('numero ' + number.test(password));
                document.getElementById("passwordValidate").innerHTML =
                    'Senha deve conter ao menos 1 número, 1 letra maiúscula, 1 letra minúscula e no mínimo 8 caracteres.';

            } else if ((minMaxLength.test(password) && upper.test(password) && lower.test(password) && number.test(password)) == true) {
                document.getElementById("passwordValidate").innerHTML = '';

                if (password == '') {
                    document.getElementById("passwordValidate").innerHTML = 'Por favor preencha sua senha.';

                } else if (password_confirmation == '') {
                    document.getElementById("passwordValidate2").innerHTML = 'Por favor preencha sua senha.';
                } else if (password != password_confirmation) {
                    document.getElementById("passwordValidate2").innerHTML = 'As senhas não coincidem.';
                } else {
                    // console.log('entrei');
                    document.getElementById("passwordValidate").innerHTML = '';
                    document.getElementById("passwordValidate2").innerHTML = '';
                }
            }

        }

        btn_empresa.addEventListener("click", function() {
            btn_pessoa.classList.remove('active')
            cpf.style.display = 'none';
            nome_pessoa.style.display = 'none';
            nascimento.style.display = 'none';
            cnpj.style.display = 'block';
            name_empresa.style.display = 'block';
            inscricao.style.display = 'block';

            inp_documento_cpf.required = false;
            inp_name_pessoa.required = false;
            inp_data_nascimento.required = false;
            inp_documento_cnpj.required = true;
            inp_name_empresa.required = true;
            inp_inscricao_estadual.required = true;

            inp_tipo.value = '2';
        }, false);

        btn_pessoa.addEventListener("click", function() {
            btn_empresa.classList.remove('active')
            cpf.style.display = 'block';
            nome_pessoa.style.display = 'block';
            nascimento.style.display = 'block';
            cnpj.style.display = 'none';
            name_empresa.style.display = 'none';
            inscricao.style.display = 'none';

            inp_documento_cpf.required = true;
            inp_name_pessoa.required = true;
            inp_data_nascimento.required = true;
            inp_documento_cnpj.required = false;
            inp_name_empresa.required = false;
            inp_inscricao_estadual.required = false;

            inp_tipo.value = '1';

        }, false);

        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();

            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });

    </script>
@endsection
