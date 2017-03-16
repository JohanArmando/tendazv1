@extends('layouts.administrator')
@section('title')
	Mis Facturas
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('administrator/css/new_css_invoice.css')}}">
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
		<div class="col-md-10 col-md-offset-1">
			<ul id="tab_invoice" class="nav nav-tabs" style="background: transparent">
				<li id="new_li_tab" class="nav-title hidden-xs"  role="presentation">
					<a href="#">Datos de Facturación</a>
					<div class="hidden-xs triangulo-equilatero-bottom-left"></div>
				</li>
			</ul>
			<div id="new_panel" class="tab-content panel panel-body panel-content">
				<div id="home" class="tab-pane fade in active">
					<div class="row">
						<div class="col-md-4 text-center">
							@if($shop->logo)
							<img src="{{asset('logos/'.$shop->id.'/'.$shop->logo)}}"
								 alt="Logo de la tienda" style="padding:3%; border: 1px solid; color: #f26522; max-height: 150px">
								@else
								<h2 style="color: #f26522">{{$shop->name}}</h2>
							@endif
							<h2>{{Auth('admins')->user()->full_name}}</h2>
							<h3>{{Auth('admins')->user()->email}}</h3>
						</div>
						<div class="col-md-8 ">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 id="panel_blue_title" class="panel-title">Facturas nombre de la tienda.</h4>
								</div>
								<div>
									<div class="table-responsive">
										<table class="table table-bordered table-hover">
											<thead>
											<tr>
												<th class="text-center">Fecha Inicio</th>
												<th class="text-center">Fecha Vencimiento</th>
												<th class="text-center">Pago</th>
												<th class="text-center">Monto</th>
												<th>Ver Factura</th>
											</tr>
											</thead>
											@foreach($invoices as $invoice)

												<tr  class="text-center cu @if($invoice->id == $subscription) trSelect @endif">
													<td>{{\Tendaz\components\DateGenerator::dateGenerate($invoice->start_at)}}</td>
													<td>{{\Tendaz\components\DateGenerator::dateGenerate($invoice->end_at)}}</td>
													<td>{{$invoice->amount}}</td>
													<td>
														@foreach($plans as $plan)
															@if($plan->id == $invoice->plan_id)
																{{$plan->name}}
															@endif
														@endforeach
													</td>
													<td><a class="btn btn-tendaz" href="{{url('/admin/account/invoices/'.$invoice->uuid)}}"><i class="fa fa-info-circle"></i></a></td>
												</tr>
											@endforeach
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div style="margin-bottom: 30px;"></div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="margin-bottom: 30px;"></div>
	<div class="row">

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