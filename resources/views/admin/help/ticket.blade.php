@section('title')
	Tickets
@stop
@extends('layouts.administrator')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('administrator/css/new_ticket.css')}}">
@stop
@section('content')	
<div class="page-header page-header-block">
	<div class="page-header-section">
		<h4 class="title"><img src="{{asset('administrator/image/icons/icons-nav/computer.png')}}">&nbsp;Tickets</h4>
	</div>
	<div class="page-header-section">
		<!-- Toolbar -->
		<div class="toolbar">
			<ol class="breadcrumb breadcrumb-transparent nm">
				<li><a href="#" style="color: darkgrey;">Inicio</a></li>
				<li><a href="#" style="color: darkgrey;">Herramientas y ayuda</a></li>
				<li class="active" style="color: orange;">Tickets</li>
			</ol>
		</div>
		<!--/ Toolbar -->
	</div>
</div>
 <div style="margin-top: 40px;"></div>
 	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="">
					<div style="margin-top: 10px;"></div>
					<div class="panel-body">
						<div class="content">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<div class="">
										<div class="col-md-12 text-center" style="margin-top: 30px">
											<div class="col-offset-3 col-md-2"></div>
											<div class="col-md-1 line-title"></div>
											<div class="col-md-4"><span style="font-size: 25px">Tickets de Soporte</span></div>
											<div class="col-md-1 line-title"></div>
										</div>
										<div class="clearfix"></div>

										<div class="col-sm-4 col-sm-offset-1">
											<button type="button" data-toggle="modal" data-target="#new_ticket" class="btn btn-primary" style="border-radius: 0px !important; margin-bottom: 30px; margin-top: 20px;"><i class="fa fa-plus"></i>	CREAR NUEVO TICKET</button>
										</div>
										<div class="row">
											<div class="col-sm-10 col-sm-offset-1">
												<div class="table-responsive">
												<table class="table table-bordered table-striped table-hover">
													<thead>
														<tr class="text-center" style="background-color:#3C3C3C  !important; color: white;">
															<td>ID</td>
															<td>Asunto</td>
															<td>Descripci&oacute;n</td>
															<td>Fecha de Creaci&oacute;n</td>
															<td>Estado</td>
														</tr>
													</thead>
													<tbody>
														@foreach($tickets as $ticket)
														<tr class="text-center">
															<td>{{$loop->iteration}}</td>
															<td>
																<a href="{{url('admin/help/tickets/'.$ticket->uuid)}}">{{$ticket->subject}}</a>
															</td>
															<td>{{$ticket->description}}</td>
															<td>{{$ticket->created_at->toDateString()}}</td>
															<td>@if($ticket->state == 'open' )<strong>Creado</strong>
																@endif
																@if($ticket->state == 'close' )<strong>Resuelto</strong>
																@endif
																@if($ticket->state == 'paused' )<strong>Pausado</strong>
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
								<div class="clearfix"></div>
								<div style="margin-bottom: 30px;"></div>

						</div>
					</div>
					</div>
					</div>
				</div>
			</div>
		</div>
 <!--MODAL CREACION DE TICKET-->
<div id="new_ticket" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-dialog">
			<div class="modal-content" style="background: #E6E7E9;width:100% !important;height: 511px !important;">
				<div class="row">
					<div class="col-md-12" style="margin-bottom: 30px;"></div>
					<div class="col-md-12 text-center" style="margin-top: 30px">
						<div class="hidden-xs hidden-sm col-md-1 line-title" style="margin-left: 15px"></div>
						<div class="col-md-5"><span style="font-size: 25px">Crear Ticket</span></div>
						<div class="hidden-xs hidden-sm col-md-1 line-title"></div>
					</div>
					<div class="col-md-12" style="margin-bottom: 30px;"></div>
					<div class="col-md-12 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
						<form method="post" action="{{url('admin/help/tickets')}}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="row">
								<div class="col-md-10 col-xs-12 col-sm-12" style="margin-bottom: 20px;">
									<input id="ticket_input" type="text" class="form-control" name="subject" placeholder="Asunto" required="required">
								</div>
								<div class="col-md-10 col-xs-12 col-sm-12" style="margin-bottom: 20px;">
									<div class="table-responsive">
										<textarea name="description" style="width:480px !important; height: 200px;"></textarea>
									</div>
								</div>
								<div class="col-md-10 col-xs-12 col-sm-12" style="margin-bottom: 20px;">
									<button type="submit" class="btn btn-primary" style="width:100%;background: #FF3D00; color: white;">ENVIAR</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--END-->
@endsection
@section('scripts')
	<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
	<script type="text/javascript">
		bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
	</script>
@stop