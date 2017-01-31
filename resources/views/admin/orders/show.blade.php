@section('title')
    Orden #{{ ($order->id)}}
@stop
@extends('layouts.administrator')

    @section('css')
        <link rel="stylesheet" href="{{ asset('administrator/css/order-detail.css') }}">
    @stop
    @section('content')

        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title">
                    <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/rich.png')}}">&nbsp; Mis ventas
                </h4>
            </div>
            @include('admin.partials.message')
            <div class="page-header-section">
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="{{ url('admin/orders') }}">Ordenes</a></li>
                        <li class="active">Orden de Pedido</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h5><i class="fa fa-list-alt"></i>&nbsp;
                                <strong>Detalles de la Orden  #{{ ($order->id)}}.</strong></h5>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="panel-body">
                                    <br>
                                    <div class="text-left">
                                        <p style="float: left !important;">
                                            <strong>Fecha de solicitud&nbsp;</strong>
                                            <input class="form-control" type="text" value="{{ $order->created_at }}" width="150px;" disabled>
                                        </p>
                                    </div>
                                    <br>
                                        @include('admin.partials.table_product' , ['products' => $order->products])
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <a href="{{url('admin/orders/print/'.$order->id)}}" class="btn btn-success pull-right" >
                                <i class="fa fa-print"></i>&nbsp;ver Formato Para Imprimir Orden
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h5><i class="fa fa-user"></i>&nbsp;
                                <strong>Cliente y Notas de la orden  #{{ ($order->id)}}.</strong></h5>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-5">
                            @include('admin.partials.orders.customer' , ['customer' => $order->user])
                        </div>
                        <div class="col-md-7">
                            @include('admin.partials.orders.note')
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                @include('admin.partials.orders.address' , ['address' => $order->shippingAddress->address ])
            </div>
        </div>
        <div class="page-end-space"></div>
    @endsection

    @section('scripts')

    @stop