<style>
    .active {
        color: #45B284 !important;
    }
</style>
<header class="noo-header header-3">
    <div class="navbar-wrapper">
        <div class="navbar navbar-default">
            <div class="container">
                <div class="menu-position">
                    <div class="navbar-header pull-left">
                        <div class="noo_menu_canvas">
                            <div class="btn-search noo-search">
                                <i class="fa fa-search"></i>
                            </div>
                            <div data-target=".nav-collapse" class="btn-navbar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <a href="{{url('/')}}" style="text-decoration: none">
                            @if($shop->logo)
                                <img style="margin-top: 4px;margin-bottom: 4px; max-height: 60px" class="logo replace-2x img-responsive" src="{{ asset("logos/$shop->id/$shop->logo") }}"
                                     alt="Logo de la tienda {{ $shop->name_store }}" />
                            @else
                                <h1>{{ $shop->name }}</h1>
                            @endif
                        </a>
                    </div>

                    <nav style="margin-left: 100px" class="pull-left noo-main-menu">
                        <ul class="nav-collapse navbar-nav">
                            <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{url('/')}}">Inicio</a></li>
                            <li><a class="{{ Request::is('products') ? 'active' : '' }}" href="{{url('/products')}}">Productos</a></li>
                            <li><a class="{{ Request::is('cart/buy') ? 'active' : '' }}" href="{{url('/cart/buy')}}">Carrito de Compras</a></li>
                            <li><a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{url('/contact')}}">Contactenos</a></li>

                            <li ng-if="!usuario"><a class="{{ Request::is('auth/login') ? 'active' : '' }}" href="{{url('/auth/login')}}">Iniciar Sesion</a></li>

                                <li ng-if="usuario"><a> <%usuario.personal_info.first_name%></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{url('myProfile')}}">
                                                <i class="fa fa-user"></i>
                                                Perfil
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('change_password')}}">
                                                <i class="fa fa-lock"></i>
                                                Cambiar Contraseña
                                            </a>
                                        </li>
                                        <li class="hidden">
                                            <a href="{{url('orders')}}">
                                                <i class="fa fa-list"></i>
                                                Mis Ordenes
                                            </a>
                                        </li>
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
                    </nav>
                    <nav class="pull-right noo-menu-option">
                        <a href="#" class="button-expand-option"><i class="fa fa-ellipsis-v"></i></a>
                        <ul>
                            <li class="menu-item fly-right">
                                <a id="noo-search" class="search-button noo-search" href="#">
                                    <i class="fa fa-search"></i> Buscar
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="search-header5">
        <div class="remove-form"></div>
        <div class="container">
            <form action="{{ url('/products') }}" method="get" class="form-horizontal">
                <label class="note-search">Presiona Enter para realizar la busqueda</label>
                <input type="search" name="search" class="form-control" value="" placeholder="Buscar Producto...">
                <input type="submit" value="Search">
            </form>
        </div>
    </div>
    <div style="width: 100%;height: 3px; background-color: #45B284"></div>
</header>
