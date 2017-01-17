<div class="custom-product-block col-xl-3">
	<h4 class="text-uppercase">LAS PERSONAS TAMBIEN VIERON</h4>
	<p>Marca los items para agregar al carrito o
		<a href="#" class="color">Todos</a>
	</p>
	<slick class="with-checkbox offset-top-40" ng-if="relations" current-index="index" responsive="breakpoints"
		   slides-to-show=5 slides-to-scroll=1 vertical="true">
		<div ng-repeat="relation in relations"  class="vertical-carousel__item">
			<div class="vertical-carousel__item__image pull-left" ng-if="!relation.images.data[0].url">
				<a href="{{ url('/') }}<% '/detail/' + relation.slug %>">
					<img src="{{ asset('administrator/image/noImage.png') }}" alt="">
				</a>
			</div>
			<div class="vertical-carousel__item__image pull-left" ng-if="relation.images.data[0].url">
				<a href="{{ url('/') }}<% '/detail/' + relation.slug %>">
					<img src="<% relation.images.data[0].url %>" alt="">
				</a>
			</div>
			<div class="vertical-carousel__item__title">
				<h2><a href="{{ url('/') }}<% '/detail/' + relation.slug %>"><% relation.name %></a></h2>
			</div>
			<div class="price-box"  ng-if="relation.special_price">$<% relation.special_price | number:0%>
				<span class="price-box__old">$<% relation.price | number:2 %></span>
			</div>
			<div class="price-box" ng-if="!relation.special_price">
				$<% relation.price | number:2 %>
			</div>
		</div>
	</slick>
</div>