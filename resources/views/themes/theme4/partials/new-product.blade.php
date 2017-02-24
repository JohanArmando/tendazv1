<div class="title-with-button">
    <div class="carousel-products__button pull-right">
        <span class="btn-prev"></span>
        <span class="btn-next"></span>
    </div>
    <h2 class="text-center text-uppercase title-under">NUEVOS PRODUCTOS</h2>
</div>
<slick ng-if="news.length" class="carousel-products row stick_responsive" current-index="index" style="display: block" responsive="breakpoints"
       slides-to-show=5 slides-to-scroll=1  prev-arrow=".btn-prev" next-arrow=".btn-next">
    <div class="col-xs-12"  ng-repeat="product in news">
        <div ng-include="'tpl.html'"></div>
    </div>
</slick>
