<!-- Modal view invoice-->
<div id="modal_invoice" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3" style="border: 1px solid; color: red;">
						<div style="margin-bottom: 80px;"></div>
					</div>
				</div>
				<div class="clearfix"></div>
				<br>
				<div style="border-bottom: 2px solid; color: grey;"></div>
				<div class="clearfix"></div>
				<br>
				<div class="row">
					<div class="col-sm-6">

						<p>Nombre del Cliente</p>
						<p>Fecha: 12/12/12</p>
						<p align="justify">Direccion:
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						</p>
					</div>
					<div class="col-sm-6">
						<p align="right">
							Nº de Factura: 1121232435467890
						</p>
					</div>
				</div>
				<div style="border-bottom: 2px solid; color: grey;"></div>
				<br>
				<div class="row">
					<div class="col-sm-12">
						<table class="table table-responsive tbl_invoice" style=" height: 300px;">
							<thead>
								<tr>
									<th style="width: 10%;"><strong>Cant.</strong></th>
									<th style="width: 80%;"><strong>Descripcion</strong></th>
									<th style="width: 20%;"><strong>Importe	</strong></th>
								</tr>
							</thead>
							<tbody style="overflow-y: scroll; height: 200px; width: 97%; position: absolute;">
								<tr style="width: 100%; display: inline-table;">
									<td>1</td>
									<td>
										<p align="justify">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</td>
									<td>
										<strong>$123.456</strong>
									</td>
								</tr>
								<tr>
									<td>1</td>
									<td>
										<p align="justify">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</td>
									<td>
										<strong>$123.456</strong>
									</td>
								</tr>
								<tr>
									<td>1</td>
									<td>
										<p align="justify">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</td>
									<td>
										<strong>$123.456</strong>
									</td>
								</tr>
								<tr>
									<td>1</td>
									<td>
										<p align="justify">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</td>
									<td>
										<strong>$123.456</strong>
									</td>
								</tr>
							</tbody>
						</table>
						<p align="right">
							<strong>Total</strong>
							$123.456
						</p>
					</div>
					<div id="line_horizontal"></div>
					<div>
						<div class="text-center">
							<button id="btn-invoices" type="button" class="btn btn-primary"><i class="fa fa-download"></i> Exportar en PDF</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--END-->