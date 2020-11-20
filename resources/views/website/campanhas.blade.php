@extends('layouts.site.app', ['activePage' => '', 'title' => 'OincBank', 'navName' => '', 'activeButton' => ''])

@section('content')
<!-- header end-->
<main class="main">
    <section class="promo-primary">
        <picture>
        <source srcset="{{asset('helpo-theme')}}/img/causes.jpg" media="(min-width: 992px)"><img class="img--bg" src="{{asset('helpo-theme')}}/img/causes.jpg" alt="img">
        </picture>
        <div class="promo-primary__description"> <span>Charity</span></div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
                            <h1 class="promo-primary__title"><span>Our</span> <span>Causes</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- causes inner start-->
    <section class="section causes-inner">
        <div class="container">
            <div class="row offset-margin">
                
                <div class="col-md-6 col-lg-4">
                    <div class="causes-item causes-item--primary">
                        <div class="causes-item__body">
                            <div class="causes-item__top">
                                <h6 class="causes-item__title"> <a href="cause-details.html">Water Delivery in Africa</a></h6>
                                <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail</p>
                            </div>
                            <div class="causes-item__img">
                            <div class="causes-item__badge" style="background-color: #49C2DF">Water Delivery</div><img class="img--bg" src="{{asset('helpo-theme')}}/img/causes_1.jpg" alt="img">
                            </div>
                            <div class="causes-item__lower">
                                <div class="progress-bar">
                                    <div class="progress-bar__inner" style="width: 78%;">
                                        <div class="progress-bar__value">78%</div>
                                    </div>
                                </div>
                                <div class="causes-item__details-holder">
                                    <div class="causes-item__details-item"><span>Goal: </span><span>25 000$</span></div>
                                    <div class="causes-item__details-item text-right"><span>Pledged: </span><span>20 350$</span></div>
                                </div>
                            </div>
                        </div><a class="button causes-item__button button--primary" href="#">+ Donate</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- pagination start-->
                    <ul class="pagination">
                        <li class="pagination__item pagination__item--prev"><i class="fa fa-angle-left" aria-hidden="true"></i><span>Back</span>
                        </li>
                        <li class="pagination__item"><span>1</span></li>
                        <li class="pagination__item pagination__item--active"><span>2</span></li>
                        <li class="pagination__item"><span>3</span></li>
                        <li class="pagination__item"><span>4</span></li>
                        <li class="pagination__item"><span>5</span></li>
                        <li class="pagination__item pagination__item--disabled">...</li>
                        <li class="pagination__item"><span>12</span></li>
                        <li class="pagination__item pagination__item--next"><span>Next</span><i class="fa fa-angle-right" aria-hidden="true"></i>
                        </li>
                    </ul>
                    <!-- pagination end-->
                </div>
            </div>
        </div>
    </section>
    <!-- causes inner end-->
    <!-- bottom bg start-->
    <section class="bottom-background background--brown">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-background__img"><img src="{{asset('helpo-theme')}}/img/bottom-bg.png" alt="img"></div>
                </div>
            </div>
        </div>
    </section>
<!-- bottom bg end-->
@endsection
			