@extends('layouts.administrator')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/new_css_invoice.css')}}">
@stop
@section('content')	
<div class="page-header page-header-block">
	<div class="page-header-section">
		<h4 class="title semibold"><img src="{{asset('administrator/image/icons/icons-base/business-cards.png')}}" width="24">&nbsp; Mis Facturas</h4>
	</div>
	<div class="page-header-section">
		<div class="toolbar">
			<ol class="breadcrumb breadcrumb-transparent nm">
				<li><a href="{{url('admin')}}" style="color: grey;">Inicio</a></li>
				<li style="color: orange;">Mis Facturas</li>
			</ol>
		</div>
	</div>
</div>
<div class="container">
	<div style="margin-top: 40px;"></div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<ul id="tab_invoice" class="nav nav-tabs">
				<li id="new_li_tab" role="presentation" class="active">
					<a style=" font-size: 18px; background-color: #F26522; color: white; height: 45px; width: 100%;" href="#">
						<img src="{{asset('administrator/image/icons/icons-base/business-cards.png')}}" width="16"> Datos de Facturación
					<div class="triangulo-equilatero-bottom-left "></div>
				</a></li>
			</ul>
			<div id="new_panel" class="tab-content panel panel-body panel-content">
				<div id="home" class="tab-pane fade in active">
					<div class="row">
						<!-- imagen a la izquierda-->
						<div class="">
							<img src="{{asset('logos/'.$shop->id.'/'.$shop->logo)}}" class="img-responsive" align="right"
								 alt="Logo de la tienda" style="border: 1px solid; color: red; width: 300px; height: 100px;
								 margin-right: 10%;">
						</div>
						<!--Fin-->
						<div class="clearfix"></div>
						<div style="margin-bottom: 50px;"></div>
						<form method="get" action="{{url('admin/invoices')}}" role="form">
							<div class="row">
								<div class="col-sm-10 col-sm-offset-1">
									<input id="new_input_text" class="form-control" type="text" name="" placeholder="NOMBRES">
								</div>
								<div class="clearfix"></div>
								<br>
								<div class="col-sm-10 col-sm-offset-1">
									<input id="new_input_text" class="form-control" type="text" name="" placeholder="APELLIDOS">
								</div>
								<div style="margin-bottom: 50px;"></div>
								<div class="col-sm-10 col-sm-offset-1">
									<textarea id="new_text_area_invoice" class="form-control" placeholder="DIRECCION"></textarea>
								</div>
							</div>
							<div class="clearfix"></div>
							<div style="margin-bottom: 30px;"></div>
							<div class="text-center">
								<a id="btn-invoices" href="{{url('admin/account/invoices')}}" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Registrar Cambios</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="margin-bottom: 30px;"></div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 id="panel_blue_title" class="panel-title">Facturas nombre de la tienda.</h4>
				</div>
				<div>
					<div>
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">ID de Factura</th>
									<th class="text-center">Fecha</th>
									<th class="text-center">Monto</th>
								</tr>
							</thead>
							<tbody>
								<tr class="text-center">
									<td>
										<a href="#" data-toggle="modal" data-target="#modal_invoice">1293849</a>
									</td>
									<td> hola/hola/hola</td>
									<td>$123.456</td>
								</tr>
								<tr class="text-center">
									<td>hola hola hola</td>
									<td> hola/hola/hola</td>
									<td>$123.456</td>
								</tr>
								<tr class="text-center">
									<td>hola hola hola</td>
									<td> hola/hola/hola</td>
									<td>$123.456</td>
								</tr>
								<tr class="text-center">
									<td>hola hola hola</td>
									<td> hola/hola/hola</td>
									<td>$123.456</td>
								</tr>
								<tr class="text-center">
									<td>hola hola hola</td>
									<td> hola/hola/hola</td>
									<td>$123.456</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>						
@include('admin.partials.account.modal-view-invoice')
@stop
@section('scripts')
<script>
	$(document).on('ready' , function () {
		$('#form-invoice').submit(function (e) {
			$(this).find('.btn').text('Registrando ...').attr('disabled' , true );
		});
	});
</script>
@endsection