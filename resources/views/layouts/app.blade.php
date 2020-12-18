<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>{{ $title }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('img')}}/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('img')}}/icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img')}}/icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img')}}/icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img')}}/icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img')}}/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img')}}/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img')}}/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img')}}/icons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('img')}}/icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img')}}/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img')}}/icons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img')}}/icons/favicon-16x16.png">
        <link rel="manifest" href="{{asset('img')}}/icons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{asset('img')}}/icons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- CSS Files -->
        <link href="{{ asset('light-bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('light-bootstrap/css/light-bootstrap-dashboard.css') }} " rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{ asset('light-bootstrap/css/demo.css') }}" rel="stylesheet" />
        <link href="{{ asset('vendors') }}/fontawesome/css/all.min.css" rel="stylesheet" />
        <link href="{{ asset('vendors') }}/datatables/datatables.min.css" rel="stylesheet" />
        <link href="{{ asset('light-bootstrap') }}/css/app.css" rel="stylesheet" />


    </head>

    <body >
        <div class="@if (!auth()->check() || request()->route()->getName() == "login" || request()->route()->getName() == "register") bg-login @endif  wrapper @if (!auth()->check() || request()->route()->getName() == "") wrapper-full-page @endif">

            @if (auth()->check() && request()->route()->getName() != "")
                @include('layouts.navbars.sidebar')
            @endif

            <div class="@if (auth()->check() && request()->route()->getName() != "") main-panel @endif">
                @include('layouts.navbars.navbar')
                @yield('content')
                @include('layouts.footer.nav')
            </div>

        </div>
    </body>
        <!--   Core JS Files   -->
        <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>

    <script src="{{ asset('light-bootstrap/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('light-bootstrap/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-switch.js') }}"></script>
    <!--  Chartist Plugin  -->
    <script src="{{ asset('light-bootstrap/js/plugins/chartist.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    {{-- <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-notify.js') }}"></script> --}}
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="{{ asset('light-bootstrap') }}/js/light-bootstrap-dashboard.js?v=2.0.0" type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('vendors') }}/fontawesome/js/all.min.js"></script>
    <script src="{{ asset('vendors') }}/datatables/datatables.min.js"></script>
    <script src="{{ asset('light-bootstrap/js/demo.js') }}"></script>



    {{-- Jquery mask --}}
    <script text="type=text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    {{-- Uso para SweetAlert no JS --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    @include('sweetalert::alert')

    @yield('scripts')
</html>
