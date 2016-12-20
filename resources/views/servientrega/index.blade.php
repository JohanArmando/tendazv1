@extends('servientrega.template')
	@section('css')
		@stop
		@section('content')		
			@include('servientrega.partials.image-spin')
			@include('servientrega.partials.form-rigth')
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						 <!-- First Featurette -->
				        <div class="featurette" id="about">
				            <img class="featurette-image img-responsive pull-right" src="{{asset('servientrega/img/servientregastore.png')}}" width="200" height="200">
				            <h2 class="featurette-heading">SERVIENTREGA STORE
				             </h2>
				            <p align="justify" class="lead">
				            	Presentamos la oferta integral para e-commerce con la solución Servientrega Store, que le permite crear su tienda virtual autogestionable de forma rápida y segura. Con esta solución cuenta con un aliado con más de 34 años de experiencia en logística nacional e internacional y más de 6 años dedicados a impulsar los más grandes e-commerce del país, poniendo a su disposición los servicios necesarios que le permiten dedicarse a la razón de ser de su negocio, los clientes; Todo esto de la mano de la marca más apreciada por los colombianos, Servientrega.
				            </p>
				        </div>
					</div>
					<div class="clearfix"></div>
					<br>
					<div class="col-md-12">
						<!-- Second Featurette -->
					        <div class="featurette" id="services">
					            <img class="featurette-image img-responsive pull-left" src="{{asset('servientrega/img/circulo-logistica.png')}}" width="300" height="300">
					            <h2 class="featurette-heading">LOGISTICA INTEGRAL E-COMMERECE
					                
					            </h2>
					            <p align="justify" class="lead">Servientrega trae a Colombia una solución integral de e-commerce, que apalanca la cadena de suministro del comercio electrónico, iniciando desde la logística internacional de aprovisionamiento de grandes volúmenes o productos unitarios, servicio de almacenamiento de productos que incluyen alistamiento, picking y packing, logística especializada de recolección, distribución, cobro contra entrega e inversa, Tienda virtual autogestionable Servientrega Store, marketing digital, acompañamiento e integración tecnológica que le permite conectarse con los servicios de rastreo y generación automática de guías.</p>
					        </div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>		
			<div style="margin-bottom: 50px;"></div>
		@include('servientrega.partials.footer')
		@endsection
	@section('scripts')
		@stop