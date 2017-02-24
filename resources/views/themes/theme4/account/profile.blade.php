@extends(Theme::current()->viewsPath.'.template')
	@section('css')
		<style>
			.item{
				color: dimgrey;
			}
		</style>
		@stop
	@section('content')
			<div class="content" ng-controller="UserController">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-12 col-xs-12 col-md-offset-4">
              				<div class=" col-xs-10 text-center">
							 	<div class="panel panel-default panel-content">
								  <div style="margin-top: 10px;"></div>
								  <img src="http://placehold.it/150x150" alt="" class="hidden img-circle" />
									<br>
									<h3><strong style="color: #1FC0A0"> <% user.personal_info.first_name %> <% user.personal_info.last_name %></strong></h3>
									<h5><strong class="item">Email:</strong> <span><% user.email %></span></h5>
									<h5><strong class="item">Telefono:</strong> <span><% user.personal_info.phone %></span></h5>
									<h5><strong class="item">Identificaci&oacute;n:</strong> <span><% user.personal_info.identification %></span></h5>
									<div class="hidden">
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
						<div class="col-md-12 col-lg-12  col-xs-12" ng-controller="AddressController">
							@include(Theme::current()->viewsPath.'.partials.edit-dir')
							<div class="panel">
								 <div class="text-center">
				 					<h4 class="text-center text-uppercase title-under">Direcciones</h4>			
			 					</div>
								 <div class="panel-content">
								 	<div class="panel-body">
								 		<table class="table" cellspacing="100">
								 			<tbody>
								 				<tr>
												<th>Direccion</th>
												<th>Complemento</th>
												<th>Estado</th>
												<th class="text-center">Principal</th>
												<th class="text-center">Acciones</th>
											</tr>
											<tr ng-repeat="address in addresses">
												<td><% address.street %></td>
												<td>
													<% address.street %>
												</td>
												<td>
													<p align="justify">
														<% address.state.name %> - <% address.city.name %>
													</p>
												</td>
												<td class="text-center">
													<a class="btn btn-xs" ng-class=" address.isPrimary ? 'btn-primary' : 'btn-default'" href="">
														<i class="fa" ng-class=" address.isPrimary ? 'fa-eye' : 'fa-eye-slash'"></i>
													</a>
												</td>
												<td class="text-center">
													<button type="button" data-target="#modalAddress" data-toggle="modal" class="btn btn-warning btn-xs" ng-click="edit( $index)"><i class="fa fa-edit
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
	 											<button type="submit" data-toggle="modal" data-target="#modalAddress" class="btn btn--ys" ng-click="created()"><i class="fa fa-plus"></i> Agregar nueva direccion</button>
	 										</div>
								 		</div>
								 	</div>
								 </div>
							</div>
						</div>
					</div>
				</div>


				<!--MODAL PARA EL CAMBIO DE NOMBRE-->
					<div id="modalActualizar" class="fade modal modalActualizar" tabindex="-1" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aira-label="cerrar"><span aire-hidden="true"s>&times;</span></button>
									<h4 class="modal-title">Editar datos del perfil</h4>
								</div>
								<div class="modal-body">
									<form name="profileForm" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" ng-submit="doUpdateProfile(profileForm)" novalidate>
										<div class="alert alert-danger" ng-repeat="error in errors" ng-show="errors" class="error"><% error %></div>
										<div class="row" style="padding: 5%">
											<div class="col-md-12">
												<div class="form-group">
													<label>Nombre</label>
													<input type="text" name="name" class="form-control" value="name" ng-model="user.personal_info.first_name">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label>Apellido</label>
													<input type="text" name="last_name" class="form-control" value="last_name" ng-model="user.personal_info.last_name">
												</div>
												<div class="form-group">
													<label>Telefono</label>
													<input type="text" name="phone" class="form-control" value="phone" ng-model="user.personal_info.phone">
												</div>
												<div class="form-group">
													<label>Identificacion</label>
													<input type="text" name="phone" class="form-control" value="phone" ng-model="user.personal_info.identification">
												</div>
												<div class="modal-footer">
													<div class="pull-right">
														<button type="submit" class="btn--ys updateProfile">Actualizar Datos</button>
													</div>
												</div>
											</div>
										</div>
									</form>
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