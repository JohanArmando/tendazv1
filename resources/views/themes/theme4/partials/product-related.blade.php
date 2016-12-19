<div class="custom-product-block col-xl-4 visible-xl">
	<h4 class="text-uppercase">LAS PERSONAS TAMBIEN VIERON</h4>
	<p>Marca los items para agregar al carrito o
		<a href="#" class="color">Todos</a>
	</p>
	<slick class="with-checkbox offset-top-40" ng-if="relations" current-index="index" responsive="breakpoints"
		   slides-to-show=5 slides-to-scroll=1 vertical="true">
		<div ng-repeat="relation in relations "  class="vertical-carousel__item">
			<div class="vertical-carousel__item__select pull-left">
				<div class="checkbox-group">
					<input type="checkbox" name="checkbox1" value="product1" id="checkBox1">
					<label for="checkBox1">
						<span class="check"></span>
						<span class="box"></span> &nbsp;
					</label>
				</div>
			</div>
			<div class="vertical-carousel__item__image pull-left">
				<a href="#">
					<img src="{{ asset('administrator/image/noImage.png') }}" alt="">
				</a>
			</div>
			<div class="vertical-carousel__item__title">
				<h2><a href="#"><% relation.name %></a></h2>
			</div>
			<div class="price-box"  ng-if="relation.promotion">$<% relation.promotion_price | number:2 %>
				<span class="price-box__old">$<% relation.price | number:2 %></span>
			</div>
			<div class="price-box" ng-if="!relation.promotion">
				$<% relation.price | number:2 %>
			</div>
		</div>
	</slick>
</div>