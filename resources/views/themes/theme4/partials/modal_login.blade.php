<!-- modalLoginForm-->
<div class="modal  fade"  id="modalLoginForm" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog white-modal modal-sm" id="modal_Login">
        <div class="modal-content " >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                <h4 class="modal-title text-center text-uppercase">Iniciar Sesion</h4>
            </div>
           
                <form name="loginForm" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" ng-submit="doLogin(loginForm)" novalidate>
                    <div class="form-group" ng-class="{'has-error has-feedback' : loginForm.email.$invalid && formSubmited }">
                        <p ng-repeat="error in erroreslogin" ng-show="errores" class="error">Correo o contrase&ntilde;a incorrecta!</p>
                        <label>Email</label>
                        <input id="login_username" name="email" ng-model="formLog.loginMail" class="form-control control_from_inp"
                                  type="text" placeholder="" required>
                        </div>
                        <div class="form-group" ng-class="{'has-error has-feedback' : loginForm.password.$invalid && formSubmited }">
                            <label>Password</label>
                           <input id="login_password" name="password" ng-model="formLog.loginPassword" class="form-control control_from_inp"
                                  type="password" placeholder="" required>
                        </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="checkBox2" name="remember">
                        <label for="checkBox2">
                            <span class="check"></span>
                            <span class="box"></span>
                            Recordarme
                        </label>
                    </div>
                    <button  type="submit" class="btn btn--ys btn--full btn--lg ">Iniciar sesion</button>
                    <div class="divider divider--xs"></div>
                    <a href="#" data-toggle="modal" class="modalRestore" data-target="#modalRestorePassword"  >Olvidaste tu Contrase&ntilde;a?</a>
                </form>
          
        </div>
    </div>
</div>

<!-- /modalLoginForm-->
