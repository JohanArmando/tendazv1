<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('/')}}" class="visible-xs btn-cart-xs pull-right" ng-controller="cartGlobalController" ng-cloak="">
                    <button type="button" class="btn btn-default"><i class="fa fa-shopping-cart"></i> Carrito : <% size(carts) ? size(carts)  :  0 %> item(s)</button>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-ex1-collapse" role="navigation">
                <ul class="nav navbar-nav">
                    <div style="margin-right: 150px !important;"></div>
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{url('/')}}">Inicio</a></li>
                    <li class="{{ Request::is('products') ? 'active' : '' }}"><a href="{{url('/products')}}">Productos</a></li>
                    <li class="{{ Request::is('cart/buy') ? 'active' : '' }}"><a href="{{url('/cart/buy')}}">Carrito de compras</a></li>
                    <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{url('/contact')}}">Contactenos</a></li>
                    <li  ng-if="!usuario" class="{{ Request::is('auth/login') ? 'active' : '' }}"><a href="{{url('/auth/login')}}">Inicio de sesion</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>