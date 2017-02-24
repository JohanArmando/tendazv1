@extends(Theme::current()->viewsPath.'.template')
    @section('css')
        @stop
    @section('content')
        <div ng-controller="productIndexController" ng-cloak="">
            <div id="content">
                @include(Theme::current()->viewsPath.'.partials.slide')
            </div>
            <div>
                @include(Theme::current()->viewsPath.'.partials.hot-product')
            </div>
            <div id="hot">
                <div class="box">
                    <div class="container" ng-if="promotions.length > 0">
                        <div class="col-md-12">
                            <h2>Promociones</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row products">
                    <div class="col-md-3 col-sm-6" ng-repeat="product in promotions | limitTo:4">
                        <div ng-include="'tpl.html'"></div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('script')
         @stop