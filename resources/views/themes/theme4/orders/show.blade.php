@extends(Theme::current()->viewsPath.'.template')
	@section('css')
		@stop
	@section('content')
		<div class="content" ng-controller="OrderController">
			<div class="container">
				<div class="row">
					<div class="breadcrumbs">
						<div class="container">
							<ol class="breadcrumb breadcrumb--ys pull-left">
								<li class="home-link"><a href="{{ url('/') }}" class="fa fa-home"></a></li>
								<li><a href="{{ url('/orders') }}">Ordenes</a></li>
								<li class="active">#<% order.id %></li>
							</ol>
						</div>
					</div>
					<div class="col-md-12">
						<div class="text-center">

								<div style="margin-top: 30px;"></div>
								<div class="panel-body">
									<div class="panel-content">
										<div class="row">
											<div class="col-md-12">
												<h3>Orden #<% order.id %></h3><br>
											</div>
											<div class="col-md-4" style="margin-bottom: 20px">
												<!-- panel details -->
												<div class="panel panel-default">
													<div class="panel-content">
														<div class="panel-body">
															<div class="col-md-12">
																<h4>Detalles</h4>
																<table class="table table-detail">
																	<tr>
																		<td>Fecha de la Orden</td>
																		<td><p style="font-size: 16px;"><strong><% order.date %></strong></p></td>
																	</tr>
																	<tr>
																		<td>Estado:	</td>
																		<td><p style="font-size: 16px;"><strong><% order.status.code %></strong></p></td>
																	</tr>
																	<tr>
																		<td>Pago:</td>
																		<td><p style="font-size: 16px;"><strong><% order.status_payment %></strong></p></td>
																	</tr>
																	<tr>
																		<td>Envio:</td>
																		<td><p style="font-size: 16px;"><strong><% order.status_shipping %></strong></p></td>
																	</tr>
																	<tr>
																		<td>Medio de Pago:</td>
																		<td><p style="font-size: 16px;"><strong><% order.paymentMethod.data.name %></strong></p></td>
																	</tr>
																</table>
																</div>
															</div>
														</div>
													</div>
												<!-- /panel details -->

												<!-- panel address -->
												<div class="panel panel-default">
													<div class="panel-content">
														<div class="panel-body">
															<div class="col-md-12">
															<h4>Direccion De Envio</h4><hr>
															<div class="col-md-6"><p><strong>Pais Y Region</strong></p></div>
															<div class="col-md-6"><p><% order.shippingAddress.data.country.name %> - <% order.shippingAddress.data.city.name %></p></div>

															<div class="col-md-6"><p><strong>Direccion</strong></p></div>
															<div class="col-md-6"><p><% order.shippingAddress.data.street %></p></div>

															<div class="col-md-6"><p><strong>Complemento</strong></p></div>
															<div class="col-md-6"><p><% order.shippingAddress.data.complement %></p></div>

															<div class="col-md-6"><p><strong>Codigo Postal</strong></p></div>
															<div class="col-md-6"><p><% order.shippingAddress.data.postalCode %> - <% order.shippingAddress.data.neighborhood %></p></div>
															</div>
														</div>
													</div>
												</div>
												<!-- /panel address -->
											</div>

											<div class="col-md-8">
												<!-- /panel products -->
												<div class="panel panel-default">
													<div class="panel-content">
													<div class="panel-body">
														<div class="col-md-12">
															<h4>Productos</h4>
															<div class="table-responsive">
																<table class="table table-responsive">
																	<tr>
																		<th>Producto</th>
																		<th>Precio por Unidad</th>
																		<th>Cantidad</th>
																		<th>Subtotal</th>
																	</tr>
																	<tr class="text-left" ng-repeat="product in order.products.data">
																		<td>
																			<img src="<% product.images.data[0].url %>" alt="" height="50px" width="50px">
																			<span><% product.name %></span>
																		</td>
																		<td>
																			<span ng-if="!product.special_price">$ <% product.price | number:0 %></span>
																			<span ng-if="product.special_price">$ <% product.special_price | number:0 %></span>
																		</td>
																		<td>
																			<span><% product.quantity %></span>
																		</td>
																		<td>
																			<span ng-if="!product.special_price">$ <% product.price * product.quantity | number:0 %></span>
																			<span ng-if="product.special_price">$ <% product.special_price  * product.quantity | number:0 %></span>
																		</td>
																	</tr>
																	<tr class="text-left">
																		<td class="notLine" colspan="2"></td>
																		<td><strong>Total Descuento :</strong>
																		<td><% order.total_discount | number:0 %></td>
																	</tr>
																	<tr class="text-left">
																		<td class="notLine" colspan="2"></td>
																		<td><strong>Total Envio :</strong></td>
																		<td><% order.total_shipping | number:0 %></td>
																	</tr>
																	<tr class="text-left">
																		<td class="notLine" colspan="2"></td>
																		<td><strong>Total:</strong></td>
																		<td><% order.total | number:0 %></td>
																	</tr>
																</table>
																</div>
														</div>
													</div>
													</div>
												</div>
												<!-- /panel products -->
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
		<script>
			var order_id = "{{ $uuid }}";
		</script>
		@stop