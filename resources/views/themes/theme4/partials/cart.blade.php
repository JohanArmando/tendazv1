<div class="cart link-inline" ng-controller="cartGlobalController">
    <div class="dropdown text-right">
        @if(!Request::is('cart/buy'))
            <a class="dropdown-toggle">
                <span class="badge badge--cart" ng-cloak=""><% size(carts) ? size(carts)  :  0 %></span>
                <span class="icon icon-shopping_basket"></span>
                <span class="name-text">Mi carrito</span>
            </a>
        @endif
        <div class="dropdown-menu dropdown-menu--xs-full slide-from-top" role="menu">
            <div class="container">
                <div class="cart__top">item(s) agregados al carrito</div>
                <a href="#" class="icon icon-close cart__close"><span>CERRAR</span></a>
                <ul ng-repeat="cart in carts">
                    <li class="cart__item">
                        <div class="cart__item__image pull-left">
                            <a href="#">
                                <img ng-src="<% cart.attributes.image %>" alt="" width="75" height="90"/>
                            </a>
                        </div>
                        <div class="cart__item__control">
                            <div class="cart__item__delete">
                                <a href="#" class="icon icon-delete" ng-click="destroy(cart.id)"><span>Eliminar</span>
                                </a>
                            </div>
                        </div>
                        <div class="cart__item__info">
                            <div class="cart__item__info__title">
                                <h2><a href="#"><% cart.name %></a></h2>
                            </div>
                            <div class="cart__item__info__price"><span class="info-label">Precio:</span><span>$ <% cart.price %></span></div>
                            <div class="cart__item__info__qty"><span class="info-label">CANTIDAD:</span>
                                <i class="fa fa-spinner fa-pulse fa-2x fa-fw" ng-show="showCart.loading"></i>
                                <input type="text" class="input--ys"
                                       value='<% cart.quantity %>'
                                       ng-show="!showCart.loading"
                                       ng-model="cart.quantity"
                                       ng-keypress="($event.which === 13)?updateQuantityCart(cart.id , cart.quantity):0"
                                       ng-blur="updateQuantityCart(cart.id , cart.quantity)"/>
                            </div>
                            <div class="cart__item__info__details">
                                <div class='multitooltip' ng-if="cart.attributes">
                                    <a href="#">Detalles</a>
                                    <div class="tip on-bottom">
                                        <span ng-repeat="(name ,value) in cart.attributes" ng-if="name != 'image'">
                                            <strong><% name | capitalize %>:</strong><% value %>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="cart__bottom">
                    <div class="cart__total">Subtotal: <span> $<% subTotal %></span></div>
                    <a href="{{url('checkout/address_and_login/'.$store->id)}}"><button class="btn btn--ys btn-checkout ">IR A PAGAR<span class="icon icon--flippedX icon-reply"></span></button></a>
                    <a href="{{asset('cart/buy')}}"><button class="btn btn--ys"><span class="icon icon-shopping_basket"></span> Ver carrito</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
