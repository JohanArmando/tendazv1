@section('title')
Medios de pago
@stop
@extends('layouts.administrator')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('administrator/css/alternative/panel-caption.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('administrator/css/alternative/modal-preloader.css')}}">
    @stop
    @section('content')
    <div ng-app="appPagos" ng-controller="controladorPagos">
        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title">
                <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/credit-cards-payment.png')}}">&nbsp; Medios de pagos</h4>
            </div>
            <div class="page-header-section">
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="{{url('admin')}}" style="color: #adadad;">Inicio</a></li>
                        <li><a href="#" style="color: orange">Medios de pagos</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
                <div class="preload hide">
                    <i class="fa fa-spinner fa-pulse fa-5x fa-fw preload_image"></i>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-6" ng-repeat="payment in payments">
                    <div class="panel panel-default">
                            <div class="caption">
                                <h4 style="color: #f26522">Metodo de Pago  @{{ payment.name }}</h4>
                                <p>
                                    Costo por transaccion : <strong>@{{ payment.cost_by_trans_cre }}</strong>
                                    <br ng-if="payment.cost != '' ">
                                    <!-- <strong  ng-if="payment.cost != '' ">
                                        Costo minimio de la Transaccion es de : @{{ payment.cost }}
                                    </strong> -->
                                    Tiempo para retirar el dinero : 
                                    <strong>@{{ payment.days }} Dias</strong>
                                </p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPayment" ng-click="modal_payment(payment , true)" ng-if="payment.data == null || payment.data.avaliable == 0">
                                    Activar medio de Pago
                                </button>
                                <button type="button" class="btn btn-danger"  ng-click="deactive(payment)" ng-if="payment.data != null && payment.data.avaliable == 1">
                                    Desactivar medio de Pago
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPayment" ng-click="modal_payment(payment , false)" ng-if="payment.data != null && payment.data.avaliable == 1">
                                    Modificar datos
                                </button>
                            </div>
                            <img class="img-responsive" ng-src="@{{ BASEURL + '/administrator/image/payments/' + payment.path }}"  alt="...">
                    </div>
                </div>
        </div>
            <!--Modal para activar medios de pago-->
            <div id="modalPayment"  class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aira-label="Close">
                            <span aira-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title text-center">Activar @{{ payment.name }} como medio de pago de tus ordenes</h4>
                        </div>
                        <div class="modal-body" style="width:100%; height: 50%">

                        </div>
                        <div class="modal-footer">
                            <div class="text-center">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" ng-click="submit()">@{{ payment.accion }} @{{ payment.name }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin-->
            </div>
            <div class="page-end-space"></div>
        </div>
    </div> <!-- No se borra este DIV -->
@endsection
@section('scripts')
<script src="{{ asset('administrator/angular/angular.min.js') }}"></script>
<script src="{{ asset('administrator/angular/moduloPagos.js') }}"></script>
@stop