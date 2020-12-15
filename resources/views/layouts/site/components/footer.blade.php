<!-- footer start-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="footer-logo">
                    {{-- <a class="footer-logo__link" href="index.html"><img class="footer-logo__img" src="{{asset('helpo-theme')}}/img/logo_white.png" alt="logo"/></a> --}}
                    <h4 class="footer__title">Siga nosso canais:</h4>
                </div>
                <!-- footer socials start-->
                <ul class="footer-socials">
                    {{-- <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fab fa-2x fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i class="fab fa-2x fa-twitter" aria-hidden="true"></i></a></li> --}}
                    <li class="footer-socials__item"><a class="footer-socials__link" href="https://www.instagram.com/oincbank/"><i class="fab fa-2x fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
                <!-- footer socials end-->
            </div>

            <div class="col-sm-6 col-lg-4">
                <h4 class="footer__title">Links</h4>
                <!-- footer nav start-->
                <ul class="" style="padding-left: 8px">
                    <li class="footer-menu__item footer-menu__item"><a class="footer-menu__link" href="{{route('website.index')}}">Home</a></li>
                    <li class="footer-menu__item"><a class="footer-menu__link" href="{{route('website.sobre')}}">Sobre a OincBank</a></li>
                    <li class="footer-menu__item"><a class="footer-menu__link" href="{{route('website.faq')}}">Dúvidas Frequentes</a></li>
                </ul>
                <!-- footer nav end-->
            </div>
            <div class="col-sm-6 col-lg-4" style="nav-right: auto ">
                <h4 class="footer__title">Ajude</h4>
                <p>Nos ajude mudar as vidas no mundo!</p><a class="button footer__button button--filled" href="{{route('website.campanhas')}}">Ver Cofrinhos</a>
            </div>
        </div>
        <div class="row align-items-baseline">
            <div class="col-md-6">
                <p class="footer-copyright">Todos os direitos reservados.© 2020 OincBank.</p>
            </div>
            <div class="col-md-6">
                <div class="footer-privacy"><a class="footer-privacy__link" href="/politica-de-privacidade">Política de Privacidade</a><span class="footer-privacy__divider">|</span><a class="footer-privacy__link" href="/termos-e-condicoes">Termos e Condições</a></div>
            </div>
        </div>
    </div>
</footer>
