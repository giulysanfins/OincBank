@extends('layouts.site.app', ['activePage' => '', 'title' => 'OincBank', 'navName' => '', 'activeButton' => ''])

@section('content')
    <!-- header end-->
    <main class="main">
        <!-- promo start-->
        <section class="promo">
            <div class="promo-slider">
                <div class="promo-slider__item promo-slider__item--style-1">
                    <picture>
                        <source srcset="{{ asset('helpo-theme') }}/img/promo_1.jpg" media="(min-width: 835px)" />
                        <source srcset="{{ asset('helpo-theme') }}/img/promo_1.jpg" media="(min-width: 376px)" />
                        <img class="img--bg" src="{{ asset('helpo-theme') }}/img/promo_1.jpg" alt="img" />
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span>OincBank</span>

                                            </h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle">Perguntas Frequentes</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="promo-slider__item promo-slider__item--style-2">
                    <picture>
                        <source srcset="{{ asset('helpo-theme') }}/img/promo_2.jpg" media="(min-width: 835px)" />
                        <source srcset="{{ asset('helpo-theme') }}/img/promo_2.jpg" media="(min-width: 376px)" />
                        <img class="img--bg" src="{{ asset('helpo-theme') }}/img/promo_2.jpg" alt="img" />
                    </picture>
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
                <div class="promo-slider__item promo-slider__item--style-3">
                    <picture>
                        <source srcset="{{ asset('helpo-theme') }}/img/promo_3.jpg" media="(min-width: 835px)" />
                        <source srcset="{{ asset('helpo-theme') }}/img/promo_3.jpg" media="(min-width: 376px)" />
                        <img class="img--bg" src="{{ asset('helpo-theme') }}/img/promo_3.jpg" alt="img" />
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span>Helpo Volounteers</span><br /><span>Around
                                                    the world.</span></h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle">Gray eel-catfish longnose whiptail catfish
                                                smalleye squaretail queen danio unicorn fish shortnose greeneye fusilier
                                                fish silver carp nibbler sharksucker tench lookdown catfish</p>
                                        </div>
                                        <div class="promo-slider__wrapper-3"><a
                                                class="button promo-slider__button button--primary" href="#">Discover</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- promo socials start-->
            <ul class="promo-socials">
                <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fab fa-instagram"
                            aria-hidden="true"></i></a></li>
                <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fab fa-google-plus"
                            aria-hidden="true"></i></a></li>
                <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fab fa-twitter"
                            aria-hidden="true"></i></a></li>
                <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fab fa-facebook"
                            aria-hidden="true"></i></a></li>
            </ul>
            <!-- promo socials end-->


        </section>

        <!-- causes end-->
        <section class="section faq">
            <div class="container">
                <div class="row margin-bottom">
                    <div class="col-12">
                        <div class="heading heading--primary"><span class="heading__pre-title"></span>
                            <h2 class="heading__title no-margin-bottom"><span>Perguntas</span> <span>Frequentes</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-xl-9">
                        <div class="accordion accordion--primary">
                            <div class="accordion__title-block">
                                <h6 class="accordion__title">Quem somos e por que usar nosso serviço?</h6><span class="accordion__close"></span>
                            </div>
                            <div class="accordion__text-block">
                                <p>Totally. Totally does.</p>
                            </div>
                        </div>
                        <div class="accordion accordion--primary">
                            <div class="accordion__title-block">
                                <h6 class="accordion__title">O site é seguro?</h6><span class="accordion__close"></span>
                            </div>
                            <div class="accordion__text-block">
                                <p>Nossa maior prioridade é oferecer segurança e proteção dos seus dados. Por isso, colocamos essa resposta antes de tudo.
                                    O site e app da OincBank foram desenvolvidos com criptografia HTTPS para resguardar toda informação sensível e privilegiada, oferecendo um serviço com segurança e de qualidade.
                                    Nós temos orgulho de estar 100% em conformidade com a Lei Geral de Proteção de Dados Pessoais (LGPD), além de nosso ambiente tecnológico ser monitorado 24h por dia, com suporte técnico especializado.</p>
                            </div>
                        </div>
                        <div class="accordion accordion--primary">
                            <div class="accordion__title-block">
                                <h6 class="accordion__title"> Como criar meu cofrinho?</h6><span class="accordion__close"></span>
                            </div>
                            <div class="accordion__text-block">
                                <p>Primeiro, você vai ter que criar uma conta com a gente. Clique em “Cadastre-se” no canto superior direito e preencha os campos requeridos.
                                    Agora sim você pode criar o seu cofrinho, clicando em  “Criar Cofrinho”. Precisamos que você informe nesta seção todas as informações da sua causa: valor a atingir, data de término e descrição, lembrando que tá liberado incluir fotos e personalizar como quiser, afinal o cofrinho é 100% seu.
                                    Pronto, gente boa! Seu cofrinho foi criado e você agora pode compartilhar com quem quiser para encher esse porquinho de grana.</p>
                            </div>
                        </div>
                        <div class="accordion accordion--primary">
                            <div class="accordion__title-block">
                                <h6 class="accordion__title"> Como arrecadar contribuições para o meu cofrinho?</h6><span class="accordion__close"></span>
                            </div>
                            <div class="accordion__text-block">
                                <p>Depois que você criou o seu cofrinho, é fundamental que você divulgue o link (URL) com o maior número de pessoas que puder, aumentando as chances de arrecadar dinheiro e atingir sua meta.
                                    Para tal, a OincBank disponibiliza 5 ferramentas para você compartilhar com quem você quiser: e-mail, Facebook Messenger, WhatsApp, Facebook e Twitter.
                                    Para compartilhar no Instagram ou em qualquer outro lugar, basta copiar e colar o link.</p>
                            </div>
                        </div>
                        <div class="accordion accordion--primary">
                            <div class="accordion__title-block">
                                <h6 class="accordion__title">Qual a taxa cobrada pela OincBank?</h6><span class="accordion__close"></span>
                            </div>
                            <div class="accordion__text-block">
                                <p>Você não paga nada para se cadastrar em nosso site e criar um cofrinho. Cobramos apenas uma comissão fixa pelo serviço que oferecemos, independente do valor arrecadado.
                                    Para o recebedor: cobramos uma taxa de 6% de comissão no momento que você for sacar o dinheiro que arrecadou.
                                    Além disso, há uma tarifa de R$5 reais quando você realizar o saque do valor arrecadado em seu cofrinho.</p>
                            </div>
                        </div>
                        <div class="accordion accordion--primary">
                            <div class="accordion__title-block">
                                <h6 class="accordion__title"> Quais as modalidades de pagamento da OincBank?</h6><span class="accordion__close"></span>
                            </div>
                            <div class="accordion__text-block">
                                <p>As doações podem ser feitas via PIX e cartão de crédito.
                                    Não trabalhamos com boleto bancário devido ao alto custo que isso traria para nossa operação, e portanto, oferecendo sempre o melhor custo-benefício aos nossos clientes.</p>
                            </div>
                        </div>
                        <div class="accordion accordion--primary">
                            <div class="accordion__title-block">
                                <h6 class="accordion__title">Como receber o valor arrecadado?</h6><span class="accordion__close"></span>
                            </div>
                            <div class="accordion__text-block">
                                <p>Quando você cria o seu cofrinho, você estabelece uma data de término para arrecadação e quando este dia chegar, iremos notificá-lo com o saldo disponível para saque.
                                    Se você quiser receber o valor arrecadado antes da data de término estipulada, basta acessar a página do seu cofrinho pelo link exclusivo (URL) e clicar no botão “Sacar”.
                                    É importante ressaltar que para solicitar o saque, todas as contribuições devem estar computadas, sendo que contribuições consideradas em aberto (não compensada ou canceladas) não fazem parte do valor disponível para saque.
                                    Há duas opções de saque: na conta do próprio organizador ou na conta de outro destinatário.</p>
                            </div>
                        </div>
                        <div class="accordion accordion--primary">
                            <div class="accordion__title-block">
                                <h6 class="accordion__title">Qual o prazo para receber o dinheiro?</h6><span class="accordion__close"></span>
                            </div>
                            <div class="accordion__text-block">
                                <p>Depois de ter escolhido uma das duas opções de saque (conta do organizador ou outro destinatário), iremos transferir o dinheiro arrecadado em até 3 dias úteis.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



    </main>
@endsection

@section('scripts')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
@endsection
