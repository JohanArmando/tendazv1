@section('title')
Configura tu dominio
@stop
@extends('layouts.administrator')
@section('css')
	<style type="text/css">
		.tab1 {  border-radius: 20px 0 0 0 !important;  }
		.tab3 {  border-radius: 0 20px 0 0 !important;  }
		.nav-tabs.nav-justified {  background-color: transparent;  }
		.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {background-color: #f26522; color: white}
		.nav-tabs > li > a, .nav-tabs > li > a:hover, .nav-tabs > li > a:focus {background-color: #9b9b9b; color: white}
		.nav-tabs.nav-justified > li > a {  border-bottom: 1px solid #f26522;  }
		.tab-content {border-radius: 0 0 20px 20px}
		/*.border-content {background-color: #3C3C3C; padding: 5px 5px 10px 5px;border-radius: 20px 20px 20px 20px}*/
	</style>
	<link rel="stylesheet" href="{{asset('administrator/css/categories.css')}}">
@stop
@section('content')
<!--HEADER-->
<div class="preloader_general hidden">
	<div class="preloader_image_general"></div>
	<p class="preloader_p"></p>
</div>
<div class="page-header page-header-block">
	<div class="page-header-section">
		<h4 class="title">
		<img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/world-wide-web.png')}}"> Dominio</h4>
	</div>
	<div class="page-header-section">
		<div class="toolbar">
			<ol class="breadcrumb breadcrumb-transparent nm">
				<li><a href="{{url('admin')}}" style="color: grey;"> Inicio</a></li>
				<li><a href="{{url('#')}}" style="color: grey;"> Configuracion</a></li>
				<li class="active"><a href="{{url('#')}}" style="color: orange;">Dominio</a></li>
			</ol>
		</div>
	</div>
</div>
<br>
@include('admin.partials.message')


<!--END-->
		<div id="new_space" class="row">
			<div id="new_tab" class="col-md-12">
				<div class="border-content">
				<ul class="nav nav-tabs nav-justified">
					<li class="custom_tab"><a class="link_tab tab1" href="#tabone" data-toggle="tab">Comprar Dominio</a></li>
					<li class="custom_tab"><a class="link_tab" href="#tabtwo" data-toggle="tab">Agregar Dominio</a></li>
					<li class="custom_tab active"><a class="link_tab tab3" href="#tabthree" data-toggle="tab">Mis Dominios</a></li>
				</ul>
				<div class="tab-content panel" style="margin-bottom: -8px !important;">
					<div class="tab-pane" id="tabone">
						<div class="row">
							<div class="clearfix"></div>
							<div class="col-sm-8 col-sm-offset-2">
								@include('admin.partials.domain.panelDomainNew')
							</div>
						</div>
					</div>
						<div class="tab-pane" id="tabtwo">
						<div class="row">
							<div class="clearfix"></div>
							<div class="col-sm-8 col-sm-offset-2">
							@include('admin.partials.domain.panelDomainExist')
							</div>
							</div>
							</div>
							<div class="tab-pane active" id="tabthree">
							<div class="row">
							<div class="clearfix"></div>
							<div class="col-md-10 col-md-offset-2 text-center">
								<p align="justify">
									Puedes gestionar el reenvio de correo electronico, renovar dominios que has comprado y elimina dominios de su tienda.
								</p>
							</div>
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title text-center">ADMINISTRA TUS DOMINIOS</h4>
									</div>
									<table class="table table-bordered table-striped table-hover">
										<thead>
										<tr class="text-center">
											<td style="background: #929292; color: white;">Nombre Dominio</td>
											<td style="background: #929292; color: white;">Status</td>
											<td style="background: #929292; color: white;">Principal</td>
										</tr>
										</thead>
										<tbody>
										@foreach($domains as $domain)
											<tr class="text-center">
												<td><a href="{{url('admin/setting/domain/verify/'.$domain->uuid)}}">{{$domain->name}}</a></td>
												@if($domain->state == 200)
													<td>
														<a href="#" data-tooltip="Dominio Activo">
															<img src="{{asset('administrator/image/tick.png')}}">
														</a>
													</td>
													@else
														@if($domain->state == 401)
															<td>
																<a href="#" data-tooltip="Dominio Inactivo , 'Completa la Instalaci&oacute;n'">
																<img src="{{asset('administrator/image/forbidden.png')}}">
																</a>
															</td>
															@else
																<td>
																	<a href="#" data-tooltip="Ssl">
																	<img src="{{asset('administrator/image/download.png')}}">
																	</a>
																</td>
														@endif
												@endif
												<td>
													@if($domain->main == 1 )
														<a class="btn btn-primary" href="{{url('/admin/setting/domain/main/'.$domain->uuid)}}">Si</a>
													@else
														<a class="btn btn-default" href="{{url('/admin/setting/domain/main/'.$domain->uuid)}}">No</a>
													@endif
												</td>
											</tr>
										@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
<div class="payment-form"></div>
@include('admin.partials.domain.modalAddDomain')
@include('admin.partials.domain.modalBuyDomain')
@include('admin.partials.domain.modalDeleteDomain')
@include('admin.partials.domain.modalCompleteInstall')
@endsection
@section('scripts')
	<script src="{{asset('administrator/js/domain.js')}}"></script>
@stop