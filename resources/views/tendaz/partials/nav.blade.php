<nav class="navbar navbar-default " role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a  href="#" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                <i style="color: white; font-size: 16px" class="fa fa-bars" aria-hidden="true"></i>
            </a>
            <a href="{{url('/')}}" class="navbar-brand navbar-logo">
                <img src="{{elixir('tendaz/img/logo_tendaz.png')}}" height="90%"  alt="Tendaz.com | tu tienda virtual">
            </a>
        </div>
        <div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown ">
                    <a href="{{url('/')}}" style="color: white !important;">
                        @if(!isset(explode("/",request()->url())[5]))Inicio @endif</a>
                </li>

                <li class="dropdown">
                    <a href="{{url('planes')}}" style="color: white !important;">Planes</a>
                </li>
                <li class="dropdown">
                    <a href="{{url('contacto')}}" style="color: white !important;">Contactanos</a>
                </li>

                <li class="dropdown" >
                    <a href="{{url('login')}}"  style="color: white !important;">Entrar a mi tienda </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
