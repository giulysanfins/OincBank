@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
        <img src="https://imgur.com/0rY5FEK.jpeg" class="logo" alt="OincBank">
        @endcomponent
    @endslot

{{-- Body --}}
<p>Olá {{auth()->user()->name}}. <br> Recebemos um pedido de deleção de uma de suas campanhas do OincBank. <br>

</p>

<p>
    Campanha:
</p>
    <br>
<p>
    {{$campanha->titulo}} - {{auth()->user()->name}}
</p>
    <br>
<p>
    Data de finalização da Campanha: {{$campanha->data_encerramento->format('d/m/Y')}}
</p>
    <br>
<p>
    Valor da Campanha: R$:{{$campanha->valor}}
</p>
<br>
<p>
    Motivo da Deleção: {{$campanha->motivo_deletado}}
</p>


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


        <p><div style="font-family:sans-serif;font-size:13px;line-height:150%;text-align:center;color:#777777">
            Tem alguma dúvida? A NuCommunity pode te ajudar. Visite: <a href="https://url2333.nubank.com.br/ls/click?upn=64BcKiu1PtyaE0lVrBpb7kMki5kcl0OwZkNl06P475RQtJf2ezno0THBVvgef2iv17s74dc6yu3PYAke00vA336Xb7E1RDz3wBRjwBSgkl002RujqezHbWrfvnnokF4dsF4n_suATApcb6RX4HEfKjLvHdm-2BK7RptydO2KtLzcULBdxFSIHXMuacsQWJ92WxUxzPjDLr9ccbbBm2I2bw4X4FS77VgezGE2MW2DtEfxiWXne1DhYDU4SGeG45xEkGhbgBMwvbCBPzhLvjm27zMQIu9SjrmKRM5AN31WfeHOGAosspxV4R-2F4y-2FPBvF1mBBVRMrjW1fZ9RMEUf4a9VsTL7MH5F7ddpTVvQcQjB81m72qPhM33zVnvg4HwX6H84tGqxtutgoW0RmD-2FHo0xby-2FwOSeW0hCRZJxK8Lh7AG1-2BlsPg6odG5NIROoZesk7rMkUW2KSHmvDE38kjMwhC04U5z1ZXgDHmnPJJso-2Bpw0uAVvslyzqNMZCkyG5DL4HDGrLKpbjkpfJoW-2Bw7wzGP-2BsHAoFAmXwGpAylxaYKG9YiPShe7xEIbM3anfnGYZ-2FDQy97YCKQ1eXG1fsZ0AH8LhxfKwobVXoQtAZxM0nsPSKh-2B5Nfe7YnzEqvzkYLypR6klMFk6LsZhO8kYXKIl8WRDOawpyBhMhAR-2BXvhHZsmYfuzfIEIBaUHbdujk-2F1Hb3eg9yN3kZ9pYZs24ifuUpNOr2kI5y31A-3D-3D" style="color:#8c43c5;font-weight:bold" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://url2333.nubank.com.br/ls/click?upn%3D64BcKiu1PtyaE0lVrBpb7kMki5kcl0OwZkNl06P475RQtJf2ezno0THBVvgef2iv17s74dc6yu3PYAke00vA336Xb7E1RDz3wBRjwBSgkl002RujqezHbWrfvnnokF4dsF4n_suATApcb6RX4HEfKjLvHdm-2BK7RptydO2KtLzcULBdxFSIHXMuacsQWJ92WxUxzPjDLr9ccbbBm2I2bw4X4FS77VgezGE2MW2DtEfxiWXne1DhYDU4SGeG45xEkGhbgBMwvbCBPzhLvjm27zMQIu9SjrmKRM5AN31WfeHOGAosspxV4R-2F4y-2FPBvF1mBBVRMrjW1fZ9RMEUf4a9VsTL7MH5F7ddpTVvQcQjB81m72qPhM33zVnvg4HwX6H84tGqxtutgoW0RmD-2FHo0xby-2FwOSeW0hCRZJxK8Lh7AG1-2BlsPg6odG5NIROoZesk7rMkUW2KSHmvDE38kjMwhC04U5z1ZXgDHmnPJJso-2Bpw0uAVvslyzqNMZCkyG5DL4HDGrLKpbjkpfJoW-2Bw7wzGP-2BsHAoFAmXwGpAylxaYKG9YiPShe7xEIbM3anfnGYZ-2FDQy97YCKQ1eXG1fsZ0AH8LhxfKwobVXoQtAZxM0nsPSKh-2B5Nfe7YnzEqvzkYLypR6klMFk6LsZhO8kYXKIl8WRDOawpyBhMhAR-2BXvhHZsmYfuzfIEIBaUHbdujk-2F1Hb3eg9yN3kZ9pYZs24ifuUpNOr2kI5y31A-3D-3D&amp;source=gmail&amp;ust=1606862827716000&amp;usg=AFQjCNFmbCGudYgmRo4jdtLyM6J-7nC1Yg">comunidade.nubank.com.br</a>.
           </div>
           <div style="font-family:sans-serif;font-size:13px;line-height:150%;text-align:center;color:#777777">
            Se você não ficou satisfeito com a solução do nosso time de atendimento, ligue para 0800 887 0463 em dias úteis, das 9h às 18h, horário de São Paulo.
           </div>
           <br>
           <div style="font-family:sans-serif;font-size:13px;font-weight:bold;line-height:150%;text-align:center;color:#777777">
            Atendimento 24 horas
           </div></td>
         </tr>
         <tr>
          <td style="font-size:0px;padding:10px 40px 20px 40px;word-break:break-word" align="center">
           <div style="font-family:sans-serif;font-size:13px;line-height:150%;text-align:center;color:#777777">
            Em caso de qualquer dúvida, fique à vontade para responder esse email com a sua dúvida ou nos contatar no <a href="mailto:meajuda@nubank.com.br" style="color:#8c43c5;font-weight:bold" target="_blank">meajuda@nubank.com.br</a>.
            <p></p>Para urgências ligue para 0800 591 2117. Atendimento 24 horas, todos os dias.
           </div>
        </p>
        <br>
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. Yahp Desenvolvimentos!
        @endcomponent
    @endslot
@endcomponent




@section('scripts')

@endsection


