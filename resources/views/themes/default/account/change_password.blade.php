@extends('themes.default.template')
	@section('css')
    @stop
@section('content')
    <div class="container" ng-controller="UpdatePasswordController">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-3x"></i></h3>
                  <h2 class="text-center">Actualizar Contraseña</h2>
                  <div class="panel-body">
                    <form name="changePassword" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" ng-submit="doChangePassword(changePassword)" novalidate>
                      <div class="login-form-box">
                        <div class="form-group" ng-class="{'has-error has-danger' : changePassword.current_password.$invalid && formSubmited }">
                          <label for="email">Contraseña Actual <sup>*</sup></label>
                          <input type="password" name="current_password" class="form-control" required ng-model="changePasswordForm.current_password">
                          <ul style="color: darkred; margin-left: 10px" ng-if="errors.current_password">
                            <li style="list-style: none; font-size: 0.9em" ng-repeat=" error in errors.current_password"><% error %></li>
                          </ul>
                        </div>
                        <div class="form-group" ng-class="{'has-error has-danger' : changePassword.password.$invalid && formSubmited }">
                          <label for="password">Nueva Contraseña <sup>*</sup></label>
                          <input type="password" name="password" class="form-control" required ng-model="changePasswordForm.password">
                          <ul style="color: darkred; margin-left: 10px" ng-if="errors.password">
                            <li style="list-style: none; font-size: 0.9em" ng-repeat=" error in errors.password"><% error %></li>
                          </ul>
                        </div>
                        <div class="form-group" ng-class="{'has-error has-danger' : changePassword.password_confirmation.$invalid && formSubmited }">
                          <label for="password">Repetir Contraseña <sup>*</sup> </label>
                          <input type="password" name="password_confirmation" class="form-control" required ng-model="changePasswordForm.password_confirmation">
                          <ul style="color: darkred; margin-left: 10px" ng-if="errors.password_confirmation">
                            <li style="list-style: none; font-size: 0.9em" ng-repeat=" error in errors.password_confirmation"><% error %></li>
                          </ul>
                        </div>
                        <div class="row">
                          <div class="text-center">
                            <button type="submit" class="btn btn--ys btn-primary btn-top btn--xl changePasswordButton" >
                              <span class="icon icon-check"></span>Actualizar Contraseña</button>
                          </div>
                          <div class="divider divider--md visible-xs"></div>
                        </div>
                      </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
	    </div>
      </div>
    </div>
		@endsection
	@section('script')
		@stop