@extends(Theme::current()->viewsPath.'.template')
	@section('css')
		@stop
	@section('content')
		<div class="container">
				<div class="row">
					<div class="col-md-12" style="height: 100px"></div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 toppad col-md-offset-3" >
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
								Perfil
								<span class="three"></span>
								<span class="four"></span>
							</a>
						</div>
						<div style="margin-top: 30px;"></div>
						<div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-3 col-lg-3 hidden" align="center"> <img class="img-responsive" src="http://placehold.it/120x150">
										<br>
										<button type="button" class="btn btn-default btn-xs"><i class="fa fa-camera"></i>Cambiar imagen</button>
									</div>
									<div class="col-md-12 col-lg-12 text-center">
										<div class="col-md-6"><strong>Nombre Completo</strong></div>
										<div class="col-md-6">NAME<hr></div>
										<div class="col-md-6"><strong>Email</strong></div>
										<div class="col-md-6"><a href="#">EMAIL</a><hr></div>
										<div class="col-md-6"><strong>Telefono</strong></div>
										<div class="col-md-6">PHONE<hr></div>
										<div class="col-md-12">
											<a href="#" class="btn btn-primary" style="border-radius: 0" data-toggle="modal" data-target="#modaEditar">
												<i class="fa fa-edit"></i> Actualizar Datos</a>
											<hr>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 toppad hidden">
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
									Direcciones
									<span class="three"></span>
									<span class="four"></span>
								</a>
							</div>
							
							<div class="panel-body">
								<div class="">
									<table class="table table-hover table-responsive">
											<tbody>
											<tr>
												<th>Id</th>
												<th>Direccion</th>
												<th>Telefono</th>
												<th class="text-center">Principal</th>
												<th class="text-center">Acciones</th>
											</tr>
											<tr>
												<td>
													<a href="">#001</a>
												</td>
												<td>
													<p align="justify">
														calle sdfs 78-45,
													</p>
												</td>
												<td> (+57) 123456</td>
												<td class="text-center">
													<a class="btn btn-xs btn-primary" href=""><i class="fa fa-eye"></i></a>
													<a class="btn btn-xs btn-default" href=""><i class="fa fa-eye-slash"></i></a>
												</td>
												<td class="text-center">
													<button type="button" class="btn btn-warning btn-xs" data-target="#modalEditarDireccion" data-toggle="modal"><i class="fa fa-edit"></i></button>
												</td>
											</tr>
											</tbody>
										</table>
										<div class="col-md-12">
											Al seleccionar ( <i class="fa fa-eye"></i> ) dejaras esta direcci&oacute;n como direccion principal.
										</div>
											<div class="col-md-12">
												<div class="text-center"><br>
												<button type="button" data-toggle="modal" data-target="#modal_Add_dir"  class="btn btn-primary"><i class="fa fa-plus"></i> Agregar Direccion</button>
											</div>
											<div style="margin-bottom: 30px;"></div>
										</div>

								</div>
								
							</div>
						</div>
						</div>
					</div>
		</div>

			<div style="margin-bottom: 125px;"></div>
			
			@include(Theme::current()->viewsPath.'.partials.add-dir')
			@include(Theme::current()->viewsPath.'.partials.edit-dir')


			<!--Modal para modificar datos del perfil-->
				<div id="modaEditar" class="modal fade" tabindex="-1" role="dialog" style="margin-top: 100px">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aira-hidden="		true">&times;</span></button>
								<h4 class="modal-title">Editar Perfil</h4>
							</div>
							<div class="modal-body">
								<!--Fomulario-->
								{!! Form::open(['url' =>[ "myProfile"],'method' => 'PUT','files' => true, 'data-toggle'=>'validator', 'role'=>'form']) !!}
									<div class="form-group">
										<label>Nombres</label>
										<input type="text" name="name" value="" class="form-control">
									</div>
									<div class="form-group">
										<label>Apellidos</label>
										<input type="text" name="last_name" value="" class="form-control">
									</div>
									<div class="form-group">
										<label>Telefono</label>
										<input type="number" name="phone" value="" class="form-control">
									</div>
									<hr>
									<div clas="modal-footer">
										<div class="text-center">
											<button type="submit" class="btn btn-primary">Actualizar datos</button>
										</div>
									</div>
								{!! Form::close() !!}
								<!--Fin-->
							</div>
						</div>
					</div>
				</div>
			<!--Fin-->
		@endsection
	@section('script')
		@stop