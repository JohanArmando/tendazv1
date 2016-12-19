@extends(Theme::current()->viewsPath.'.template')
    @section('css')
        <style>
            .centerFa{
                margin-left: 35px;
            }
            .inputQuantity{
                width: 100px;
                height: 35px;
            }
        </style>
         @stop
    @section('content')
        <div class="container" ng-controller="cartGlobalController" ng-cloak="">
            <div class="row">
                <div class="col-md-3" ng-show="size(carts.products.data) >= 1">
                    <div class="no-padding">
                        <span class="title"><strong>Resumen de Orden</strong></span>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Subtotal de Orden</th>
                                <td>$ <% carts.totalizers.items.value %></td>
                            </tr>
                            <tr>
                                <th>Envio y Manipulacion</th>
                                <td>$ <% carts.totalizers.shipping.value %></td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>$ <% carts.original_total %></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="col-lg-12 col-sm-12">
                        <span class="title"><strong>Carrito de compras</strong></span>
                    </div>
                    <div class="col-lg-12 col-sm-12 hero-feature">
                        <div class="table-responsive">
                            <table class="table table-bordered tbl-cart" ng-show="size(carts.products.data) >= 1" ng-cloak="">
                                <thead>
                                <tr>
                                    <td>Imagen</td>
                                    <td>Nombre del Producto</td>
                                    <td>Cantidad</td>
                                    <td>Precio unitario</td>
                                    <td>Sub Total</td>
                                    <td>Acciones</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ng-repeat="cart in carts.products.data" ng-cloak="">
                                    <td>
                                        <a href="#">
                                            <img ng-src="<% cart.images.data[0].url %>" alt="" width="60" height="60"/>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#"><% cart.name %></a>
                                    </td>
                                    <td class="td-qty">
                                        <div class="input-group">
                                            <span class="input-group-btn"  ng-click="cart.quantity = cart.quantity - 1 ; updateQuantityCart(cartId  , cart)"
                                                  ng-show="!showCart.loading">
                                                <button class="btn btn-default bootstrap-touchspin-down" type="button">-</button>
                                            </span>
                                            <i class="centerFa fa fa-cog fa-spin fa-2x fa-fw" ng-show="showCart.loading"></i>
                                            <input type="text" name="quantity" value="<% cart.quantity %>" ng-show="!showCart.loading"
                                                   class="inputQuantity text-center">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                            <span class="input-group-btn" ng-click="cart.quantity = cart.quantity + 1 ;updateQuantityCart(cartId , cart)"
                                                  ng-show="!showCart.loading">
                                                <button class="btn btn-default bootstrap-touchspin-up" type="button">+</button>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="price">$<% cart.price %></td>
                                    <td>$<% cart.price * cart.quantity | number:2 %></td>
                                    <td class="text-center">
                                        <a href="#" class="remove_cart" rel="2">
                                            <i class="fa fa-trash-o" ng-click="destroy(cartId , cart )"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" align="right">Total</td>
                                    <td class="total" colspan="2"><b>$ <% carts.original_total %></b>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-group btns-cart" ng-show="size(carts) >= 1">
                            <a href="{{url('/products')}}" class="pull-left">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-arrow-circle-left"></i> Continuar Comprando
                            </button>
                            </a>
                            <button type="button" class="btn btn-primary" ng-click="emptyCart(cartId)">
                                <i class="fa fa-trash-o"></i> Limpiar Carrito
                            </button>
                            <a href="{{ url('/checkout') }}">
                                <button type="button" class="btn btn-primary">Checkout <i class="fa fa-arrow-circle-right"></i></button>
                            </a>
                        </div>
                        <div  ng-show="size(carts) < 1" ng-cloak="">
                            <div class="alert alert-info" style="background-color: #337AB7; color: #000;">
                                <h4><i class="fa fa-exclamation-circle fa-2x"></i> El carrito de compras est&aacute; vac&iacute;o.
                                    <strong><a href="{{ url('/products') }}" style="color: white;text-decoration: underline;">
                                            Compra aqu&iacute; <i class="fa fa-caret-right"></i></a></strong>
                                </h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div style="margin-bottom: 250px;"></div>
        @endsection
    @section('scripts')
        @stop
