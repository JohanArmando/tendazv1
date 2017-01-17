<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tema defualt, tienda creada con tendaz.com">
    <meta name="author" content="tendaz.com">
    <link rel="icon" type="image/png" href="{{asset('logos/'.$shop->id.'/'.$shop->logo)}}" />
    <title>Tienda online de {{ $shop->name }}</title>
    <!--Styles-->
    <link href="{{asset('themes_tendaz/default/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes_tendaz/default/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes_tendaz/default/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes_tendaz/default/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes_tendaz/default/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes_tendaz/default/css/robotodraft.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes_tendaz/default/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('themes_tendaz/default/css/style-blue.css')}}">
    <link href="{{asset('themes_tendaz/default/css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('components/css/toastr.min.css')}}">
    @yield('css')

    <script>
        var BASEURL = "{{ App::environment('local') ? 'http://'.env('APP_API_URL').env('APP_API_PORT') : 'https://'.env('APP_API_URL').env('APP_API_PORT') }}";
        var store = "{{ $shop->id }}";
        var client_id = "{{ $shop->id }}";
        var client_secret = "{{ $shop->uuid }}";
        var category = "{{ isset($category)	 ? $category : ''}}";
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
    @include('themes.default.partials.top')
    @include('themes.default.partials.header')
    @include('themes.default.partials.nav')
    <div class="container">
        @yield('content')
    </div>
    @include('themes.default.partials.footer')

    <!-- Scripts -->
    <script src="{{ asset('bower_components/angular/angular.js') }}"></script>
    <script type="text/javascript" src="{{asset('components/js/jquery-2.1.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('components/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('themes_tendaz/default/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('components/js/toastr.min.js') }}"></script>
    @if(!Request::is('cart/buy'))
        <script type="text/javascript" src="{{asset('themes_tendaz/default/js/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('themes_tendaz/default/js/nouislider.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('themes_tendaz/default/js/jquery.ez-plus.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('themes_tendaz/default/js/jquery.bootstrap-touchspin.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('themes_tendaz/default/js/jquery.raty-fa.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('themes_tendaz/default/js/mimity.js')}}"></script>
        <script type="text/javascript" src="{{asset('themes_tendaz/default/js/validator.js')}}"></script>
    @endif
    <!-- Angular scripts -->
    <script src="{{asset('components/js/underscore-min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-route/angular-route.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-cookies/angular-cookies.min.js') }}"></script>
    <script src="{{ asset('Angular/app.js') }}"></script>
    <script src="{{asset('components/js/slick.js') }}"></script>

    <script src="{{ asset('Angular/tienda/controller/controller.js') }}"></script>
    <script src="{{ asset('Angular/tienda/controller/categoryTemplateController.js') }}"></script>
    <script src="{{ asset('Angular/tienda/controller/cartGlobalController.js') }}"></script>
    <script src="{{ asset('Angular/tienda/controller/productIndexController.js') }}"></script>
    <script src="{{asset('Angular/tienda/controller/productController.js') }}"></script>
    <script src="{{asset('Angular/tienda/service/customerService.js') }}"></script>
    <script src="{{asset('Angular/tienda/controller/customerController.js') }}"></script>
    <script src="{{asset('Angular/tienda/controller/detailProductController.js') }}"></script>
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
            <div class="box-product" ng-class="{ ' sold-out' : product.stock == 0 , ' product--zoom' : !product.promotion && !product.feature} " style="min-height: 270px !important;">
                <div class="img-wrapper">
                    <div class="tags">
                        <span class="label-tags" ng-show="product.stock == 0">
                            <span class="label label-danger">Sin Stock</span>
                        </span>
                        <span class="label-tags" ng-if="product.special_price">
                            <span class="label label-info">Sale <% product.promotion_price_percent | number:0 %>%</span>
                        </span>
                    </div>
                    <a href="{{ url('/') }}<% '/detail/' + product.slug %>">
                        <img ng-src="<% product.images.data[0].url %>" alt="" ng-show="product.images.data"  style="max-height: 200px; min-height: 200px">
                        <img ng-src="<% BASEURL + '/administrator/image/noImage.png' %>" alt=""  style="max-height: 200px; min-height: 200px"
                             ng-hide="product.images.data">
                    </a>
                    <div class="option" ng-hide="product.stock == 0" ng-click="add(cartId , product)">
                        <a href="#" data-toggle="tooltip"
                           data-placement="bottom" title="Agregar al carro">
                            <i class="ace-icon fa fa-shopping-cart"></i></a>
                    </div>
                    <div class="tags {{ !Request::is('/') ? : 'hidden'}}">
                        <span class="label-tags" ng-if="product.news"><span class="label label-danger">Nuevo</span></span>
                        <span class="label-tags" ng-if="product.promotions"><span class="label label-info">
                                Sale <% product.special_price | number:0 %>%</span></span>
                    </div>
                </div>
                <h6><a href="{{ url('/') }}<% '/detail/' + product.slug %>"><div class="text-center"><% product.name %></div></a></h6>
                <div class="price text-center" ng-if="product.special_price">
                    <strong>$<% product.special_price %></strong>
                    <span class="price-old">$<% product.price  %></span>
                </div>
                <div class="price text-center" ng-if="!product.special_price">
                    <strong>$<% product.price %></strong>
                </div>

            </div>
        </script>
    @yield('script')
    <!--Fin-->
        @include('themes.default.partials.conditions')
        @include('globalPartials.iframeAdmin')
        @include('admin.partials.message')
</body>
</html>

