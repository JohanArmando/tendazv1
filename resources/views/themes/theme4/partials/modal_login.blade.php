<!-- modalLoginForm-->
<div class="modal  fade"  id="modalLoginForm" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog white-modal modal-sm">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                <h4 class="modal-title text-center text-uppercase">Iniciar Sesion</h4>
            </div>
           
                <form name="loginForm" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" ng-submit="doLogin(loginForm)" novalidate>
                    <div class="form-group" ng-class="{'has-error has-feedback' : loginForm.email.$invalid && formSubmited }">
                        <label>Email</label>
                        <input id="login_username" name="email" ng-model="formLog.loginMail" class="form-control"
                                  type="text" placeholder="" required>
                           <p ng-show="loginForm.email.$invalid && formSubmited" class="error">El email es requerido</p>
                        </div>
                        <div class="form-group" ng-class="{'has-error has-feedback' : loginForm.password.$invalid && formSubmited }">
                            <label>Password</label>
                           <input id="login_password" name="password" ng-model="formLog.loginPassword" class="form-control"
                                  type="password" placeholder="" required>
                           <p ng-show="loginForm.password.$invalid && formSubmited" class="error">la Contraseña es requerida</p>
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
                </form>
          
        </div>
    </div>
</div>
<!-- /modalLoginForm-->
