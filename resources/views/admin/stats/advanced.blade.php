@extends('layouts.administrator')

@section('css')
	<link rel="stylesheet" href="{{asset('administrator/css/statsAdvanced.css')}}">
@stop

@section('content')
	<div class="page-header page-header-block">
		<div class="page-header-section">
			<h4 class="title semibold"><img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/bar-chart.png')}}">&nbsp; Estad&iacute;sticas Avanzadas</h4>
		</div>
		<div class="page-header-section">
 			<div class="toolbar">
				<ol class="breadcrumb breadcrumb-transparent nm">
					<li><a href="{{url('admin/home')}}" style="color: darkgrey;">Inicio</a></li>
					<li><a href="{{url('admin/stats/advanced')}}" style="color: orange;">Estadísticas Avanzadas</a></li>
				</ol>
			</div>
		</div>
	</div>
	<div>
    </div>

	<div class="container-fluid">
		<div class="col-md-12">
				<ul class="nav nav-tabs" style="background-color: transparent;">
					<li id="link_tab">
						<a class="active" href="#tab" data-toggle="tab" aria-expanded="false">
							<i class="fa fa-search"> <span> Estadisticas Avanzadas</span></i>
						</a>
					</li>
					<li class="triangle"></li>
				</ul>
			<div id="tab" class="stats">
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4 ">
							<div class="form-group">
								<div class="clearfix" style="margin-bottom: 10px;"></div>
								<label>De</label>
								<input type="date" name="categories" id="dateStart" class="inputAdvanced"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4 ">
							<div class="form-group">
								<div class="clearfix" style="margin-bottom: 10px;"></div>
								<label>Hasta</label>
								<input type="date" name="categories" id="dateEnd" class="inputAdvanced"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4 ">
							<div class="form-group">
								<div class="clearfix" style="margin-bottom: 10px;"></div>
								<label>Por</label>
								<select name="dates" id="dateEnd" class="inputAdvanced">
									<option value="1" disabled>Seleccione una opcion</option>
									<option value="a">Ultimos 7 Dias</option>
									<option value="b">Ultimas 2 Semanas</option>
									<option value="c">Ultimo Mes</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10">
								<div id="order"></div>
							</div>
							<div class="col-md-2 text-center">
								<center><br><br><br>
									<div class="circle cssToolTip">
										<i class="fa fa-money fa-2x" ></i>
										<span>Monto Total de Ventas</span>
									</div>
									<br>
									<p><strong>$ 25.000</strong></p><br>
									<div class="circle cssToolTip">
										<i class="fa fa-shopping-cart fa-2x"></i>
											<span>Total de Ordenes Realizadas</span>
									</div>
									<br>
									<p><strong>30</strong></p>
									<br>
									<div class="circle cssToolTip">
    										<i class="fa fa-percent fa-2x"></i>
										<span>Facturaci&oacute;n Promedio</span>
									</div>
									<br>
									<p><strong>$ 250.000</strong></p><br>
								</center>
							</div>
						</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="col-md-12">
			<ul class="nav nav-tabs" style="background-color: transparent;">
				<li id="link_tab">
					<a class="active" href="#tab" data-toggle="tab" aria-expanded="false">
						<i class="fa fa-map-marker"> <span> Ubicaci&oacute;n de los Clientes</span></i>
					</a>
				</li>
				<li class="triangle"></li>
			</ul>
			<div id="tab" class="stats">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6">
							<iframe width="100%" height="520" frameborder="0" src="https://angelesrr.carto.com/builder/cd518bdc-b003-11e6-9a70-0e05a8b3e3d7/embed"
									allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
						</div>
						<div class="col-md-6">
							<div class="visitAll">
								@foreach($products as $product)
									<div class="visit col-md-3">
										<div class="pie">
											<div class="slice-right"></div>
											<div class="slice-left"></div>
											<div class="percent">
												<div class="number">75%</div>
											</div>
										</div>
										<p>Ciudad</p>
									</div>
								@endforeach
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="col-md-12">
			<ul class="nav nav-tabs" style="background-color: transparent;">
				<li id="link_tab">
					<a class="active" href="#tab" data-toggle="tab" aria-expanded="false">
						<i class="fa fa-chevron-right"> <span> Modulo de Productos</span></i>
					</a>
				</li>
				<li class="triangle"></li>
			</ul>
			<div id="tab" class="stats">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6">
							<div class="text-center" style="height: 450px !important;overflow-y:scroll; ">
							<table class="table table-striped">
								<tr>
									<th colspan="3">Productos </th>
								</tr>
								@foreach($products as $product)
									<tr style="height: 120px">
										<td>
											@if($product->mainImage())
												<img src="{{$product->mainImage()}}" alt="" height="100px" width="130px">
											@else
												<img src="http://www.sanitas.cl/wp-content/uploads/2015/07/sin.jpg" alt="" height="100px" width="130px">
											@endif
										</td>
										<td style="padding: 5px 5px 5px 5px">
											<p><strong style="color: #f26522">{{$product->name}}</strong></p>
											<p>$ {{number_format($product->variants->first()->price)}}</p>
										</td>
										<td class="cssToolTip">
											<p>Visitas</p>
											<p class="visitNumber">20</p>
											<span>Tu producto ha sido visto 20 veces.</span>
										</td>
									</tr>
								@endforeach
							</table>
							</div>
						</div>
						<div class="col-md-6">
							<div style="height: 450px !important;overflow-y:scroll; ">
							<table class="table table-striped">
								<tr>
									<th colspan="3">Productos Destacados</th>
								</tr>
								@foreach($products as $product)
									<tr style="height: 200px">
										<td>
											@if($product->mainImage())
												<img src="{{$product->mainImage()}}" alt="" height="180px" width="210px">
											@else
												<img src="http://www.sanitas.cl/wp-content/uploads/2015/07/sin.jpg" alt="" height="180px" width="210px">
											@endif
										</td>
										<td style="padding: 5px 5px 5px 5px">
											<div class="text-center">
											<p><strong>{{$product->name}}</strong></p>
											<div class="pie">
												<div class="slice-right"></div>
												<div class="slice-left"></div>
												<div class="percent">
													<div class="number">75%</div>
												</div>
											</div>
											</div>
										</td>
									</tr>
								@endforeach
							</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection
@section('scripts')
	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script>
		$(function () {
			Highcharts.chart('order', {
				title: {
					text: 'Ventas',
					x: -20 //center
				},
				subtitle: {
					text: 'De: nombretienda.com',
					x: -20
				},
				xAxis: {
					categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
						'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
				},
				yAxis: {
					title: {
						text: 'Valor (°V)'
					},
					plotLines: [{
						value: 0,
						width: 1,
						color: '#808080'
					}]
				},
				tooltip: {
					valueSuffix: '°C'
				},
				legend: {
					layout: 'vertical',
					align: 'right',
					verticalAlign: 'middle',
					borderWidth: 0
				},
				series: [{
					name: 'Tokyo',
					data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
				}, {
					name: 'New York',
					data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
				}, {
					name: 'Berlin',
					data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
				}, {
					name: 'London',
					data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
				}]
			});
		});
	</script>
	<script src="{{ asset('admin/angular/angular.min.js') }}"></script>
	<script src="{{ asset('admin/angular/pagination.js') }}"></script>
	<script src="{{ asset('admin/angular/moduloVentas.js') }}"></script>
	<script src="https://code.angularjs.org/1.5.3/i18n/angular-locale_es-es.js"></script>
@stop