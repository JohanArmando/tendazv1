
<div class="middle-header">
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-md-3">
                    @if($shop->logo)
                        <img src="{{asset('logos/'.$shop->id.'/'.$shop->logo)}}" alt="" height="80" width="160">
                        @else
                        <h2>{{$shop->name_store}}</h2>
                    @endif
                </div>
                <div class="col-sm-8 col-md-6 search-box">
                    <form class="form-inline">
                        <div class="form-group search-input">
                            <input type="text" class="form-control" placeholder="Buscar productos...">
                        </div><!--
                            --><div class="form-group search-category hidden-xs">
                        </div>
                        <button type="submit" class="search-btn"> </button>
                    </form>
                </div>
                @if(!Request::is('cart/buy'))
                <div class="col-sm-4 col-md-3 cart-btn hidden-xs"  ng-controller="cartGlobalController" ng-cloak="">
                    <button type="button" class="btn btn-default dropdown-toggle" id="dropdown-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fa fa-shopping-cart"></i> Carrito de compras : <% size(carts) ? size(carts)  :  0 %> item(s) <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-cart">

                        <div class="media" ng-repeat="cart in carts.products.data" ng-cloak="">
                            <div class="media-left">
                                <img class="media-object" ng-src="<% cart.images.data[0].url %>" width="50" alt="product">
                            </div>
                            <div class="media-body">
                                <a href="#"><% cart.name %></a>
                                <div>$<% cart.price %> x <% cart.quantity %></div>
                            </div>
                            <div class="media-right"><a href="#" ng-click="destroy(cartId , cart )"><i class="fa fa-trash-o"></i></a></div>
                        </div>

                        <div class="subtotal-cart">Subtotal: <span>$ <% carts.original_total %></span></div>
                        <div class="text-center chart-checkout-btn">
                            <div class="btn-group" role="group" aria-label="View Cart and Checkout Button">
                                <a href="{{url('cart/buy')}}">
                                <button class="btn btn-default btn-sm" type="button"><i class="fa fa-shopping-cart"></i> Ver el carrito</button>
                                </a>
                                <a href="{{url('checkout')}}">
                                <button class="btn btn-default btn-sm" type="button"><i class="fa fa-check"></i> Ir checkout</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif
            </div>
        </div>
    </div>
</div>
