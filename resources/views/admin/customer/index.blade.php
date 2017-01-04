@extends('layouts.administrator')
    @section('title')
        Clientes
    @endsection
    @section('css')
        <link rel="stylesheet" href="{{asset('admin/plugins/datatables/css/tabletools.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('admin/css/stylePersonal.css')}}">
        <style>
            [ng\:cloak], [ng-cloak], .ng-cloak {
                display: none !important;
            }
            .space{
                margin-bottom: 10px;
            }
        </style>
    @stop
    @section('content')
        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title">
                    <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/users.png')}}">&nbsp; Mis clientes
                </h4>
            </div>
            <div class="page-header-section">
                 <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                        <li><a href="#" style="color: orange;">Clientes</a></li>
                    </ol>
                </div>
             </div>
        </div>
        <br>
        <br>
        @include('admin.partials.message')
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" style="margin-right: 20px;">
                            <a href="{{asset('admin/customers/create')}}" ><i class="fa fa-plus"></i>
                                &nbsp; Agregar nuevo cliente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" style="margin-right: 20px;">
                            <a href="{{asset('admin/customers/export')}}" ><i class="fa fa-download"></i>
                                &nbsp; Exportar lista de clientes</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5><i class="fa fa-list"></i>&nbsp;<strong>Lista de Clientes.</strong></h5>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4 space">
                                    <div class="input-group">
                                        <span class="input-group-addon" ><i class="fa fa-search"></i></span>
                                        <input type="text" class="form-control" placeholder="Busca tus clientes" aria-describedby="basic-addon1" ng-model="search">
                                    </div>
                                </div>
                            </div>
                            <table id="tbl_cliente" class="table table-responsive table-hover" cellspacing="100%" width="100%">
                                <thead>
                                    <tr>
                                        <th><strong>Nombre</strong></th>
                                        <th><strong>Telefono</strong></th>
                                        <th><strong>Total Consumido</strong></th>
                                        <th class="hidden-sm hidden-xs"><strong>Cantidad de compras</strong></th>
                                        <th class="hidden-sm hidden-xs"><strong>Ultimas Compras</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>
                                            <a href="{{ url("admin/customers/$customer->uuid") }}">{{ $customer->full_name  }}  </a>
                                        </td>
                                        <td>
                                            {{ $customer->phone }}
                                        </td>
                                        <td>
                                            $ {{ $customer->eagerTotal->first()== null ? '0' : number_format($customer->eagerTotal->first()->total , 2 , '.' , ',') }}
                                        </td>
                                        <td class="hidden-sm hidden-xs">
                                            {{ $customer->totalOrder() }}
                                        </td>
                                        <td class="hidden-sm hidden-xs">
                                            <strong>
                                                <a href="{{url('orders/')}}">{{ $customer->latestOrder->first() == null ? 'Ninguna' : $customer->latestOrder->first()->id }}</a>
                                            </strong>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                                <div class="col-md-2 col-md-offset-5 hidden spin">
                                    <i class="fa fa-spinner fa-pulse fa-4x fa-fw " style="color: #F26522"></i>
                                </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="page-end-space"></div>
       </div>
    @endsection
    @section('scripts')
        <script src="{{ asset('admin/angular/angular.min.js') }}"></script>
        <script src="{{ asset('admin/angular/pagination.js') }}"></script>
        <script src="{{ asset('admin/angular/moduloClientes.js') }}"></script>
        <script src="{{ asset('admin/js/angular-locale-es_es.js')}}"></script>
     @stop