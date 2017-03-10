@extends('layouts.administrator')
@section('title')
	Mi Factura
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('administrator/css/new_css_invoice.css')}}">
@stop
@section('content')	
<div class="page-header page-header-block">
	<div class="page-header-section">
		<h4 class="title semibold"><img src="{{asset('administrator/image/icons/icons-base/business-cards.png')}}" width="24">&nbsp; Mi Factura</h4>
	</div>
	<div class="page-header-section">
		<div class="toolbar">
			<ol class="breadcrumb breadcrumb-transparent nm">
				<li><a href="{{url('admin')}}" style="color: grey;">Inicio</a></li>
				<li><a href="{{url('admin/account/invoices')}}" style="color: grey;">Mis Facturas</a></li>
				<li style="color: orange;">Mi Factura</li>
			</ol>
		</div>
	</div>
</div>
<div class="panel-body" style="background-color: white;margin-bottom: 20px">
 <section class="invoice">
	<!-- title row -->
	<div class="row">
		<div class="col-xs-12">
			<h2 class="page-header">
				<i class="fa fa-globe"></i> {{$shop->name}}
				<small class="pull-right">Fecha: {{\Tendaz\components\DateGenerator::dateGenerate($invoice->start_at)}}</small>
			</h2>
		</div>
		<!-- /.col -->
	</div>
	<!-- info row -->
	<div class="row invoice-info">
		<div class="col-sm-4 invoice-col">
			<address>
				De <br>
				<strong>{{$shop->name}}</strong><br>
				<strong>Direcci&oacute;n:</strong> {{$shop->store->address_2}}<br>
				<strong>Phone:</strong> {{$shop->store->number_phone}}<br>
				<strong>Email:</strong> {{$shop->store->address_1}}
			</address>
		</div>
		<!-- /.col -->
		<div class="col-sm-4 invoice-col">
			To
			<address>
				<strong>John Doe</strong><br>
				795 Folsom Ave, Suite 600<br>
				San Francisco, CA 94107<br>
				Phone: (555) 539-1037<br>
				Email: john.doe@example.com
			</address>
		</div>
		<!-- /.col -->
		<div class="col-sm-4 invoice-col">
			<b>Invoice #007612</b><br>
			<br>
			<b>Order ID:</b> 4F3S8J<br>
			<b>Payment Due:</b> 2/22/2014<br>
			<b>Account:</b> 968-34567
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->

	<!-- Table row -->
	<div class="row">
		<div class="col-xs-12 table-responsive">
			<table class="table table-striped">
				<thead>
				<tr>
					<th>Qty</th>
					<th>Product</th>
					<th>Tiempo</th>
					<th>Description</th>
					<th>Subtotal</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>{{$invoice->plan->name}}</td>
					<td>@if($invoice->plan->interval == 'monthly') 1 Mes @else @if($invoice->plan->interval == 'yearly')1 a&ntilde;o @endif @endif</td>
					<td>{{$invoice->plan->description}}</td>
					<td>{{$invoice->amount}}</td>
				</tr>
				</tbody>
			</table>
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->

	<div class="row">
		<!-- accepted payments column -->
		<div class="col-xs-6">
			<p class="lead">Metodo de pago:</p>
			<img src="{{asset('administrator/imagesMediosdePago/payment-1.png')}}" alt="Visa">
			<img src="{{asset('administrator/imagesMediosdePago/payment-2.png')}}" alt="Mastercard">
			<img src="{{asset('administrator/imagesMediosdePago/payment-4.png')}}" alt="American Express">
			<img src="{{asset('administrator/imagesMediosdePago/payment-5.png')}}" alt="Paypal">

			<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
				{{$invoice->plan->description}}
			</p>
		</div>
		<!-- /.col -->
		<div class="col-xs-6">
			<p class="lead">Resumen:</p>

			<div class="table-responsive">
				<table class="table">
					<tbody><tr>
						<th style="width:50%">Subtotal:</th>
						<td>$250.30</td>
					</tr>
					<tr>
						<th>Tax (9.3%)</th>
						<td>$10.34</td>
					</tr>
					<tr>
						<th>Shipping:</th>
						<td>$5.80</td>
					</tr>
					<tr>
						<th>Total:</th>
						<td>$265.24</td>
					</tr>
					</tbody></table>
			</div>
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->

	<!-- this row will not appear when printing -->
	<div class="row no-print">
		<div class="col-md-12"></div>
		<div class="col-xs-12 pull-right">
			<a href="{{url('admin/account/invoices/55665/edit')}}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a>
		</div>
	</div>
 </section>
</div>
@stop
@section('scripts')
@endsection