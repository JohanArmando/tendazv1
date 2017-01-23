@extends('layouts.administrator')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('administrator/css/plans-account2.css')}}">
@stop 
@section('content')
<div class="page-header page-header-block">
    <div class="page-header-section">
        <h4 class="title semibold"><i class="fa fa-credit-card"></i>&nbsp; Planes</h4>
    </div>
    <div class="page-header-section">
        <!-- Toolbar -->
        <div class="toolbar">
            <ol class="breadcrumb breadcrumb-transparent nm">
                <li><a href="{{url('admin')}}" style="color: grey;">Inicio</a></li>
                <li class="active" style="color: orange;">Planes</li>
            </ol>
        </div>
    </div>
</div>
<div style="margin-bottom: 10px;"></div>
<div class="clearfix"></div>
<div class="container">
    <div class="clearfix"></div>
    <div style="margin-bottom: 10px;"></div>
    <div class="row">
        <div class="col-md-12">
            <!-- Plan 1 -->
            <div class="col-md-3 col-md-offset-1 text-center" style="padding-left: 0px !important;
            padding-right: 0px !important;">
            <div id="plan-1" class="panel-pricing">
                <div class="panel-heading">
                    <div class="panel-body text-center" style="font-size: 18px">

                        <h3><img src="{{asset('tendaz/img/icon-plans.png')}}" style="max-height: 32px; margin-top: -2%" > Basic
                        </h3>
                        <h1>$14 USD</h1> Por mes
                        <br>
                        <br>
                        <a class="btn btn-default" style="background-color: #337ab7; color: white;">
                            Probar Plan
                        </a>
                    </div>

                    <br>
                    <br>
                    <ul class="text-left">
                        <br>
                        <br>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            <strong>0%</strong> POR CADA TRANSACCIÓN
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            Enlazar Dominio Propio
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            Integración MercadoLibre
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            Cupones de Descuento
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            Sub dominio gratis
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            SSL Incluido sin costo
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            Productos Ilimitados
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            Diseños personalizados
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            Carga Masiva
                        </li>

                    </ul>
                </div>

            </div>
            </div>
            <!-- END -->

            <!-- Plan 2 -->
            <div class="col-md-3 text-center" style="padding-left: 0px !important;
            padding-right: 0px !important; margin-top: -50px !important;z-index: 1;">
            <div id="plan-2" class="panel-pricing" style="-webkit-box-shadow: 0px 0px 33px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 33px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 33px 0px rgba(0,0,0,0.75);">
            <div class="panel-heading">
                    <div class="panel-body text-center" style="font-size: 18px">

                        <h3><img src="{{asset('tendaz/img/icon-plans.png')}}" style="max-height: 32px;" > Estandar
                        </h3>
                        <h1>$29 USD</h1> Por mes
                        <br>
                        <br>
                        <a class="btn btn-default" style="background: #337ab7; color: white;">
                            Probar Plan
                        </a>
                    </div>

                    <br>
                    <br>
                    <ul class="text-left">
                        <br>
                        <br>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            <b>0%</b> POR CADA TRANSACCIÓN
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            Todos los beneficios anteriores
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            Estadísticas avanzadas
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            Configuración de tipos de usuarios (administradores, proveedores, clientes)
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            Edición de templates (personalización)
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            E­mail marketing
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            SEO Avanzado
                        </li>

                    </ul>
                </div>
            </div>
            </div>
            <!-- END -->

            <!-- Plan 3 -->
            <div class="col-md-3 text-center" style="padding-left: 0px !important;
            padding-right: 0px !important;">
            <div id="plan-3" class="panel-pricing">
                <div class="panel-heading">
                    <div class="panel-body text-center" style="font-size: 18px">

                        <h3><img src="{{asset('tendaz/img/icon-plans.png')}}" style="max-height: 32px; margin-top: -2%" > Premiun
                        </h3>
                        <h1>$45 USD</h1> Por mes
                        <br>
                        <br>
                        <a class="hidden btn btn-default" style="background: #337ab7; color: white;">
                            Probar Plan
                        </a>
                        <a class="btn btn-default" style="background: rgba(0, 68, 204, 0.26);color: white">Proximamente</a>
                    </div>

                    <br>
                    <br>
                    <ul class="text-left">
                        <br>
                        <br>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            <b>0%</b> POR CADA TRANSACCIÓN
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            Todos los beneficios anteriores
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            Descarga de Aplicativo Móvil de tu tienda para que gestiones tu tienda y tus usuarios puedan comprar a través de ella desde cualquier dispositivo
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            Cambio de Moneda e Idiomas
                        </li>
                        <li class="">
                            <i class="fa fa-angle-right" style="font-size: 15px"></i>
                            Maxibot (Inteligencia Artificial)
                        </li>
                        <li style="height: 65px">

                        </li>

                    </ul>
                </div>
            </div>
            </div>
            <!-- END -->
            <div class="col-md-12"><br></div>
        </div>
    </div>
</div>
@include('admin.partials.message') 
@endsection 
@section('scripts') 
@stop