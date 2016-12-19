<nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- text logo on mobiles view -->
                <a class="navbar-brand visible-xs" href="#">{{ $shop->name_store }}</a>

            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{url('/')}}" class="{{ Request::is('/') ? 'active' : '' }}">Inicio</a></li>
                    <li><a href="{{url('/products')}}" class="{{ Request::is('products') ? 'active' : '' }}">Productos</a></li>
                    <li class="nav-dropdown" ng-controller="categoryTemplateController">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Categorias <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<% slug ? 'products' + slug + '/' + category.slug : 'products'  + '/' +category.slug %>"
                                   ng-repeat="category in categories"><% category.name %></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{url('/cart/buy')}}" class="{{ Request::is('cart/buy') ? 'active' : '' }}">Carrito de compras</a></li>
                    <li><a href="{{url('/contact')}}" class="{{ Request::is('contact') ? 'active' : '' }}">Contactenos</a></li>
                    @if(!auth('web')->check())
                    <li><a href="{{url('/auth/login')}}" class="{{ Request::is('auth/login') ? 'active' : '' }}">Inicio sesion</a></li>
                    @else
                        <li class="nav-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{auth('web')->user()->full_name}} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{url('myProfile')}}"><i class="fa fa-user"></i> Perfil</a>
                                </li>
                                <li>
                                    <a href="{{url('myProfile/change_password')}}"><i class="fa fa-lock"></i> Cambiar Contraseña</a>
                                </li>
                                <li class="hidden">
                                    <a href="{{url('orders')}}"><i class="fa fa-list"></i> Mis ordenes</a>
                                </li>
                                <li><a href="{{ url('/auth/logout/simple') }}">
                                    <i class="fa fa-sign-in"> </i> &nbsp;Cerrar sesion </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>    