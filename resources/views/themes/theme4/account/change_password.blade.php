@extends(Theme::current()->viewsPath.'.template')

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
					<form name="changePassword" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" ng-submit="doChangePassword(changePassword)" novalidate>
						<div class="login-form-box">
							<div class="text-center">
								<i class="fa fa-lock fa-5x"></i>
							</div>
							<h3 class="color small" align="center">Cambiar Contraseña</h3>
							<div class="form-group" ng-class="{'has-error has-danger' : changePassword.current_password.$invalid && formSubmited }">
								<label for="email">Contraseña Actual <sup>*</sup></label>
								<input type="text" name="current_password" class="form-control" required ng-model="changePasswordForm.current">
							</div>
							<div class="form-group">
								<label for="password">Nueva Contraseña <sup>*</sup></label>
								{!! Form::password('password' ,['class' => 'form-control' ,'required', 'id' => 'inputPassword' , 'ng-model' => 'changePasswordForm.password']) !!}
							</div>
							<div class="form-group">
								<label for="password">Repetir Contraseña <sup>*</sup> </label>
								{!! Form::password('password_confirmation' ,['class' => 'form-control' ,'required' , 'ng-model' => 'changePasswordForm.password_confirmation']) !!}
							</div>
							<div class="row">
								<div class="pull-right">
									<button type="submit" class="btn btn--ys btn-top btn--xl" >
										<span class="icon icon-check"></span>Cambiar</button>
								</div>
								<div class="divider divider--md visible-xs"></div>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	@endsection

	@section('script')
	@stop