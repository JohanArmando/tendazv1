@extends('tema2.template')
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
											<form role="form">
											<p align="justify">
												Nombre:<input type="text" class="form-control" value="Mi Casa" required><br>
												Direccion: <textarea class="form-control"></textarea> <br>
												Barrio:<input type="text" class="form-control"  value="Mirandela" required> <br>
												Pais: <select class="form-control"  selected>
													<option>Colombia</option>
												</select> <br>
												Ciudad: <input type="text" class="form-control" value="Bogota D.C" required> <br>
												<div class="row">
													<div class="col-xs-3"></div>
													<div class="col-xs-4">
														<div class="form-group">
														Codigo Postal
															<input type="text" class="form-control" value="+57" required>
														</div>
													</div>
													<div class="col-xs-3">
														<div class="form-group">
															Telefono
															<input type="text" class="form-control"  value="123-4567" required>  
														</div>
													</div>
												</div>
											</p>
											<hr>
											<div class="text-center">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
 												 <i class="fa fa-edit"></i> Editar Direccion
												</button>
											</div>
											</form>
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
	@section('scripts')
		@stop