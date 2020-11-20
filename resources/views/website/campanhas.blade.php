@extends('layouts.site.app', ['activePage' => '', 'title' => 'OincBank', 'navName' => '', 'activeButton' => ''])

@section('content')
<!-- header end-->
<main class="main">
    <section class="promo-primary">
        <picture>
        <source srcset="{{asset('helpo-theme')}}/img/causes.jpg" media="(min-width: 992px)"><img class="img--bg" src="{{asset('helpo-theme')}}/img/causes.jpg" alt="img">
        </picture>
        <div class="promo-primary__description"> <span>Campanhas</span></div>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item">
                            <span class="promo-primary__pre-title"></span>
                            <h1 class="promo-primary__title"><span>Campanhas</span> <span></span></h1>
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
                @foreach ($campanhas as $campanha)

                    <div class="col-6 col-lg-4">
                        <div class="causes-item causes-item--primary">
                            <div class="causes-item__body">
                                <div class="causes-item__top">
                                    <h6 class="causes-item__title"> <a href="{{route('website.detalhes',$campanha->id)}}">{{$campanha->titulo}}</a></h6>
                                    <p>
                                        @if (strlen($campanha->descricao) > 65)
                                            @php
                                                $string = Str::substr($campanha->descricao, 0, 65)
                                            @endphp
                                            {{$string."..."}}
                                        @else
                                            {{$campanha->descricao}}
                                        @endif                                    
                                    </p>
                                </div>
                                <div class="causes-item__img">
                                    <div class="causes-item__badge" style="background-color: #49C2DF">{{$campanha->categoria_id}}</div>
                                    <a href="{{route('website.detalhes',$campanha->id)}}">
                                        <img class="img--bg" src="{{asset('storage')}}/images/{{$campanha->profile_image}}" alt="foto_{{$campanha->titulo}}">
                                    </a>
                                    </div>
                                <div class="causes-item__lower">
                                    <div class="progress-bar">
                                        <div class="progress-bar__inner" style="width: 78%;">
                                            <div class="progress-bar__value">78%</div>
                                        </div>
                                    </div>
                                    <div class="causes-item__details-holder">
                                        <div class="causes-item__details-item">
                                            <span>Meta: </span><br /><span>R$ {{$campanha->valor}}</span>
                                        </div>
                                        <div class="causes-item__details-item text-right"><span>Conquistado: </span><br /><span>R$ 1110,00</span></div>
                                    </div>
                                </div>
                                </div><a class="button causes-item__button button--primary" href="{{route('website.detalhes',$campanha->id)}}">+ Doar</a>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- pagination start-->
                    <ul class="pagination">
                        <li class="pagination__item pagination__item--prev"><i class="fa fa-angle-left" aria-hidden="true"></i><span> Anterior</span>
                        </li>
                        <li class="pagination__item"><span>1</span></li>
                        <li class="pagination__item pagination__item--active"><span>2</span></li>
                        <li class="pagination__item"><span>3</span></li>
                        <li class="pagination__item"><span>4</span></li>
                        <li class="pagination__item"><span>5</span></li>
                        <li class="pagination__item pagination__item--disabled">...</li>
                        <li class="pagination__item"><span>12</span></li>
                        <li class="pagination__item pagination__item--next"><span>Próxima </span><i class="fa fa-angle-right" aria-hidden="true"></i>
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
			