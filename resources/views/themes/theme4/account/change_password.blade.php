@extends('tema4')
	@section('css')
		<style type="text/css">
			.form-app {
				padding-top: 70px;
			}
		</style>
		@stop
	@section('content')
			<div class="form-app"></div>
			<div class="container">
				<div class="row">
					<section class="col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-xl-4">
						{!! Form::open(['url' => url('myProfile/change_password') , 'method' => 'POST',
                   		'role' => 'form', 'data-toggle' => 'validator']) !!}
						<div class="login-form-box">
							<div class="text-center">
							<i class="fa fa-lock fa-5x"></i>
						</div>
							<h3 class="color small" align="center">Cambiar Contraseña</h3>
							  
				                <div class="form-group">
				                  <label for="email">Contraseña Actual <sup>*</sup></label>
				                   {!! Form::password('current_password' ,['class' => 'form-control' ,'required']) !!}
				                  <!-- <input type="password" class="form-control" id="email">-->
				                </div>
				                <div class="form-group">
				                  <label for="password">Nueva Contraseña <sup>*</sup></label>
				                  {!! Form::password('password' ,['class' => 'form-control' ,'required', 'id' => 'inputPassword']) !!}
				                  <!-- <input type="password" class="form-control" id="password">-->
				                </div>
				                <div class="form-group">
				                	<label for="password">Repetir Contraseña <sup>*</sup> </label>
				   					{!! Form::password('password_confirmation' ,['class' => 'form-control' ,'required' ,
                          			'data-match-error' => 'Upz, Contrase&ntilde;as no son iguales' , 'id' => 'inputPasswordConfirm' ,
                          			'data-match' => '#inputPassword']) !!}
				                	<!-- <input type="password" class="form-control" id="re-password"> -->
				                </div>
				                <div class="row">
				                	<div class="pull-right">
				                		<button type="submit" class="btn btn--ys btn-top btn--xl" ><span class="icon icon-check"></span>Cambiar</button>		</div>
				                	<div class="divider divider--md visible-xs"></div>
				                	
				                </div>			               			                
				                
				             {!! Form::close()!!}
						</div>
					</section>
				</div>
			</div>
		@endsection
	@section('script')
		@stop