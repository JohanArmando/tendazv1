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
                    <li ng-if="!usuario"><a href="{{url('/auth/login')}}" class="{{ Request::is('auth/login') ? 'active' : '' }}">Inicio sesion</a></li>

                    <li ng-if="usuario" class="nav-dropdown" ng-cloack="">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <%usuario.personal_info.first_name%> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('myProfile')}}"><i class="fa fa-user"></i> Perfil</a>
                            </li>
                            <li>
                                <a href="{{url('change_password')}}"><i class="fa fa-lock"></i> Cambiar Contraseña</a>
                            </li>
                            <li>
                                <a href="{{url('orders')}}"><i class="fa fa-list"></i> Mis ordenes</a>
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
            </div>
        </div>
    </nav>    