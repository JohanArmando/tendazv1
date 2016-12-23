<!DOCTYPE html>
<html ng-app="checkout">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <title>Checkout</title>

      <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('new-checkout/css/modal-checkout.css') }}">
      <link href="{{ asset('/checkout-comp/assets/css/main.css') }}" rel="stylesheet">
      <script>
         var client_secret = "{{ $shop->uuid }}";

         var client_id      = "{{ $shop->id }}";

         var baseUrl = "{{ App::environment('local') ? 'http://'.env('APP_API_URL').env('APP_API_PORT') : 'https://'.env('APP_API_URL').env('APP_API_PORT') }}";
      </script>
   </head>
   <body ng-controller="globalController">
      <div class="container">
         <div ng-include="global.navUrl"></div>
         <div ng-include="global.stepUrl"></div>
         <div ng-view></div>
         <div ng-include="global.footerUrl"></div>
      </div>
      <!-- BEGIN # MODAL LOGIN -->
      <div class="modal fade" id="sign-up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" ng-controller="UsersController">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header" align="center">
                  <img class="img-rounded" id="img_logo" src="https://k32.kn3.net/A/D/4/3/0/D/029.png">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" ng-click="closeModalLogin()">
                     <span class="glyphicon glyphicon-remove" aria-hidden="true" ></span>
                  </button>
               </div>

               <!-- Begin # DIV Form -->
               <div id="div-forms">
                  <div class="row">
                     <div class="bg-danger col-md-10 col-md-offset-1 hidden"></div>
                  </div>
                  <!-- Begin # Login Form -->
                  <form id="login-form" name="loginForm" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" ng-submit="doLogin(loginForm)" novalidate>
                     <div class="modal-body">
                        <div id="div-login-msg">
                           <div id="icon-lo|gin-msg" style="color: orange" class="glyphicon glyphicon-chevron-right"></div>
                           <span id="text-login-msg">Type your email and password.</span>
                        </div>
                        <div class="form-group" ng-class="{'has-error has-feedback' : loginForm.email.$invalid && formSubmited }">
                           <input id="login_username" name="email" ng-model="login.email" class="form-control" type="text" placeholder="email" required>
                           <p ng-show="loginForm.email.$invalid && formSubmited" class="error">El email es requerido</p>
                        </div>
                        <div class="form-group" ng-class="{'has-error has-feedback' : loginForm.password.$invalid && formSubmited }">
                           <input id="login_password" name="password" ng-model="login.password" class="form-control" type="password" placeholder="Password" required>
                           <p ng-show="loginForm.password.$invalid && formSubmited" class="error">la Contrase&ntilde;a es requerida</p>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div>
                              <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
                        </div>
                        <div>
                           <button id="login_register_btn" type="button" class="btn btn-link" ng-click="showFormRegister()">Registrate</button>
                        </div>
                     </div>
                  </form>
                  <!-- End # Login Form -->

                  <!-- Begin | Lost Password Form -->
                  <form id="lost-form" style="display:none;">
                     <div class="modal-body">
                        <div id="div-lost-msg">
                           <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                           <span id="text-lost-msg">Type your e-mail.</span>
                        </div>
                        <input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
                     </div>
                     <div class="modal-footer">
                        <div>
                           <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                        </div>
                        <div>
                           <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                           <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>
                     </div>
                  </form>
                  <!-- End | Lost Password Form -->

                  <!-- Begin | Register Form -->
                  <form id="register-form"  style="display:none;" name="registerForm"  accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" ng-submit="doRegister(registerForm)" novalidate>
                     <div class="modal-body">
                        <div id="div-register-msg">
                           <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                           <span id="text-register-msg">Crea un usuario y se feliz.</span>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6" ng-class="{'has-error has-feedback' : registerForm.name.$invalid && formSubmited }">
                              <input id="register_name" name="name" ng-model="register.name" class="form-control" type="text" placeholder="Nombre" required  ng-minlength="3" ng-maxlength="25">
                              <p ng-show="registerForm.name.$invalid && formSubmited" class="help-block">El nombre es requerido</p>
                              <p ng-show="registerForm.name.$error.minlength && formSubmited" class="help-block">El nombre es muy corto</p>
                              <p ng-show="registerForm.name.$error.maxlength && formSubmited" class="help-block">El nombre es muy largo</p>
                           </div>
                           <div class="form-group col-md-6" ng-class="{'has-error has-feedback' : registerForm.last_name.$invalid && formSubmited }">
                              <input id="register_last_name" name="last_name"  ng-model="register.last_name" class="form-control" type="text" placeholder="Apellido" required  ng-minlength="3" ng-maxlength="25">
                              <p ng-show="registerForm.last_name.$invalid && formSubmited" class="help-block">El apellido es requerido</p>
                              <p ng-show="registerForm.last_name.$error.minlength && formSubmited" class="help-block">El apellido es muy corto</p>
                              <p ng-show="registerForm.last_name.$error.maxlength && formSubmited" class="help-block">El apellido es muy largo</p>
                           </div>
                           <div class="form-group col-md-12" ng-class="{'has-error has-feedback' : registerForm.email.$invalid && formSubmited }">
                              <input id="register_email" name="email" ng-model="register.email" class="form-control" type="email" placeholder="Correo Electronico" required>
                              <p ng-show="registerForm.email.$invalid" class="help-block">Ingresa un email valido.</p>
                           </div>
                           <div class="form-group col-md-6" ng-class="{'has-error has-feedback' : registerForm.password.$invalid && formSubmited }">
                              <input id="register_password" name="password" ng-model="register.password" class="form-control" type="password" placeholder="Contraseña" required  ng-minlength="6">
                              <p ng-show="registerForm.password.$invalid && formSubmited" class="error">La Contraseña es requerida</p>
                              <p ng-show="registerForm.password.$error.minlength && formSubmited" class="help-block">La contraseña es muy corto</p>

                           </div>
                           <div class="form-group col-md-6" ng-class="{'has-error has-feedback' : registerForm.password_confirmation.$invalid && formSubmited }">
                              <input id="register_password_confirmation" ng-model="register.password_confirmation" class="form-control" type="password" placeholder="Confirmar contraseña" name="password_confirmation" required  ng-minlength="6">
                              <p ng-show="registerForm.password_confirmation.$invalid && formSubmited" class="error">La Contraseñas no coinciden</p>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div>
                           <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar</button>
                        </div>
                        <div>
                           <button id="register_login_btn" type="button" class="btn btn-link" ng-click="showFormLogin()">Inicia Sesion</button>
                        </div>
                     </div>
                  </form>
                  <!-- End | Register Form -->

               </div>
               <!-- End # DIV Form -->

            </div>
         </div>
      </div>
      <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

      <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
       <script src="{{ asset('checkout-comp/assets/js/main.js') }}"></script>
      <script src="{{ asset('bower_components/angular/angular.min.js') }}"></script>
      <script src="{{ asset('bower_components/angular-route/angular-route.min.js') }}"></script>
      <script src="{{ asset('bower_components/angular-cookies/angular-cookies.min.js') }}"></script>
      <script src="{{ asset('new-checkout/js/app.js') }}"></script>
      <script src="{{ asset('new-checkout/js/controllers.js') }}"></script>
      <script src="{{ asset('new-checkout/js/models.js') }}"></script>
      <script src="{{ asset('new-checkout/js/controllers.js') }}"></script>
      <script type="text/javascript" src="https://www.mercadopago.com/org-img/jsapi/mptools/buttons/render.js"></script>


   </body>
</html>