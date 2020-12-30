@extends('layouts.site.app', ['activePage' => '', 'title' => '- Termos de Uso', 'navName' => '', 'activeButton' => ''])




@section('content')
<section class="section causes"><img class="causes__bg" src="{{asset('helpo-theme')}}/img/causes_img.png" alt="img"/>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-12">
                <div class="heading heading--primary mb-5 "><span class="heading__pre-title">Sobre a OincBank</span>
                    <h2 class="heading__title"> <span>Sobre a OincBank</span></h2>
                    <p class="lead"> A OincBank nasceu em plena pandemia de 2020 com a ideia de criar um site diferente para financiamento coletivo (crowdfunding). 
                    Apesar do nome, nós não somos um banco, mas vamos te ajudar a juntar o dindin que você precisa de forma segura, fácil e sem burocracia para você atingir sua meta e realizar o seu sonho. 
                    Ajudar ao próximo está no nosso DNA, então vem com o Oinc, pois esse porquinho só quer crescer com você para compartilhar o bem.</p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
