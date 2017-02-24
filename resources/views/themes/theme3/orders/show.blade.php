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
							<div class="noo-about-right">
								<div class="noo-line">
									<span class="line-one">
										<span></span>
										<span></span>
									</span>
									<span class="line-two">
										<span></span>
										<span></span>
									</span>
								</div>
								<div class="noo-button-creative">
									<a href="#">
										<span class="first"></span>
										<span class="second"></span>
										Orden #<% order.id %>
										<span class="three"></span>
										<span class="four"></span>
									</a>
								</div>
								<div style="margin-top: 30px;"></div>
								<div class="panel-body">
									<div class="panel-content">
										<div class="row">
											<div class="col-md-4" style="margin-bottom: 20px">
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
												<h4>Direccion</h4>
												<div class="col-md-6"><p><strong>Pais Y Region</strong></p></div>
												<div class="col-md-6"><p><% order.shippingAddress.data.country.name %> - <% order.shippingAddress.data.city.name %></p></div>

												<div class="col-md-6"><p><strong>Direccion</strong></p></div>
												<div class="col-md-6"><p><% order.shippingAddress.data.street %></p></div>

												<div class="col-md-6"><p><strong>Complemento</strong></p></div>
												<div class="col-md-6"><p><% order.shippingAddress.data.complement %></p></div>

												<div class="col-md-6"><p><strong>Codigo Postal</strong></p></div>
												<div class="col-md-6"><p><% order.shippingAddress.data.postalCode %> - <% order.shippingAddress.data.neighborhood %></p></div>
											</div>
											<div class="col-md-8">
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
																<img ng-src="<% product.images.data[0].url %>" alt="" height="50px" width="50px">
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
											<div class="col-md-12">
												<div class="pull-left">
													<a href="{{url('orders')}}" class="btn btn-primary">Volver a ordenes</a>
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
		</div>
		@endsection
	@section('script')
		<script>
			var order_id = "{{ $uuid }}";
		</script>
	@stop