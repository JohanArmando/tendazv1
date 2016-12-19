@extends('admin.template')
	@section('content')	
		<div class="page-header page-header-block">
        	<div class="page-header-section">
            	<h4 class="title semibold"><i class="ico-user"></i>&nbsp; Mis Facturas</h4>
        	</div>
        	<div class="page-header-section">
				<div class="toolbar">
					<ol class="breadcrumb breadcrumb-transparent nm">
						<li><a href="{{url('admin/home')}}" style="color: grey;">Inicio</a></li>
						<li style="color: orange;">Mis Facturas</li>
					</ol>
            	</div>
        	</div>
    	</div>

    <div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<div class="panel panel-default">
    			<div class="panel-heading">
                    <h4 class="panel-title">
    				<strong> Datos para facturaci&oacute;n</strong></h4>
                </div>
    			<div class="panel-body">
    				<form class="" role="form">
    					<div class="form-group">
    						<label for="nombre">Nombres</label>
    						<input type="text" class="form-control">
    					</div>
    					<div class="form-group">
    						<label for="apellidos">Apellidos</label>
    						<input type="text" class="form-control">
    					</div>
    					<div class="form-group">
    						<label for="direccion">Direccion</label>
    						<textarea class="form-control"  rows="5"></textarea>
    					</div>
    					<div class="form-group">
    						<div class="text-center">
    							<button class="btn btn-primary"><i class="fa fa-check"></i> Registrar cambio</button>
    							<button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Borrar</button>
    						</div>
    					</div>
    				</form>
					<hr>
					<h4 class="text-primary"><strong>Facturas {{ Auth::client()->get()->shop->name_store }}</strong></h4>
					<table  class="table table-responsive table-hover table-striped table-bordered" cellpadding="0" width="100%">
						<thead>
						<tr>
							<th>Facturas</th>
							<th>Fecha</th>
							<th>Monto</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>08/08/2016</td>
							<td>nombre del cliente #1</td>
							<td>$123.456</td>
						</tr>
						</tbody>
					</table>
    			</div>
    		</div>
    	</div>
    </div>
	@endsection