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
					<form action="{{url('admin/stats/update')}}" method="get">
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4 ">
							<div class="form-group">
								<div class="clearfix" style="margin-bottom: 10px;"></div>
								<label>De</label>
								<input type="date" name="dateStart" id="dateStart" class="inputAdvanced"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4 ">
							<div class="form-group">
								<div class="clearfix" style="margin-bottom: 10px;"></div>
								<label>Hasta</label>
								<input type="date" name="dateEnd" id="dateEnd" class="inputAdvanced" onchange="this.form.submit()"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4 ">
							<div class="form-group">
								<div class="clearfix" style="margin-bottom: 10px;"></div>
								<label>Por</label>
								<select name="dates" id="dateEnd" class="inputAdvanced" onchange="this.form.submit()">
									<option value="">Seleccione una opcion</option>
									<option value="a">Ultimos 7 Dias</option>
									<option value="b">Ultimas 2 Semanas</option>
									<option value="c">Ultimo Mes</option>
								</select>
							</div>
						</div>
					</form>


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
									<p><strong>$ {{number_format($money,2,'.',',')}}</strong></p><br>
									<div class="circle cssToolTip">
										<i class="fa fa-shopping-cart fa-2x"></i>
											<span>Total de Ventas Realizadas</span>
									</div>
									<br>
									<p><strong>{{$totalOrders}} Ventas</strong></p>
									<br>
									<div class="circle cssToolTip">
    										<i class="fa fa-percent fa-2x"></i>
										<span>Facturaci&oacute;n Promedio</span>
									</div>
									<br>
									<p><strong>$ {{number_format($avg,2,'.',',')}}</strong></p><br>
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
						<div class="col-md-12">

						</div>
						<div class="col-md-6 ">
							<div class="visitAll hidden">
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
						<div class="col-md-12">
							<div class="text-center" style="height: 450px !important;overflow-y:scroll; ">
							<table class="table table-striped">
								<tr>
									<th colspan="3">Visitas de los Productos De: {{$date}}</th>
								</tr>
								@foreach($products as $product)
									<tr style="height: 120px">
										<td>
											@if($product->mainImage())
												<img src="{{$product->mainImage()}}" alt="" height="70px" width="60px">
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
											@foreach($hits as $hit)
												@if($hit->trend_id == $product->id)
													<p class="visitNumber">{{$hit->sum}}</p>
													<span>Tu producto ha sido visto {{$hit->sum}} veces.</span>
												@endif
											@endforeach
										</td>
									</tr>
								@endforeach
							</table>
							</div>
						</div>
						<div class="hidden col-md-6">
							<div style="height: 450px !important;overflow-y:scroll; ">
							<table class="table table-striped">
								<tr>
									<th colspan="3">Productos Destacados</th>
								</tr>
								@foreach($products as $product)
									<tr style="height: 200px">
										<td>
											@if($product->mainImage())
												<img src="{{$product->mainImage()}}" alt="" height="140px" width="130px">
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
					text: 'De: '+"{{$date}}",
					x: -20
				},
				xAxis: {
					categories: ['{{$date}}']
				},
				yAxis: {
					title: {
						text: 'Cantidad (Ventas)'
					},
					plotLines: [{
						value: 0,
						width: 1,
						color: '#808080'
					}]
				},
				tooltip: {
					valueSuffix: ' Ventas'
				},
				legend: {
					layout: 'vertical',
					align: 'right',
					verticalAlign: 'middle',
					borderWidth: 0
				},
				series: [{
					name: 'Ventas',
					data: [{{$totalOrders}}]
				}]
			});
		});
	</script>
@stop