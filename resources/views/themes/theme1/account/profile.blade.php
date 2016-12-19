@extends('tema1.template')
	@section('css')
		@stop
	@section('content')
			<div class="content">
				<div class="container">
					<div class="row">
					<div style="margin-top: 50px;"></div>
					<div class="clearfix"></div>
						<div class="col-md-4 col-md-offset-4">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="text-center">
										<h3 class="panel-title">Perfil</h3>
									</div>
								</div>
								<div class="panel-content">
									<div class="panel-body">
										<div class="row">
										<div class="col-md-3 col-lg-3 hidden" align="center">
											@if(Auth::user()->get()->path){
											<img src='' class='img-responsive'>
											@else
											<img src='http://placehold.it/120x150' classs='img-responsive'>
											@endif
											<br>
										</div>

										<div class="col-md-12 col-lg-12">
											<table class="table table-user-information">
											<tbody>
											<tr>
												<th>Nombre</th>
												<td>{{Auth::user()->get()->full_name}}</td>
											</tr>
											<tr>
												<th>Telefono</th>
												<td>{{Auth::user()->get()->phone ? Auth::user()->get()->phone :'Sin numero '}}</td>
											</tr>
											<tr>
												<th>Email</th>
												<td><a href="mailto:info@tendaz.com" class="active">{{Auth::user()->get()->email}}</a></td>
											</tr>
											<tr>
												<th>Direcci&oacute;n</th>
												<td>direccion principal</td>
											</tr>
											</tbody>
											</table>
											<div class="text-center"  style="height: 52px">
												<button  data-target="#modalEditar" data-toggle="modal" type="button"
														 class="btn btn-primary"><i class="fa fa-edit"></i> Editar Datos de perfil</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

						<div class="col-md-6 col-lg-6 hidden">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="text-center">
										<h3 class="panel-title">Direcciones</h3>
									</div>
								</div>
								<div class="panel-content">
									<div class="panel-body">
										<table class="table table-responsive">
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
												<button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modalEditarDireccion">
													<i class="fa fa-edit"></i>
												</button>
											</td>
										</tr>
										</tbody>
										</table>
										<div class="col-md-12">
											<hr>
											Al seleccionar ( <i class="fa fa-eye"></i> ) dejaras esta direcci&oacute;n como direccion principal.
										</div>
										<div class="col-md-12">
											<div class="pull-right"><br>
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregardireccion">
												<i class="fa fa-plus"></i> Agregar Nueva Direccion
											</button>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						@include('partials.edit-dir')
						@include('partials.add-dir')
					<!--Modal para editar Datos-->
					<div id="modalEditar" class="modal fade" tabindex="-1" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									@include('admin.partials.message')
									<button type="button" class="close" data-dismiss="modal" aira-label="Close"><span aira-hidden="true">&times;</span></button>
									<h4 class="modal-title">Editar datos del Perfil</h4>
								</div>
								<div class="modal-body">
									{!! Form::open(['url' =>[ "myProfile",Auth::user()->get()->id ],'method' => 'PUT','files' => true, 'data-toggle'=>'validator', 'role'=>'form']) !!}
									<div class="row">
										<div class="col-xs-6">
											<label>Nombres</label>
											<input type="text" class="form-control" name="name" value="{{Auth::user()->get()->name}}">
										</div>
										<div class="col-xs-6">
											<label>Apellidos</label>
											<input type="text" class="form-control"  name="last_name" value="{{Auth::user()->get()->last_name}}">
										</div>
										<div class="col-xs-6">
											<label>Telefono</label>
											<input type="text" class="form-control" name="phone" value="{{Auth::user()->get()->phone}}">
										</div>
										<div class="col-xs-6">
											<style type="text/css">
												input[type="file"]{
													display: none;
												}
												.custom-file-upload{
													border: 1px solid #ccc;
													display: inline-block;
													padding: 6px  12px;
													cursor: pointer;
												}
											</style>
											<div class="clearfix"></div>
											<div style="margin-top: 2px;"></div>
											<label>Imagen de Perfil</label>
											<div class="form-group">
												<label for="file-upload" class="custom-file-upload">
    											<i class="fa fa-upload"></i> Carga foto de Perfil
											</label>
												<input id="file-upload" type="file"/>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<div class="text-center">
										<button type="submit" class="btn btn-primary"> <i class="fa fa-edit"></i> Guardar Cambios</button>
										<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
									</div>
								</div>
								{!!Form::close()!!}
							</div>
						</div>
					</div>
					<!--Fin-->

				</div>
				<div style="margin-bottom: 100px;"></div>
			</div>
		</div>
	@endsection
@section('scripts')
@stop