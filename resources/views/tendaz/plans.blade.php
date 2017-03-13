@extends('layouts.tendaz')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/plans-account2.css')}}">
@stop
@section('content')
<div class="container" style="width: 100%; background-color: #f7f7f7;">
    <section class="text-center heading-description">
        <h1>Nuestros planes</h1>
        <p class="MainByline">
            Sin obligaciones. Cambia de plan en cualquier momento. Incrementa tus ganancias!
        </p>
    </section>
    <section>
        <div class="row">
            <div class="col-md-3 col-md-offset-3"></div>
            <div class="col-md-4">
                <div class="col-md-6 col-xs-6 space">
                    <span class="name">Plan Estadar</span>
                    <span class="price">USD $25</span>
                </div>
                <div class="col-md-6 col-xs-6 space">
                    <span class="name">Plan Avanzado</span>
                    <span class="price">USD $40</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE INICIO</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Resumen de ventas plan de ventas.</p>
                <p>Plan de ordenes.</p>
                <p>Ordenes pendientes.</p>
                <p>Todas las ordenes.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE PRODUCTOS</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Cargue de productos ilimitados.</p>
                <p>Creacion de categorias ilimitadas.</p>
                <p>Importaci&oacute;n y exportaci&oacute;n masiva de productos.</p>
                <p>Variantes por articulo, talla, color entre otras.</p>
                <p>Publicaci&oacute;n de cupones.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE VENTAS</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Ordenes de pedido(fecha,total,comprador).</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE ClIENTES</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Administraci&oacute;n de clientes(total consumido).</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE MARKETING</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Inicio de sesion con redes sociales.</p>
                <p>Cupones de descuento.</p>
                <p>Email marketing.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE DISE&Ntilde;O</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Selecci&oacute;n m&uacute;ltiples templates.</p>
                <p>Cambiar logo.</p>
                <p>P&aacute;gina en construcci&oacute;n.</p>
                <p>Dise&ntilde;o responsivo.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE CONFIGURACI&Oacute;N</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Pasarelas de pago(mercadopago o personalizada).</p>
                <p>Envios a trav&eacute;s de servientrega.</p>
                <p>Subdomio gratis de Tendaz.com.</p>
                <p>Integraci&oacute;n con mercadolibre.</p>
                <p>SEO avanzado (url personalizada).</p>
                <p>Configuraci&oacute;n de redes sociales.</p>
                <p>Cont&aacute;ctanos del cliente.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>


        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE ESTAD&Iacute;STICAS</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Estadisticas avanzadas (graficos).</p>
                <p>Producto con mayor facturaci&oacute;n.</p>
                <p>Productos m&aacute;s vendidos.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>BUSINESS INTELLIGENT</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>An&aacute;lisis de tendencias, clientes y envio de emails con
                    promociones dependiendo las busquedas que realice el cliente
                    en el sitio.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-times" style="color: red"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>APLICATIVO MOVIL PARA SU TIENDA</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>App mobile de tienda.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-times" style="color: red"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE HERRAMIENTAS Y AYUDA</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Temas generales.</p>
                <p>Temas especificos con manuales.</p>
                <p>Chat de soporte.</p>
                <p>Vista de foros.</p>
                <p>Contacto de soporte.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

    </section>
    <section id="plans" class="hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    @foreach($plans as $plan)
                    <div class="col-md-4  text-center {{ $plan->main == 1 ? 'active_plan':'' }}" style="padding-left: 0px !important; padding-right: 0px !important;">
                        <div id="plan-1" class="panel-pricing {{ $plan->main == 1 ? 'shadow_plan':'' }}">
                            <div class="panel-heading">
                                <div class="panel-body text-center" style="font-size: 18px">
                                     <h3>
                                         <img src="" style="max-height: 32px; margin-top: -2%" >
                                         {{$plan->name}}
                                     </h3>
                                     <h1>${{ number_format($plan->price ) }} USD</h1>
                                      Por mes
                                      <br>
                                      <br>
                                      <a  class="btn btn-primary" href="{{ url("/") }}">
                                            Registrate
                                      </a>
                                 </div>
                                <br>
                                <br>
                                <ul class="text-left">
                                    <br>
                                    <br>
                                    @foreach(explode('***', $plan->description ) AS $keyplan)
                                      <li>{!!$keyplan!!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
    <script type="text/javascript">
        document.getElementById("plan-2").className += " selected";
    </script>
@endsection


