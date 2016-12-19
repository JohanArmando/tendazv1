@extends('tema4')
	@section('css')
		@stop
	@section('content')
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-12 col-xs-2 col-md-offset-4">
              <div class=" col-xs-10 text-center">
                         <div class="panel panel-default panel-content">
							 <div class="panel panel-default panel-content">
                                      <div style="margin-top: 10px;"></div>
                                      <img src="http://placehold.it/150x150" alt="" class="img-circle" />
                                        <br>
                                    <h3><strong style="color: #1FC0A0"> {{Auth::user()->get()->name}} {{Auth::user()->get()->last_name}}</strong></h3>
                                    <h5>Email: <a href="mailto: info@tendaz.com">{{Auth::user()->get()->email}}</a></h5>
                                    <h5>Telefono: <a class="active">{{Auth::user()->get()->phone ? Auth::user()->get()->phone : "Sin numero de telefono" }}</a></h5>
								 	<hr style="color: grey;" />
                                        <p align="center" style="color: black;"> CR 55a numweo 123 # 122a-33, Mirandela, Bogota D.C, Colombia.</p>
                                       <div class="clearfix"></div>
                                    </div>
	                                    <button type="button" class="btn btn--ys" data-toggle="modal" data-target="#modalActualizar">
	                                        <i class="fa fa-edit"></i> Cambiar Datos Personales
	                                    </button>
							 <div style="margin-bottom: 10px;"></div>
                         </div>
                    </div>
          		</div>	
						<div class="col-md-7 col-lg-7  col-xs-12 hidden">
							<div class="panel">
								 <div class="text-center">
				 					<h4 class="text-center text-uppercase title-under">Direcciones</h4>			
			 					</div>
								 <div class="panel-content">
								 	<div class="panel-body">
								 		<table class="table" cellspacing="100">
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
													<button type="button" data-target="#modalEditarDireccion" data-toggle="modal" class="btn btn-warning btn-xs"><i class="fa fa-edit
													"></i></button>
												</td>
											</tr>
								 			</tbody>
								 		</table>
								 		<div style="margin-bottom: 10px;"></div>
								 		<div class="col-md-12">
								 			<p>
								 				Al seleccionar ( <i class="fa fa-eye"></i> ) dejaras esta direcci&oacute;n como direccion principal.
								 			</p>
								 		</div>
								 		<div class="col-md-12">
								 			 <div class="pull-right">
	 											<button type="submit" data-toggle="modal" data-target="#modalAgregardireccion" class="btn btn--ys"><i class="fa fa-plus"></i> Agregar nueva direccion</button>
	 										</div>
								 		</div>
								 	</div>
								 </div>
							</div>
						</div>
					</div>
				</div>
				@include('partials.add-dir')
				@include('partials.edit-dir')

				<!--MODAL PARA EL CAMBIO DE NOMBRE-->
					<div id="modalActualizar" class="fade modal" tabindex="-1" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aira-label="cerrar"><span aire-hidden="true"s>&times;</span></button>
									<h4 class="modal-title">Editar datos del perfil</h4>
								</div>
								<div class="modal-body">
									{!! Form::open(['url' => [ "myProfile",Auth::user()->get()->id ], 'method' => 'PUT', 'files' => 'true', 'data-toggle' => 'validator', 'role' => 'form']) !!}
									<!--<form role="form">-->
										<div class="form-group">
											<label>Nombre</label>
											<input type="text" name="name" class="form-control" value="{{Auth::user()->get()->name}}">
										</div>
										<div class="form-group">
											<label>Apellido</label>
											<input type="text" name="last_name" class="form-control" value="{{Auth::user()->get()->last_name}}">
										</div>
										<div class="form-group">
											<label>Apellido</label>
											<input type="text" name="phone" class="form-control" value="{{Auth::user()->get()->phone}}">
										</div>
									<div class="modal-footer">
										<div class="pull-right">
											<button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Cancelar</button>
											<button type="submit" class="btn--ys"><i class="fa fa-check"></i> Acutalizar Datos</button>
										</div>
									</div>
									{!! Form:: close()!!}
									<!-- </form> -->
								</div>
							</div>
						</div>
					</div>
				<!--FIN-->
			</div>
		@endsection
	@section('script')
		@stop