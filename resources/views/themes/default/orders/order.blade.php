@extends('themes.default.template')
	@section('css')
		@stop
	@section('content')
			<div class="container">
				<div class="row">
					<div class="breadcrumbs">
						<div class="container">
							<ol class="breadcrumb breadcrumb--ys pull-left">
								<li class="home-link"><a href="{{ url('/') }}" class="fa fa-home"></a></li>
								<li><a href="{{ url('/myProfile') }}">Ordenes</a></li>
								<li class="active">name orden</li>
							</ol>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1">
						<div class="text-center">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">
										Orden #1
									</h3>
								</div>
								<div class="panel-body">
									<div class="panel-content">
										<div class="row">
											<div class="col-md-4">
												<h4>Detalles</h4>
												<table class="table table-detail">
												<tr>
						                            <td>Fecha de la Orden</td>
						                            <td><p style="font-size: 16px;"><strong>12/10/2016</strong></p></td>
						                        </tr>
						                        <tr>
						                        	<td>Estado:	</td>
						                        	<td><p style="font-size: 16px;"><strong>Activo</strong></p></td>
						                        </tr>
						                        <tr>
						                        	<td>Pago:</td>
						                        	<td><p style="font-size: 16px;"><strong>Pendiente</strong></p></td>
						                        </tr>
												<tr>
													<td>Medio de Pago:</td>
													<td><p style="font-size: 16px;"><strong>Mercado Pago</strong></p></td>
												</tr>
												<tr><th colspan="2"></th></tr>
						                        </table>
												<h4>Direccion</h4>
												<div class="col-md-6"><p><strong>Datos direccion</strong></p></div>
												<div class="col-md-6"><p>Datos direccion</p></div>

												<div class="col-md-6"><p><strong>Datos direccion</strong></p></div>
												<div class="col-md-6"><p>Datos direccion</p></div>

												<div class="col-md-6"><p><strong>Datos direccion</strong></p></div>
												<div class="col-md-6"><p>Datos direccion</p></div>

												<div class="col-md-6"><p><strong>Datos direccion</strong></p></div>
												<div class="col-md-6"><p>Datos direccion</p></div>
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
													<tr class="text-left">
														<td>
															<img src="http://placehold.it/200x200" alt="" height="50px">
															<span>name product</span>
														</td>
														<td>
															<span>$00.0</span>
														</td>
														<td>
															<span>2</span>
														</td>
														<td>
															<span>$00.0</span>
														</td>
													</tr>
													<tr class="text-left">
														<td>
															<img src="http://placehold.it/200x200" alt="" height="50px">
															<span>name product</span>
														</td>
														<td>
															<span>$00.0</span>
														</td>
														<td>
															<span>2</span>
														</td>
														<td>
															<span>$00.0</span>
														</td>
													</tr>
													<tr>
														<td colspan="3"></td>
														<td>
															<button class="btn btn-primary">
																Proceder al Pago
																<strong><i class="fa fa-angle-right"></i></strong>
															</button>
														</td>
													</tr>
												</table>
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