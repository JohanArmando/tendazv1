@extends('admin.template')
@section('css')
@stop
@section('content')
	<div class="page-header page-header-block">
		<div class="page-header-section">
			<h4 class="title semibold"><i class=""></i>&nbsp; Importat / Exportar Productos</h4>
		</div>
		<div class="page-header-section">
			<!--Toolbar-->
			<div class="toolbar">
				<ol class="breadcrumb breadcrumb-transparent nm">
					<li><a href="{{url('admin/home')}}">Home</a></li>
					<li class="active"><a href="#">importar/exportar productos</a></li>
				</ol>
			</div>
		</div>
	</div>
	<br>
	<h4><strong>Columnas del archivo</strong></h4>
	<p>Indica como debemos interpretar  las columnas del archivo que subiste.</p>
	<br>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10">	
				<table class="table table-responsive table-hover table-striped" style="width: 70%;">	
						<tbody>
							<tr>	
									<td><label>	Identificador de URL</label></td>
									<td>
										<select class="form-control">
											<option> opcion 1</option>
											<option> opcion 2</option>
											<option> opcion 3</option>
										</select>
									</td>
							</tr>
							<tr>	
								 <td> <label> Nombre</label></td>
								 <td>	
								 		<select class="form-control">	
								 				<option> opcion1</option>
								 				<option> opcion 2</option>
								 				<option> opcion 3</option>
								 		</select>
								 </td>
							</tr>
							<tr>
									<td><label> Categorias</label></td>
									<td>
										<select class="form-control">
											<option> opcion1</option>
								 				<option> opcion 2</option>
								 				<option> opcion 3</option>
										</select>
									</td>
							</tr>
							<tr>
								<td><label>Precio</label></td>
								<td>
									<select class="form-control">
										<option> opcion1</option>
								 				<option> opcion 2</option>
								 				<option> opcion 3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><label>Precio Promocional</label></td>
								<td>
									<select class="form-control">
										<option> opcion1</option>
								 				<option> opcion 2</option>
								 				<option> opcion 3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><label>Peso</label></td>
								<td>
									<select class="form-control">
										<option> opcion1</option>
								 				<option> opcion 2</option>
								 				<option> opcion 3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><label>Stock</label></td>
								<td>
									<select class="form-control">
										<option> opcion1</option>
								 				<option> opcion 2</option>
								 				<option> opcion 3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><label>SKU</label></td>
								<td>
									<select class="form-control">
										<option> opcion1</option>
								 				<option> opcion 2</option>
								 				<option> opcion 3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><label>Mostrar en tienda</label></td>
								<td>
									<select class="form-control">
										<option> opcion1</option>
								 				<option> opcion 2</option>
								 				<option> opcion 3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><label>Envio sin cargo</label></td>
								<td>
									<select class="form-control">
										<option> opcion1</option>
								 				<option> opcion 2</option>
								 				<option> opcion 3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><label>Descripcion</label></td>
								<td>
									<select class="form-control">
										<option> opcion1</option>
								 				<option> opcion 2</option>
								 				<option> opcion 3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><label>Tags</label></td>
								<td>
									<select class="form-control">
										<option> opcion1</option>
								 				<option> opcion 2</option>
								 				<option> opcion 3</option>
									</select>
								</td>
							</tr>
							
						</tbody>
				</table>
				<div class="text-left">
					<button type="button" class="btn btn-primary">Importar productos</button>
					<button type="button" class="btn btn-default">Cancelar</button>
				</div>
		</div>
		
	</div>
	<br>
	<br>
@endsection
@section('scripts')
@stop