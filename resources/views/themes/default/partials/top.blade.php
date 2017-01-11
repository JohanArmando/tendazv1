<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pull-left hidden-xs">
                    <!-- number phone-->
                    <a href="#" class="{{ !$shop->store->number_phone ? 'hidden' : '' }}">
                        <i class="fa fa-phone"> </i> ({{$shop->store->number_phone}})</a>
                </div>
                <div class="pull-left hidden-xs">
                    <!-- email-->
                    <a href="#" class="{{ !$shop->store->address_1 ? 'hidden' : '' }}">
                        <i class="fa fa-envelope"></i> {{$shop->store->address_1}}</a>
                </div>
                <div class="pull-right header-account">
                    <!-- session -->
                    <div class="dropdown" ng-cloak="">
                        <a ng-if="usuario" href="#" class="dropdown-toggle" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="fa fa-user"> </i> <%usuario.personal_info.first_name%> <i class="fa fa-caret-down"></i> </span>
                        </a>
                        <ul ng-if="usuario" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccount">
                        <li><a href="{{url('myProfile')}}"><i class="fa fa-user"></i> Perfil</a></li>
                        <li><a href="{{url('change_password')}}"><i class="fa fa-lock"></i> Cambiar Contraseña</a></li>
                        <li ng-click="cerrarSesion()">
                            <a href="">
                                <i class="fa fa-sign-in"></i>&nbsp;Cerrar Sesion
                            </a>
                            <form id="logout-form" action="{{ url('/auth/logout/simple') }}" method="GET" style="display: none;">
                            </form>
                        </ul>
                    </div>
                    <a  ng-if="!usuario" href="{{url('auth/login')}}">
                        <span><i class="fa fa-user"></i> Iniciar Sesion</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>