<div id="modalAddress" class="modal fade" tabindex="-1" role="dialog" aira-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aira-label="Cerrar"><span aira-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><% !create ? 'Actualizar Direccion' : 'Agregar Direccion' %></h4>
			</div>
			<div class="modal-body"> 
				 <form role="form" ng-submit="createOrUpdate()">
				 	<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label>Direccion</label>
								<textarea class="form-control" name="street" ng-model="address.street"></textarea>
							</div>
						</div>
				 		<div class="col-xs-6">
				 			<div class="form-group">
				 				<label>Apartamento</label>
				 				<input type="text" name="complement" class="form-control" ng-model="address.complement">
				 			</div>
				 		</div>
				 		<div class="col-xs-6">
				 			<div class="form-group">
				 				<label>Barrio</label>
				 				<input type="text" name="neighborhood" ng-model="address.neighborhood" class="form-control">
				 			</div>
				 		</div>
				 	</div>
				 	<div class="row">
				 		<div class="col-xs-6">
				 			<div class="form-group">
				 				<label>Region</label>
								<select ng-options="state.name for state in states track by state.id" class="form-control" ng-model="state" ng-change="changeState()"></select>
				 			</div>
				 		</div>
				 		<div class="col-xs-6">
				 			<div class="form-group">
				 				<label>Ciudad</label>
								<select ng-model="city" ng-options="city.name for city in cities track by city.id" class="form-control"></select>
				 			</div>
				 		</div>
				 	</div>
					 <div class="modal-footer">
						 <input type="submit" class="btn btn--ys" value="<% !create ? 'Actualizar Direccion' : 'Agregar Direccion' %>"/>
					 </div>
				 </form>
			</div>

		</div>
	</div>
</div>