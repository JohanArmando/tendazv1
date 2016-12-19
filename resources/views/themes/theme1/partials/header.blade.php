<header>
	    <div class="container">
	        <div class="row hidden-xs">

	        	<!-- Logo -->
	            <div class="col-lg-4 col-md-3">
	            	<div>
						@if($shop->logo)
							<img src="{{asset('logos/'.$shop->id.'/'.$shop->logo)}}" alt="" height="70" width="160">
						@else
							<h2>{{$shop->name_store}}</h2>
						@endif
	            	</div>
	            </div>
	            <!-- End Logo -->

				<!-- Search Form -->
	            <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
	            	<div class="well">
	                    <form action="#">
	                        <div class="input-group">
	                            <input style="height: 33px" type="text" class="form-control input-search" placeholder="Buscar producto..."/>
	                            <span class="input-group-btn">
	                                <button class="btn btn-default no-border-left" type="submit" style="background-color: #384248">
										<i class="fa fa-search" style="color: white"></i></button>
	                            </span>
	                        </div>
	                    </form>
	                </div>
	            </div>
	            <!-- End Search Form -->

				@if(!Request::is('cart/buy'))
	            <!-- Shopping Cart List -->
	            <div class="col-lg-3 col-md-4 col-sm-5 hidden-xs"  ng-controller="cartGlobalController" ng-cloak="">
	                <div class="well">
	                    <div class="btn-group btn-group-cart">
	                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	                            <span class="pull-left"><i class="fa fa-shopping-cart icon-cart"></i></span>
	                            <span class="pull-left">Carrito de compras:
									<strong><% size(carts) ? size(carts)  :  0 %> item(s)</strong>
								</span>
	                            <span class="pull-right"><i class="fa fa-caret-down"></i></span>
	                        </button>
	                        <ul class="dropdown-menu cart-content" role="menu">
                                <li ng-repeat="cart in carts.products.data" ng-cloak="">
									<a href="{{url('/products')}}">
										<b><% cart.name %></b>
                                        <span>$<% cart.price %> x <% cart.quantity %></span>
									</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="{{url('/cart/buy')}}">Total: $ <% carts.original_total %></a></li>
                            </ul>
	                    </div>
	                </div>
	            </div>
	            <!-- End Shopping Cart List -->
				@endif

	        </div>
	    </div>
    </header>