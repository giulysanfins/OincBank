{{-- Header Mobile Start --}}
<div class="aside-dropdown">
    <div class="aside-dropdown__inner"><span class="aside-dropdown__close">
        <svg class="icon">
            <use xlink:href="#close"></use>
        </svg></span>
    <div class="aside-dropdown__item d-lg-none d-block">
        <ul class="aside-menu">
            {{-- <li class="aside-menu__item aside-menu__item--has-child aside-menu__item--active"><a class="aside-menu__link" href="javascript:void(0);"><span>Home</span></a>
                <!-- sub menu start-->
                <ul class="aside-menu__sub-list">
                    <li class="item--active"><a href="index.html"><span>01 Home Color Style</span></a></li>
                    <li><a href="front_2.html"> <span>02 Home Color Style</span></a></li>
                    <li><a href="front_3.html"><span>03 Home Color Style</span></a></li>
                    <li><a href="mono/index.html"><span>04 Home Monochrome</span></a></li>
                    <li><a href="mono/front_2.html"><span>05 Home Monochrome</span></a></li>
                    <li><a href="mono/front_3.html"><span>06 Home Monochrome</span></a></li>
                </ul>
                <!-- sub menu end-->
            </li> --}}

            <li class="aside-menu__item"><a class="aside-menu__link" href="{{route('website.campanhas')}}"><span>Campanhas</span></a></li>
            {{-- <li class="aside-menu__item"><a class="aside-menu__link" href="{{route('website.campanhas')}}"><span>Campanhas</span></a></li> --}}
            <li class="aside-menu__item"><a class="aside-menu__link" href="{{route('login')}}"><span>Login</span></a></li>

        </ul>
    </div>
    <div class="aside-dropdown__item">
        <!-- aside menu start-->
        <ul class="aside-menu">
            {{-- <li class="aside-menu__item"><a class="aside-menu__link" href="#">Documents</a></li>
            <li class="aside-menu__item"><a class="aside-menu__link" href="#">Information</a></li>
            <li class="aside-menu__item"><a class="aside-menu__link" href="#">Additional Pages</a></li>
            <li class="aside-menu__item"><a class="aside-menu__link" href="#">Elements</a></li>
            <li class="aside-menu__item"><a class="aside-menu__link" href="#">Contacts</a></li> --}}
        </ul>
        <!-- aside menu end-->
        <div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:support@helpo.org">support@helpo.org</a></div>
        <div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="aside-inner__link" href="tel:+18009756511">+ 1800 - 975 65 11</a></div>
        <ul class="aside-socials">
            <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
            <li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
            <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <div class="aside-dropdown__item"><a class="button button--squared" href="{{route('campanha.create')}}"><span>Criar Cofrinho</span></a></div>
    </div>
</div>
{{-- Header Mobile END --}}

{{-- <!-- header website start--> --}}
<header class="header header--front">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-between">
            <div class="col-auto d-flex align-items-center">
                <div class="dropdown-trigger d-none d-sm-block">
                    <div class="dropdown-trigger__item"></div>
                </div>
                <div class="header-logo">
                    <a class="header-logo__link" href="{{route('website.index')}}"><img class="header-logo__img logo--light" src="{{asset('helpo-theme')}}/img/logo_white.png" alt="logo"/>
                        <img class="header-logo__img logo--dark" src="{{asset('helpo-theme')}}/img/logo_dark.png" alt="logo"/></a>
                    </div>
            </div>
            <div class="col-auto">
                <!-- main menu start-->
                <nav>
                    <ul class="main-menu">

                        <li class="main-menu__item"><a class="main-menu__link" href="{{route('website.campanhas')}}"><span>Campanhas</span></a></li>
                        <li class="main-menu__item"><a class="main-menu__link" href="{{route('website.faq')}}"><span>FAQ</span></a></li>
                        <li class="main-menu__item"><a class="main-menu__link" href="{{route('login')}}"><span>Login</span></a></li>

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
