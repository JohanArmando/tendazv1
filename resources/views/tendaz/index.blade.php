@extends('layouts.tendaz')
@section('css')
@endsection
@section('content')
    <style type="text/css">
        .big_container{
            overflow: hidden;
            position: relative;
            /*margin-top: 4%;*/
            min-height:  calc(100vh - 52px) ;
        }
        .big_container:after{

            background-image: url('{{elixir('tendaz/images/bground.png')}}');
            background-size: cover;
            position: absolute;
            content: " ";
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: block;
            z-index: -1;
            filter: blur(5px);
        }
        .big_container:before{
            position: absolute;
            content: " ";
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: block;
            z-index: 0;
            background: rgba(0, 0, 0, 0.41);
        }
    </style>
    <div class="row">
        <div class="big_container" >
            <div class="row">
                <div class="col-md-10 col-md-offset-2" >
                    <div class="col-md-3 hidden-xs hidden-sm" style="margin-top:5%">
                        <div class="text-center">
                            <div class="contenedor">
                                <a href="{{url('crea-tu-tienda')}}">
                                    <img  class="img-responsive" src="{{elixir('tendaz/images/icons/money.svg')}}" ><br>
                                    <h5>Incrementa tus ingresos</h5>
                                </a>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="contenedor">
                                <a href="{{url('crea-tu-tienda')}}">
                                    <img  class="img-responsive" src="{{elixir('tendaz/images/icons/welcome.svg')}}" ><br>
                                    <h5>Registrate</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-offset-0 hidden-xs hidden-sm" style="margin-top:5%">
                        <div class="text-center">
                            <div class="contenedor">
                                <a href="{{url('crea-tu-tienda')}}">
                                    <img  class="img-responsive" src="{{elixir('tendaz/images/icons/building.svg')}}" ><br>
                                    <h5>Quienes somos?</h5>
                                </a>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="contenedor">
                                <a href="{{url('crea-tu-tienda')}}">
                                    <img  class="img-responsive" src="{{elixir('tendaz/images/icons/success.svg')}}" ><br>
                                    <h5>Casos de exito</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default" style="margin-top: 25%">
                            <div class="text-center">
                                <img src="{{elixir('tendaz/img/etiqueta-tendaz-home.gif')}}" class="img-responsive"
                                     style="max-height: 180px; margin-top: -9px;padding-left: 10%">
                            </div>
                            <div class="panel-body">
                            </div>

                            <div class="panel-body">
                                @if(count($errors) > 0)
                                    <div class="alert alert-info">
                                        <h5>Tienes {{ count($errors) }} error{{ count($errors) == 1 ? '' :'es' }}</h5>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                                        @include('tendaz.partials.register')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row" >
        <div class="container" style="width: 100%; background-color: #f7f7f7; margin-top: 4%">
            <div class="row">
                 <div class="col-md-10 col-md-offset-2">
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <div class="text-center">
                            <div class="contenedor">
                                <a href="{{url('crea-tu-tienda')}}">
                                    <img  class="img-responsive" src="{{elixir('tendaz/images/icons/money.svg')}}" ><br>
                                    <h5>Incrementa tus ingresos</h5>
                                </a>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="contenedor">
                                <a href="{{url('crea-tu-tienda')}}">
                                    <img  class="img-responsive" src="{{elixir('tendaz/images/icons/welcome.svg')}}" ><br>
                                    <h5>Registrate</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-offset-0 hidden-xs hidden-sm">
                        <div class="text-center">
                            <div class="contenedor">
                                <a href="{{url('crea-tu-tienda')}}">
                                    <img  class="img-responsive" src="{{elixir('tendaz/images/icons/building.svg')}}" ><br>
                                    <h5>Quienes somos?</h5>
                                </a>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="contenedor">
                                <a href="{{url('crea-tu-tienda')}}">
                                    <img  class="img-responsive" src="{{elixir('tendaz/images/icons/success.svg')}}" ><br>
                                    <h5>Casos de exito</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default" style="margin-top: 20px">
                            <div class="text-center">
                                <img src="{{elixir('tendaz/img/etiqueta-tendaz-home.gif')}}" class="img-responsive"
                                     style="max-height: 180px; margin-top: -9px;padding-left: 10%">
                            </div>
                            <div class="panel-body">
                            </div>

                            <div class="panel-body">
                                @if(count($errors) > 0)
        <div class="alert alert-info">
            <h5>Tienes {{ count($errors) }} error{{ count($errors) == 1 ? '' :'es' }}</h5>
                                    </div>
                                @endif
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                    @include('tendaz.partials.register')
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="container-orange" >
<div class="row">
<div class="col-md-4 col-md-offset-2" style="margin-top: 3%; margin-left: 18%">
<h1  style="color: #FFFFFF;
font-weight: bold;
margin-bottom: 6%;font-size: 20px">
No te abandonamos!
</h1>
<p  style="color: #FFFFFF; font-size: 18px;">
Con nuestros video tutoriales, eBook's y capacitaciones en directo aprenderas a vender de manera rapida y efectiva tus productos con tu Tenda.
</p>
<br>
<p  style="color: #FFFFFF; font-size: 18px;">
Ademas, tendras el asesoramiento de todo el personal de , quienes estaran disponibles para tu negocio dia a dia.
</p>
</div>
<div  class="col-md-5 " style="margin-left: 1%;">
<div class="text-center">

<a href="#"><img src="{{elixir('tendaz/img/iconoEbook.gif')}}" style="width: 200px; ">
                        <p style="color: #FFFFFF;"> &nbsp; E-BOOK's</p></a>
                    <a href="#"><img src="{{elixir('tendaz/img/iconostutorial.gif')}}" style="width: 200px; ">
                        <p style="color: #FFFFFF;">&nbsp; TUTORIALES</p></a>

                </div>
            </div>
        </div>
    </div>

    <div class="container-home">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1 class="text-center">
                    En tan solo 3 pasos...
                </h1>
                <p class="text-center" style="font-size: 18px; margin-bottom: 3%">Crear una tienda es tan facil que te sorprenderas.</p>
            </div>
            <div class="col-md-10 col-md-offset-2">
                <div class="col-md-3">
                    <div class="label-tendaz">
                        <div class="label-point"></div>
                        <div class="label-tendaz-header text-center">1</div>
                        <img width="100px" class="img-responsive" src="{{elixir('tendaz/images/icons/store.svg')}}" >
                        <span>Crea tu tienda</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="label-tendaz">
                        <div class="label-point"></div>
                        <div class="label-tendaz-header">2</div>
                        <img width="100px" class="img-responsive" src="{{elixir('tendaz/images/icons/product.svg')}}" >
                        <span>Sube tus productos</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="label-tendaz">
                        <div class="label-point"></div>
                        <div class="label-tendaz-header text-center">3</div>
                        <img width="100px" class="img-responsive" src="{{elixir('tendaz/images/icons/sell.svg')}}" >
                        <span>Comienza a vender!</span>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
@section('js')
@endsection