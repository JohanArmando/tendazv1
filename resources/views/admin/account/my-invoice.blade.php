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
				<strong>Tendaz.com</strong>
				<br>
				<strong>Direcci&oacute;n:</strong> Carrera 58 No 137 a - 10 Piso 5
				<br>
				<strong>Telefono:</strong> 3104763183
				<br>
				<strong>Email:</strong> info@tendaz.com
			</address>
		</div>
		<!-- /.col -->
		<div class="col-sm-4 invoice-col">
			Para
			<address>
				<strong>{{ $result['sale']['customer']['cardholder_name'] }}</strong><br>
				<strong>Direcci&oacute;n:</strong> {{ $result['sale']['customer']['address_1'] }},  {{ $result['sale']['customer']['city'] }},  {{ $result['sale']['customer']['country_name'] }}.<br>
				<strong>Telefono:</strong> {{ $shop->user->phone }}<br>
				<strong>Email:</strong> {{ $result['sale']['customer']['email_address'] }}
			</address>
		</div>
		<!-- /.col -->
		<div class="col-sm-4 invoice-col">
			<b>Factura:</b> #{{ $result['sale']['invoices'][0]['invoice_id'] }}<br>
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
					<th>Cantidad</th>
					<th>Plan</th>
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
					<td>{{ $invoice->plan->description }}</td>
					<td>{{ $invoice->amount }}</td>
				</tr>
				</tbody>
			</table>
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->

	<div class="row">
		<!-- accepted payments column -->
		<div class="col-xs-6"></div>
		<div class="col-xs-6 hidden">
			<p class="lead">Metodo de pago:</p>
			<img src="{{asset('administrator/imagesMediosdePago/payment-1.png')}}" alt="Visa">
			<img src="{{asset('administrator/imagesMediosdePago/payment-2.png')}}" alt="Mastercard">
			<img src="{{asset('administrator/imagesMediosdePago/payment-4.png')}}" alt="American Express">
			<img src="{{asset('administrator/imagesMediosdePago/payment-5.png')}}" alt="Paypal">

			<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
				{{ $invoice->plan->description }}
			</p>
		</div>
		<!-- /.col -->
		<div class="col-xs-6">
			<p class="lead">Resumen:</p>

			<div class="table-responsive">
				<table class="table">
					<tbody>
					<tr>
						<th>Total:</th>
						<td>{{ $invoice->amount }}</td>
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
		<div class="col-xs-12 pull-right"><br>
			<a href="{{url('admin/account/invoices/'.$invoice->uuid.'/edit')}}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a>
		</div>
	</div>
 </section>
</div>
@stop
@section('scripts')
@endsection
