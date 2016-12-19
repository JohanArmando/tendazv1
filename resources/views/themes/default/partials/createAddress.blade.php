<div id="modalAgregardireccion" class="modal fade" tabindex="-1" role="dialog" aira-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aira-label="Cerrar">
					<span aira-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Nueva Direccion</h4>
			</div>
			<div class="modal-body">
				<form role="form" method="post" action="{{url('create/address')}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label>Nombre Direccion</label>
								<input type="text" name="name" class="form-control">
							</div>
						</div>
						<div class="col-xs-5">
							<div class="form-group">
								<label>Apellido Direccion</label>
								<input type="text" name="last_name" class="form-control">
							</div>
						</div>
						<div class="col-xs-3">
							<div class="form-group">
								<label>Pais</label>
								<input type="text" name="country_name" class="form-control">
							</div>
						</div>
						<div class="col-xs-3">
							<div class="form-group">
								<label>Ciudad</label>
								<input type="text" name="city" class="form-control">
							</div>
						</div>
						<div class="col-xs-3">
							<div class="form-group">
								<label>Barrio</label>
								<input type="text" name="locality" class="form-control">
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label>Direccion</label>
								<textarea name="address" class="form-control"></textarea>
							</div>
						</div>

					</div>
					<div class="row">
						<!--<div class="col-xs-6">
							<div class="form-group">
								<label>Indicativo del pais</label>
								<input type="text" name="" class="form-control">
							</div>
						</div>-->
						<div class="col-xs-6">
							<div class="form-group">
								<label>Telefono</label>
								<input type="text" name="phone" class="form-control">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
						<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Agregar Direccion</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>