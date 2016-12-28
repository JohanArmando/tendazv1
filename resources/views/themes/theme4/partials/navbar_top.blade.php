<div class="container" >
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" >
        
        </div>
        <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right">
       
            <div class="{{ Request::is('products')  || Request::is('products/*') ? : 'hidden'}} search link-inline pull-right mobile-menu-off">
                <a href="#" class="search__open"><span class="icon icon-search"></span></a>
                <div class="search-dropdown">
                    <form  action="#" method="get" ng-controller="productController">
                        <div class="input-outer">
                            <input type="search" name="search" ng-model="search" value="" maxlength="128" placeholder="BUSCAR:">
                            <button type="submit" title="" class="icon icon-search"></button>
                            <% search %>
                        </div>
                        <a href="#" class="search__close"><span class="icon icon-close"></span></a>
                    </form>
                </div>
            </div>
            <div class="account link-inline  hidden mobile-menu-on">
             
                <div class="dropdown text-right">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span class="icon icon-person "></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu--xs-full">
                        <li><a href="#"><span class="icon icon-person"></span>
                    
                        </a></li>
                        <li class="dropdown-menu__close"><a href="{{ url('/auth/logout/simple') }}"
                                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <span class="icon icon-close"></span>Cerrar</a>
                        </li>
                    </ul>
                </div>
                
                    <ul>
                        <li>
                            <a href="{{ url('auth/login') }}" class="color">
                                Inicia Sesion
                            </a>
                        </li>
                    </ul>
                
            </div>
            <div class="account-row-list pull-right mobile-menu-off">
                <ul >
                   
                        <li ng-if="usuario">
                            <div class="account link-inline">
                                <div class="dropdown text-right">
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                        <span class="icon icon-face "></span>
                                       <%usuario.personal_info.first_name%>
                                    </a>
                                    <ul class="dropdown-menu" >
                                        <li>
                                            <a href="{{url('myProfile')}}">
                                                <i class="fa fa-user"></i> &nbsp; &nbsp; &nbsp;Perfil
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{url('change_password')}}">
                                            <i class="fa fa-lock"></i>
                                             &nbsp; &nbsp; &nbsp;Cambiar Contraseña</a>
                                        </li>
                                        <li>
                                            <a  class="hidden" href="{{url('orders')}}">
                                               <i class="fa fa-list"></i> &nbsp; &nbsp; &nbsp;Mis Ordenes
                                            </a>
                                        </li>
                                        <li ng-click="cerrarSesion()" class="dropdown-menu__close">
                                        <a href="">
                                            
                                        
                                                <span class="icon icon-close"></span>Cerrar Sesion
                                                    </a>
                                            <form id="logout-form" action="{{ url('/auth/logout/simple') }}" method="GET" style="display: none;">
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    
                        <li ng-if="!usuario">
                            <a href="#"  data-toggle="modal" data-target="#modalLoginForm"><span class="icon icon-person"></span>Iniciar Sesion</a>
                        </li>
                          <li ng-if="!usuario">
                            <a href="#"  data-toggle="modal" data-target="#modalRegisterForm"><span class="icon icon-person_add"></span>Registrarse</a>
                        </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="mobile-menu-off">
</div>