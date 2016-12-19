@extends(Theme::current()->viewsPath.'.template')
@section('css')
@stop
@section('content')
    <div class="main" ng-controller="cartGlobalController">
        <div class="commerce commerce-page commerce-cart noo-shop-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <h2>Carrito de Compras</h2><br>
                        <table class="shop_table cart" ng-show="size(carts.products.data) >= 1"  style="width: 100%">
                            <thead>
                            <tr>
                                <th class="product-thumbnail">Producto</th>
                                <th class="product-price hidden-xs">Precio</th>
                                <th class="product-quantity hidden-xs">Cantidad</th>
                                <th class="product-subtotal hidden-xs">SubTotal</th>
                                <th class="product-remove">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="cart-item"  ng-repeat="cart in carts.products.data" ng-cloak="">
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img ng-src="<% cart.images.data[0].url %>" alt="" width="100" height="100"/>
                                    </a>
                                    <a href="#"><% cart.name %></a>
                                </td>
                                <td class="product-price hidden-xs">
                                    <span class="amount">$<% cart.price %></span>
                                </td>
                                <td class="product-quantity hidden-xs">
                                    <div class="quantity">
                                        <div class="input-group">
                                                    <span class="input-text qty text" ng-click="cart.quantity = cart.quantity - 1 ; updateQuantityCart(cartId  , cart)"
                                                          ng-show="!showCart.loading">
                                                        <button class="btn btn-default bootstrap-touchspin-down" type="button">-</button>
                                                    </span>
                                            <i style="margin-left: 40px" class="fa fa-cog fa-spin fa-2x fa-fw" ng-show="showCart.loading"></i>
                                            <input type="text" name="quantity" value="<% cart.quantity %>" ng-show="!showCart.loading" class="input-text qty text"/>
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                                    <span class="input-text qty text" ng-click="cart.quantity = cart.quantity + 1 ;updateQuantityCart(cartId , cart)"
                                                          ng-show="!showCart.loading">
                                                        <button class="btn btn-default bootstrap-touchspin-up" type="button">+</button>
                                                    </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="product-subtotal hidden-xs">
                                    <span class="amount">$<% cart.price * cart.quantity | number:2 %></span>
                                </td>
                                <td class="product-remove">
                                    <a  ng-click="destroy(cartId , cart )" class="remove"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="actions">
                                    <a class="continue hidden-xs" href="{{url('/products')}}">Continuar comprando</a>
                                    <a class="continue hidden-xs" style="margin-left: 10px" ng-click="emptyCart(cartId)">
                                        <i class="fa fa-trash-o"></i> Limpiar Carrito
                                    </a>
                                    <a href="{{url('/checkout')}}" type="submit" class="button"
                                       name="update_cart">Proceder a Pago</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="shop_table cart" ng-show="size(carts.products.data) < 1">
                            <tr ng-show="size(carts) < 1" ng-cloak="">
                                <td colspan="5">
                                    <div  ng-show="size(carts) < 1" ng-cloak="">
                                        <div class="alert alert-info" style="background-color: #79CBA8; color: #000;">
                                            <h4><i class="fa fa-exclamation-circle fa-2x"></i> El carrito de compras est&aacute; vac&iacute;o.
                                                <strong><a href="{{ url('/products') }}" style="color: white;text-decoration: underline;">
                                                        Compra aqu&iacute; <i class="fa fa-caret-right"></i></a></strong>
                                            </h4>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="cart-collaterals" ng-show="size(carts.products.data) >= 1">
                    <div class="noocart-coupon">
                        <label for="coupon_code">Cupon</label>
                        <p>Ingresa tu cupon si tienes alguno disponible</p>
                        <input type="text" name="noo_coupon_code" class="input-text" id="noo_coupon_code" value="" placeholder="Coupon code"/>
                        <button class="noo-apply-coupon button">Aplicar <span class="hidden-xs">cupon</span></button>
                    </div>
                    <div class="cart_totals">
                        <h2>Total al pagar</h2>
                        <table>
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td><span class="amount">$ <% carts.totalizers.items.value %></span></td>
                            </tr>
                            <tr class="shipping">
                                <th>Envio</th>
                                <td>
                                    <p>Procede al checkout para editar estos datos.</p>
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th>Total</th>
                                <td><strong><span class="amount">$ <% carts.original_total %></span></strong> </td>
                            </tr>
                        </table>
                        <div class="wc-proceed-to-checkout">
                            <a href="#" class="button alt wc-forward">
                                Procerder al Pago
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@stop