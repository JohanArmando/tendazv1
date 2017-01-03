<div class="header-wrapper" ng-controller="customerStoreController">
	<header id="header" class="header-layout-03">
		@include(Theme::current()->viewsPath.'.partials.navbar_top')
		<div class="container offset-top-5">
			<div class="row">
				<div class="col-xs-12 col-md-3 col-lg-3 col-xl-3 col-sm-3">
					<a href="{{url('/')}}" style="text-decoration: none">
						@if($shop->logo)
							<img class="logo img-responsive" src="{{ asset("logos/$shop->id/$shop->logo") }}"
								 alt="Logo de la tienda {{ $shop->name_store }}" />
						@else
							<h1>{{ $shop->name }}</h1>
						@endif
					</a>
				</div>
				@if(!Request::is('cart/buy'))
					<div class="col-sm-6 col-md-8 col-lg-8 col-xl-8 pull-right text-right" ng-controller="cartGlobalController" ng-cloak="">
						<div class="row-functional-link">
							<!-- shopping cart start -->
							<div class="cart link-inline">
								<div class="dropdown text-right">
									<a class="dropdown-toggle ">
										<span class="badge badge--cart"><% carts.original_qty %></span>
										<span class="icon icon-shopping_basket"></span>
										<span class="name-text">Carrito</span>
									</a>
									<div class="dropdown-menu dropdown-menu--xs-full slide-from-top" role="menu">
										<div class="container">
											<div class="cart__top">Productos agregrados al carrito</div>
											<a href="#" class="icon icon-close cart__close"><span>CLOSE</span></a>
											<ul>
												<li class="cart__item" ng-repeat="cart in carts.products.data" ng-cloak="">
													<div class="cart__item__image pull-left"><a href="#">
															<img ng-src="<% cart.images.data[0].url %>" alt="" width="50" height="70"/>
														</a></div>
													<div class="cart__item__control">
														<div class="cart__item__delete">
															<a href="#" ng-click="destroy(cartId , cart )" class="icon icon-delete">
																<span>Eliminar</span>
															</a>
														</div>
													</div>
													<div class="cart__item__info">
														<div class="cart__item__info__title">
															<h2><a href="#"><% cart.name %></a></h2>
														</div>
														<div class="cart__item__info__price"><span class="info-label">Precio:</span><span>$ <% cart.price | currency:"":0 %></span></div>
														<div class="cart__item__info__details">
															<div class="multitooltip">
																<a href="#">Detalles</a>
																<div class="tip on-bottom">
																	<span><strong>Cantidad:</strong> <% cart.quantity %></span>
																	<span><strong>Descripci&oacute;n:</strong> <% cart.description %></span>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
											<div class="cart__bottom">
												<div class="cart__total">Subtotal: <span> $<% carts.totalizers.items.value| currency:"":0 %></span></div>
												<a href="{{url('checkout')}}" class="btn btn--ys btn-checkout">Checkout <span class="icon icon--flippedX icon-reply"></span></a>
												<a href="{{url('cart/buy')}}" class="btn btn--ys"><span class="icon icon-shopping_basket"></span> Ver Carrito</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- shopping cart end -->
						</div>
					</div>
				@endif
			</div>
		</div>
		<div class="stuck-nav">
			<div class="container">
				<div class="row">
					<div class="pull-left col-sm-10 col-md-10 col-lg-10 col-xl-11">
						<nav class="navbar navbar-color-white">
							<div class="responsive-menu mainMenu">
								<div class="col-xs-2 visible-mobile-menu-on">
									<div class="expand-nav compact-hidden">
										<a href="#off-canvas-menu" class="off-canvas-menu-toggle">
											<div class="navbar-toggle">
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="menu-text">MENU</span>
											</div>
										</a>
									</div>
								</div>
								<ul class="nav navbar-nav" >
									<li class="dl-close"><a href="#"><span class="icon icon-close"></span>cerrar</a></li>
									<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{url('/')}}" ><span class="act-underline">Inicio</span></a></li>
									<li class="{{ Request::is('products') ? 'active' : '' }}"><a href="{{ url('/products') }}"><span class="act-underline">Productos</span></a></li>
									@include(Theme::current()->viewsPath.'.partials.categories_tree')
									<li class="{{ Request::is('contact') ? 'active' : '' }}">
										<a href="{{url('/contact')}}"><span class="act-underline">Contactenos</span></a></li>
									<li class="{{ Request::is('cart/buy') ? 'active' : '' }}"><a href="{{url('/cart/buy')}}">
											<i class="fa fa-shopping-cart">&nbsp;</i><span class="act-underline">  Carrito de compras</span></a></li>
								</ul>
							</div>
						</nav>
					</div>
					<div class="{{ !Request::is('/products') ? 'hidden' : ''}} pull-right col-sm-2 col-md-2 col-lg-2 col-xl-1 text-right">
						<div class="search link-inline">
							<a href="#" class="search__open"><span class="icon icon-search"></span></a>
							<div class="search-dropdown">
								<form action="#" method="get">
									<div class="input-outer">
										<input  type="search" name="search" value="" maxlength="128" placeholder="BUSCAR:">
										<button type="submit" title="" class="icon icon-search"></button>
									</div>
									<a href="#" class="search__close"><span class="icon icon-close"></span></a>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</header>
</div>