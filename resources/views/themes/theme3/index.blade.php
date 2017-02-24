@extends(Theme::current()->viewsPath.'.template')
    @section('css')
        @stop
    @section('content')
        @include(Theme::current()->viewsPath.'.partials.slider')
        <div class="container" ng-controller="productIndexController" ng-cloak="">
            <div class="row" ng-if="news.length > 0">
               @include(Theme::current()->viewsPath.'.partials.newproduct')
            </div>
            <div class="row" ng-if="promotions.length > 0">
                @include(Theme::current()->viewsPath.'.partials.promotion')
            </div>
        </div>
         @include(Theme::current()->viewsPath.'.partials.suscribe')
    @endsection
    @section('script')
        @stop