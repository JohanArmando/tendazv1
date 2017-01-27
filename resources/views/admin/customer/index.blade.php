@extends('layouts.administrator')
    @section('title')
        Clientes
    @endsection
    @section('css')
        <link rel="stylesheet" href="{{asset('administrator/plugins/datatables/css/tabletools.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('administrator/plugins/datatables/css/datatables.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/custom_tendaz.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/stylePersonal.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/styleDatabase.css')}}">
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
                            <table id="table_clients" class="table table-responsive table-hover list-table table-products"  cellspacing="100%" width="100%">
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
                                            ${{ $customer->eagerTotal->first()== null ? '0' : number_format($customer->eagerTotal->first()->total , 0 , '.' , ',') }}
                                        </td>
                                        <td class="hidden-sm hidden-xs">
                                            {{ $customer->total_exc_tax}}
                                        </td>
                                        <td class="hidden-sm hidden-xs">
                                            <strong>
                                                @if(!$customer->latestOrder->first() == null)
                                                <a href="{{url('admin/orders/'.$customer->latestOrder->first()->id)}}">{{ $customer->latestOrder->first()->id }}</a>
                                                    @else
                                                        <strong>Ninguna</strong>
                                                @endif
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
        <script src="{{ asset('administrator/angular/angular.min.js') }}"></script>
        <script src="{{ asset('administrator/angular/pagination.js') }}"></script>
        <script src="{{ asset('administrator/angular/moduloClientes.js') }}"></script>
        <script src="{{ asset('administrator/js/angular-locale-es_es.js')}}"></script>
        <script src="{{asset('administrator/js/jquery.dataTables.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#table_clients').dataTable({
                    "pageLength": 5,
                    "language": {
                        "search": "Buscar: ",
                        "searchPlaceholder": "Nombre del Cliente",
                        "lengthMenu":     "Mostrar _MENU_ resultados",
                        "info":           "Mostrando _START_ a _END_ de _TOTAL_ Clientes",
                        "infoEmpty":      "Mostrando 0 a 0 de 0 Resultados",
                        "paginate": {
                            "first":      "Primero",
                            "last":       "Ultimo",
                            "next":       "Siguiente",
                            "previous":   "Anterior"
                        }
                    }
                });
            });
        </script>
     @stop