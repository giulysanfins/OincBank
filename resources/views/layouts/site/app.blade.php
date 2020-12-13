<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<link rel="shortcut icon" href="{{asset('helpo-theme')}}/img/favicon.ico"/>
		<title>OincBank {{$title ?? ''}}</title>
		<!-- styles-->
		{{-- <link rel="stylesheet" href="{{asset('helpo-theme')}}/css/styles.min.css"/> --}}
        <link rel="stylesheet" href="{{asset('helpo-theme')}}/css/styles.css"/>
        <link rel="stylesheet" href="{{asset('vendors')}}/fontawesome/css/all.min.css"/>
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
	</head>
	<body>
		<div class="page-wrapper">
            <!-- aside dropdown start-->

            @include('layouts.site.components.header')

			@yield('content')

            @include('layouts.site.components.footer')
			<!-- footer end-->
		</div>
		<!-- libs-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="{{asset('helpo-theme')}}/js/libs.min.js"></script>
		<!-- scripts-->
        <script src="{{asset('helpo-theme')}}/js/common.min.js"></script>
		<script src="{{asset('vendors')}}/fontawesome/js/all.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>

		@include('sweetalert::alert')

		@yield('scripts')

	</body>
</html>
