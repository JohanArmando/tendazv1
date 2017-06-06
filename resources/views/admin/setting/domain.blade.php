@section('title')
Configura tu dominio
@stop
@extends('layouts.administrator')
@section('css')
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

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"><i class="fa fa-cog"> </i><strong> Configurar Dominio</strong></h4>
		</div>
		<div class="panel-body">
			<div id="new_space" class="row">
				<div id="new_tab" class="col-md-12">
					<div class="border-content">
						<ul class="nav nav-tabs nav-justified">
							<li class="custom_tab"><a class="link_tab tab1" href="#tabone" data-toggle="tab">Comprar Dominio</a></li>
							<li class="custom_tab"><a class="link_tab" href="#tabtwo" data-toggle="tab">Agregar Dominio</a></li>
							<li class="custom_tab active"><a class="link_tab tab3" href="#tabthree" data-toggle="tab">Mis Dominios</a></li>
						</ul>
						<div class="tab-content panel">
							<div class="tab-pane" id="tabone">
								<div class="row">
									<div class="clearfix"></div>
									<div class="col-sm-10 col-sm-offset-1">
										@include('admin.partials.domain.panelDomainNew')
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tabtwo">
								<div class="row">
									<div class="clearfix"></div>
									<div class="col-sm-10 col-sm-offset-1">
										@include('admin.partials.domain.panelDomainExist')
									</div>
								</div>
							</div>
							<div class="tab-pane active" id="tabthree">
								<div class="row">
									<div class="clearfix"></div>
									<div class="col-md-10 col-md-offset-1 text-center">
										<p align="left">
											Puedes gestionar el reenvio de correo electronico, renovar dominios que has comprado y elimina dominios de su tienda.
										</p>
									</div>
									<div class="col-md-10 col-md-offset-1 text-center">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title text-center">ADMINISTRA TUS DOMINIOS</h4>
											</div>
											<div class="table-responsive">
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
														@if($domain->state == "OK")
															<td>
																<a href="#" data-tooltip="Dominio Activo">
																	<img src="{{asset('administrator/image/tick.png')}}">
																</a>
															</td>
														@else
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
																			<img src="{{asset('administrator/image/download.png')}}">
																		</a>
																	</td>
																@else
																	<td>
																		<a href="#" data-tooltip="Dominio no existe">
																			<img src="{{asset('administrator/image/forbidden.png')}}">
																		</a>
																	</td>
																@endif
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
											<div class="panel-footer">
												<p>Antes de cambiar de dominio verifica que este apuntando correctamente, dando clic sobre el nombre del dominio.</p>
											</div>
										</div>
									</div>
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
@include('admin.partials.domain.modalPayment')
@include('admin.partials.domain.modalDeleteDomain')
@include('admin.partials.domain.modalCompleteInstall')
@endsection
@section('scripts')
	<script src="https://www.2checkout.com/static/checkout/javascript/direct.min.js"></script>
	<script src="{{asset('administrator/js/domain.js')}}"></script>

	<!--payment-->

	<script src="{{asset('administrator/js/payform.js')}}"></script>
	<script type="text/javascript" src="https://www.2checkout.com/checkout/api/2co.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.2.0/vue-resource.js"></script>

	<script>
		$(document).on('ready' , function () {
			$('#card').payform('formatCardNumber');
			$('#expiry').payform('formatCardExpiry');

			$('#card').keyup(function () {
				var val =  $(this).val();

				if ($.payform.validateCardNumber(val)){
					$(this).parent().addClass('has-success').removeClass('has-error');
					$(this).parent().find('span.glyphicon-remove').addClass('hidden');
					$(this).parent().find('span.glyphicon-ok').removeClass('hidden');
				}else{
					$(this).parent().addClass('has-error');
					$(this).parent().find('span.glyphicon-remove').removeClass('hidden');
					$(this).parent().find('span.glyphicon-ok').addClass('hidden');
				}

				if ($.payform.parseCardType( val ) != null) {
					$('#type-card').html("<strong>" + $.payform.parseCardType( val ) + "</strong>")
				}
				disabledButton();
			});

			$('#expiry').keyup(function () {
				var val =  $(this).val().split('/');
				var month = val[0];
				var year = val[1];
				if ($.payform.validateCardExpiry(month , year)){
					$(this).parent().addClass('has-success').removeClass('has-error');
					$(this).parent().find('span.glyphicon-remove').addClass('hidden');
					$(this).parent().find('span.glyphicon-ok').removeClass('hidden');
				}else{
					$(this).parent().addClass('has-error');
					$(this).parent().find('span.glyphicon-remove').removeClass('hidden');
					$(this).parent().find('span.glyphicon-ok').addClass('hidden');
				}
				disabledButton();
			});

			$('#cvc').keyup(function () {
				var val =  $(this).val();
				if ($.payform.validateCardCVC(val)){
					$(this).parent().addClass('has-success').removeClass('has-error');
					$(this).parent().find('span.glyphicon-remove').addClass('hidden');
					$(this).parent().find('span.glyphicon-ok').removeClass('hidden');
				}else{
					$(this).parent().addClass('has-error');
					$(this).parent().find('span.glyphicon-remove').removeClass('hidden');
					$(this).parent().find('span.glyphicon-ok').addClass('hidden');
				}
				disabledButton();
			});

			$('#name').keyup(function () {
				var val =  $(this).val();
				validateform(this);

			});
			$('#email').keyup(function () {
				var val =  $(this).val();
				validateform(this);

			});

			$('#city').keyup(function () {
				var val =  $(this).val();
				validateform(this);

			});

			$('#country').keyup(function () {
				var val =  $(this).val();
				validateform(this);

			});

			$('#state').keyup(function () {
				validateform(this);
			});

			$('#zipCode').keyup(function () {
				validateform(this);
			});

			$('#addrLine1').keyup(function () {
				validateform(this);
			});


		});

		function validateform(val) {
			var value =  $(val).val();

			if (value != ''){
				$(val).parent().addClass('has-success').removeClass('has-error');
				$(val).parent().find('span.glyphicon-remove').addClass('hidden');
				$(val).parent().find('span.glyphicon-ok').removeClass('hidden');
			}else{
				$(val).parent().addClass('has-error');
				$(val).parent().find('span.glyphicon-remove').removeClass('hidden');
				$(val).parent().find('span.glyphicon-ok').addClass('hidden');
			}
			disabledButton();
		}

		function disabledButton() {
			if ($.payform.validateCardCVC($('#cvc').val())
					&& $.payform.validateCardExpiry( $('#expiry').val().split('/')[0] , $('#expiry').val().split('/')[1])
					&& $.payform.validateCardNumber(  $('#card').val() )
					&& ($('#state').val() != '')
					&& ($('#name').val() != '')
					&& ($('#country').val() != '')
					&& ($('#zipCode').val() != '')
					&& ($('#email').val() != ''))
			{
				$('#enviar').attr('disabled' , false);
			}else{
				$('#enviar').attr('disabled' , true);
			}
		}

		var successCallback = function(data) {
			var myForm = document.getElementById('formCardPayment');
			//alert(data.response.token.token);
			myForm.token.value = data.response.token.token;
			//console.log(myForm.token.value);
			myForm.submit();
		};

		var errorCallback = function(data) {
			if (data.errorCode === 200) {
			} else {
				alert(data.errorMsg);
			}
		};

		var tokenRequest = function() {
			var args = {
				sellerId: "{{ env('SELLER_ID_TWO') }}",
				publishableKey: "{{ env('PUBLIC_KEY_TWO') }}",
				ccNo: $("#card").val(),
				cvv: $("#cvc").val(),
				expMonth: $("#expiry").val().split('/')[0].trim(),
				expYear: $("#expiry").val().split('/')[1].trim()
				/*ccNo: '4000000000000002',
				 cvv: '123',
				 expMonth: '02',
				 expYear:'20'*/
			};

			TCO.requestToken(successCallback, errorCallback, args);
		};

		$(function() {

			TCO.loadPubKey( @if (env('SANBOX_TWO',false)) 'sandbox' @else 'production' @endif );
			$("#enviar").click(function(e) {
				$("#enviar").button('loading');
				tokenRequest();
				return false;
			});
		});

	</script>
@stop