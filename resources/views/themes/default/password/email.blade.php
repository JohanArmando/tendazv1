<!-- modalRestorePassword-->
    <div class="modal  fade"   id="modalRestorePassword"  tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
        <div class="modal-dialog white-modal modal-md"  ng-controller="ForgotPasswordController">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span class="fa fa-times"></span></button>
                    <h4 class="modal-title text-center text-uppercase">Restablecer Contrase&ntilde;a</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                            <div style="padding: 40px 40px 40px 40px">
                                <div class="alert alert-danger" ng-if="errors">
                                    <ul>
                                        <li style="font-size: 0.8em" ng-repeat="error in errors"><% error %></li>
                                    </ul>
                                </div>
                                <form name="restorePassword" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" ng-submit="resetEmail(restorePassword)">
                                    <div class="form-group col-md-4 text-center" ng-class="{'has-error has-feedback' : restorePassword.email.$invalid && formSubmited }">
                                        <p ng-repeat="error in erroreslogin" ng-show="errores" class="error">Email o contrase&ntilde;a incorrecta!</p>
                                        <label style="margin-top: 8px">Digite el Email:</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input id="login_username"  name="email" ng-model="reset.email" class="form-control control_from_inp" type="email" required>
                                    </div>
                                    <div class="form-group col-md-12 text-center">
                                        <button  type="submit" class="btn btn-primary btn--ys btn--full btn--lg sentResetEmail">Enviar Correo</button>
                                        <div class="divider divider--xs"></div>
                                        <br>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
<!-- /modalRestorePassword-->
