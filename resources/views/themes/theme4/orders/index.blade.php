@extends('template')
	@section('css')
		@stop
	@section('content')
			<div class="container">
				<div class="content">
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
													<select class="form-control" style="width: 250px;">
														<option>Seleccione...</option>
														<option>Por Orden</option>
														<option>Por Fecha</option>
														<option>Por Precio</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="pull-right">
												<div class="form-group">
													<label><i class="fa fa-search"></i> Buscar</label>
													<input type="text" name="" class="form-control">
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
				                                           <th>&nbsp;</th>
				                                       </tr>
                                   				</thead>
												<tbody>
													@foreach ($orders as $order)
														
														<tr>
															<td><a href="{{url('order/id')}}">{{$order->idOrder}}</a></td>
															<td>{{$order->date}}</td>
															<td>{{$order->payment_id}}</td>
															<td>{{$order->order_status_payment}}</td>
															<td>{{$order->send_id}}</td>
															<td>$ {{ number_format($order->total) }}</td>
														</tr>

													@endforeach
												</tbody>
											</table>
											  <div class="text-center">
					                            <div class="page-nation">
					                                <ul class="pagination pagination-large">
					                                    <li class="disabled"> <span> Previo </span> </li>
					                                    <li class="active"> <span>1</span> </li>
					                                    <li> <span>2</span> </li>
					                                    <li> <span>3</span> </li>
					                                    <li> <span>4</span> </li>
					                                    <li> <span>Siguiente</span> </li>
					                                </ul>
					                            </div>
                        					</div>
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
		@stop