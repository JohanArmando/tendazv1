<!-- modalLoginForm-->
<div class="modal  fade"  id="modalRestorePassword" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog white-modal modal-sm" ng-controller="ForgotPasswordController">

        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                <h4 class="modal-title text-center text-uppercase">Reestablecer Contrase&ntilde;a</h4>
            </div>
            <div class="alert alert-danger" ng-if="errors">
                <ul>
                    <li style="font-size: 0.8em" ng-repeat="error in errors"><% error %></li>
                </ul>
            </div>
            <form name="restorePassword" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" ng-submit="resetEmail(restorePassword)" novalidate>
                <div class="form-group" ng-class="{'has-error has-feedback' : restorePassword.email.$invalid && formSubmited }">
                    <p ng-repeat="error in erroreslogin" ng-show="errores" class="error">Correo o contrase&ntilde;a incorrecta!</p>
                    <label>Email:</label>
                    <input id="login_username"  name="email" ng-model="reset.email" class="form-control control_from_inp" type="text" placeholder="@" required>
                </div>
                <button  type="submit" class="btn btn--ys btn--full btn--lg sentResetEmail">Enviar Correo</button>
                <div class="divider divider--xs"></div>
            </form>

        </div>
    </div>
</div>
<!-- /modalLoginForm-->
