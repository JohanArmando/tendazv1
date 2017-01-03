<div class="header-wrapper" ng-controller="customerStoreController">
	<header id="header" class="header-layout-03">
		@include(Theme::current()->viewsPath.'.partials.navbar_top')
		<div class="container offset-top-5">
			<div class="row">
				<div class="col-xs-12 col-md-3 col-lg-3 col-xl-3 col-sm-3">
					<a href="{{url('/')}}" style="text-decoration: none">
						@if($shop->logo)
							<img class="logo replace-2x img-responsive" src="{{ asset("logos/$shop->id/$shop->logo") }}"  alt="Logo de la tienda {{ $shop->name_store }}" />
						@else
							<h1>{{ $shop->name }}</h1>
						@endif
					</a>
				</div>
				<div class="col-sm-6 col-md-8 col-lg-8 col-xl-8 pull-right text-right">
					<div class="row-functional-link">
						<!-- shopping cart start -->

						<!-- shopping cart end -->
						<div class="h-address pull-right hidden-md hidden-sm hidden-xs
							 {{ ($shop->phone_number && $shop->phone_country) || $shop->email_contact || $shop->address_contact ? '' : 'hidden' }}">
							<span class="{{ !$shop->phone_number || !$shop->phone_country ? 'hidden' : '' }}">
								<span class="icon icon-call"></span><b>
								(+{{$shop->phone_country}}) {{$shop->phone_number}}</b>
							</span><br>
							<span class="{{ !$shop->email_contact ? 'hidden' : '' }}">
								<span class="fa fa-envelope" style="color:  #49C0A0"></span><b> {{$shop->email_contact}}</b>
							</span><br>
							<span class="{{ !$shop->address_contact ? 'hidden' : '' }}">
							<span class="fa fa-map-marker" style="color:  #49C0A0"></span><b> {{$shop->address_contact}}</b>
							</span>
						</div>
					</div>
				</div>
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