@section('title')
Tutorial Login con redes sociales
@stop
@extends('layouts.administrator')
    @section('css')
        <style>
            .social .form-group input{
                margin-bottom: 10px;
            }
        </style>
        @stop
    @section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title">
                <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/network.png')}}">&nbsp; Login con Redes Sociales
            </h4>
        </div>
        <div class="page-header-section">
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin')}}" style="color: grey;">Inicio</a></li>
                    <li><a href="#" style="color: darkgrey;">Marketing</a></li>
                    <li><a href="#" style="color: orange">Tutoriales Redes Sociales</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row" >
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title text-left">
                        <img src="{{asset('administrator/image/icons/icons-base/facebook.png')}}" height="20px"> Login con Facebook
                    </h4>
                </div>
                <div class="panel-body">
                    <p>Ingresar a este link <a href="https://developers.facebook.com/">Facebook Developer</a> para crear una aplicacion en facebook.</p>
                    <img src="{{asset('administrator/image/social_login/one.png')}}" alt="" class="img-responsive">
                    <hr><br>
                    <p>Inicia sesion con una cuenta de facebook en el boton "Entrar" que se encuentra en la parte superior derecha.</p>
                    <img style="margin-left: 8%" src="{{asset('administrator/image/social_login/two.png')}}" alt="" class="img-responsive">
                    <hr><br>
                    <p>Luego de iniciar sesion,en la parte posterior derecha deberas dar clic en el boton de registrar y
                        deberas aceptar "registrarte como developer" para deligenciar los siguientes datos:</p>
                    <img src="{{asset('administrator/image/social_login/three.png')}}" alt="" class="img-responsive">
                    <hr><br>
                    <p>En la pagina principal deberas dar clic en el boton "Empezar" del item Inicio de Sesion con Facebook.</p>
                    <img src="{{asset('administrator/image/social_login/four.png')}}" alt="" class="img-responsive">
                    <hr><br>
                    <p>En el campo de URI de redireccionamiento de OAuth v&aacute;lidos, deberas colocar la url de tu tienda
                    y Dar clic en el boton Guardar Cambios en la parte inferior izquierda.</p>
                    <img src="{{asset('administrator/image/social_login/five.png')}}" alt="" class="img-responsive">
                    <hr><br>
                    <p>Posteriormente debes dar clic en panel que se encuentra en la parte superior izquierda, asi podras
                        ver tu identificador y Clave, la cual vas a utilizar en tu tienda para el inicio de sesion con la red social facebook.</p>
                    <img src="{{asset('administrator/image/social_login/six.png')}}" alt="" class="img-responsive">
                    <hr><br>
                    <p>Finalmente copea y pega el identificador y clave para que tus clientes se puedan loguear con tu aplicacion de facebook.</p>
                    <img src="{{asset('administrator/image/social_login/seven.png')}}" alt="" class="img-responsive">
                    <hr><br>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title text-left">
                        <img src="{{asset('administrator/image/icons/icons-base/facebook.png')}}" height="20px"> Login con Google Plus
                    </h4>
                </div>
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>

    @endsection
    @section('scripts')

@stop