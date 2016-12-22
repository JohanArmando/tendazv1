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
				<div class="row">
					@include('servientrega.partials.almacenamiento')
				</div>
				@include('servientrega.partials.footer')
			</div>
	<div class="container-fluid aa_container-fluid section pp-scrollable" id="posicionamientodigital">
				@include('servientrega.partials.top')
				@include('servientrega.partials.nav')
				<div class="row">
					@include('servientrega.partials.posicionamientodigital')
				</div>
				@include('servientrega.partials.footer')
			</div>						
		</section>
		@endsection