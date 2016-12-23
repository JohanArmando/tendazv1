<div class="col-sm-12 col-md-6 col-xl-6" >
    <div class="divider--lg visible-sm visible-xs"></div>
    <div class="title-with-button" ng-show="features.length > 0">
        <div class="carousel-products__button  pull-right">
            <span class="btn-prev-hight"><i style="margin-top: 5px" class="fa fa-angle-left fa-2x"></i></span>
            <span class="btn-next-hight"><i style="margin-top: 5px" class="fa fa-angle-right fa-2x"></i></span>
        </div>
        <h2 class="text-center text-uppercase title-under">Lo mas destacado</h2>
    </div>
    <slick ng-if="features.length > 0" class="carousel-products row stick_responsive" current-index="index" responsive="breakpoints" slides-to-show=3 slides-to-scroll=1  prev-arrow=".btn-prev" next-arrow=".btn-next">
        <div   ng-repeat="product in features">
            <div ng-include="'tpl.html'"></div>
        </div>
    </slick>
</div>