<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pull-left hidden-xs">
                    <!-- number phone-->
                    <a href="#" class="{{ !$shop->phone_number || !$shop->phone_country ? 'hidden' : '' }}">
                        <i class="fa fa-phone"> </i> (+{{$shop->phone_country}}) {{$shop->phone_number}}</a>
                </div>
                <div class="pull-left hidden-xs">
                    <!-- email-->
                    <a href="mailto:info@tendaz.com" class="{{ !$shop->email_contact ? 'hidden' : '' }}">
                        <i class="fa fa-envelope"></i> {{$shop->email_contact}}</a>
                </div>
                <div class="pull-right header-account">
                    <!-- session -->
                    <div class="dropdown">
                        @if(auth('web')->check())
                        <a href="#" class="dropdown-toggle" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="fa fa-user"> </i> {{auth('customers')->user()->full_name}} <i class="fa fa-caret-down"></i> </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccount">
                        <li><a href="{{url('myProfile')}}"><i class="fa fa-user"></i> Perfil</a></li>
                        <li><a href="{{url('myProfile/change_password')}}"><i class="fa fa-lock"></i> Cambiar Contraseña</a></li>    
                           <li><a href="{{ url('/auth/logout/simple') }}"><i class="fa fa-sign-in"> </i> &nbsp;Cerrar sesion </a></li>
                        
                        </ul>
                            @else
                            <a href="{{url('auth/login')}}" id="dropdownAccount" aria-haspopup="true" aria-expanded="false">
                                <span><i class="fa fa-user"></i> Iniciar Sesion</span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>