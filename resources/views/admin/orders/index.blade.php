@section('title')
    Mis ventas
@stop
@extends('layouts.administrator')
    @section('css')
        <link rel="stylesheet" href="{{asset('administrator/new_table/css/classic.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/alternative/efecto-logo.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/table-res.css')}}">
        <link rel="stylesheet" href="{{asset('administrator/plugins/xeditable/css/xeditable.css')}}">
        <link rel="stylesheet" href="{{asset('administrator/plugins/xeditable/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('administrator/css/xeditable.min.css')}}">
        <link rel="stylesheet" href="{{asset('administrator/plugins/datatables/css/tabletools.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('administrator/plugins/datatables/css/datatables.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/custom_tendaz.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/stylePersonal.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/styleDatabase.css')}}">
    @section('content')
        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title">
                    <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/rich.png')}}">&nbsp; Mis ventas 
                </h4>
            </div>
            <div class="page-header-section">
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                        <li><a href="#" style="color: orange;">Ventas</a></li>
                        <li class="active" style="color: orange;">Mis Ventas</li>
                    </ol>
                </div>
            </div>
        </div>
        <br>
        <div class="row" ng-app="appVentas" ng-controller="controladorVentas">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" style="margin-right: 20px;">
                            <a href="{{asset('admin/orders/export')}}" ><i class="fa fa-cloud-download"></i>&nbsp; Exportar lista de ventas</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <a href="{{asset('admin/customers')}}"><i class="fa fa-users"></i>&nbsp; Ver clientes</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-info"></i>&nbsp; Conocer Estados de una orden</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h3 class="panel-title">Ventas</h3>
                        </div>
                        <div class="panel-body">
                            <br>
                            <div class="table-responsive">
                            <table id="table_orders" class="table table-bordered table-hover table-responsive list-table">
                                    <thead>
                                        <tr>
                                            <th>Orden</th>
                                            <th>Fecha</th>
                                            <th>Total</th>
                                            <th>Comprador</th>
                                            <th>Estado de la orden</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr style="font-size: 14px">
                                            <td class="text-center"><a href="{{ url('admin/orders')."/".$order->id }}">
                                                    #{{  $order->id }}</a></td>
                                            <td>
                                                <div class="text-center">
                                                    {{ $order->created_at}}
                                                </div>
                                            </td>
                                            <td>
                                                ${{ number_format($order->total , 2        ) }}
                                            </td>
                                            <td>
                                                @if(empty($order->user->name))
                                                    @else{{$order->user->name}}
                                                @endif
                                            </td>
                                            <td>
                                               <span>{{ $order->status->description }}</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="page-end-space"></div>
                </div>
            </div>
            <div class="page-end-space"></div>
        <!-- modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Estados de una Orden</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            @foreach($status as $state)
                                <div class="col-md-6">
                                    <p><strong>{{$state->id}} : {{$state->name}} </strong>- ({{$state->accion}})</p>
                                    <p>{{$state->description}}</p>
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        @endsection
        @section('scripts')

            <script src="{{ asset('administrator/angular/angular.min.js') }}"></script>
            <script src="{{ asset('administrator/angular/pagination.js') }}"></script>
            <script src="{{ asset('administrator/angular/moduloVentas.js') }}"></script>
            <script src="https://code.angularjs.org/1.5.3/i18n/angular-locale_es-es.js"></script>
            <script type="text/javascript" src="{{asset('administrator/plugins/xeditable/js/bootstrap-editable.js')}}"></script>
            <script type="text/javascript" src="{{asset('administrator/plugins/xeditable/inputs-ext/address/address.js')}}"></script>
            <script type="text/javascript" src="{{asset('administrator/plugins/xeditable/inputs-ext/typeaheadjs/lib/typeahead.js')}}"></script>
            <script type="text/javascript" src="{{asset('administrator/plugins/xeditable/inputs-ext/typeaheadjs/typeaheadjs.js')}}"></script>
            <script type="text/javascript" src="{{asset('administrator/js/xeditable.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('administrator/js/backend/forms/xeditable.js')}}"></script>
            <script type="text/javascript" src="{{asset('administrator/js/xeditable.min.js')}}"></script>
            <script src="{{asset('administrator/js/jquery.dataTables.js')}}"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#table_orders').dataTable({
                        "pageLength": 5,
                        "language": {
                            "search": "Buscar: ",
                            "searchPlaceholder": "Numero de Orden",
                            "lengthMenu":     "Mostrar _MENU_ resultados",
                            "info":           "Mostrando _START_ a _END_ de _TOTAL_ Ordenes",
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