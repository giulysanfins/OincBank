@extends('layouts.site.app', ['activePage' => '', 'title' => 'OincBank', 'navName' => '', 'activeButton' => ''])


@section('content')
    <section class="promo-primary">
        <picture>
            <source srcset="{{ asset('helpo-theme') }}/img/causes.jpg" media="(min-width: 992px)"><img class="img--bg"
                src="{{ asset('helpo-theme') }}/img/causes.jpg" alt="img">
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

    <div class="content">
        <p>Você buscou por <b>{{ $query }}</b> :</p>
        <div class="row">
            {{-- @dd($minpay) --}}

            @foreach ($campanhas as $campanha)
                @php
                    $payments =
                    \App\Yahp\Models\Payment::where('campanha_id',$campanha->id)->where('tipo',1)->where('status',2);
                    $vTotal = 0;
                    foreach ($payments->get() as $key => $pag)
                    {
                    $vTotal = $vTotal+$pag->valor;
                    }
                    $perc = (($vTotal*100)/$campanha->valor);
                @endphp
                    @component('website.components.cardCampanha', [
                        'campanha' => $campanha,
                        'minpay' => $minpay,
                        'payments' => $payments,
                        'perc' => $perc,
                        'vTotal' => $vTotal
                    ])@endcomponent

            @endforeach

        </div>

    </div>

@endsection

@section('scripts')

@endsection
