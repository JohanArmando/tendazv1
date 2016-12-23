@extends(Theme::current()->viewsPath.'.template')
	@section('css')
		<style>
			.error{
				height: 40px;
				padding-top: -15px  !important;
			}
		</style>
	@stop
	@section('content')
		<div id="pageContent">
			<div class="container hidden">
				<br><br>
				<div class="title-box">
					<h1 class="text-center text-uppercase title-under">CREA TU CUENTA E INICIA SESION</h1>
					<div class="col-md-4 col-md-offset-4">
						@if (count($errors) > 0)
							<div class="alert alert-danger">
								<h3>Tienes {{ count($errors)  }} errores</h3>
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
					</div>
				</div>
				<div class="row">
					<section class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xl-offset-2">
						 <div class="login-form-box">
							 <h3 class="color small text-center">CREAR USUARIO</h3>
{{--
							 {!! Form::open(['url' => 'auth/register' , 'method' => 'POST' , 'id' =>'form-register']) !!}
								 <div class="form-group">
									 <label>Nombres</label>
									 {!! Form::text('name' ,['class' => 'form-control']) !!}
								 </div>
								 <div class="form-group">
									 <label>Apellidos</label>
									 {!! Form::text('last_name' ,['class' => 'form-control']) !!}
								 </div>
								 <div class="form-group">
									 <label>Correo</label>
									 {!! Form::email('email' ,['class' => 'form-control']) !!}
								 </div>

								 <div class="form-group">
									 <label>Contrase&ntilde;a</label>
									 {!! Form::password('password' ,['class' => 'form-control']) !!}
								 </div>
								 <div class="form-group">
									 <label>Repetir contrase&ntilde;a</label>
									 {!! Form::password('password_confirmation' ,['class' => 'form-control']) !!}
								 </div>
							 {!! Form::close() !!}
							 <br>
							 <div class="text-center">
									<button class="btn btn--ys register btn--xl">
										<span class="icon icon-person_add"></span><i class="fa fa-spinner fa-pulse fa fa-fw hidden"></i>REGISTRAR
									</button>
							 </div>
						 </div>
					</section>
					<section class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
						<div class="login-form-box">
							<h3 class="color small text-center">INICIAR SESION</h3>
							{!! Form::open(['url' => 'auth/login' , 'method' => 'POST' , 'id' =>'form-login' , 'role' => "form" ,  'data-toggle' => "validator"]) !!}
								<div class="form-group">
									<label>Usuario</label>
									<input type="text" class="form-control" name="email">
									<div class="text-left help-block with-errors" ></div>
								</div>
								<div class="form-group">
									<label>Contrase&ntilde;a</label>
									<input type="password" class="form-control" name="password">
									<div class="text-left help-block with-errors"></div>
								</div>
								<br>	
								<div class="form-group">
									<input type="checkbox"> <label>Recordarme</label>

								</div>
								<div class="text-center onl_login">
									<button class="btn btn--ys btn--xl login"> INGRESAR
										<i class="fa fa-arrow-right"></i><i class="fa fa-spinner fa-pulse fa fa-fw hidden"></i>
									</button>
									<br><br>
								</div>
							{!! Form::close() !!}--}}
						</div>
					</section>
				</div>
			</div>
		</div>
	
	@endsection
	@section('script')

	@stop
