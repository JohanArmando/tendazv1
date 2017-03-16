@extends('layouts.administrator')
    @section('title')
        Planes
    @endsection
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
        {{-- <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Plan 1 -->

                    @foreach($plans as $plan)
                        <div class="col-md-4 {{ $plan->plan->main ? 'active_plan':'' }} text-center " style="padding-left: 0px !important;padding-right: 0px !important;">
                            <div id="plan-1" class="panel-pricing {{ $plan->plan->main ? 'shadow_plan':'' }}"  >
                                <div class="panel-heading">
                                    <div class="panel-body text-center" style="font-size: 18px">

                                        <h3><img src="{{asset('tendaz/img/icon-plans.png')}}" style="max-height: 32px; margin-top: -2%" > {{ $plan->plan->name }}
                                        </h3>
                                        <h1>$ {{ $plan->getPrice() }} USD</h1> Por mes
                                        <br>
                                        <br>

                                        @if($plan->plan->active)
                                            {!! Form::open(['url' => ['admin/account/plans/swap' , $plan->id] , 'method' => 'POST']) !!}
                                                <button type="submit" class="btn btn-{{ $shop->subscription()->plan->plan_id ==  $plan->plan->id ? 'success' : 'info' }}" >
                                                    {{ $shop->subscription()->plan->plan_id <  $plan->plan->id ? 'Subir Plan' : ($shop->subscription()->plan->plan_id ==  $plan->plan->id ? 'Plan actual' :'Bajar Plan')     }}
                                                </button>
                                            {!! Form::close() !!}
                                        @else
                                            <a class="btn btn-default" disabled="disabled" style="background-color: #337ab7; color: white;">
                                                Proximamente
                                            </a>
                                        @endif
                                    </div>
                                    <br>
                                    <br>
                                    <ul class="text-left">
                                        <br>
                                        <br>
                                        @foreach($plan->plan->features as $feature)
                                            <li class="">
                                                <i class="fa fa-angle-right" style="font-size: 15px"></i>
                                                {{ $feature->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <div class="col-md-12"><br></div>
                </div>
            </div>
        </div> --}}
        <div class="container" style="width: 100%; background-color: #f7f7f7;">
            <section class="text-center heading-description">
                <h1>Cambiar Plan</h1>
                <p class="MainByline">
                    Sin obligaciones. Cambia de plan en cualquier momento. Incrementa tus ganancias!
                </p>
            </section>



              <div class="row">
                <div class="col-md-offset-2 col-md-8">
                  @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                </div>

                <div class="col-md-4 col-md-offset-2 text-center"><br><br>

                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 item-principal">
                        <p>M&Oacute;DULO DE PRODUCTOS</p>
                    </div>
                    <div class="col-md-4 col-xs-6 col-md-offset-2 items">
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
                    <div class="col-md-8 col-md-offset-2 item-principal">
                        <p>M&Oacute;DULO DE VENTAS</p>
                    </div>
                    <div class="col-md-4 col-xs-6 col-md-offset-2 items">
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
                    <div class="col-md-8 col-md-offset-2 item-principal">
                        <p>M&Oacute;DULO DE ClIENTES</p>
                    </div>
                    <div class="col-md-4 col-xs-6 col-md-offset-2 items">
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
                    <div class="col-md-8 col-md-offset-2 item-principal">
                        <p>M&Oacute;DULO DE MARKETING</p>
                    </div>
                    <div class="col-md-4 col-xs-6 col-md-offset-2 items">
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
                    <div class="col-md-8 col-md-offset-2 item-principal">
                        <p>M&Oacute;DULO DE DISE&Ntilde;O</p>
                    </div>
                    <div class="col-md-4 col-xs-6 col-md-offset-2 items">
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
                    <div class="col-md-3 col-xs-6 col-md-offset-3 items"></div>
                    <div class="col-md-2 col-xs-3 text-center items">
                        @foreach($plans as $plan)
                            @if($plan->id == 7)

                                  {!! Form::open(['url' => ['admin/account/plans/swap' , $plan->id] , 'method' => 'POST']) !!}
                                      <button type="submit" class="btn btn-{{ $shop->subscription()->plan->plan_id ==  $plan->plan->id ? 'success' : 'info' }}" >
                                          {{ $shop->subscription()->plan->plan_id <  $plan->plan->id ? 'Subir Plan' : ($shop->subscription()->plan->plan_id ==  $plan->plan->id ? 'Plan actual' :'Bajar Plan')     }}
                                      </button>
                                  {!! Form::close() !!}
                            @endif

                        @endforeach
                    </div>
                    <div class="col-md-2 col-xs-3 text-center items">
                      @foreach($plans as $plan)
                          @if($plan->id == 10)

                                {!! Form::open(['url' => ['admin/account/plans/swap' , $plan->id] , 'method' => 'POST']) !!}
                                    <button type="submit" class="btn btn-{{ $shop->subscription()->plan->plan_id ==  $plan->plan->id ? 'success' : 'info' }}" >
                                        {{ $shop->subscription()->plan->plan_id <  $plan->plan->id ? 'Subir Plan' : ($shop->subscription()->plan->plan_id ==  $plan->plan->id ? 'Plan actual' :'Bajar Plan')     }}
                                    </button>
                                {!! Form::close() !!}
                          @endif

                      @endforeach
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 item-principal">
                        <p>M&Oacute;DULO DE CONFIGURACI&Oacute;N</p>
                    </div>
                    <div class="col-md-4 col-xs-6 col-md-offset-2 items">
                        <p>Pasarelas de pago(mercadopago o personalizada).</p>
                        <p>Envios a trav&eacute;s de servientrega.</p>
                        <p>Subdomio gratis de Tendaz.com.</p>
                        <p>Integraci&oacute;n con mercadolibre.</p>
                        <p>SEO avanzado (url personalizada).</p>
                        <p>Configuraci&oacute;n de redes sociales.</p>
                        <p>Cont&aacute;ctanos del cliente.</p>
                        <p>Multiples dominios.</p>
                    </div>
                    <div class="col-md-2 col-xs-3 text-center items">
                        <p><i class="fa fa-check"></i></p>
                        <p><i class="fa fa-check"></i></p>
                        <p><i class="fa fa-check"></i></p>
                        <p><i class="fa fa-check"></i></p>
                        <p><i class="fa fa-check"></i></p>
                        <p><i class="fa fa-check"></i></p>
                        <p><i class="fa fa-check"></i></p>
                        <p><i class="fa fa-times" style="color: red"></i></p>
                    </div>
                    <div class="col-md-2 col-xs-3 text-center items">
                        <p><i class="fa fa-check"></i></p>
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
                    <div class="col-md-8 col-md-offset-2 item-principal">
                        <p>M&Oacute;DULO DE ESTAD&Iacute;STICAS</p>
                    </div>
                    <div class="col-md-4 col-xs-6 col-md-offset-2 items">
                        <p>Estadisticas avanzadas.</p>
                        <p>Producto con mayor facturaci&oacute;n.</p>
                        <p>Productos m&aacute;s vendidos.</p>
                    </div>
                    <div class="col-md-2 col-xs-3 text-center items">
                        <p><i class="fa fa-times" style="color: red"></i></p>
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
                    <div class="col-md-8 col-md-offset-2 item-principal">
                        <p>BUSINESS INTELLIGENT</p>
                    </div>
                    <div class="col-md-4 col-xs-6 col-md-offset-2 items">
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
                    <div class="col-md-8 col-md-offset-2 item-principal">
                        <p>APLICATIVO MOVIL PARA SU TIENDA</p>
                    </div>
                    <div class="col-md-4 col-xs-6 col-md-offset-2 items">
                        <p>App movil de tienda.</p>
                    </div>
                    <div class="col-md-2 col-xs-3 text-center items">
                        <p><i class="fa fa-times" style="color: red"></i></p>
                    </div>
                    <div class="col-md-2 col-xs-3 text-center items">
                        <p><i class="fa fa-check"></i></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 item-principal">
                        <p>M&Oacute;DULO DE HERRAMIENTAS Y AYUDA</p>
                    </div>
                    <div class="col-md-4 col-xs-6 col-md-offset-2 items">
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

                <div class="row">
                    <div class="col-md-3 col-xs-6 col-md-offset-3 items"></div>
                    <div class="col-md-2 col-xs-3 text-center items">
                      @foreach($plans as $plan)
                          @if($plan->id == 7)

                                {!! Form::open(['url' => ['admin/account/plans/swap' , $plan->id] , 'method' => 'POST']) !!}
                                    <button type="submit" class="btn btn-{{ $shop->subscription()->plan->plan_id ==  $plan->plan->id ? 'success' : 'info' }}" >
                                        {{ $shop->subscription()->plan->plan_id <  $plan->plan->id ? 'Subir Plan' : ($shop->subscription()->plan->plan_id ==  $plan->plan->id ? 'Plan actual' :'Bajar Plan')     }}
                                    </button>
                                {!! Form::close() !!}
                          @endif

                      @endforeach
                    </div>
                    <div class="col-md-2 col-xs-3 text-center items">
                      @foreach($plans as $plan)
                          @if($plan->id == 10)

                                {!! Form::open(['url' => ['admin/account/plans/swap' , $plan->id] , 'method' => 'POST']) !!}
                                    <button type="submit" class="btn btn-{{ $shop->subscription()->plan->plan_id ==  $plan->plan->id ? 'success' : 'info' }}" >
                                        {{ $shop->subscription()->plan->plan_id <  $plan->plan->id ? 'Subir Plan' : ($shop->subscription()->plan->plan_id ==  $plan->plan->id ? 'Plan actual' :'Bajar Plan')     }}
                                    </button>
                                {!! Form::close() !!}
                          @endif

                      @endforeach
                    </div>
                    <br>
                </div>

            </section>

        </div>


        @include('admin.partials.message')

    @endsection
    @section('scripts')
    @stop
