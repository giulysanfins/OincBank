<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<link rel="shortcut icon" href="{{asset('helpo-theme')}}/img/favicon.ico"/>
		<title>OincBank {{$title ?? ''}}</title>
		<!-- styles-->
        <link rel="stylesheet" href="{{asset('helpo-theme')}}/css/styles.min.css"/>
        <link rel="stylesheet" href="{{asset('vendors')}}/fontawesome/css/all.min.css"/>


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
