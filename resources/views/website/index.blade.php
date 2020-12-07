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
                                            <h2 class="promo-slider__title"><span>We help all people in need</span>
                                                <span>around the world.</span>
                                            </h2>
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
                <div class="promo-slider__item promo-slider__item--style-2">
                    <picture>
                        <source srcset="{{ asset('helpo-theme') }}/img/promo_2.jpg" media="(min-width: 835px)" />
                        <source srcset="{{ asset('helpo-theme') }}/img/promo_2.jpg" media="(min-width: 376px)" />
                        <img class="img--bg" src="{{ asset('helpo-theme') }}/img/promo_2.jpg" alt="img" />
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span>Our Helping</span><br /><span>around the
                                                    world.</span></h2>
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
            <!-- promo pannel start-->
            <div class="promo-pannel"><a class="anchor promo-pannel__anchor" href="#about"> <span>Scroll Down</span></a>
                <div class="promo-pannel__video"><img class="img--bg" src="{{ asset('helpo-theme') }}/img/video_block.jpg"
                        alt="image" /><a class="video-trigger"
                        href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><span>Watch our video</span><i class="fa fa-play"
                            aria-hidden="true"></i></a></div>
                <div class="promo-pannel__phones">
                    <p class="promo-pannel__title">Phone numbers</p><a class="promo-pannel__link" href="tel:+180012345678">+
                        1800 - 123 456 78</a><a class="promo-pannel__link" href="tel:+18009756511">+ 1800 - 975 65 11</a>
                </div>
                <div class="promo-pannel__email">
                    <p class="promo-pannel__title">Email</p><a class="promo-pannel__link"
                        href="mailto:support@helpo.org">support@helpo.org</a>
                </div>
            </div>
            <!-- promo pannel end-->
            <!-- slider nav start-->
            <div class="slider__nav slider__nav--promo">
                <div class="promo-slider__count"></div>
                <div class="slider__arrows">
                    <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <!-- slider nav end-->
        </section>
        <section class="section causes"><img class="causes__bg" src="{{ asset('helpo-theme') }}/img/causes_img.png"
                alt="img" />
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-5">
                        <div class="heading heading--primary"><span class="heading__pre-title">What we Do</span>
                            <h2 class="heading__title"><span>Helpo</span> <span>Causes</span></h2>
                            <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento
                                splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish</p>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 d-none d-xl-block">
                        <div class="row offset-margin">
                            <div class="col-6">
                                <div class="counter-item counter-item--style-3">
                                    <div class="counter-item__top">
                                        <h6 class="counter-item__title">People We Helped on 2018</h6>
                                    </div>
                                    <div class="counter-item__lower"><span class="js-counter">200</span><span>k</span></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="counter-item counter-item--style-3">
                                    <div class="counter-item__top">
                                        <h6 class="counter-item__title">Dollars We Collected</h6>
                                    </div>
                                    <div class="counter-item__lower"><span class="js-counter">65</span><span>bil</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-end margin-bottom">
                    <div class="col-sm-6"><a class="button button--primary" href="causes.html">More Causes</a></div>
                    <div class="col-sm-6 d-flex justify-content-sm-end">
                        <!-- slider nav start-->
                        <div class="slider__nav causes-slider__nav">
                            <div class="slider__arrows">
                                <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                                </div>
                                <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <!-- slider nav end-->
                    </div>
                </div>
            </div>
            <div class="causes-holder offset-margin">
                <div class="causes-holder__wrapper">
                    <div class="causes-slider offset-margin">
                        <div class="causes-slider__item">
                            <div class="causes-item causes-item--primary">
                                <div class="causes-item__body">
                                    <div class="causes-item__top">
                                        <h6 class="causes-item__title"> <a href="cause-details.html">Water Delivery in
                                                Africa</a></h6>
                                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray
                                            Sacramento splittail</p>
                                    </div>
                                    <div class="causes-item__img">
                                        <div class="causes-item__badge" style="background-color: #49C2DF">Water Delivery
                                        </div><img class="img--bg" src="{{ asset('helpo-theme') }}/img/causes_1.jpg"
                                            alt="img" />
                                    </div>
                                    <div class="causes-item__lower">
                                        <div class="progress-bar">
                                            <div class="progress-bar__inner" style="width: 78%;">
                                                <div class="progress-bar__value">78%</div>
                                            </div>
                                        </div>
                                        <div class="causes-item__details-holder">
                                            <div class="causes-item__details-item"><span>Goal: </span><span>25 000$</span>
                                            </div>
                                            <div class="causes-item__details-item text-right"><span>Pledged: </span><span>20
                                                    350$</span></div>
                                        </div>
                                    </div>
                                </div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
                            </div>
                        </div>
                        <div class="causes-slider__item">
                            <div class="causes-item causes-item--primary">
                                <div class="causes-item__body">
                                    <div class="causes-item__top">
                                        <h6 class="causes-item__title"> <a href="cause-details.html">Health in other
                                                Countries</a></h6>
                                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray
                                            Sacramento splittail</p>
                                    </div>
                                    <div class="causes-item__img">
                                        <div class="causes-item__badge" style="background-color: #F36F8F">Medicine</div><img
                                            class="img--bg" src="{{ asset('helpo-theme') }}/img/causes_2.jpg" alt="img" />
                                    </div>
                                    <div class="causes-item__lower">
                                        <div class="progress-bar">
                                            <div class="progress-bar__inner" style="width: 23%;">
                                                <div class="progress-bar__value">23%</div>
                                            </div>
                                        </div>
                                        <div class="causes-item__details-holder">
                                            <div class="causes-item__details-item"><span>Goal: </span><span>14 000$</span>
                                            </div>
                                            <div class="causes-item__details-item text-right"><span>Pledged: </span><span>6
                                                    098$</span></div>
                                        </div>
                                    </div>
                                </div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
                            </div>
                        </div>
                        <div class="causes-slider__item">
                            <div class="causes-item causes-item--primary">
                                <div class="causes-item__body">
                                    <div class="causes-item__top">
                                        <h6 class="causes-item__title"> <a href="cause-details.html">We Build and Create</a>
                                        </h6>
                                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray
                                            Sacramento splittail</p>
                                    </div>
                                    <div class="causes-item__img">
                                        <div class="causes-item__badge" style="background-color: #2EC774">Education</div>
                                        <img class="img--bg" src="{{ asset('helpo-theme') }}/img/causes_3.jpg" alt="img" />
                                    </div>
                                    <div class="causes-item__lower">
                                        <div class="progress-bar">
                                            <div class="progress-bar__inner" style="width: 51%;">
                                                <div class="progress-bar__value">51%</div>
                                            </div>
                                        </div>
                                        <div class="causes-item__details-holder">
                                            <div class="causes-item__details-item"><span>Goal: </span><span>150 000$</span>
                                            </div>
                                            <div class="causes-item__details-item text-right"><span>Pledged: </span><span>76
                                                    500$</span></div>
                                        </div>
                                    </div>
                                </div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
                            </div>
                        </div>
                        <div class="causes-slider__item">
                            <div class="causes-item causes-item--primary">
                                <div class="causes-item__body">
                                    <div class="causes-item__top">
                                        <h6 class="causes-item__title"> <a href="cause-details.html">Healthy Food</a></h6>
                                        <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray
                                            Sacramento splittail</p>
                                    </div>
                                    <div class="causes-item__img">
                                        <div class="causes-item__badge" style="background-color: #F8AC3A">Food</div><img
                                            class="img--bg" src="{{ asset('helpo-theme') }}/img/causes_4.jpg" alt="img" />
                                    </div>
                                    <div class="causes-item__lower">
                                        <div class="progress-bar">
                                            <div class="progress-bar__inner" style="width: 50%;">
                                                <div class="progress-bar__value">50%</div>
                                            </div>
                                        </div>
                                        <div class="causes-item__details-holder">
                                            <div class="causes-item__details-item"><span>Goal: </span><span>50 000$</span>
                                            </div>
                                            <div class="causes-item__details-item text-right"><span>Pledged: </span><span>25
                                                    000$</span></div>
                                        </div>
                                    </div>
                                </div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- causes end-->



        <h2 class="heading__title">Dúvidas Frequentes</h2>

        <div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
            <svg xmlns="http://www.w3.org/2000/svg">
                <symbol viewBox="0 0 24 24" id="expand-more">
                    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" />
                    <path d="M0 0h24v24H0z" fill="none" />
                </symbol>
                <symbol viewBox="0 0 24 24" id="close">
                    <path
                        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                    <path d="M0 0h24v24H0z" fill="none" />
                </symbol>
            </svg>
        </div>

        <details open>
            <summary>
               Quem somos e por que usar nosso serviço?
                <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
                </svg>
                <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
                </svg>
            </summary>
            <p>Totally. Totally does.</p>
        </details>

        <details>

            <summary>
                O site é seguro?
                <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
                </svg>
                <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
                </svg>
            </summary>
            <p>Nossa maior prioridade é oferecer segurança e proteção dos seus dados. Por isso, colocamos essa resposta antes de tudo.
                O site e app da OincBank foram desenvolvidos com criptografia HTTPS para resguardar toda informação sensível e privilegiada, oferecendo um serviço com segurança e de qualidade.
                Nós temos orgulho de estar 100% em conformidade com a Lei Geral de Proteção de Dados Pessoais (LGPD), além de nosso ambiente tecnológico ser monitorado 24h por dia, com suporte técnico especializado.</p>
        </details>

        <details>
            <summary>
               Como criar meu cofrinho?
                <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
                </svg>
                <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
                </svg>
            </summary>
            <p>Primeiro, você vai ter que criar uma conta com a gente. Clique em “Cadastre-se” no canto superior direito e preencha os campos requeridos.
                Agora sim você pode criar o seu cofrinho, clicando em  “Criar Cofrinho”. Precisamos que você informe nesta seção todas as informações da sua causa: valor a atingir, data de término e descrição, lembrando que tá liberado incluir fotos e personalizar como quiser, afinal o cofrinho é 100% seu.
                Pronto, gente boa! Seu cofrinho foi criado e você agora pode compartilhar com quem quiser para encher esse porquinho de grana.</p>
        </details>
        <details>
            <summary>

                Como arrecadar contribuições para o meu cofrinho?
                <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
                </svg>
                <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
                </svg>
            </summary>
            <p>Depois que você criou o seu cofrinho, é fundamental que você divulgue o link (URL) com o maior número de pessoas que puder, aumentando as chances de arrecadar dinheiro e atingir sua meta.
                Para tal, a OincBank disponibiliza 5 ferramentas para você compartilhar com quem você quiser: e-mail, Facebook Messenger, WhatsApp, Facebook e Twitter.
                Para compartilhar no Instagram ou em qualquer outro lugar, basta copiar e colar o link.	</p>
        </details>
        <details>
            <summary>

                Qual a taxa cobrada pela OincBank?
                <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
                </svg>
                <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
                </svg>
            </summary>
            <p>Você não paga nada para se cadastrar em nosso site e criar um cofrinho. Cobramos apenas uma comissão fixa pelo serviço que oferecemos, independente do valor arrecadado.
                Para o recebedor: cobramos uma taxa de 6% de comissão no momento que você for sacar o dinheiro que arrecadou.
                Além disso, há uma tarifa de R$5 reais quando você realizar o saque do valor arrecadado em seu cofrinho.	</p>
        </details>
        <details>
            <summary>

                Quais as modalidades de pagamento da OincBank?
                <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
                </svg>
                <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
                </svg>
            </summary>
            <p>As doações podem ser feitas via PIX e cartão de crédito.
                Não trabalhamos com boleto bancário devido ao alto custo que isso traria para nossa operação, e portanto, oferecendo sempre o melhor custo-benefício aos nossos clientes.</p>
        </details>
        <details>
            <summary>

                Como receber o valor arrecadado?
                <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
                </svg>
                <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
                </svg>
            </summary>
            <p>Quando você cria o seu cofrinho, você estabelece uma data de término para arrecadação e quando este dia chegar, iremos notificá-lo com o saldo disponível para saque.
                Se você quiser receber o valor arrecadado antes da data de término estipulada, basta acessar a página do seu cofrinho pelo link exclusivo (URL) e clicar no botão “Sacar”.
                É importante ressaltar que para solicitar o saque, todas as contribuições devem estar computadas, sendo que contribuições consideradas em aberto (não compensada ou canceladas) não fazem parte do valor disponível para saque.
                Há duas opções de saque: na conta do próprio organizador ou na conta de outro destinatário.	</p>
        </details>
        <details>
            <summary>

                Qual o prazo para receber o dinheiro?
                <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
                </svg>
                <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
                </svg>
            </summary>
            <p>Depois de ter escolhido uma das duas opções de saque (conta do organizador ou outro destinatário), iremos transferir o dinheiro arrecadado em até 3 dias úteis.		</p>
        </details>
    </main>
@endsection



@section('scripts')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
@endsection
