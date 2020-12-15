@extends('layouts.app', ['activePage' => 'register', 'title' => 'Cadstre um novo Usúario'])

@section('content')
<div class="full-page section-image" data-color="black" data-image="{{ asset('charity.jpg') }}">
    <div class="content pt-5">
        <div class="container mt-5">
            <div class="col-md-5 col-sm-12 ml-auto mr-auto">
                <form class="form" method="POST" action="{{ route('register') }}">
                    @csrf
                    @method('post')

                    <div class="card card-login card-hidden">
                        <div class="card-header ">
                            <h3 class="header text-center">Crie Sua Conta</h3>
                        </div>
                        <div class="card-body ">
                            <div class="card-body">

                                <div class="form-group">
                                        <div class="content">

                                            <div class="btn-group d-flex justify-content-center " data-toggle="buttons">
                                                <button class="btn btn-oinc-primary active" id="btn_pessoa">
                                                  Sou uma pessoa
                                                </button>
                                                <button class="btn btn-oinc-primary" id="btn_empresa">
                                                  Sou uma empresa
                                                </label>
                                            </div>
                                            {{-- Pessoa fisica --}}

                                            <div class="form-group" id="gr-cpf">
                                                <label>CPF</label>
                                                <input type="text" name="documento_cpf" id="documento_cpf" class="form-control cpf" placeholder="CPF" value="{{ old('documento') }}" required autofocus>
                                            </div>

                                            <div class="form-group" id="gr-nome_pessoa">
                                                <label>Nome Completo</label>
                                                <input type="text" name="name_pessoa" id="name_pessoa" class="form-control" placeholder="Nome Completo" value="{{ old('name') }}" required>
                                            </div>

                                            <div class="form-group" id="gr-nascimento">
                                                <label>Data de Nascimento</label>
                                                <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" placeholder="Data de Nascimento" value="{{ old('name') }}" required>
                                            </div>

                                            {{-- Pessoa juridica --}}

                                            <div class="form-group" id="gr-cnpj" style="display: none">
                                                <label>CNPJ</label>
                                                <input type="text" name="documento_cnpj" id="documento_cnpj" class="form-control cnpj" placeholder="CNPJ" value="{{ old('documento') }}">
                                            </div>

                                            <div class="form-group" id="gr-name_empresa" style="display: none">
                                                <label>Nome da Empresa</label>
                                                <input type="text" name="name_empresa" id="name_empresa" class="form-control" placeholder="Nome Completo" value="{{ old('name') }}" >
                                            </div>

                                            <div class="form-group" id="gr-inscricao" style="display: none">
                                                <label>Inscricao Estadual</label>
                                                <input type="text" name="inscricao_estadual" id="inscricao_estadual" class="form-control" placeholder="Inscricao Estadual" value="{{ old('name') }}">
                                            </div>

                                            <div class="form-group">  
                                                <label>Entre com seu email</label>
                                                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Entre com seu email" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Insira novamente seu e-mail</label>
                                                <input type="email" id="confirm_email" name="email" value="{{ old('email') }}" placeholder="Insira novamente seu e-mail" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Telefone</label>
                                                <input type="text" id="telefone" class="form-control telefone" name="telefone" value="{{ old('telefone') }}" placeholder="Insira seu telefone"  required>
                                            </div>

                                            <div class="form-group">
                                                <label>Digite sua senha</label>
                                                <input type="password" name="password" placeholder="Digite sua senha" class="form-control" required >
                                            </div>
                                            <div class="form-group">
                                                <label>Insira novamente sua Senha</label>
                                                <input type="password" name="password_confirmation" placeholder="Insira novamente sua Senha" class="form-control" required autofocus>
                                            </div>

                                            <div class="form-group d-flex justify-content-center">
                                                <div class="form-check rounded col-md-12 text-left">
                                                    <label class="form-check-label text-white d-flex align-items-center">
                                                        <input class="form-check-input" name="agree" type="checkbox" required >
                                                        <span class="form-check-sign"></span>

                                                        <b style="color: grey">{{ __('Concordo com os Termos de Serviços') }}</b>
                                                    </label>
                                                </div>
                                                <input type="hidden" name="tipo" id="tipo" value="1">
                                            </div>

                                        </div>

                                        <div class="footer text-center">
                                            <button type="submit" class="btn btn-oinc-primary btn-wd">Crie Sua Conta</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- acaba aqui --}}
                </form>

                <div class="col">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show" >
                            <a href="#" class="close" data-dismiss="alert" aria-label="close"> &times;</a>
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('.telefone').mask('(00) 0000-0000');
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

        btn_empresa.addEventListener("click", function(){
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

        btn_pessoa.addEventListener("click", function(){
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