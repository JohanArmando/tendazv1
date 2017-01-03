<div class="container" >
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" >

        </div>
        <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right">
            <div class="account link-inline  hidden mobile-menu-on"  ng-if="usuario">
                <div class="dropdown text-right">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span class="icon icon-person "></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu--xs-full">
                        <li>
                            <a href="{{url('/')}}">
                            <i class="icon icon-face"></i>&nbsp;<%usuario.personal_info.first_name%>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('myProfile')}}">
                                <i class="icon icon-person"></i>&nbsp;Perfil
                            </a>
                        </li>

                        <li>
                            <a href="{{url('change_password')}}">
                                <i class="icon icon-lock"></i>&nbsp;Cambiar Contraseña</a>
                        </li>
                        <li>
                            <a  class="hidden" href="{{url('orders')}}">
                                <i class="icon icon-list"></i>&nbsp;Mis Ordenes
                            </a>
                        </li>
                        <li ng-click="cerrarSesion()">
                            <a href="">
                                <i class="icon icon-close"></i>&nbsp;Cerrar Sesion
                            </a>
                            <form id="logout-form" action="{{ url('/auth/logout/simple') }}" method="GET" style="display: none;">
                            </form>
                        </li>
                        <li class="dropdown-menu__close">
                            <a href="{{ url('/') }}">
                                <span class="icon icon-close"></span>Cerrar</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="account-row-list pull-right mobile-menu-off">
                <ul>
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