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
            <div class="col-md-12">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h3 class="panel-title">Ventas</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6" style="margin-left: 71% !important;">
                                    <label for="buscar"><div class=""><strong>Buscar:</strong></div></label>
                                    <div role="form">
                                        <input type="text" class="form-control" style="width:55%;" ng-model="search">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="table-responsive">
                            <table class="table table-bordered table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>order</th>
                                            <th>Fecha</th>
                                            <th>Total</th>
                                            <th>Comprador</th>
                                            <th>Estado de la order</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr style="font-size: 14px">
                                            <td>
                                                <div class="checkbox custom-checkbox text-center">
                                                    <input id="{{ $order->id }}" value="1" data-toggle="selectrow" data-target="tr" data-contextual="success"  type="checkbox">
                                                    <label for="{{ $order->id }}"></label>
                                                </div>
                                            </td>
                                            <td><a class="text-tendaz"  href="{{ url('admin/orders')."/".$order->id }}">
                                                    #000{{  $order->id }}</a></td>
                                            <td>
                                                <div class="text-center">
                                                    {{ $order->created_at}}
                                                </div>
                                            </td>
                                            <td>
                                                $ {{ $order->total }}
                                            </td>
                                            <td>
                                                @if(empty($order->user->name))
                                                    @else{{$order->user->name}}
                                                @endif
                                            </td>
                                            <td>
                                               <span>{{ $order->status->name }}</span>
                                            </td>
                                            <td>
                                                <a href="#">

                                                </a>
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
        @stop