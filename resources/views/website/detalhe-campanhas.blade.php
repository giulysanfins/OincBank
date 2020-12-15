@extends('layouts.site.app', ['activePage' => '', 'title' => '| Detalhes da Campanha', 'navName' => '', 'activeButton' => ''])

@section('content')
<div class="main">
    <section class="promo-primary">
        <picture>
            <source srcset="{{asset('storage')}}/images/{{$campanha->profile_image}}" media="(min-width: 992px)">
                <img class="img--bg" src="{{asset('storage')}}/images/{{$campanha->profile_image}}" alt="img">
        </picture>
        <div class="promo-primary__description"> <span>{{$campanha->categoria_id}}</span></div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">{{}}</span>
                            <h1 class="promo-primary__title"><span>{{$campanha->titulo}}</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- donation start-->
    <section class="section donation">
        <img class="donation__bg" src="{{asset('helpo-theme')}}/img/donation_img.png" alt="img">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="donation-item">
                        <div class="donation-item__img">
                            <img class="img--bg" src="{{asset('storage')}}/images/{{$campanha->profile_image}}" alt="img">
                        </div>
                        <div class="donation-item__body">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <h5 class="donation-item__title">{{$campanha->titulo}}</h5>
                                </div>
                                <div class="col-12 col-lg-5">
                                    <input class="form-control" readonly type="text" value="{{url()->current()}}">
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-lg-6">
                                    <div class="progress-bar">
                                        <div class="progress-bar__inner" style="width: {{$perc}}%;">
                                            <div class="progress-bar__value">{{$perc}}%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="donation-item__details-holder">
                                        <div class="donation-item__details-item"><span>Arrecadação: </span><span>R$ {{number_format($arrecadado,2,",",".")}}</span></div>
                                        <div class="donation-item__details-item"><span>Meta: </span><span>R$ {{number_format($campanha->valor,2,",",".")}}</span></div>
                                    </div>
                                </div>
                            </div>
                            <form class="form donation-form" action="{{route('website.payment.store',$campanha->id)}}" method="POST">
                                @csrf
                                @method('post')
                                <div class="row align-items-baseline margin-bottom">
                                    <div class="col-lg-3 col-xl-4">
                                        <label class="form__label"><span class="form__icon">R$</span>
                                            <input class="form__field form__input-number money" name='valor_manual' value="{{old('valor_manual')}}" type="text">
                                        </label>
                                    </div>
                                    <div class="col-lg-9 col-xl-8 text-lg-right">
                                        <label class="form__radio-label"><span class="form__label-text">R$ {{ number_format('100',2,",",".") }}</span>
                                            <input class="form__input-radio" type="radio" name="valor_auto" value="100" checked="checked"><span class="form__radio-mask form__radio-mask"></span>
                                        </label>
                                        <label class="form__radio-label"><span class="form__label-text">R$ {{ number_format('200',2,",",".") }}</span>
                                            <input class="form__input-radio" type="radio" name="valor_auto" value="200"><span class="form__radio-mask form__radio-mask"></span>
                                        </label>
                                        <label class="form__radio-label"><span class="form__label-text">R$ {{ number_format('500',2,",",".") }}</span>
                                            <input class="form__input-radio" type="radio" name="valor_auto" value="500"><span class="form__radio-mask form__radio-mask"></span>
                                        </label>
                                        <label class="form__radio-label"><span class="form__label-text">R$ {{ number_format('1000',2,",",".") }}</span>
                                            <input class="form__input-radio" type="radio" name="valor_auto" value="1000"><span class="form__radio-mask form__radio-mask"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row margin-bottom">
                                    <div class="col-12">
                                        <h6 class="form__title">Metodo de Pagamento:</h6>
                                    </div>
                                    <div class="col-12">
                                        <label class="form__radio-label">
                                            <img class="form__label-img" src="{{asset('helpo-theme')}}/img/pagamentos/mercadopago.png" alt="mercado pago" width="30%">
                                            <input class="form__input-radio" type="radio" name="tipo_pagamento" value="mercado_pago" checked="checked"><span class="form__radio-mask form__radio-mask"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="form__title">Informações Pessoais</h6>
                                    </div>
                                    <div class="col-lg-4 margin-30">
                                        @if (Auth::check())
                                            <p> Doar como: <b>{{auth()->user()->name}}</b></p>
                                        @else
                                            {{-- <p> Para doar, <a href="{{route('login')}}" target="_blank">faça o login</a></p> --}}
                                            <p>Para doar, faça login.</p>
                                        @endif
                                    </div>

                                    <div class="col-lg-4">
                                        @if (Auth::check())
                                            <button class="form__submit" type="submit">+ Doar</button>
                                        @else
                                            <a class="form__submit" href="{{route('login',['campanha' => $campanha->id])}}" >Login</a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- donation end-->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- cause details tabs start-->
                    <div class="tabs horizontal-tabs cause-details-tabs r-tabs">
                        <ul class="horizontal-tabs__header r-tabs-nav">
                            <li class="r-tabs-tab r-tabs-state-active"><a href="#horizontal-tabs__item-1" class="r-tabs-anchor"><span>Descrição</span></a></li>
                            {{-- <li class="r-tabs-state-default r-tabs-tab"><a href="#horizontal-tabs__item-2" class="r-tabs-anchor"><span>Doadores</span></a></li> --}}
                            @if ($campanha->video != null)
                            <li class="r-tabs-state-default r-tabs-tab"><a href="#horizontal-tabs__item-3" class="r-tabs-anchor"><span>Video</span></a></li>
                            @endif
                            {{-- <li class="r-tabs-state-default r-tabs-tab"><a href="#horizontal-tabs__item-4" class="r-tabs-anchor"><span>Fotos</span></a></li> --}}
                        </ul>
                        <div class="horizontal-tabs__content">
                            <div class="r-tabs-accordion-title r-tabs-state-active"><a href="#horizontal-tabs__item-1" class="r-tabs-anchor">
                                <span>Descrição</span>
                            </div>
                            <div class="horizontal-tabs__item r-tabs-panel r-tabs-state-active" id="horizontal-tabs__item-1" style="display: block;">
                                <p >{!!nl2br($campanha->descricao)!!}</p>
                            </div>
                            
                            {{-- <div class="r-tabs-accordion-title">
                                <a href="#horizontal-tabs__item-2" class="r-tabs-anchor"><span>Donors</span></a>
                            </div> --}}

                            {{-- <div class="horizontal-tabs__item r-tabs-state-default r-tabs-panel" id="horizontal-tabs__item-2">
                                <div class="row offset-30">

                                    <div class="col-md-6 col-xl-4">
                                        <!-- item start-->
                                        <div class="donor-item">
                                            <div class="row align-items-center">
                                                <div class="col-lg-7">
                                                    <div class="donor-item__info">
                                                        <div class="donor-item__img"><img class="img--bg" src="img/face_1.jpg" alt="face"></div>
                                                        <div class="donor-item__description">
                                                            <div class="donor-item__name">Chris Patt</div>
                                                            <div class="donor-item__date">23 Jan'19</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5">
                                                    <h5 class="donor-item__value">$ 200.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- item end-->
                                    </div>

                                </div>
                            </div> --}}

                            @if ($campanha->video != null)
                            <div class="r-tabs-accordion-title"><a href="#horizontal-tabs__item-3" class="r-tabs-anchor"><span>Video</span></a></div><div class="horizontal-tabs__item r-tabs-state-default r-tabs-panel" id="horizontal-tabs__item-3">
                                <div class="video-frame"><img class="img--bg" src="{{asset('storage')}}/images/{{$campanha->profile_image}}" alt="frame">
                                    <a class="video-trigger video-frame__trigger" href="{{$campanha->video}}">
                                        <span class="video-frame__icon"><i class="fa fa-play" aria-hidden="true"></i>
                                        </span><span class="video-frame__text">Veja o vídeo</span>
                                    </a>
                                </div>
                            </div>
                            @endif

                            <div class="r-tabs-accordion-title"><a href="#horizontal-tabs__item-4" class="r-tabs-anchor"><span>Fotos</span></a></div><div class="horizontal-tabs__item r-tabs-state-default r-tabs-panel" id="horizontal-tabs__item-4">
                                <div class="gallery-simple">
                                    <div class="row offset-30">

                                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                            <a class="gallery-simple__item" href="{{asset('helpo-theme')}}/img/ig_1.jpg" data-fancybox="simple-gallery">
                                                <img class="img--bg" src="{{asset('helpo-theme')}}/img/ig_1.jpg" alt="img">
                                            </a>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cause details tabs end-->
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('.money').mask("#.##0,00", {reverse: true});
    });
</script>
@endsection