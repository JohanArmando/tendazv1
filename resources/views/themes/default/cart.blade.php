@extends('themes.'.Theme::get().'.template')
    @section('css')
        <style>
            .inputHeight{
                height: 33px;
            }
        </style>
    @stop
    @section('content')
            <div class="container main-container">
                <div class="row" ng-controller="cartGlobalController">
                    <div class="col-md-9">
                        <div class="title"><span>Mi carrito de compras</span></div>
                        <div class="clearfix"></div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-cart" ng-show="size(carts.products.data) >= 1">
                                <thead>
                                    <tr>
                                        <th colspan="2">Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio unitario</th>
                                        <th>Subtotal</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr ng-repeat="cart in carts.products.data" ng-cloak="">
                                    <td class="img-cart">
                                        <a href="#">
                                            <img ng-src="<% cart.images.data[0].url %>" alt="" width="120" height="60"/>
                                        </a>
                                    </td>

                                    <td>
                                        <p><a href="#"><% cart.name %></a></p>
                                    </td>

                                    <td class="input-qty">
                                        <div class="input-group">
                                            <span class="input-group-btn" ng-click="cart.quantity = cart.quantity - 1 ; updateQuantityCart(cartId  , cart)" ng-show="!showCart.loading">
                                                <button class="btn btn-default bootstrap-touchspin-down" type="button">-</button>
                                            </span>
                                            <i class="input-qty text-center fa fa-cog fa-spin fa-2x fa-fw" ng-show="showCart.loading"></i>
                                            <input type="text" name="quantity" value="<% cart.quantity %>" ng-show="!showCart.loading"
                                                   class="inputHeight text-center">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                            <span class="input-group-btn" ng-click="cart.quantity = cart.quantity + 1 ;updateQuantityCart(cartId , cart)"
                                                  ng-show="!showCart.loading">
                                                <button class="btn btn-default bootstrap-touchspin-up" type="button">+</button>
                                            </span>
                                        </div>
                                    </td>

                                    <td class="unit">$<% cart.price | number:2 %></td>
                                    <td class="sub">$<% cart.price * cart.quantity | number:2 %></td>
                                    <td class="action text-center">
                                        <a href="#" class="remove_cart" rel="2" data-placement="top" data-toggle="tooltip" data-original-title="Remove">
                                            <i class="fa fa-trash-o fa-2x" ng-click="destroy(cartId , cart )"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" align="right"><strong>Total</strong></td>
                                    <td colspan="2"><b>$ <% carts.original_total | number:2 %></b></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div ng-show="size(carts.products.data) >= 1">
                            <a href="{{url('/products')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-o-left"></i> Seguir comprando</a>
                            <button type="button" class="btn btn-primary" ng-click="emptyCart(cartId)">
                                <i class="fa fa-trash-o"></i> Limpiar Carrito
                            </button>
                            <div class="pull-right">
                                <a href="{{ url('/checkout') }}">
                                    <button type="button" class="btn btn-primary">Checkout <i class="fa fa-arrow-circle-o-right"></i></button>
                                </a>
                            </div>
                        </div>
                        <div  ng-show="size(carts.products.data) < 1" ng-cloak="">
                            <div class="alert alert-info" style="background-color: #337AB7; color: #000;">
                                <h4><i class="fa fa-exclamation-circle fa-2x"></i> El carrito de compras est&aacute; vac&iacute;o.
                                    <strong><a href="{{ url('/products') }}" style="color: white;text-decoration: underline;">
                                            Compra aqu&iacute; <i class="fa fa-caret-right"></i></a></strong>
                                </h4>
                            </div>
                         </div>
                </div>

                    <div class="col-sm-12 col-md-3" ng-show="size(carts.products.data) >= 1">
                        <div class="title"><span><a href="#">Resumen de la Orden</a></span></div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>Subtotal de Orden</th>
                                    <td>$ <% carts.totalizers.items.value | number:2%></td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>$ <% carts.original_total | number:2%></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           @endsection
    @section('script')
           @stop