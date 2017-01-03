@extends('servientrega.template')
@section('css')
			<link rel="stylesheet" type="text/css" href="{{asset('servientrega/css/jquery.pagepilling.css')}}">
			@stop
		@section('content')		
	<section id="pagepiling">
			<div class="container-fluid aa_container-fluid section pp-scrollable" id="se_container-1">
				@include('servientrega.partials.top')
				@include('servientrega.partials.nav')
				<div class="row">
					@include('servientrega.partials.image-spin')
					@include('servientrega.partials.form-rigth')
					
				</div>
				@include('servientrega.partials.footer')
			</div>
	<div class="container-fluid aa_container-fluid section pp-scrollable" id="about">
				@include('servientrega.partials.top')
				@include('servientrega.partials.nav')
				<div class="row">
					@include('servientrega.partials.inphography')
				</div>
				@include('servientrega.partials.footer')
			</div>
	<div class="container-fluid aa_container-fluid section pp-scrollable" id="almacenamiento">
				@include('servientrega.partials.top')
				@include('servientrega.partials.nav')
				@include('servientrega.partials.timeline')
				<div class="row">
					@include('servientrega.partials.almacenamiento')
				</div>
				@include('servientrega.partials.footer')
			</div>
	<div class="container-fluid aa_container-fluid section pp-scrollable" id="posicionamientodigital">
				@include('servientrega.partials.top')
				@include('servientrega.partials.nav')
				@include('servientrega.partials.timeline')
				<div class="row">
					@include('servientrega.partials.posicionamientodigital')
				</div>
				@include('servientrega.partials.footer')
			</div>		
	<div class="container-fluid aa_container-fluid section pp-scrollable" id="acompanamiento">
				@include('servientrega.partials.top')
				@include('servientrega.partials.nav')
				@include('servientrega.partials.timeline')
				<div class="row">
					@include('servientrega.partials.acompanamiento')
				</div>
				@include('servientrega.partials.footer')
			</div>	
	<div class="container-fluid aa_container-fluid section pp-scrollable" id="lamarca">
				@include('servientrega.partials.top')
				@include('servientrega.partials.nav')
				@include('servientrega.partials.timeline')
				<div class="row">
					@include('servientrega.partials.lamarca')
				</div>
				@include('servientrega.partials.footer')
			</div>
	<div class="container-fluid aa_container-fluid section pp-scrollable" id="logisticacobro">
				@include('servientrega.partials.top')
				@include('servientrega.partials.nav')
				@include('servientrega.partials.timeline')
				<div class="row">
					@include('servientrega.partials.logisticacobro')
				</div>
				@include('servientrega.partials.footer')
			</div>	
			<div class="container-fluid aa_container-fluid section pp-scrollable" id="inversa">
				@include('servientrega.partials.top')
				@include('servientrega.partials.nav')
				@include('servientrega.partials.timeline')
				<div class="row">
					@include('servientrega.partials.store')
				</div>
				@include('servientrega.partials.footer')
			</div>	
			<div class="container-fluid aa_container-fluid section pp-scrollable" id="inversa">
				@include('servientrega.partials.top')
				@include('servientrega.partials.nav')
				@include('servientrega.partials.timeline')
				<div class="row">
					@include('servientrega.partials.inversa')
				</div>
				@include('servientrega.partials.footer')
			</div>	
			<div class="container-fluid aa_container-fluid section pp-scrollable" id="especializada">
				@include('servientrega.partials.top')
				@include('servientrega.partials.nav')
				@include('servientrega.partials.timeline')
				<div class="row">
					@include('servientrega.partials.especializada')
				</div>
				@include('servientrega.partials.footer')
			</div>	
			<div class="container-fluid aa_container-fluid section pp-scrollable" id="internacional">
				@include('servientrega.partials.top')
				@include('servientrega.partials.nav')
				@include('servientrega.partials.timeline')
				<div class="row">
					@include('servientrega.partials.internacional')
				</div>
				@include('servientrega.partials.footer')
			</div>		
											
		</section>
		@endsection