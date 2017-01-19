@extends(Theme::current()->viewsPath.'.template')
	@section('css')
	<style type="text/css">
      .tags a{border:1px solid #DDD;display:inline-block;color:#717171;background:#FFF;-webkit-box-shadow:0 1px 1px 0 rgba(180,180,180,0.1);box-shadow:0 1px 1px 0 rgba(180,180,180,0.1);-webkit-transition:all .1s ease-in-out;-moz-transition:all .1s ease-in-out;-o-transition:all .1s ease-in-out;-ms-transition:all .1s ease-in-out;transition:all .1s ease-in-out;border-radius:2px;margin:0 3px 6px 0;padding:5px 10px}
.tags a:hover{border-color:#08C;}
.tags a.primary{color:#FFF;background-color:#428BCA;border-color:#357EBD}
.tags a.success{color:#FFF;background-color:#5CB85C;border-color:#4CAE4C}
.tags a.info{color:#FFF;background-color:#5BC0DE;border-color:#46B8DA}
.tags a.warning{color:#FFF;background-color:#F0AD4E;border-color:#EEA236}
.tags a.danger{color:#FFF;background-color:#D9534F;border-color:#D43F3A}
    </style>
		@stop
	@section('content')
		<div class="content">
			<div class="container" ng-controller="OrderController">
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="panel-content">
                                    <div class="col-md-12">
                                        <h2>Mis Ordenes</h2>
                                        <div style="margin-bottom: 30px;"></div>
                                    </div>
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
                                                <td ><a style="color: #0a8fb2" href="/orders/<% order._id %>">#<% ($index + 1) + (currentPage - 1) * pageSize %></a></td>
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
                <div style="margin-bottom: 80px;"></div>
            </div>
		</div>
		<div style="margin-bottom: 59px;"></div>
		@endsection
	@section('script')
		@stop