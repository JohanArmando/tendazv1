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
            <div class="col-md-4 text-center" style="padding-left: 0px !important;
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

                            <strong>0%</strong> POR CADA TRANSACCIÓN
                        </li>
                        <li class="">

                            Enlazar Dominio Propio
                        </li>
                        <li class="">

                            Integración MercadoLibre
                        </li>
                        <li class="">

                            Cupones de Descuento
                        </li>
                        <li class="">

                            Sub dominio gratis de tendaz.com
                        </li>
                        <li class="">

                            SSL Incluido sin costo
                        </li>
                        <li class="">

                            Productos Ilimitados
                        </li>
                        <li class="">

                            Diseños personalizados
                        </li>
                        <li class="">

                            Carga Masiva
                        </li>

                    </ul>
                </div>

            </div>
        </div>
        <!-- END -->
        <!-- Plan 2 -->
        <div class="col-md-4 text-center" style="padding-left: 0px !important;
        padding-right: 0px !important; margin-top: -50px !important;">
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

                    <b>0%</b> POR CADA TRANSACCIÓN
                </li>
                <li class="">

                    Todos los beneficios anteriores más
                </li>
                <li class="">

                    Estadísticas avanzadas
                </li>
                <li class="">

                    Configuración de tipo s de usuarios (administradores, proveedores, clientes)
                </li>
                <li class="">

                    Edición de templates (personalización)
                </li>
                <li class="">

                    e­mail marketing
                </li>
                <li class="">

                    SEO Avan
                </li>

            </ul>
        </div>

    </div>
</div>
<!-- END -->

<!-- Plan 3 -->
<div class="col-md-4 text-center" style="padding-left: 0px !important;
padding-right: 0px !important;">
<div id="plan-3" class="panel-pricing">
    <div class="panel-heading">
        <div class="panel-body text-center" style="font-size: 18px">

            <h3><img src="{{asset('tendaz/img/icon-plans.png')}}" style="max-height: 32px; margin-top: -2%" > Premiun
            </h3>
            <h1>$45 USD</h1> Por mes
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

                <b>0%</b> POR CADA TRANSACCIÓN
            </li>
            <li class="">

                Todos los beneficios anteriores más
            </li>
            <li class="">

                Descarga de Aplicativo Móvil de tu tienda para que gestiones tu tienda y tus usuarios puedan comprar a través de ella desde cualquier dispositivo
            </li>
            <li class="">

                Monedas e Idiomas diversos pa
            </li>

        </ul>
    </div>

</div>
</div>
<!-- END -->
@include('admin.partials.message') 
@endsection 
@section('scripts') 
@stop