@extends('themes.default.template')
@section('css')
@stop
@section('content')
    <div class="container" ng-controller="OrderController">
        <div class="row">
            <div class="col-md-5">
                <h2>Mis Ordenes</h2>
                <div style="margin-bottom: 30px;"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="panel-content">
                            <div class="col-xs-6">
                                <div class="pull-left">
                                    <div class="form-group">
                                        <label><i class="fa fa-filter"></i> Ordenar Por:</label>
                                        <select class="form-control" style="width: 250px;" ng-model="sortBy" >
                                            <option>Seleccione...</option>
                                            <option value="-_id">Por Orden</option>
                                            <option value="-date">Por Fecha</option>
                                            <option value="total">Por Precio</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="pull-right">
                                    <div class="form-group">
                                        <label><i class="fa fa-search"></i> Buscar</label>
                                        <input type="text" name="" class="form-control" ng-model="q">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <table class="table table-responsive" cellpadding="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Orden</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                        <th>Pago</th>
                                        <th>Envio</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr dir-paginate="order in orders   | itemsPerPage: pageSize | filter:q | orderBy:sortBy"  current-page="currentPage">
                                        <td ><a style="color: #0a8fb2" href="/orders/<% order._id %>">#<% order.id |  limitTo:8 %></a></td>
                                        <td><% order.date %></td>
                                        <td><% order.status.code %></td>
                                        <td><% order.status_payment %></td>
                                        <td><% order.status_shipping %></td>
                                        <td><% order.total | number:0 %></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" >

                                    </dir-pagination-controls>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var order_id = "{{ isset($uuid) ? $uuid : '' }}";
    </script>
@stop