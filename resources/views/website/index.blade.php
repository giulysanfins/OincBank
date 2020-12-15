@extends('layouts.site.app', ['activePage' => '', 'title' => '', 'navName' => '', 'activeButton' => ''])

@section('content')
    <!-- header end-->
    <main class="main">
        <!-- promo start-->
        <section class="promo">
            <div class="promo-slider">
                <div class="promo-slider__item promo-slider__item--style-1 img-effect">
                    <picture>
                        <source srcset="{{ asset('img') }}/photos/pig1_1.jpeg" media="(min-width: 835px)" />
                        <source srcset="{{ asset('img') }}/photos/pig1_1.jpeg" media="(min-width: 376px)" />
                        <img class="img--bg " src="{{ asset('img') }}/photos/pig1_1.jpeg" alt="https://br.freepik.com/fotos/mao'>Mão foto criado por mego-studio - br.freepik.com" />
                    </picture>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-container">
                                    <div class="align-container__item">
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title"><span>Venha encher seu</span>
                                                <span>Cofrinho</span>
                                            </h2>
                                        </div>
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle " style="margin-top: 3%">
                                                A vaca foi brejo, mas chamou o Oinc para te ajudar a juntar um dindin que você precisa para a sua causa.
                                            </p>
                                        </div>
                                        <div class="promo-slider__wrapper-3">
                                            <a class="button promo-slider__button button--primary" href="{{route('website.campanhas')}}">Descubra Causas</a>
                                            <a class="button promo-slider__button button--primary" href="{{route('register')}}">Registre seu cofrinho</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="promo-slider__item promo-slider__item--style-2">
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
                </div> --}}
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
            {{-- <div class="promo-pannel"><a class="anchor promo-pannel__anchor" href="#about"> <span>Scroll Down</span></a>
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
            </div> --}}
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
                    
                    <div class="col-xl-6">
                        <div class="heading heading--primary"><span class="heading__pre-title">+ Cofrinhos</span>
                            <h2 class="heading__title"><span>Veja outros</span> <span> Cofrinhos</span></h2>
                            <p>
                                
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-6 offset-xl-1 d-none d-xl-block">
                        <div class="row offset-margin">
                            <div class="col-6">
                                <div class="counter-item counter-item--style-3">
                                    {{-- <div class="counter-item__top">
                                        <h6 class="counter-item__title">People We Helped on 2018</h6>
                                    </div>
                                    <div class="counter-item__lower"><span class="js-counter">200</span><span>k</span></div> --}}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="counter-item counter-item--style-3">
                                    {{-- <div class="counter-item__top">
                                        <h6 class="counter-item__title">Dollars We Collected</h6>
                                    </div>
                                    <div class="counter-item__lower"><span class="js-counter">65</span><span>bil</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-end margin-bottom">
                    <div class="col-sm-6"><a class="button button--primary" href="{{route('campanha.index')}}">+ Cofrinhos</a></div>
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

                        @foreach ($campanhas as $campanha)
                            @php
                                $payments = \App\Yahp\Models\Payment::where('campanha_id',$campanha->id)->where('tipo',1)->where('status',2);
                                $vTotal = 0;                                          
                                foreach ($payments->get() as $key => $pag) {
                                    $vTotal = $vTotal+$pag->valor;
                                }
                                $perc = (($vTotal*100)/$campanha->valor);
                            @endphp
                            @if ($payments->count() >= $minpay)
                                <div class="causes-slider__item">
                                    <div class="causes-item causes-item--primary">
                                        <div class="causes-item__body">
                                            <div class="causes-item__top">
                                                <h6 class="causes-item__title"> 
                                                    <a href="{{ route('website.campanhas.detalhes', $campanha->id) }}">{{ $campanha->titulo }}</a>
                                                </h6>
                                                <p>
                                                    @if (strlen($campanha->descricao) > 35)
                                                        @php
                                                        $string = Str::substr($campanha->descricao, 0, 35)
                                                        @endphp
                                                        {{ $string . '...' }}
                                                    @else
                                                        {{ $campanha->descricao }}
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="causes-item__img">
                                                <div class="causes-item__badge" style="background-color: #49C2DF">
                                                    {{ $campanha->categoria->name }}
                                                </div>
                                                <a href="{{ route('website.campanhas.detalhes', $campanha->id) }}">
                                                    <img class="img--bg"
                                                        src="{{ asset('storage') }}/images/{{ $campanha->profile_image }}"
                                                        alt="foto_{{ $campanha->titulo }}">
                                                </a>
                                            </div>

                                            <div class="causes-item__lower">
                                                <div class="progress-bar" style="width: 100%">
                                                    <div class="progress-bar__inner" style="width: {{($perc >= 100)?'100':$perc}}%;">
                                                        <div class="progress-bar__value">{{$perc}}%</div>
                                                    </div>
                                                </div>
                                                <div class="causes-item__details-holder">
                                                    <div class="causes-item__details-item">
                                                        <span>Conquistado:</span>
                                                        <br />
                                                        <span>R$  {{number_format($vTotal,2,",",".")}}</span>
                                                    </div>

                                                    <div class="causes-item__details-item text-right">
                                                        <span>Meta: </span>
                                                        <br />
                                                        <span>R$ {{number_format($campanha->valor,2,",",".")}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="button causes-item__button button--primary btn-block" href="{{ route('website.campanhas.detalhes', $campanha->id) }}">
                                            + Doar
                                        </a>
                                    </div>

                                </div>
                            @endif
                            
                        @endforeach
                       
                    </div>
                </div>
            </div>
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

                @include('layouts.site.components.faq')
                
            </div>
        </section>
    </main>

    <div class="alert alert-dark alert-dismissible fade show alert-policy" role="alert">
        A gente guarda estatísticas de visitas para melhorar sua experiência de navegação.
        Ao continuar, você concorda com a nossa Politica de Privacidade.
        <button type="button" class="btn button--primary" data-dismiss="alert" aria-label="Close">
            Continuar e Fechar
        </button>
    </div>
@endsection



@section('scripts')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
@endsection
