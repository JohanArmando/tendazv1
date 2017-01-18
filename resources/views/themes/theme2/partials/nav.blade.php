<div class="navbar navbar-default yamm" role="navigation" id="navbar" ng-controller="cartGlobalController" ng-cloak="">
    <div class="container">
        <div class="navbar-header">
            <a href="{{url('/')}}" style="text-decoration: none">
                @if($shop->logo)
                    <img style="margin-top: 4px; height: 60px; margin-bottom: 4px" class="hidden-xs logo replace-2x img-responsive"
                         src="{{ asset("logos/$shop->id/$shop->logo") }}"  alt="Logo de la tienda {{ $shop->name_store }}" />
                @else
                    <h1>{{ $shop->name }}</h1>
                @endif
            </a>
            <div class="navbar-buttons">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
                <a class="btn btn-default navbar-toggle hidden-xs" href="{{url('/cart/buy')}}">
                    <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs"><% size(carts) ? size(carts)  :  0 %> item(s)</span>
                </a>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class="navbar-collapse collapse" id="navigation">

            <ul class="nav navbar-nav navbar-left">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{url('/')}}">Inicio</a></li>
                <li class="{{ Request::is('products') ? 'active' : '' }}"><a href="{{url('/products')}}">Productos</a></li>
                <li class="{{ Request::is('cart/buy') ? 'active' : '' }}"><a href="{{url('/cart/buy')}}">Carrito de Compras</a></li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{url('/contact')}}">Contactenos</a></li>

                <li ng-if="!usuario" class="{{ Request::is('auth/login') ? 'active' : '' }}"><a href="{{url('/auth/login')}}">Iniciar Sesion</a></li>
                    <li ng-if="usuario" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">
                            <%usuario.personal_info.first_name%>
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('myProfile')}}">
                                <i class="fa fa-user"></i>Perfil
                                </a>
                            </li>
                            <li>
                                <a href="{{url('change_password')}}"><i class="fa fa-lock"></i> Cambiar contraseña</a>
                            </li>
                            <li class="hidden">
                                <a href="{{url('orders')}}"><i class="fa fa-list"></i>Mis Ordenes</a>
                            </li>
                            <div class="divider"></div>
                            <li ng-click="cerrarSesion()">
                                <a href="">
                                    <i class="fa fa-sign-in"></i>&nbsp;Cerrar Sesion
                                </a>
                                <form id="logout-form" action="{{ url('/auth/logout/simple') }}" method="GET" style="display: none;">
                                </form>
                            </li>
                        </ul>
                    </li>
            </ul>

        </div>
        <!--/.nav-collapse -->

        <div class="navbar-buttons">
            @if(!Request::is('cart/buy'))
            <div class="navbar-collapse collapse right" id="basket-overview">
                <a href="{{url('/cart/buy')}}" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i>
                    <span class="hidden-sm"><% carts.original_qty %> item(s) en el carro</span></a>
            </div>
            @endif

            <div class="navbar-collapse collapse right" id="search-not-mobile">
                <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>

        </div>

        <div class="collapse clearfix" id="search">

            <form action="{{ url('/products') }}" method="get" class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Buscar Producto...">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                </div>
            </form>

        </div>
        <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
</div>
<!-- /#navbar -->

<!-- *** NAVBAR END *** -->