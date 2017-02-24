<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servientrega Store</title>
    <link rel="stylesheet" href="{{asset('servientrega/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('servientrega/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <script src="{{asset('servientrega/js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('servientrega/js/bootstrap.min.js')}}"></script>
</head>
<body>
<div id="fondo">

    <div class="col-lg-12 container contenido_general">

        <header class="col-lg-12">
            <div id="logo" class="col-lg-2 col-md-2 col-sm-4"> <a href="{{url('/')}}">
                    <img src="{{asset('servientrega/image/logo.png')}}" alt=""></a> </div>
            <nav class="col-lg-10 col-md-10 col-sm-8">
                <button type="button" class="btn btn-link">NOSOTROS</button>
                <button type="button" class="btn btn-link">PLANES</button>
                <button type="button" class="btn btn-servientrega">CONT&Aacute;CTENOS</button>
                <button type="button" class="btn btn-negro">LOGIN</button>
            </nav>
        </header>

        <section class="seccion_principal col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-7"><img src="{{asset('servientrega/image/personaje.png')}}" alt="" class="img-responsive personaje"></div>
            <div class="col-lg-5">
                <div  id="error-div" ></div>
                {!! Form::open(['url' => url('auth/login') , 'method' => 'POST' , 'class' => 'formulario' , 'id' => "form-login", 'data-toggle'=>"validator" , 'role'=>"form"]) !!}
                <h1>Servientrega Store</h1>
                <h1>&#161;Tu tienda virtual!</h1>
                <div class="form-group has-feedback">
                    <input  type="email" class="form-control" name="email" placeholder="Email" required id="email" value="">
                    <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback">
                    <input  type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
                    <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                </div>
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-shopping-cart"></i> Iniciar Sesion
                </button>
                <input type="hidden" value="1" name="remember">
                {!! Form::close() !!}
            </div>
        </section>
    </div>
    <footer class="col-lg-12">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <ul  class="social net_sooc">
                    <li> <i class="glyphicon glyphicon-map-marker" id="colorGlyphicon"></i> : Avenida Calle 6 # 34A-11 Bogot&aacute; </li> <br>

                    <li> <i class="glyphicon glyphicon-envelope" id="colorGlyphicon"></i> : Maria.cardoso@servientrega.com  </li><br>

                    <li> <i class="glyphicon glyphicon-phone" id="colorGlyphicon"></i> : 3174333875 </li>
                </ul>
                <br>
                <ul class="social net_sooc">
                    <li> <a href="https://www.facebook.com/Servientregacs/" target="_blank"> <i class=" fa fa-facebook">   </i> </a> </li>
                    <li> <a href="https://twitter.com/ServientregaCS" target="_blank"> <i class="fa fa-twitter">   </i> </a> </li>
                    <li> <a href="https://www.instagram.com/servientregacs/" target="_blank"> <i class="fa fa-instagram">   </i> </a>
                    </li>
                    <li><a href="https://www.youtube.com/channel/UCmTL1WyVESXfPLcjWU7_j8A" target="_blank"> <i class="fa fa-youtube"></i></a></li>

                    <li>
                        <a href="https://co.linkedin.com/company/servientrega" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 footer_der"> <img src="{{asset('servientrega/image/logo_de_servientrega_admin.png')}}" alt="">
            </div>
        </div>
    </footer>
</div>
</body>
</html>