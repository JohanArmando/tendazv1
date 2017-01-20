@extends(Theme::current()->viewsPath.'.template')
	@section('css')
	@stop
@section('content')
<div class="container" ng-controller="UserController">
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3" >
   <div style="margin-top: 30px;"></div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title text-center">Perfil</h3>
            
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 hidden" align="center"> <img class="img-responsive" src="http://placehold.it/120x150">
					<br>
					<button type="button" class="btn btn-default btn-xs"><i class="fa fa-camera"></i>Cambiar imagen</button>
           		 </div>
                <div class=" col-md-12 col-lg-12 ">
                  <table class="table table-user-information">
                    <tbody>
					  <tr>
						<th>Nombre de Cliente</th>
						<td><% user.personal_info.first_name %> <% user.personal_info.last_name %></td>
					  </tr>
					  <tr>
						  <th>Email</th>
						  <td><% user.email %></td>
					  </tr>
					  <tr>
						  <th>Telefono</th>
						  <td>
							  <% user.personal_info.phone %>
						  </td>
					  </tr>
					  <tr>
					  	<th>Direccion</th>
					  	<td><% user.personal_info.identification %></td>
					  </tr>
                    </tbody>
                  </table>

                </div>
                <div class="text-center">
                  	<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalActualizar"> <i class="fa fa-edit"></i> Actualizar Datos</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
       	<div style="margin-bottom: 35px;"></div>
        <div class="col-md-12 col-lg-12" ng-controller="AddressController">
			@include(Theme::current()->viewsPath.'.partials.edit-dir')
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
							<div class="col-md-12">
								<hr>
								Al seleccionar ( <i class="fa fa-eye"></i> ) dejaras esta direcci&oacute;n como direccion principal.
							</div>

							<div class="col-md-12">
								<div class="pull-right"><br>
								<button ng-click="created()" data-target="#modalAddress" type="button" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar Direccion</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div style="margin-bottom: 125px;"></div>

			<!--Modal para modificar datos del perfil-->
				<div id="modalActualizar" class="modal fade" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aira-hidden="		true">&times;</span></button>
								<h4 class="modal-title">Editar Perfil</h4>
							</div>
							<div class="modal-body container-fluid">
								<div class="row">
								<div class="col-md-12" style="padding: 5%">
								<!--Fomulario-->
								<form name="profileForm" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal"
									  ng-submit="doUpdateProfile(profileForm)" novalidate>
									<div class="alert alert-danger" ng-repeat="error in errors" ng-show="errors" class="error"><% error %></div>
										<div class="form-group">
											<label>Nombres</label>
											<input type="text" name="name" value="" class="form-control"  ng-model="user.personal_info.first_name">
										</div>
										<div class="form-group">
											<label>Apellidos</label>
											<input type="text" name="last_name" value="" class="form-control" ng-model="user.personal_info.last_name">
										</div>

										<div class="form-group">
											<label>Telefono</label>
											<input type="text" name="phone" ng-model="user.personal_info.phone" class="form-control">
										</div>
										<div class="form-group">
											<label>Identificaci&oacute;n</label>
											<input type="text" name="phone" ng-model="user.personal_info.identification" class="form-control">
										</div>
										<hr>
										<div clas="modal-footer">
											<div class="text-center">
												<button class="btn btn-primary updateProfile"><i class="fa fa-edit"></i> Actualizar Datos</button>
											</div>
										</div>
								</form>
								<!--Fin-->
								</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			<!--Fin-->
	</div>
</div>
@endsection
	@section('script')
	@stop