<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="tienda creada por tendaz.com">
    <meta name="author" content="tendaz.com By Maxcorp">
    <link rel="icon" type="image/png" href="{{asset('logos/'.$shop->id.'/'.$shop->path)}}" />
    <title>{{$shop->name_store}}</title>
    <!--Css-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
    {!! Theme::css('themes_tendaz/theme2/css/font-awesome.css') !!}
    {!! Theme::css('themes_tendaz/theme2/css/bootstrap.min.css') !!}
    {!! Theme::css('themes_tendaz/theme2/css/animate.min.css') !!}
    {!! Theme::css('themes_tendaz/theme2/css/owl.carousel.css') !!}
    {!! Theme::css('themes_tendaz/theme2/css.owl.theme.css') !!}
    {!! Theme::css('themes_tendaz/theme2/css/style.default.css') !!}
    <link rel="stylesheet" href="{{asset('components/css/toastr.min.css')}}">
    @yield('css')
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
    <!--Fin-->
</head>
<body ng-app="app">
@include(Theme::current()->viewsPath.'.partials.nav')
<div id="all">
    <div id="content">
        @yield('content')
    </div>
    @include(Theme::current()->viewsPath.'.partials.footer')
    @include(Theme::current()->viewsPath.'.partials.copyright')
</div>
<!-- Angular scripts -->
<script src="{{ asset('bower_components/angular/angular.js') }}"></script>
<script type="text/javascript" src="{{asset('components/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('components/js/toastr.min.js') }}"></script>

<!--Script-->
{!! Theme::js('themes_tendaz/theme2/js/bootstrap.min.js')!!}
{!! Theme::js('themes_tendaz/theme2/js/jquery.cookie.js') !!}
{!! Theme::js('themes_tendaz/theme2/js/waypoints.min.js') !!}
{!! Theme::js('themes_tendaz/theme2/js/modernizr.js') !!}
{!! Theme::js('themes_tendaz/theme2/js/bootstrap-hover-dropdown.js') !!}
{!! Theme::js('themes_tendaz/theme2/js/owl.carousel.min.js') !!}
{!! Theme::js('themes_tendaz/theme2/js/front.js') !!}
{!! Theme::js('themes_tendaz/theme2/js/validator.js') !!}
{!! Theme::js('themes_tendaz/theme2/js/respond.min.js')!!}

<script src="{{ asset('components/js/angular.min.js') }}"></script>
<script src="{{ asset('components/js/underscore-min.js') }}"></script>
<script src="{{ asset('components/js/slick.js') }}"></script>
<script src="{{ asset('bower_components/angular-route/angular-route.min.js') }}"></script>
<script src="{{ asset('bower_components/angular-cookies/angular-cookies.min.js') }}"></script>
<script src="{{ asset('Angular/app.js') }}"></script>
<script src="{{ asset('Angular/tienda/controller/controller.js') }}"></script>
<script src="{{ asset('Angular/tienda/controller/categoryTemplateController.js') }}"></script>
<script src="{{ asset('Angular/tienda/controller/cartGlobalController.js') }}"></script>
<script src="{{ asset('Angular/tienda/controller/productIndexController.js') }}"></script>
<script src="{{ asset('Angular/tienda/controller/productController.js') }}"></script>
<script src="{{asset('Angular/tienda/controller/customerController.js') }}"></script>
<script src="{{ asset('Angular/tienda/controller/detailProductController.js') }}"></script>
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

<script  type="text/ng-template" id="tpl.html">
    <div class="product" ng-class="{ ' sold-out' : product.stock == 0 , ' product--zoom' : !product.promotion && !product.feature}">
        <div class="flip-container">
            <div class="flipper">
                <div class="front">
                    <a href="<% BASEURL + '/detail/' + product.slug %>">
                        <img ng-src="<% product.images.data[0].url %>" alt="" ng-show="product.images.data" class="img-responsive"
                             style="min-height:250px ;max-height: 250px" alt="">
                        <img ng-src="<% BASEURL + '/administrator/image/noImage.png' %>" alt=""  style="min-height:250px ;max-height: 250px"
                             ng-hide="product.images.data">
                    </a>
                </div>
                <div class="back">
                    <a href="<% BASEURL + '/detail/' + product.slug %>">
                        <img class="img-responsive" style="min-height:250px ;max-height: 250px" ng-src="<% product.images.data[0].url %>" alt="">
                    </a>
                </div>
            </div>
        </div>
        <a href="<% BASEURL + '/detail/' + product.slug %>" class="invisible">
            <img class="img-responsive" style="min-height:250px ;max-height: 250px" ng-src="
                <% BASEURL + '/administrator/image/noImage.png' %>" alt="">
        </a>
        <div class="text" ng-if="product.special_price">
            <h3><a href="<% BASEURL + '/detail/' + product.slug %>"><% product.name %></a></h3>
            <p class="price"><del>$<% product.price | number:0 %></del> $<% product.special_price | number:0 %></p>
            <p class="buttons">
                <a ng-hide="product.stock == 0" ng-click="add(cartId , product)" class="btn btn-primary">
                    <i class="fa fa-shopping-cart"></i>Agregar al carrito</a>
            </p>
        </div>
        <div class="text" ng-if="!product.special_price">
            <h3><a href="<% BASEURL + '/detail/' + product.slug %>"><% product.name %></a></h3>
            <p class="price">$<% product.price | number:0 %></p>
            <p class="buttons">
                <a ng-hide="product.stock == 0" ng-click="add(cartId , product)" class="btn btn-primary">
                    <i class="fa fa-shopping-cart"></i>Agregar al carrito</a>
                <a ng-if="product.stock == 0" class="btn btn-primary">
                    <i class="fa fa-shopping-cart"></i>Agotado</a>
            </p>
        </div>

        <div class="ribbon gift" ng-if="product.special_price">
            <div class="theribbon">
                Sale
                <% product.promotion_price_percent | number:0 %>%
            </div>
            <div class="ribbon-background"></div>
        </div>
        <!-- /.ribbon -->
    </div>
</script>
@yield('script')
@include('themes.default.partials.conditions')
@include('globalPartials.iframeAdmin')
@include('admin.partials.message')
</body>
</html>