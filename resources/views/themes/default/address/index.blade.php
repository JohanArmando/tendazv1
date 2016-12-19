	@extends('themes.default.template')
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

		<!--Modal Direcciones-->
			<!--<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aira-labelledby="myModal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aira-label="Close">
								<span aira-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title text-center"><i class="fa fa-plus"></i> Direccion</h4>
						</div>
						<div class="modal-body">
							<form role="form">
								
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label>Nombre de la Direccion</label>
											<input type="text" class="form-control" autofocus  required>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="form-group">
											<label>Direccion</label>
											<textarea class="form-control" required></textarea>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label>Barrio</label>
											<input type="text" class="form-control" required>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label>Pais</label>
											<select class="form-control" required>
												<option>Colombia</option>
												<option>España</option>
												<option>Peru</option>
											</select>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label>Ciudad</label>
											<input type="text" class="form-control" required>
										</div>
									</div>
									<div class="col-xs-3">
										<div class="form-group">
											<label>Codigo Postal</label>
											<input type="text" class="form-control" required>
										</div>
									</div>
									<div class="col-xs-3">
											<div class="form-group">
												<label>Telefono</label>
												<input type="text" class="form-control" required>
											</div>
										</div>
								</div>
								<div style="margin-bottom: 5px;"></div>
									<div class="modal-footer">
										<button type="reset" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
										<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Agregar Direccion</button>
									</div>
							</form>
						</div>
						
					</div>
				</div>
			</div>-->	
		<!--FIN-->
		@endsection
	@section('script')
		@stop