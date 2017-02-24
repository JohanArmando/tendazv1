@extends(Theme::current()->viewsPath.'.template')
    @section('css')
    <style type="text/css">
        .btn span.fa {  opacity: 0;  }
        .btn.active span.fa {  opacity: 1;  }
    </style>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    @stop
    @section('content')
        <div class="main">
            <div class="commerce commerce-account noo-shop-main">
                <div class="container">
                    <div class="row">
                        <div class="noo-main col-md-12">
                            <div id="customer_login">
                                <div class="col-md-6">
                                    <h2>Inicio de sesion</h2>
                                    <form class="login" name="loginForm" ng-submit="doLogin(loginForm)" role="form" data-toggle="validator" novalidate>
                                        <p ng-repeat="error in erroreslogin" ng-show="errores" class="error-login">Correo o contrase&ntilde;a incorrecta!</p>
                                        <div class="form-row form-row-wide form-group">
                                            <label for="username">
                                                correo electronico
                                                <span class="required">*</span>
                                            </label>
                                            <input type="email" class="input-text" ng-model="formLog.loginMail" name="email" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-row form-row-wide form-group">
                                            <label for="password">
                                                Constrase&ntilde;a
                                                <span class="required">*</span>
                                            </label>
                                            <input class="input-text" type="password" ng-model="formLog.loginPassword" name="password" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                         
                                         <div class="form-group">
                                             <div class=""  data-toggle="buttons">
                                                 <label class="btn btn-default btn-xs" style="width:4%;">
                                                     <input type="checkbox"  autocomplete="off" style="zoom: 2.0;">
                                                     <span class="fa fa-check" style="color: #45B284;"></span>
                                                 </label>
                                                 <span>&nbsp; Recordarme.</span>
                                             </div>
                                         </div>
                                        <div class="form-row text-center">
                                            <input type="submit" class="button" value="Iniciar sesion"><br>
                                            <div class="lost_password">
                                                <a data-toggle="modal" data-target="#modalRestorePassword" style="font-size: 10px;">Olvistaste tu contraseña?</a>
                                            </div>
                                        </div>
                                        @if(!empty($socialData->client_id_facebook) || !empty($socialData->client_id_google))
                                            <div class="text-center col-md-12">
                                                <span class="title"><strong>Iniciar con</strong></span><br>
                                            </div>
                                        @endif
                                        <div class="text-center">
                                        @if(!empty($socialData->client_id_facebook) && !empty($socialData->client_secret_facebook))
                                            <div class="text-center" style="display: inline-block">
                                                <a href="{{ url('auth/facebook') }}" class="sb-facebook" style="cursor: pointer">
                                                    <img src="{{asset('tema2/img/facebook.png')}}" width="27" alt="">
                                                </a>
                                            </div>
                                        @endif
                                        @if(!empty($socialData->client_id_google) && !empty($socialData->client_secret_google))
                                            <div class="text-center" style="display: inline-block">
                                                <a href="{{ url('auth/google') }}" class="sb-twitter" style="cursor: pointer">
                                                    <img src="{{asset('tema2/img/google-plus.png')}}" width="27" alt="">
                                                </a>
                                            </div>
                                        @endif
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <h2>Registro</h2>
                                    <form class="register" ng-submit="doRegister(registerForm)" name="registerForm" role="form" data-toggle="validator">
                                        {!! csrf_field() !!}
                                        <div class="form-row form-row-wide form-group">
                                            <label for="reg_email">
                                                Nombres
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" class="input-text" ng-model="registerFormR.RegisterName" name="name" value="" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-row form-row-wide form-group">
                                            <label for="reg_email">
                                                Apellidos
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" class="input-text" ng-model="registerFormR.RegisterLastName" name="last_name" value="" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-row form-row-wide form-group">
                                            <label for="reg_email">
                                                Correo
                                                <span class="required">*</span>
                                            </label>
                                            <input type="email" class="input-text" ng-model="registerFormR.RegisterMail" name="email" id="reg_email" value="" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-row form-row-wide form-group">
                                            <label for="reg_password">
                                                Constrase&ntilde;a
                                                <span class="required">*</span>
                                            </label>
                                            <input type="password" ng-model="registerFormR.RegisterPassword" class="input-text" id="inputPassword" name="password" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-row form-row-wide form-group">
                                            <label for="reg_password">
                                                Repetir Constrase&ntilde;a
                                                <span class="required">*</span>
                                            </label>
                                            <input type="password" name="password_confirmation" data-match-error="Upz, Contrase&ntilde;as no son iguales"
                                                   ng-model="registerFormR.RegisterPasswordConfirm" id="inputPasswordConfirm" data-match="#inputPassword"  class="input-text"  required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <div class=""  data-toggle="buttons"  >
                                                    <label class="btn btn-default btn-xs" style="width:4%;">
                                                        <input type="checkbox"  autocomplete="off" style="zoom: 2.0;" required>
                                                        <span class="fa fa-check" style="color: #45B284;"></span>
                                                    </label>
                                                    <span>&nbsp; <a data-toggle="modal" data-target="#modalConditions" >Acepto Terminos y Condiciones.</a></span>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <div class=""  data-toggle="buttons">
                                                <label class="btn btn-default btn-xs active" style="width:4%;">
                                                    <input type="checkbox"  autocomplete="off" style="zoom: 2.0;">
                                                    <span class="fa fa-check" style="color: #45B284;"></span>
                                                </label>
                                                <span>&nbsp; Acepto Envios de Correos.</span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-row text-center">
                                            <input type="submit" class="button" name="register" value="Registrar">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include(Theme::current()->viewsPath.'.password.email')
    @endsection
    @section('script')
    @stop

