@extends('layouts.site.app', ['activePage' => '', 'title' => 'OincBank - TOS', 'navName' => '', 'activeButton' => ''])




@section('content')

<section class="promo-primary">
    <picture>
    <source srcset="{{asset('helpo-theme')}}/img/causes.jpg" media="(min-width: 992px)"><img class="img--bg" src="{{asset('helpo-theme')}}/img/causes.jpg" alt="img">
    </picture>
    <div class="promo-primary__description"> <span>Sucesso</span></div>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="align-container">
                    <div class="align-container__item">
                        <span class="promo-primary__pre-title"></span>
                        <h1 class="promo-primary__title"><span>Sucesso</span> <span></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section causes"><img class="causes__bg" src="{{asset('helpo-theme')}}/img/causes_img.png" alt="img"/>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-12">
                <div class="heading heading--primary"><span class="heading__pre-title"></span>
                    <h2 class="heading__title"> <span>Sucesso</span></h2>
                    <p>
                        Obrigado pela sua doação.
                    </p>
            </div>

        </div>

    </div>

</section>
@endsection
