<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="icon" type="image/png" href="{{asset('logos/'.$shop->id.'/'.$shop->path)}}" />
    <title>{{$shop->name_store}}</title>
    <!--Css-->
    {!! Theme::css('themes_tendaz/theme3/css/bootstrap.min.css') !!}
    {!! Theme::css('themes_tendaz/theme3/css/settings.css') !!}
    {!! Theme::css('themes_tendaz/theme3/css/owl.carousel.css') !!}
    {!! Theme::css('themes_tendaz/theme3/css/owl.theme.css') !!}
    {!! Theme::css('themes_tendaz/theme3/css/font-awesome.min.css') !!}
    {!! Theme::css('themes_tendaz/theme3/css/style.css') !!}
    {!! Theme::css('themes_tendaz/theme3/css/custom.css') !!}
    {!! Theme::css('themes_tendaz/theme3/css/magnific-popup.css') !!}
    {!! Theme::css('themes_tendaz/theme3/css/colors/default.css') !!}

    <link rel="stylesheet" href="{{asset('components/css/toastr.min.css')}}">
    <script>
        var BASEURL = "{{ App::environment('local') ? 'http://'.env('APP_API_URL').env('APP_API_PORT') : 'https://'.env('APP_API_URL').env('APP_API_PORT') }}";
        var store = "{{ $shop->id }}";
        var client_id = "{{ $shop->id }}";
        var client_secret = "{{ $shop->uuid }}";
        var category = "{{ isset($category) ? $category : ''}}";
        var slug = "{{ isset($slug) ? $slug : ''}}";
    </script>
    <style>
        [ng\:cloak], [ng-cloak], .ng-cloak {
            display: none !important;
        }
    </style>
    @yield('css')
            <!--Fin-->
</head>
<body ng-app="app">
<div class="site">
    @include(Theme::current()->viewsPath.'.partials.nav')
    <div class="main">
        <div class="noo-height-product pt-5">
            @yield('content')
        </div>
        @include(Theme::current()->viewsPath.'.partials.footer')
    </div>
</div>

<a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>

<!--Script-->
<script src="{{ asset('bower_components/angular/angular.js') }}"></script>
<script src="{{ asset('themes_tendaz/theme3/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{asset('components/js/toastr.min.js') }}"></script>

{!! Theme::js('themes_tendaz/theme3/js/bootstrap.min.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/jquery-migrate.min.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/modernizr-2.7.1.min.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/off-cavnass.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/jquery.cookie.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/script.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/custom.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/imagesloaded.pkgd.min.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/isotope.pkgd.min.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/js/portfolio.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/jquery.touchSwipe.min.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/jquery.carouFredSel-6.2.1.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/jquery.isotope.min.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/owl.carousel.min.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/jflickrfeed.min.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/jquery.magnific-popup.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/modernizr.custom.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/draggabilly.pkgd.min.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/elastiStack.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/jquery.plugin.min.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/jquery.countdown.min.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/jquery.themepunch.tools.min.js') !!}
{!! Theme::js('themes_tendaz/theme3/js/jquery.themepunch.revolution.min.js') !!}
<script type="text/javascript" src="{{asset('themes_tendaz/default/js/validator.js')}}"></script>

<!-- Angular scripts -->
<script src="{{ asset('components/js/angular.min.js') }}"></script>
<script src="{{asset('components/js/underscore-min.js') }}"></script>
<script src="{{asset('components/js/slick.js') }}"></script>
<script src="{{ asset('bower_components/angular-route/angular-route.min.js') }}"></script>
<script src="{{ asset('bower_components/angular-cookies/angular-cookies.min.js') }}"></script>
<script src="{{ asset('Angular/app.js') }}"></script>
<script src="{{ asset('Angular/tienda/controller/controller.js') }}"></script>
<script src="{{ asset('Angular/tienda/controller/categoryTemplateController.js') }}"></script>
<script src="{{ asset('Angular/tienda/controller/cartGlobalController.js') }}"></script>
<script src="{{ asset('Angular/tienda/controller/productIndexController.js') }}"></script>
<script src="{{asset('Angular/tienda/controller/productController.js') }}"></script>
<script src="{{asset('Angular/tienda/controller/customerController.js') }}"></script>
<script src="{{asset('Angular/tienda/controller/detailProductController.js') }}"></script>
<script src="{{ asset('Angular/tienda/service/customerService.js') }}"></script>
<script src="{{ asset('Angular/tienda/controller/customerController.js') }}"></script>
<script src="{{ asset('Angular/tienda/service/service.js') }}"></script>
<script src="{{ asset('Angular/tienda/service/categoryService.js') }}"></script>
<script src="{{ asset('Angular/tienda/service/cartService.js') }}"></script>
<script src="{{ asset('Angular/tienda/service/productService.js') }}"></script>

<script src="{{ asset('Angular/tienda/directives/directive.js') }}"></script>
<script src="{{ asset('components/js/ui-bootstrap-tpls-1.1.1.min.js') }}"></script>
<script src="{{ asset('components/js/dirPagination.js') }}"></script>
<script src="{{ asset('components/js/rzslider.min.js') }}"></script>
<script src="{{ asset('components/js/angularSanitize.min.js') }}"></script>
@yield('script')
@include('themes.default.partials.conditions')
@include('globalPartials.iframeAdmin')
@include('admin.partials.message')
        <!--Fin-->
</body>
</html>