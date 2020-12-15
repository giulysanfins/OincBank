@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="https://imgur.com/RPxMcrE.png" class="logo" style="height:100px !important;width:140px !important;"
                alt="OincBank">
        @endcomponent
    @endslot

    {{-- Body --}}
    <p>Olá {{ auth()->user()->name }}. <br> Recebemos um pedido de saque de uma de suas campanhas do OincBank. <br>

    </p>

    <p>
        Campanha:
    </p>
    <br>
    <p>
        {{ $payment->campanha->titulo }} - {{ auth()->user()->name }}
    </p>
    <br>
    <p>
        Conta: {{ $payment->conta_corrente }}. Agência: {{ $payment->agencia }}
    </p>
    <br>
    <p>
        Valor solicitado do saque: R$:{{ $payment->valor }}
    </p>
    <br>



    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')


        <p>
        <div style="font-family:sans-serif;font-size:13px;line-height:150%;text-align:center;color:#777777">
            Tem alguma dúvida? A OincCommunity pode te ajudar. Visite: <a href="#" style="color:#8c43c5;font-weight:bold"
                target="_blank">comunidade.oincbank.com.br</a>.
        </div>
        <br>
        @component('mail::footer')
            © {{ date('Y') }} OincBank. Yahp Desenvolvimentos!
        @endcomponent

        </p>

    @endslot



@endcomponent




@section('scripts')

@endsection
