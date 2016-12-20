<!DOCTYPE html>
<html lang="es">
	<head>
			<meta charset="utf-8">
			<meta name="author" content="Sevientrega">
			<meta name="description" content="servientrega centro de soluciones">
			<meta name="keywords" content="servientrega centro de soluciones, store servientrega, tendaz, maxcorp">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Store Sevientrega</title>
			<link rel="stylesheet" type="text/css" href="{{asset('servientrega/css/jquery-ui.css')}}">
			<link rel="stylesheet" type="text/css" href="{{asset('servientrega/css/bootstrap.css')}}">
			<link rel="stylesheet" type="text/css" href="{{asset('servientrega/fonts/stylesheet.css')}}">
			<link rel="stylesheet" type="text/css" href="{{asset('servientrega/css/normalize.css')}}">
			<link rel="stylesheet" type="text/css" href="{{asset('servientrega/style.css')}}">	
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">		
			@yield('css')

    </head>
	<body> 	
	@yield('content')
			<script type="text/javascript" src="{{asset('servientrega/js/jquery-1.11.3.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('servientrega/js/TweenMax.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('servientrega/js/ScrollMagic.js')}}"></script>
			<script type="text/javascript" src="{{asset('servientrega/js/animation.gsap.js')}}"></script>
			<script type="text/javascript" src="{{asset('servientrega/js/debug.addindicators.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('servientrega/js/jquery-ui.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('servientrega/js/pagepilling.js')}}"></script>
			<script type="text/javascript" src="{{asset('servientrega/js/jquery.imageScroll.js')}}"></script>
			<script type="text/javascript" src="{{asset('servientrega/js/bootstrap.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('servientrega/js/main.js')}}"></script>
			@yield('scripts')
	</body>
</html>