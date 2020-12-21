@extends('layouts.site.app', ['activePage' => '', 'title' => 'OincBank', 'navName' => '', 'activeButton' => ''])

@section('content')
<div class="main">

    <section class="promo-primary promo-primary--shop">
        <picture>
            <source srcset="{{asset('helpo-theme')}}/img/shop.jpg" media="(min-width: 992px)"><img class="img--bg" src="{{asset('helpo-theme')}}/img/shop.jpg" alt="img">
        </picture>
        <div class="promo-primary__description"> <span>Ajuda</span></div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">OincBank</span>
                            <h1 class="promo-primary__title"><span>Doação</span> <span>Checkout</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section start-->
    <section class="section background--brown">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="row">
                       <div class="col-12">
                            <div class="form__fieldset">
                                <h6 class="form__title">Resumo da doação:</h6>

                                <div class="row no-gutters align-items-center">
                                    <div class="col-4 col-sm-3 col-md-2 col-lg-4">
                                        <div class="order-item__img"><img class="img--contain" src="{{asset('storage')}}/images/{{$pagamento->campanha->profile_image}}" alt="img"></div>
                                    </div>
                                    <div class="col-4 col-sm-5 col-md-6 col-lg-4">
                                        <div class="order-item__description">
                                            <a class="order-item__link" href="shop-product.html">{{$pagamento->campanha->titulo}}</a>
                                            {{-- <span class="order-item__count">$18.00 x 1</span> --}}
                                        </div>
                                    </div>
                                    <div class="col-3 text-center"><span class="order-item__price">R$ {{ number_format($pagamento->valor,2,",",".") }}</span></div>
                                </div>

                            </div>

                            <div class="form__fieldset">
                                <div class="cart-totals">
                                    <h6 class="form__title">Total doação:</h6>

                                    <ul class="cart-totals__list">
                                        <li><span>Total:</span><span>R$ {{ number_format($pagamento->valor,2,",",".") }}</span></li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                        <div class="col-12 text-right mt-3">
                            <p></p>
                            <a class="form__submit" href="<?php echo $preference->init_point; ?>">Pagar no Mercado Pago >></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- section end-->
    <!-- bottom bg start-->
    <section class="bottom-background background--brown">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-background__img">
                        <img src="{{asset('helpo-theme')}}/img/bottom-bg.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bottom bg end-->

    </section>

</main>
<style>
    .mercadopago-button {
        display: none;
    }
</style>
@endsection

@section('scripts')

<script
    src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js"
    data-preference-id="<?php echo $preference->id; ?>">
</script>

<script>
    $(document).ready(function(){
        $('.money').mask("#.##0,00", {reverse: true});
    });
</script>
@endsection
