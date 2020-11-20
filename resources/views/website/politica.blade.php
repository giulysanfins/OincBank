@extends('layouts.site.app', ['activePage' => '', 'title' => 'OincBank - TOS', 'navName' => '', 'activeButton' => ''])




@section('content')

<section class="promo">
    <div class="promo-slider">
        <div class="promo-slider__item promo-slider__item--style-1">
            <picture>
                <source srcset="{{asset('helpo-theme')}}/img/tos.jpeg" media="(min-width: 835px)"/>
                <source srcset="{{asset('helpo-theme')}}/img/tos.jpeg" media="(min-width: 376px)"/><img class="img--bg" src="{{asset('helpo-theme')}}/img/375promo_1.jpg" alt="img"/>
            </picture>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="align-container">
                            <div class="align-container__item">
                                <div class="promo-slider__wrapper-1">

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
        <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
        <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
        <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
        <li class="promo-socials__item"><a class="promo-socials__link" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
    </ul>
    <!-- promo socials end-->

</section>
<section class="section causes"><img class="causes__bg" src="{{asset('helpo-theme')}}/img/causes_img.png" alt="img"/>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-12">
                <div class="heading heading--primary"><span class="heading__pre-title">Política de Privacidade</span>
                    <h2 class="heading__title"> <span>Política de Privacidade</span></h2>
                    <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish</p>
                    <div>

                </div>
            </div>

        </div>

    </div>

</section>
@endsection
