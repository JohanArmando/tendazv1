@extends('themes.default.template')
@section('css')
@stop
@section('content')

    <div class="row">
        <!-- Slider -->
        <div class="col-md-9">
            @include('themes.default.partials.slider')
        </div>
        <!-- End Slider -->
        <div class="col-md-3 visible-lg" ng-controller="productIndexController" ng-cloak="">
            @include('themes.default.partials.slide-small')
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="row" ng-controller="productIndexController" ng-cloak="">

            <!-- products news -->
            <div class="col-md-3" ng-if="features.length > 0">
                <div class="title"><span><a href="{{url('/')}}">Productos Destacados</a></span></div>
                <div class="col-md-9 box-product-outer" ng-repeat="product in features | limitTo:2">
                    <div ng-include="'tpl.html'"></div>
                </div>
            </div>


            <!-- products news -->
            <div class="col-md-9" ng-if="news.length > 0">
                <div class="title"><span><a href="{{url('/')}}">Nuevos Productos</a></span></div>
                <div class="col-sm-4 col-md-3 box-product-outer" ng-repeat="product in news | limitTo:4">
                    <div ng-include="'tpl.html'"></div>
                </div>
            </div>


            <!-- products promotion -->
            <div class="col-md-9" ng-if="promotions.length > 0">
                <div class="title"><span>Promociones</span></div>
                <div class="col-sm-4 col-md-3 box-product-outer" ng-repeat="product in promotions | limitTo:4">
                    <div ng-include="'tpl.html'"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@stop
