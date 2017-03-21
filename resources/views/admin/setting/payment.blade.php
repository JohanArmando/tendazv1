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
                                <h4 class="hidden-xs" style="color: #f26522">Metodo de Pago  @{{ payment.name }}</h4>
                                <span class="hidden-md hidden-lg" style="color: #f26522"><span class="hidden-xs">Metodo de Pago</span>  @{{ payment.name }}</span>
                                <p class="hidden-xs">
                                    Costo por transaccion : <strong>@{{ payment.cost_by_trans_cre }}</strong>
                                    <br ng-if="payment.cost != '' ">
                                    Tiempo para retirar el dinero : 
                                    <strong>@{{ payment.days }} Dias</strong>
                                </p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPayment" ng-click="modal_payment(payment , true);create =  true" ng-if="payment.data == null || payment.data.avaliable == 0">
                                    Activar <span class="hidden-xs">medio de Pago</span>
                                </button>
                                <button type="button" class="btn btn-danger"  ng-click="deactive(payment)" ng-if="payment.data != null && payment.data.avaliable == 1">
                                    Desactivar <span class="hidden-xs">medio de Pago</span>
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPayment" ng-click="modal_payment(payment , false) ; " ng-if="payment.data != null && payment.data.avaliable == 1">
                                    Modificar <span class="hidden-xs">datos</span>
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
                                <button type="button" class="btn btn-primary"  ng-show="create" ng-click="submit()">Activar @{{ payment.name }}</button>
                                <button type="button" class="btn btn-primary" ng-hide="create" ng-click="update()">Actualizar @{{ payment.name }}</button>
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