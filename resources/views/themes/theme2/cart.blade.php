@extends(Theme::current()->viewsPath.'.template')
    @section('css')
        <style>
            .centerFa{
                margin-left: 35px;
            }
            .inputQuantity{
                width: 30% !important;
                height: 35px;
                text-align: center;
            }
            .table tbody tr td input {
                text-align: center !important;
            }
        </style>
           @stop
    @section('content')
            <div class="container" ng-controller="cartGlobalController">
                <div class="col-md-8" id="basket">
                    <div class="box">
                        <form method="post">
                            <h2>Carrito de compras</h2>
                            <div class="table-responsive">
                                <table class="table" ng-show="size(carts) >= 1">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unidad</th>
                                        <th>Subtotal</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr ng-repeat="cart in carts" ng-cloak="">
                                        <td>
                                            <a href="#">
                                                <img ng-src="<% cart.attributes.image %>" alt="" width="120" height="60"/>
                                            </a>
                                        </td>
                                        <td>
                                            <p><a href="#"><% cart.name %></a></p>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                            <span ng-click="updateQuantityCart(cart.id , cart.quantity , false)"
                                                  ng-show="!showCart.loading">
                                                <button class="btn btn-default bootstrap-touchspin-down" type="button">-</button>
                                            </span>
                                                <i class="centerFa fa fa-cog fa-spin fa-2x fa-fw" ng-show="showCart.loading"></i>
                                                <input type="text" name="quantity" value="<% cart.quantity %>" ng-show="!showCart.loading"
                                                       class="inputQuantity">
                                                <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                            <span ng-click="updateQuantityCart(cart.id , cart.quantity , true)"
                                                  ng-show="!showCart.loading">
                                                <button class="btn btn-default bootstrap-touchspin-up" type="button">+</button>
                                            </span>
                                            </div>
                                        </td>
                                        <td>$<% cart.price %></td>
                                        <td>$<% cart.price * cart.quantity | number:2 %></td>
                                        <td class="text-center"><a href="#"><i class="fa fa-trash-o" ng-click="destroy(cart.id)"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">$<% subTotal | number:2 %></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div  ng-show="size(carts) < 1" ng-cloak="">
                                <div class="alert alert-info" style="background-color: #4FBFA8; color: #000;">
                                    <h4><i class="fa fa-exclamation-circle fa-2x"></i> El carrito de compras est&aacute; vac&iacute;o.
                                        <strong><a href="{{ url('/products') }}" style="color: white;text-decoration: underline;">
                                                Compra aqu&iacute; <i class="fa fa-caret-right"></i></a></strong>
                                    </h4>
                                </div>
                            </div>
                            <div class="box-footer" ng-show="size(carts) >= 1">
                                <div class="pull-left">
                                    <a  href="{{ url('/products') }}"  class="btn btn-default"><i class="fa fa-chevron-left"></i> Continar Comprando</a>
                                    <a class="btn btn-default" ng-click="emptyCart()">
                                        <i class="fa fa-trash-o"></i> Limpiar Carrito
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{url('checkout/address_and_login/'.$shop->id)}}" type="submit" class="btn btn-primary">
                                            Proceder ala compra<i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4" ng-show="size(carts) >= 1">
                    <div class="box" id="order-summary">
                        <div class="box-header">

                            <h3>Resumen de Orden</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <th>$ <% subTotal | number:2 %></th>
                                </tr>
                                <tr>
                                    <td>Envio</td>
                                    <th>Procede al checkout para editar estos datos.</th>
                                </tr>
                                <tr>
                                    <td>Descuento</td>
                                    <th>Procede al checkout para editar estos datos.</th>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th>$ <% subTotal | number:2 %></th>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- /.col-md-3 -->
            </div>
           @endsection
    @section('script')
        @stop