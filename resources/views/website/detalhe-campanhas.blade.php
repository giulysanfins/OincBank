@extends('layouts.site.app', ['activePage' => '', 'title' => '| Detalhes da Campanha', 'navName' => '', 'activeButton' => ''])

@section('css')

@endsection

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
                        <div class="align-container__item"><span class="promo-primary__pre-title">{{$campanha->user->name}}</span>
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

                            <div class="row my-4">
                                <div class="d-flex align-items-center">
                                    @if($campanha->photo)
                                        <img class="mr-4 rounded-circle shadow" style="width: 60px; height:60px;" src="{{ asset('/storage/profile/' . $campanha->photo->path) }}" alt="">
                                    @else
                                        <img class="mr-4 rounded-circle shadow" style="width: 60px; height:60px;" src="{{ asset('pig-pork.jpg') }}" alt="">
                                    @endif
                                    <strong>{{ $campanha->user->name }}</strong>
                                </div>
                            </div>

                            <div class="row align-items-end">
                                <div class="col-lg-6">
                                    <div class="progress-bar">
                                        <div class="progress-bar__inner" style="width: {{($perc >= 100)?'100':$perc}}%;">
                                            <div class="progress-bar__value">{{number_format($perc,2,".",".")}}%</div>
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
                                            <input type="text" min="{{$minValue->valor}}"  maxlength = "10" class="form__field form__input-number money" name='valor_manual' value="{{old('valor_manual')}}" id="dinheiro"
                                            title="O valor deve ser entre R$ {{number_format($minValue->valor,2,",",".")}} até R$ {{number_format($maxValue->valor,2,",",".")}}" required
                                            >
                                        </label>
                                        <br>

                                        <div class="" id="erro">
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-9 col-xl-8 text-lg-right">
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
                                    </div> --}}
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
                                        <div class="form-check" id="opacidade1">
                                            <input class="form-check-input" type="checkbox" value="1" name="anonimo"
                                            id="defaultCheck1" style=" -webkit-appearance:checkbox;" onclick="ckChange(this)">
                                            <label class="form-check-label teste" for="defaultCheck1">
                                              <p> Doar como: <b>Anônimo</b>.</p>
                                            </label>

                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="0" name="anonimo"
                                        id="defaultCheck2" style="-webkit-appearance:checkbox;" onclick="ckChange(this)">
                                        <label class="form-check-label" for="defaultCheck2">
                                            <p> Doar como: <b>{{auth()->user()->name}}</b>.</p>
                                        </label>
                                        </div>

                                        @else
                                            {{-- <p> Para doar, <a href="{{route('login')}}" target="_blank">faça o login</a></p> --}}
                                            <p>Para doar, faça login.</p>
                                        @endif
                                    </div>

                                    <div class="col-lg-12 text-center">
                                        @if (Auth::check())
                                            <button class="form__submit" id="btnSubmit" type="submit">+ Doar</button>
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
                            <li class="r-tabs-state-default r-tabs-tab"><a href="#horizontal-tabs__item-4" class="r-tabs-anchor"><span>Fotos</span></a></li>
                        </ul>
                        <div class="horizontal-tabs__content">
                            <div class="r-tabs-accordion-title r-tabs-state-active"><a href="#horizontal-tabs__item-1" class="r-tabs-anchor">
                                <span>Descrição</span>
                            </div>
                            <div class="horizontal-tabs__item r-tabs-panel r-tabs-state-active" id="horizontal-tabs__item-1" style="display: block;">
                                <p >{!!nl2br($campanha->descricao)!!}</p>
                            </div>

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

                            <div class="r-tabs-accordion-title">
                                <a href="#horizontal-tabs__item-4" class="r-tabs-anchor"><span>Fotos</span></a>
                            </div>
                            
                            <div class="horizontal-tabs__item r-tabs-state-default r-tabs-panel" id="horizontal-tabs__item-4">
                                <div class="gallery-simple">
                                    <div class="row offset-30">
                                        @foreach ($fotos as $foto)
                                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                                                <a class="gallery-simple__item" href="{{asset('storage')}}/images/{{$foto->path}}" data-fancybox="simple-gallery-{{$campanha->id}}">
                                                    <img class="img--bg" src="{{asset('storage')}}/images/{{$foto->path}}" alt="Campanha_{{$campanha->id}}_{{$foto->id}}" id="foto_{{$foto->path}}">
                                                </a>
                                            </div>
                                        @endforeach
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
    function ckChange(el)
    {
        var ckName = document.getElementsByName(el.name);
        for (var i = 0, c; c = ckName[i]; i++)
        {
        c.disabled = !(!el.checked || c === el);
        }
    }
</script>
<script>
    function validar(){
        let val1 =  input.value.replace(".", "");
        let val2 = val1.replace(",",".");
        if(val2 < parseFloat({{$minValue->valor}}) || val2 > parseFloat({{$maxValue->valor}}))
        {
            document.getElementById("erro").className += "alert alert-warning alert-sm alert-dismissible fade show mt-2 text-center";
            document.getElementById('erro').innerHTML = 'O valor deve ser entre R$ {{number_format($minValue->valor,2,",",".")}} até R$ {{number_format($maxValue->valor,2,",",".")}}.';
            $("#btnSubmit").attr("disabled", true);
            var elem = document.getElementById('btnSubmit');
        }
        else
        {
            document.getElementById("erro").className = "";
            document.getElementById('erro').innerHTML = '';
            $("#btnSubmit").attr("disabled", false);
        }
    }

    var input = document.getElementById('dinheiro');

    input.addEventListener("change", validar,false);
    document.addEventListener("DOMContentLoaded", validar,false);
    $(document).ready(function(){
        $('.money').mask("#.##0,00", {reverse: true});
    });
</script>
@endsection
