@extends(Theme::current()->viewsPath.'.template')
    @section('css')
      <style type="text/css">
          .btn span.fa {  opacity: 0;  }
          .btn.active span.fa {  opacity: 1;  }
      </style>
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        @stop
    @section('content')
            <div class="container">
                <div class="col-md-7">
                    <div class="box" style="display: inline-block">
                        <h2>Registrate</h2>
                        <hr>
                        <form ng-submit="doRegister(registerForm)" name="registerForm" role="form" data-toggle="validator">
                            <div class="form-group col-md-6">
                                <label for="name">Nombres</label>
                                <input type="text" class="form-control" ng-model="registerFormR.RegisterName" name="name" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Apellidos</label>
                                <input type="text" class="form-control" ng-model="registerFormR.RegisterLastName" name="last_name" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" ng-model="registerFormR.RegisterMail" name="email" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="passwordInput">Contrase&ntilde;a</label>
                                <input type="password" class="form-control" id="inputPassword" ng-model="registerFormR.RegisterPassword"
                                       name="password" placeholder="Contrase&ntilde;a" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="passwordConfirmInput">Confirmar Contrase&ntilde;a</label>
                                <input type="password" class="form-control"  name="password_confirmation"
                                       ng-model="registerFormR.RegisterPasswordConfirm" data-match-error="Upz, Contrase&ntilde;as no son iguales"
                                       id="inputPasswordConfirm" data-match="#inputPassword" placeholder="Repetir Contrase&ntilde;a" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="btn-group col-md-6" data-toggle="buttons">
                                <label class="btn btn-default btn-xs">
                                    <input type="checkbox" autocomplete="off" required>
                                    <span class="fa fa-check fa2x" style="color: green;"></span>
                                </label> &nbsp; <a data-toggle="modal" data-target="#modalConditions" >Acepto Terminos y Condiciones.</a>
                            </div>
                            <div class="btn-group col-md-6" data-toggle="buttons">
                                <label class="btn btn-default btn-xs active">
                                    <input type="checkbox" autocomplete="off">
                                    <span class="fa fa-check fa2x" style="color: green;"></span>
                                </label> &nbsp; Acepto Envios de Correos.
                            </div>
                            <div class="text-center form-group col-md-12" style="margin-top: 10px">
                                <button type="submit" class="btn btn-primary">Registrarme</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-5">
                   <div class="box">
                       <h2>Inicio de sesion</h2>
                       <hr>
                       <form role="form" name="loginForm" ng-submit="doLogin(loginForm)" data-toggle="validator">
                           <div class="form-group">
                               <label for="email">Email</label>
                               <input type="email" class="form-control"  ng-model="formLog.loginMail" name="email" required>
                               <div class="help-block with-errors"></div>
                           </div>
                           <div class="form-group">
                               <label for="password">Constrase&ntilde;a</label>
                               <input type="password" class="form-control" ng-model="formLog.loginPassword" id="password" name="password" required>
                               <div class="help-block with-errors"></div>
                           </div>
                           <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default btn-xs">
                                    <input type="checkbox" autocomplete="off">
                                    <span class="fa fa-check fa2x" style="color: green;"></span>
                                </label> &nbsp; Recordarme
                           </div>

                           <div class="text-center">
                               <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                               <p><a data-toggle="modal" data-target="#modalRestorePassword">Olvidaste la Contase&ntilde;a?</a></p>
                           </div>
                           @if(!empty($socialData->client_id_facebook) || !empty($socialData->client_id_google))
                               <div class="text-center col-md-12">
                                <span class="title"><strong>Iniciar con</strong></span>
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
                </div>
            </div>
            @include(Theme::current()->viewsPath.'.password.email')
          @endsection
    @section('script')
        @stop