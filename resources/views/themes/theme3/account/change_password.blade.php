@extends(Theme::current()->viewsPath.'.template')
	@section('css')
		@stop
	@section('content')
	<div class="content" ng-controller="UpdatePasswordController">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<div class="noo-products-menu mt-5">
				<div class="noo-product-menu-content">
					<div class="product-menu-bk"></div>
					<div class="noo-line">
					<span class="line-one"><span></span><span></span></span>
					<span class="line-two"><span></span><span></span></span>
					</div>
					<ul class="">
						<li  style="margin: 100px 50px 100px 50px">
							<div class="text-center" style="color: white">
								<div style="padding: 10%">
									<div class="text-center">
										<h5><i class="fa fa-lock fa-4x" style="color: white"></i></h5>
										<h3 style="color: white">Cambiar Contraseña</h3>
									</div>
									<hr>
									<form name="changePassword" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" ng-submit="doChangePassword(changePassword)" novalidate>
										<div class="login-form-box">
											<div class="form-group" ng-class="{'has-error has-danger' : changePassword.current_password.$invalid && formSubmited }">
												<label for="email">Contraseña Actual <sup>*</sup></label>
												<input type="password" name="current_password" class="form-control" required ng-model="changePasswordForm.current_password">
												<ul style="margin-left: -20px; color: #79CBA8;" ng-if="errors.current_password">
													<li style="list-style: none; font-size: 0.9em" ng-repeat=" error in errors.current_password"><% error %></li>
												</ul>
											</div>
											<div class="form-group" ng-class="{'has-error has-danger' : changePassword.password.$invalid && formSubmited }">
												<label for="password">Nueva Contraseña <sup>*</sup></label>
												<input type="password" name="password" class="form-control" required ng-model="changePasswordForm.password">
												<ul style="margin-left: -20px; color: #79CBA8;" ng-if="errors.password">
													<li style="list-style: none; font-size: 0.9em" ng-repeat=" error in errors.password"><% error %></li>
												</ul>
											</div>
											<div class="form-group" ng-class="{'has-error has-danger' : changePassword.password_confirmation.$invalid && formSubmited }">
												<label for="password">Repetir Contraseña <sup>*</sup> </label>
												<input type="password" name="password_confirmation" class="form-control" required ng-model="changePasswordForm.password_confirmation">
												<ul style="margin-left: -20px; color: #79CBA8;" ng-if="errors.password_confirmation">
													<li style="list-style: none; font-size: 0.9em" ng-repeat=" error in errors.password_confirmation"><% error %></li>
												</ul>
											</div>
											<div class="row">
												<div class="text-center">
													<button type="submit" class="btn btn--ys btn-primary btn-top btn--xl changePasswordButton" >
														<span class="icon icon-check"></span>Actualizar Contrase&ntilde;a</button>
												</div>
												<div class="divider divider--md visible-xs"></div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			</div>
		</div>
	</div>
	</div>
	<div style="margin-bottom: 5px;"></div>
	@endsection
	@section('script')
		@stop