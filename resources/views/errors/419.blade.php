@extends('layouts.site.app')

@section('content')
<img class="img--bg" src="{{asset('helpo-theme')}}/img/404.jpg" alt="img">
<section class="section error">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-6">
                <div class="align-container">
                    <div class="align-container__item">
                        <h1 class="error__title">419</h1>
                        <h3 class="error__subtitle">Page Expired</h3>
                        <p class="error__text">Page Expired</p>
                        <a class="button button--primary" href="index.html">Home Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>	
@endsection