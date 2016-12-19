	@extends('tema2.template')
	@section('css')
		@stop
	@section('content')	
		
			<div class="container">
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
						<td>{{Auth::user()->get()->full_name}}</td>
					  </tr>
					  <tr>
						  <th>Email</th>
						  <td><a href="#">{{Auth::user()->get()->email}}</a></td>
					  </tr>
					  <tr>
						  <th>Telefono</th>
						  <td>
							  {{Auth::user()->get()->phone ? Auth::user()->get()->phone : 'Sin numero de telefono'}}
						  </td>
					  </tr>
					  <tr>
					  	<th>Direccion</th>
					  	<td>
					  		 
					  			Cra. 55a #188-43 Barrio Mirandela, Conjutno Quintas de San Pedro III.
					  		
					  		
					  	</td>
					  </tr>
                    </tbody>
                  </table>

                </div>
                <div class="text-center">
                  	<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modaEditar"> <i class="fa fa-edit"></i> Actualizar Datos</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
       	<div style="margin-bottom: 35px;"></div>
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
												<button type="button" data-target="#modalEditarDireccion" data-toggle="modal" class="btn btn-warning btn-xs"><i class="fa fa-edit
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
											<button type="button" data-toggle="modal" data-target="#modal_Add_dir"  class="btn btn-primary"><i class="fa fa-plus"></i> Agregar Direccion</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

     				</div>
				</div>
			</div>
			<div style="margin-bottom: 125px;"></div>
			@include('partials.add-dir')
			@include('partials.edit-dir')

			<!--Modal para modificar datos del perfil-->
				<div id="modaEditar" class="modal fade" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aira-hidden="		true">&times;</span></button>
								<h4 class="modal-title">Editar Perfil</h4>
							</div>
							<div class="modal-body">
								<!--Fomulario-->

								{!! Form::open(['url' =>[ "myProfile",Auth::user()->get()->id ],'method' => 'PUT','files' => true, 'data-toggle'=>'validator', 'role'=>'form']) !!}
										<div class="form-group">
											<label>Nombres</label>
											<input type="text" name="name" value="{{Auth::user()->get()->name}}" class="form-control" required autocomplete="on">
										</div>
										<div class="form-group">
											<label>Apellidos</label>
											<input type="text" name="last_name" value="{{Auth::user()->get()->last_name}}" class="form-control" required autocomplete="on">
										</div>

										<div class="form-group">
											<label>Telefono</label>
											<input type="text" name="phone" value="{{Auth::user()->get()->phone}}" class="form-control" required>
										</div>
										<hr>
										<div clas="modal-footer">
											<div class="text-center">
												<button class="btn btn-primary"><i class="fa fa-edit"></i> Actualizar Datos</button>
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