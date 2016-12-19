@extends('tema3.template')
	@section('css')
		@stop
	@section('content')
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="breadcrumbs">
						<div class="container">
							<ol class="breadcrumb breadcrumb--ys pull-left">
								<li class="home-link"><a href="{{ url('/') }}" class="fa fa-home"></a></li>
								<li><a href="{{ url('/orders') }}">Ordenes</a></li>
								<li class="active">name orden</li>
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
										Orden #1
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
												</table>
												<div>
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
																<img src="http://placehold.it/200x200" alt="" height="50px" width="50px">
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
																<img src="http://placehold.it/200x200" alt="" width="50px" height="50px">
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
													</table>
												</div>
											</div>
											<div class="col-md-8">
												<div class="pull-right">
													<button class="btn btn-primary">
														Proceder al Pago
														<strong><i class="fa fa-angle-right"></i></strong>
													</button>
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
		@stop