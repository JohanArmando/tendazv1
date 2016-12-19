@extends('admin.template')

@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('admin/css/custom_tendaz.css')}}">
<link rel="stylesheet" href="{{ asset('admin/css/mercadolibre.css') }}" media="screen"  charset="utf-8">
@stop

@section('content')
	<div class="page-header page-header-block">
		<div class="page-header-section">
			<h4 class="title semibold"><img width="20" height="20" src="{{asset('admin/image/icons/icons-nav/mercadolibre.png')}}"> Mi Mercadolibre</h4>
		</div>
		<div class="page-header-section">
			<!--Toolbar-->
			<div class="toolbar">
				<ol class="breadcrumb breadcrumb-transparent nm">
					<li><a href="{{url('admin/home')}}" style="color: darkgrey;"><i class="fa fa-home"></i> Inicio</a></li>
				</ol>
			</div>
		</div>
	</div>
		<div class="content">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                            <div class="col-md-6">
                                <h5><strong>Asocia tu Meradolibre</strong></h5>
                                </div>
                            </div>
                            
                        </div>
                        <div class="panel-body mercadolibre">
							@if(isset($auth['error']))
								<div class="alert alert-danger">
									<h3>Uppps!</h3>
									<p>{!! $auth['error'] !!}</p>
									<p>{!! $auth['description'] !!}</p>
								</div>
							@endif
                        	<div class="col-md-12">
                        	<p align="justify">
                            Disfruta de los beneficios de tu tienda con tu Mercadolibre.
                            En Tendaz nos preocupamos por tu negocio. Es por esto que queremos que incrementes tus ventas de la mejor manera posible; ahora podrás enlazar tu cuenta de Mercadolibre y exportar e importar todos los productos de tu inventario. Así mismo incrementarás la audiencia de tus productos.
                            </p>
                            </div>
                             <div class="col-md-6">
                                 
                            <h3>Beneficios</h3>
                                <ul>
                                    <li>Aumentarás tus clientes potenciales.</li>
                                    <li>Mejor categorizacion de tus productos.</li>
                                    <li>Desde un solo lugar podrás gestionar de manera facil y eficaz tu inventario de Mercadolibre.</li>
                                </ul>
                                <hr>
                            <h3>Requisitos</h3>
                                <ul>
                                    <li>Debes tener una cuenta activa en Mercadolibre.</li>
                                    <li>En tu cuenta mercadolibre debes tener por lo menos 1 producto</li>
                                </ul>
                            
                             </div>   
                            <div class="col-md-6 ">
                            	
                            		<div class="col-md-12 text-center conten_image_mercado">
                            		<img src="{{asset('tendaz/img/mercadotendaz.png')}}" class="img-responsive" >
                            		</div>
                            
	                            <div class="col-md-12 text-center conten_image_mercado" >
	                            	<a href="{!! $auth['url'] !!}" class="mercadolibre-btn">Comenzar Ahora!</a>
                                    <!-- <a href="{{url('mercadolibre')}}" class="mercadolibre-btn">Comenzar Ahora !</a>-->
	                            </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                              
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div> 
	
	
@endsection
@section('scripts')
<!-- <script src="asset('admin/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript">
 $(document).ready(function() {
     $('#statics-products').dataTable();
});


</script> -->
<!-- <script type="text/javascript">
 $(document).ready(function() {
     $('#statics-products-2').dataTable();
});


</script> -->
@stop