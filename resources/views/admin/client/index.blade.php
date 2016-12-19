@section('title')
Mis clientes
@stop
@extends('admin.template')
    @section('css')
        <link rel="stylesheet" type="text/css" href="{{asset('administrator/plugins/datatables/css/tabletools.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/stylePersonal.css')}}">
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
                    <img src="{{asset('admin/image/icons/icons-base/users.png')}}">&nbsp; Mis Clientes
                </h4>
            </div>
            <div class="page-header-section">
                 <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="{{url('admin/home')}}" style="color: darkgrey;">Inicio</a></li>
                        <li><a href="#" style="color: orange;">Clientes</a></li>
                        <li class="active" style="color: orange;">Principal</li>
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
            <div ng-app="Customer"  ng-controller="controladorClientes">
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
                                        <th><strong>Total Consumido</strong></th>
                                        <th class="hidden-sm hidden-xs"><strong>Cantidad de compras</strong></th>
                                        <th class="hidden-sm hidden-xs"><strong>Ultimas Compras</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr  dir-paginate="customer in customers | filter:search | itemsPerPage: pageSize " class="ng-cloak">
                                        <td>
                                            <a href="@{{ BASEURL + '/admin/customers/' + customer.id  }}">
                                                <strong>@{{ customer.name  }}</strong>
                                            </a>
                                        </td>
                                        <td>
                                            $@{{  customer.total  | currency:"COP":0 }}
                                        </td>
                                        <td class="hidden-sm hidden-xs">
                                            @{{ customer.quantity_order }}
                                        </td>
                                        <td class="hidden-sm hidden-xs">
                                            <strong ng-if="customer.last_order">
                                                <a href="@{{ BASEURL + '/admin/orders/' + customer.last_order.id  }}">#@{{ customer.last_order.id + 100 }} </a> @{{ customer.last_order.created_at | from}}
                                            </strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                                <div class="col-md-2 col-md-offset-5 hidden spin">
                                    <i class="fa fa-spinner fa-pulse fa-4x fa-fw " style="color: #F26522"></i>
                                </div>
                            <div class="row">
                                <div class="col-xs-4"></div>
                                <div class="col-xs-4 col-xs-offset-1">
                                    <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" >

                                    </dir-pagination-controls>
                                </div>
                                <div class="col-xs-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-end-space"></div>
       </div>
    @endsection
    @section('scripts')
        <script src="{{ asset('administrator/angular/angular.min.js') }}"></script>
        <script src="{{ asset('administrator/angular/pagination.js') }}"></script>
        <script src="{{ asset('administrator/angular/moduloClientes.js') }}"></script>
        <script src="{{ asset('administrator/js/angular-locale-es_es.js')}}"></script>
     @stop