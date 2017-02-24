@extends(Theme::current()->viewsPath.'.template')
    @section('css')
        <style type="text/css">
            .btn span.fa {  opacity: 0;  }
            .btn.active span.fa {  opacity: 1;  }
        </style>
        @stop
    @section('content')
        <div class="container">

            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="white-container">
                    <span class="title"><strong>Registro</strong></span>
                    <!-- Form Register -->
                    <form ng-submit="doRegister(registerForm)" name="registerForm" role="form" data-toggle="validator">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="first_name">Nombres (*)</label>
                                <input type="text" class="form-control" name="name" ng-model="registerFormR.RegisterName" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="last_name">Apellidos (*)</label>
                                <input type="text" class="form-control" name="last_name" ng-model="registerFormR.RegisterLastName" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="email">Email (*)</label>
                                <input type="email" class="form-control" name="email" ng-model="registerFormR.RegisterMail" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="password">Contrase&ntilde;a (*)</label>
                                <input type="password" class="form-control" id="inputPassword" name="password"
                                       ng-model="registerFormR.RegisterPassword" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="confirm_password">Confirmar contrase&ntilde;a (*)</label>
                                <input type="password" class="form-control"  name="password_confirmation"
                                       ng-model="registerFormR.RegisterPasswordConfirm" data-match-error="Upz, Contrase&ntilde;as no son iguales"
                                       id="inputPasswordConfirm" data-match="#inputPassword" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <div class=""  data-toggle="buttons">
                                <label class="btn btn-default btn-xs">
                                    <input type="checkbox"   style="zoom: 2.0;" required>
                                    <span class="fa fa-check" style="color: darkblue;"></span>
                                </label> &nbsp; <a data-toggle="modal" data-target="#modalConditions" >Acepto Terminos y Condiciones.</a>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-6">
                            <div class=""  data-toggle="buttons">
                                <label class="btn btn-default btn-xs active">
                                    <input type="checkbox"   style="zoom: 2.0;">
                                    <span class="fa fa-check" style="color: darkblue;"></span>
                                </label> &nbsp; Acepto Envios de Correos.
                            </div>
                        </div>
                        <div class="clearfixs"></div>
                        <button class="btn btn-default" type="submit">Registrar <i class="fa fa-check"></i> </button>
                        <div class="clearfix"></div>
                        <br><br><br><br><br><br>
                    </form>
                    <!-- End Form Register -->
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-4">

                <!-- Login Form -->
                <div class="white-container">
                    <span class="title"><strong>Ya te encuentras registrado ?</strong></span>
                    <form name="loginForm" ng-submit="doLogin(loginForm)" role="form" data-toggle="validator">
                        <p ng-repeat="error in erroreslogin" ng-show="errores" class="error-login">Correo o contrase&ntilde;a incorrecta!</p>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="email" ng-model="formLog.loginMail" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" ng-model="formLog.loginPassword" class="form-control" name="password" placeholder="Contrase&ntilde;a" required>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class=""  data-toggle="buttons">
                                <label class="btn btn-default btn-xs">
                                    <input type="checkbox"  autocomplete="off" style="zoom: 2.0;">
                                    <span class="fa fa-check" style="color: darkblue;"></span>
                                </label> &nbsp; Recordar
                            </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-long-arrow-right"></i> Iniciar sesion</button>
                                <p><a data-toggle="modal" data-target="#modalRestorePassword">Olvidaste la Contase&ntilde;a?</a></p>
                            </div>
                    </form>
                </div>
                    @if(!empty($socialData->client_id_facebook) || !empty($socialData->client_id_google))
                        <span class="title"><strong>Iniciar con</strong></span>
                    @endif
                    @if(!empty($socialData->client_id_facebook) && !empty($socialData->client_secret_facebook))
                        <div class="text-center col-md-1">
                            <a href="{{ url('auth/facebook') }}" class="sb-facebook" style="cursor: pointer">
                                <button type="button" class="btn btn-xs btn-primary btn-login-social"><i class="fa fa-facebook"></i></button>
                            </a>
                        </div>
                    @endif
                    @if(!empty($socialData->client_id_google) && !empty($socialData->client_secret_google))
                        <div class="text-center col-md-1" style="margin-left: 10px">
                            <a href="{{ url('auth/google') }}" class="sb-twitter" style="cursor: pointer">
                                <button type="button" class="btn btn-xs btn-danger btn-login-social"><i class="fa fa-google-plus"></i></button>
                            </a>
                        </div>
                    @endif

                <!-- End Login Form -->

            </div>

        </div>
        @include(Theme::current()->viewsPath.'.password.email')
          @endsection
    @section('scripts')
           @stop