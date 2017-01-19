<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tienda creada por tendaz.com">
    <meta name="author" content="tendaz.com by Maxcorp">
    <link rel="icon" type="image/png" href="{{asset('logos/'.$shop->id.'/'.$shop->logo)}}" />
    <title>{{$shop->name_store}}</title>
    <!--Css-->
    {!! Theme::css('themes_tendaz/theme1/css/bootstrap.css') !!}
    {!! Theme::css('themes_tendaz/theme1/css/font-awesome.min.css') !!}
    {!! Theme::css('themes_tendaz/theme1/css/jquery.bxslider.css') !!}
    {!! Theme::css('themes_tendaz/theme1/css/style.css') !!}
    @yield('css')
    <link rel="stylesheet" href="{{asset('components/css/toastr.min.css')}}">
    <style>
        [ng\:cloak], [ng-cloak], .ng-cloak {
            display: none !important;
        }
    </style>
    <script>
        var BASEURL = "{{ App::environment('local') ? 'http://'.env('APP_API_URL').env('APP_API_PORT') : 'https://'.env('APP_API_URL').env('APP_API_PORT') }}";
        var store = "{{ $shop->id }}";
        var client_id = "{{ $shop->id }}";
        var client_secret = "{{ $shop->uuid }}";
        var category = "{{ isset($category) ? $category : ''}}";
        var slug = "{{ isset($slug) ? $slug : ''}}";
    </script>
    <!--Fin-->
</head>
<body ng-app="app">
    @include(Theme::current()->viewsPath.'.partials.header')
    @include(Theme::current()->viewsPath.'.partials.nav')
    <div class="container main-container">
        <div class="row">
            @yield('slide')
        </div>
        <div class="row">
            @yield('content')
        </div>
    </div>
    @include(Theme::current()->viewsPath.'.partials.footer')
    <a href="#top" class="back-top text-center" onclick="$('body,html').animate({scrollTop:0},500); return false">
        <i class="fa fa-angle-double-up"></i>
    </a>
<!--Script-->
<script src="{{ asset('bower_components/angular/angular.js') }}"></script>
<script type="text/javascript" src="{{asset('components/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('components/js/toastr.min.js') }}"></script>

    <script type="text/javascript">
        $(document).on('ready' , function(){
            $('div').on('click','.image-click', function(e){
                e.preventDefault();
                var image = $(this).find('img').attr('src');
                $('#matrix').attr('src', image);
            });
        })
    </script>
{!! Theme::js('themes_tendaz/theme1/js/bootstrap.js') !!}
{!! Theme::js('themes_tendaz/theme1/js/jquery.bxslider.min.js') !!}
{!! Theme::js('themes_tendaz/theme1/js/jquery.blImageCenter.js') !!}
{!! Theme::js('themes_tendaz/theme1/js/bootstrap.touchspin.js') !!}
{!! Theme::js('themes_tendaz/theme1/js/jquery.zoom.min.js') !!}
{!! Theme::js('themes_tendaz/theme1/js/mimity.js') !!}
{!! Theme::js('themes_tendaz/theme1/js/validator.js') !!}

    <!-- Angular scripts -->
    @include('themes.angularScripts')

    <script  type="text/ng-template" id="tpl.html">
        <div class="thumbnail" ng-class="{ ' sold-out' : product.stock == 0 , ' product--zoom' : !product.promotion && !product.feature}">
            <a href="<% BASEURL + '/detail/' + product.slug %>" class="link-p">
                <img ng-src="<% product.images.data[0].url %>" alt="" ng-show="product.images.data"
                     style="min-height: 200px; max-height: 200px !important" class="img-responsive">
                <img ng-src="<% BASEURL + '/administrator/image/noImage.png' %>" alt=""  style="max-height: 200px; min-height: 200px"
                     ng-hide="product.images.data">
            </a>
            <div class="caption prod-caption">
                <h4><a href="<% BASEURL + '/detail/' + product.slug %>"><% product.name %></a></h4>
                <p>
                <div class="btn-group"  ng-if="product.special_price">
                    <a href="#" class="btn btn-default btn-xs">
                        <strong style="color: red; text-decoration: line-through;">$<% product.price | number:0 %></strong>
                        <a  class="btn btn-default btn-xs"><strong>$<% product.special_price | number:0 %></strong></a>
                    </a>
                    <a class="btn btn-primary btn-xs" ng-hide="product.stock == 0" ng-click="add(cartId , product)">
                        <i class="fa fa-shopping-cart"> Agregar</i>
                    </a>
                </div>
                <div class="btn-group"  ng-if="!product.special_price">
                    <a  class="btn btn-default btn-xs"><strong>$<% product.price | number:0 %></strong></a>
                    <a class="btn btn-primary btn-xs" ng-hide="product.stock == 0" ng-click="add(cartId , product)">
                        <i class="fa fa-shopping-cart"></i> Agregar
                    </a>
                </div>
                </p>
            </div>
        </div>
    </script>
    @yield('scripts')
    @include('themes.default.partials.conditions')
    @include('globalPartials.iframeAdmin')
    @include('admin.partials.message')
<!--Fin-->
</body>
</html>