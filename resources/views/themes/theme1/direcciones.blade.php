@extends('tema1.template')
	@section('css')
		@stop
	@section('content')
			<div class="content">
			<div class="container">
				<div style="margin-top: 30px;"></div>
				<div class="row">
					<div class="col-md-5 col-md-offset-4">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="panel-content">
									<div class="row">
										<div class="col-xs-12">
											<div class="text-center">
												<h3> <i class="fa fa-map-marker"></i> Direccion Actual</h3>
												<hr>
											</div>
											<p align="justify">
												Nombre:<input type="text" class="form-control" value="Mi Casa"><br>
												Direccion: <textarea class="form-control"></textarea> <br>
												Barrio:<input type="text" class="form-control"  value="Mirandela"> <br>
												Pais: <select class="form-control"  selected>
													<option>Colombia</option>
												</select> <br>
												Ciudad: <input type="text" class="form-control" value="Bogota D.C"> <br>
												<div class="row">
													<div class="col-xs-3"></div>
													<div class="col-xs-3">
														<div class="form-group">
														Codigo Postal
															<input type="text" class="form-control" value="+57">
														</div>
													</div>
													<div class="col-xs-3">
														<div class="form-group">
															Telefono
															<input type="text" class="form-control"  value="123-4567">  
														</div>
													</div>
												</div>
											</p>
											<hr>
											<div class="text-center">
												<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" style="background: #212121; color: white;">
 												 <i class="fa fa-edit"></i> Editar Direccion
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
			<div style="margin-bottom: 150px;"></div>
		</div>

		@endsection
	@section('script')
		@stop