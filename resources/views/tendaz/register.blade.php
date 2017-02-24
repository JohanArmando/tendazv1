@extends('layouts.tendaz')
    @section('css')
    @stop
    @section('content')
        <div class="container" style="width: 100%; background-color: #f7f7f7;">
            <section class="first-container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-default">
                            <div class="text-center">
                                <img src="{{asset('tendaz/img/etiqueta-tendaz-home.gif')}}" class="img-responsive" style="max-height: 180px; margin-top: -9px;padding-left: 20%">
                            </div>
                            <h4 class="text-center" style="padding-left: 10%; padding-right: 10%">Sin compromiso de compra podras comenzar a vender con tu tienda. No hay costo de cancelacion. Una vez finalicen los 15 dias de prueba recibiras un link para realizar el pago mensual de tu tienda y asi continuar sin interrupciones en el servicio.</h4>
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
            </section>
        </div>
    @endsection
    @section('script')
    @endsection