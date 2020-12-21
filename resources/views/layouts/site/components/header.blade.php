{{-- Header Mobile Start --}}
<div class="aside-dropdown">
    <div class="aside-dropdown__inner">
        <div class="aside-dropdown__item d-lg-none d-block text-center ">
            <a class="header-logo__link " href="{{route('website.index')}}">
                <img class="header-logo__img logo--light" src="{{asset('img')}}/logos/porquim-com-nome-crop.png" alt="logo"/>
            </a>
        </div>
        <div class="aside-dropdown__item d-lg-none d-block">

            <ul class="aside-menu">
                <li class="aside-menu__item"><a class="aside-menu__link" href="{{route('website.campanhas')}}"><span>Campanhas</span></a></li>
                <li class="aside-menu__item"><a class="aside-menu__link" href="{{route('website.faq')}}"><span>FAQ</span></a></li>
                @if (Auth::check())
                <li class="aside-menu__item"><a class="aside-menu__link" href="{{route('login')}}"><span>Olá, {{auth()->user()->name}}</span></a></li>
                @else
                <li class="aside-menu__item"><a class="aside-menu__link" href="{{route('login')}}"><span>Login / Cadastro</span></a></li>
                @endif
            </ul>

        </div>
        <div class="aside-dropdown__item">
            <!-- aside menu start-->
            <a class="header-logo__link d-lg-block d-none" href="{{route('website.index')}}">
                <img class="header-logo__img logo--light" src="{{asset('img')}}/logos/porquim-com-nome-crop.png" alt="logo"/>
            </a>

            <ul class="aside-menu">

            </ul>
            <!-- aside menu end-->
            <div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:suporte@oincbank.com.br">suporte@oincbank.com.br</a></div>
            {{-- <div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="aside-inner__link" href="tel:+18009756511">+ 1800 - 975 65 11</a></div> --}}
            <ul class="aside-socials">
                <li class="aside-socials__item"><a class="aside-socials__link" href="https://www.instagram.com/oincbank/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                {{-- <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                <li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li> --}}
            </ul>
        </div>

        <div class="aside-dropdown__item d-lg-none d-block">
            <a class="button button--squared btn-block" href="{{route('campanha.create')}}" style="margin: 3% auto auto auto;"><span>Criar Cofrinho</span></a>
        </div>

    </div>
</div>
{{-- Header Mobile END --}}

{{-- <!-- header website start--> --}}
<header class="header header--inner">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-between">
            <div class="col-auto d-flex align-items-center">
                <div class="dropdown-trigger d-none d-sm-block">
                    <div class="dropdown-trigger__item"></div>
                </div>
                <div class="header-logo">
                    <a class="header-logo__link" href="{{route('website.index')}}">
                        <img class="header-logo__img logo--light" src="{{asset('img')}}/logos/porquim-com-nome-crop.png" alt="logo"/>
                    </a>
                </div>
            </div>
            <div class="col-auto">
                <!-- main menu start-->
                <nav>
                    <ul class="main-menu">
                        <li class="main-menu__item"><a class="main-menu__link" href="{{route('website.campanhas')}}"><span>Cofrinhos</span></a></li>
                        <li class="main-menu__item"><a class="main-menu__link" href="{{route('website.faq')}}"><span>Dúvidas Frequentes</span></a></li>
                        @if (Auth::check())
                        <li class="main-menu__item"><a class="main-menu__link" href="{{route('profile.edit')}}"><span>Olá, {{auth()->user()->name}}</span></a></li>
                        @else
                        <li class="main-menu__item"><a class="main-menu__link" href="{{route('login')}}"><span>Login / Cadastro</span></a></li>
                        @endif
                    </ul>
                </nav>
                <!-- main menu end-->
            </div>
            <div class="col-auto d-flex align-items-center">
                <!-- lang select start-->
                {{-- <ul class="lang-select ">
                    <li class="lang-select__item lang-select__item--active"><span>En</span>
                        <ul class="lang-select__sub-list">
                            <li><a href="#"|>French</a></li>
                            <li><a href="#">Spanish</a></li>
                            <li><a href="#">Deutsch</a></li>
                            <li><a href="#">Russian</a></li>
                        </ul>
                    </li>
                </ul> --}}
                <!-- lang select end-->
                <div class="d-block d-md-none py-4">

                </div>
                <div class="dropdown-trigger d-block d-sm-none">
                    <div class="dropdown-trigger__item"></div>
                </div><a class="button button--squared" href="{{route('campanha.create')}}"><span>Criar Cofrinho</span></a>
            </div>
        </div>
    </div>
</header>
