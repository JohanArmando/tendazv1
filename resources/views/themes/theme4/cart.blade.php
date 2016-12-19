@extends(Theme::current()->viewsPath.'.template')
	@section('css')
		@stop
	@section('content')
			<div id="pageContent">
			<div class="container">
				<div style="margin-bottom: 30px;"></div>
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">CARRITO DE COMPRAS</h1>
				</div>
				<div class="row" ng-controller="cartGlobalController">
					<section class="col-md-8 col-lg-8" >
						<div class="container-widget" >
							<table class="shopping-cart-table" ng-show="size(carts) >= 1">
								<thead>
									<tr>
										<th>Producto</th>
										<th>&nbsp;</th>
										<th style="border: 1px solid #E5E5E5">Precio unitario</th>
										<th>Cantidad</th>
										<th>Subtotal</th>
										<th>&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr ng-repeat="cart in carts.products.data" ng-cloak="">
										<td>
											<div class="shopping-cart-table__product-image">
												<a href="{{url('#')}}" ng-show="size(cart.images.data[0].url) > 0">
													<img ng-src="<% cart.images.data[0].url %>" alt="" width="100" height="125"/>
												</a>
											</div>
											<div class="shopping-cart-table__product-image">
												<a href="{{url('#')}}" ng-show="size(cart.images.data[0].url) == 0">
														<img ng-src="http://www.jimdunlop.com/images/products/default-product-5.5.jpg" alt="" width="100" height="100"/>
												</a>
											</div>
										</td>
										<td>
											<h5 class="shopping-cart-table__product-name text-left text-uppercase">
												<a href="{{url('#')}}"><% cart.name %></a>
											</h5>
											<ul class="shopping-cart-table__list-parameters" >
												<li ng-repeat="value in cart.values.data ">
													<span><% value.property | capitalize %>:</span> <% value.value %>
												</li>
												<li class="visible-xs">
													<span>Cantidad:</span>
													<div class="number input-counter">
													    <span class="minus-btn"></span>
													    <input type="text" value="1" size="5"/>
													    <span class="plus-btn"></span>
													</div>
												</li>
											</ul>
										</td>
										<td style="border: 1px solid black">
											<div class="shopping-cart-table__product-price unit-price" ng-hide="cart.special_price">
												$ <% cart.price | currency:"":0 %>
											</div>
											<div class="shopping-cart-table__product-price unit-price" ng-show="cart.special_price">
												$ <% cart.special_price| currency:"":0 %>
											</div>
										</td>
										<td>
											<div class="shopping-cart-table__input">
												<div class="number input-counter">
													<span class="minus-btn" ng-click="cart.quantity = cart.quantity - 1 ; updateQuantityCart(cartId  , cart)" ng-show="!showCart.loading"></span>
													<i class="fa fa-cog fa-spin fa-5x fa-fw" ng-show="showCart.loading"></i>
												    <input type="number"  name="quantity" ng-model="cart.quantity" value="<% cart.quantity %>" ng-show="!showCart.loading"/>
												    <span class="plus-btn" ng-click="cart.quantity = cart.quantity + 1 ;updateQuantityCart(cartId , cart)" ng-show="!showCart.loading"></span>
												</div>
											</div>
										</td>
										<td>
											<div class="shopping-cart-table__product-price subtotal" ng-hide="cart.special_price">
												$ <% (cart.price * cart.quantity )| currency:"":0%>
											</div>

											<div class="shopping-cart-table__product-price subtotal" ng-show="cart.special_price">
												$ <%( cart.special_price * cart.quantity)| currency:"":0  %>
											</div>
										</td>
										<td>
											<a class="shopping-cart-table__delete fa fa-trash" ng-click="destroy(cartId , cart )"></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div  ng-show="size(carts) >= 1" ng-cloak="">
							<div class="divider divider--xs"></div>
							<div class="row shopping-cart-btns">
								<div class="col-xs-12 col-sm-4 col-md-4">
									<a class="btn btn--ys btn--light pull-left btn-right" href="{{url('/products')}}">
										<span class="icon icon-keyboard_arrow_left"></span>CONTINUAR COMPRANDO  </a>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4">
									<a class="btn btn--ys btn--light" ng-click="emptyCart(cartId)">
										<span class="icon icon-delete" ></span>BORRAR CARRITO DE COMPRAS</a>
								</div>
								<div class="divider divider--xs visible-xs"></div>
								<div class="col-xs-12 col-sm-4 col-md-4 pull-left">
									<a class="btn btn--ys btn--light pull-right" href="{{ url('/checkout') }}">PROCEDER PAGO
										<span class="icon icon-keyboard_arrow_right"></span></a>
								</div>
							</div>
							<div class="divider visible-sm visible-xs"></div>
						</div>
						<div class="alert alert-info" style="background-color: #1fc0a0; color: #000;"  ng-hide="size(carts.products.data) >= 1" ng-cloak="">
							<h4><i class="fa fa-exclamation-circle fa-2x"></i> El carrito de compras est&aacute; vac&iacute;o.
								<strong><a href="{{ url('/products') }}" style="color: white;text-decoration: underline;">Compra aqu&iacute; »</a></strong>
							</h4>
						</div>
					</section>

					<aside class="col-md-4 col-lg-4 shopping_cart-aside">
						<div class="divider--md"></div>
						<div class="card card--padding fill-bg">
							<div class="table-responsive">
							<table class="table-total">
								<tbody>
									<tr>
										<th class="text-left">Subtotal:</th>
										<td class="text-right">$<% carts.totalizers.items.value| currency:"":0 %></td>
									</tr>
									<tr>
										<th class="text-left">Envio:</th>
										<td class="text-right">$ <% carts.totalizers.shipping.value| currency:"":0 %></td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>TOTAL:</th>
											<td>$<% carts.original_total| currency:"":0 %></td>
									</tr>
								</tfoot>
							</table>
							<!--<a href="{{ url("checkout/address_and_login/") }}" class="btn btn--ys btn--full btn--xl btn--xs"> IR A PAGAR <span class="icon icon-reply icon--flippedX"></span></a>-->
							</div>
							</div>
					</aside>
				</div>
			</div>
		</div>
		@endsection
	@section('script')
	@stop