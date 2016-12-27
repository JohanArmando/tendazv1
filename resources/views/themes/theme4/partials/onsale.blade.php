<div class="col-sm-12 col-md-6 col-xl-6 col-xs-12">
	<div class="title-with-button">
		<div class="carousel-products__button pull-right">
			<span class="btn-prev-promotion"><i style="margin-top: 5px" class="fa fa-angle-left fa-2x"></i></span>
			<span class="btn-next-promotion"><i style="margin-top: 5px" class="fa fa-angle-right fa-2x"></i></span>
		</div>
		<h2 class="text-center text-uppercase title-under">En Promocion</h2>
	</div>
	<slick ng-if="promotions" class="carousel-products row" current-index="index" responsive="breakpoints"
		   slides-to-show=3 slides-to-scroll=1  prev-arrow=".btn-prev" next-arrow=".btn-next">
		<div   ng-repeat="product in promotions">
			<div ng-include="'tpl.html'"></div>
		</div>
	</slick>
</div>