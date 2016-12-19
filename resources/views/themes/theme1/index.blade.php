@extends(Theme::current()->viewsPath.'.template')
    @section('css')
           @stop
        @section('slide')
                @include(Theme::current()->viewsPath.'.partials.slide')
            @stop
    @section('content')
           <div class="container">
               <div class="row" ng-controller="productIndexController" ng-cloak="">
                   <!-- products featured -->
                   <div class="col-lg-3 col-md-3 col-xs-12" ng-if="features.length > 0">
                       <div class="no-padding">
                           <span class="title"><strong>Productos Destacados</strong></span>
                       </div>
                       <div class="hero-feature text-center" ng-repeat="product in features | limitTo:4">
                           <div ng-include="'tpl.html'"></div>
                       </div>
                   </div>
                   <div class="clearfix visible-sm"></div>

                   <!-- products news -->
                   <div class="col-lg-9 col-md-9 col-sm-12" ng-if="news.length > 0">
                       <div class="no-padding">
                           <span class="title"><strong>Productos Nuevos</strong></span>
                       </div>
                       <div class="col-lg-4 col-sm-4 hero-feature text-center" ng-repeat="product in news | limitTo:6">
                           <div ng-include="'tpl.html'"></div>
                       </div>
                   </div>

                   <!-- products promotion -->
                   <div class="col-lg-9 col-md-9 col-sm-12" ng-if="promotions.length > 0">
                       <div class="no-padding">
                           <span class="title"><strong>Promociones</strong></span>
                       </div>
                       <div class="col-lg-4 col-sm-4 hero-feature text-center" ng-repeat="product in promotions | limitTo:6">
                            <div ng-include="'tpl.html'"></div>
                        </div>
                    </div>
               </div>
           </div>
        @endsection
    @section('scripts')
           @stop
