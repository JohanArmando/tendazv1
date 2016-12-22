  <nav class="navbar navbar-default">
    <div class="container-fluid nopad_left">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
     <!--  <a class="navbar-brand" href="#se_container-1" data-menuanchor="se_container-1"><img src="{{asset('servientrega/img/logo-small.png')}}" class="img-responsive"></a> --> 
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse menu_part nopad_left" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav container-menu container-menu_icons">
   <li  data-menuanchor="se_container-1"><a  class="nopad brand_anchor" href="#se_container-1" ><img src="{{asset('servientrega/img/icono_servi.png')}}" class="brand_logo_image img-responsive"></a></li> 
          <li  data-menuanchor="se_container-2"><a href="#about">Nosotros <span class="sr-only">(current)</span></a></li>
          <li><a href="{{url('planes')}}">Planes</a><li>
        </ul>
       
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{url('login')}}">Login</a></li>
          <li><a href="{{url('contacto')}}">Contactenos</a></li>
          
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>