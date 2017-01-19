<header id="header" class="navbar">
    <div class="navbar-header ">
        <div class="visible-sm">
            <div class="logo-sm-responsive">
                <img src="{{ asset('administrator/image/logo/logo_header_responsiveBAK.png') }}" class="img-responsive" >
            </div>
        </div>
        <a class="navbar-brand" href="{{ url('/admin/').'/' }}">
            <span class="logo-text">
                <div class="col-md-12 col-xs-10 hidden-xs">
                    <img  src="{{ asset('administrator/image/logo/logo_headerBAK.png') }}" class="img-responsive" >
                </div>
                <div class="col-md-12 col-xs-10 visible-xs">
                    <img src="{{ asset('administrator/image/logo/logo_xs_white.png') }}" class="img-responsive" >
                </div>
            </span>
            <span id="LittleLogo" style="visibility: hidden;" class="logo-figure">
                <img src="{{ asset('administrator/image/logo/logo_header_responsiveBAK.png') }}" class="img-responsive" >
            </span>
        </a>
    </div>
    <div class="navbar-toolbar clearfix">
        <ul class="nav navbar-nav navbar-left">
            <li class="hidden-xs hidden-sm">
                <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" title="Minimize sidebar" onclick="check_nav();">
                    <span class="meta">
                        <span class="icon"></span>
                    </span>
                </a>
            </li>
            <li class="navbar-main hidden-lg hidden-md hidden-sm">
                <a href="javascript:void(0);" data-toggle="sidebar" data-direction="ltr" rel="tooltip" title="Menu sidebar">
                            <span class="meta">
                                <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                            </span>
                </a>
            </li>
        </ul>
        <div class="nav navbar-nav  navbar-brand" style="display: inline;">

        </div>

        <ul class="nav navbar-nav navbar-right hidden-xs">
            <li class="dropdown profile">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="meta">
                        @if(empty(auth('admins')->user()->image))
                            <span class="avatar"><img src="{{asset('administrator/image/avatar/avatar7.jpg')}}" class="img-circle" alt="" width="36px" height="36px"/></span>
                        @else
                            <span class="avatar"><img src="{{ asset("profile/".auth('admins')->user()->image) }}" class="img-circle" id="logo-avatar" alt="" width="36px" height="36px" /></span>
                        @endif
                        <span class="text hidden-xs hidden-sm pl5">{{ auth('admins')->user()->full_name }}</span>
                    </span>
                </a>
                <ul class="dropdown-menu" role="menu">

                    <li>
                        <a href="{{url('admin/account/preferences')}}"><span class="icon"><img  src="{{asset('administrator/image/icons/icons-derecha/account.png')}}"></span> Mi Cuenta</a>
                    </li>
                    <li class="hidden">
                        <a href="{{url('/admin/account/invoices/')}}">
                        <span class="icon"><img src="{{asset('administrator/image/icons/icons-derecha/receipt.png')}}"></span> Mis facturas
                        </a>
                    </li>
                    <hr/>
                    <li>
                        <a href="{{url('admin/account/plans')}}"><span class="icon"><img  src="{{asset('administrator/image/icons/icons-derecha/list.png')}}">
                        </span>Planes</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/account/checkout/finish/') }}"><span class="icon"><img  src="{{asset('administrator/image/icons/icons-derecha/credit-card.png')}}">&nbsp;&nbsp;Pagar mi plan</span></a>
                    </li>
                    <li>
                        <a href="{{url('admin/account/profile')}}"><span class="icon"><img   src="{{asset('administrator/image/icons/icons-derecha/user.png')}}"></span>Perfil</a>
                    </li>
                    <li>
                        <a href="{{url('admin/help')}}"><span class="icon"><img   src="{{asset('administrator/image/icons/icons-nav/info.png')}}"></span>Ayuda</a></li>
                        <li class="divider"></li>
                    <li>
                        <a href="{{ url('auth/logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            <span class="icon">
                                <img src="{{asset('administrator/image/icons/icons-derecha/logout.png')}}">
                            </span> Cerrar Sesion
                        </a>
                        <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</header>