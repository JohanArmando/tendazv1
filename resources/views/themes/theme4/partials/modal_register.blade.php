<!-- modalLoginForm-->
<div class="modal  fade"   id="modalRegisterForm" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog white-modal modal-md">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                <h4 class="modal-title text-center text-uppercase">Registrate</h4>
            </div>
           
                <form name="registerForm" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal row" ng-submit="doRegister(registerForm)" novalidate>
                <div class="col-md-6">
                <div class="row">
                    <div class="form-group col-md-12" ng-class="{'has-error has-feedback' : registerFormR.RegisterName.$invalid && formSubmited }">
                            <label>Ingresa tu nombre</label>
                           <input id="login_username" name="email" ng-model="registerFormR.RegisterName" class="form-control"
                                  type="text" placeholder="" required>
                           <p ng-show="registerForm.RegisterName.$invalid && formSubmited" class="error">El nombre  es requerido</p>
                    </div>
                        <div class="form-group col-md-12" ng-class="{'has-error has-feedback' : registerForm.RegisterLastName.$invalid && formSubmited }">
                    <label>Ingresa tus apellidos</label>
                           <input id="login_username" name="email" ng-model="registerFormR.RegisterLastName" class="form-control" type="text"
                                  placeholder="" required>
                           <p ng-show="registerForm.RegisterLastName.$invalid && formSubmited" class="error">El nombre  es requerido</p>
                        </div>
                     <div class="form-group col-md-12" ng-class="{'has-error has-feedback' : registerForm.RegisterMail.$invalid && formSubmited }">
                    <label>Ingresa tu e-mail</label>
                           <input id="login_username" name="email" ng-model="registerFormR.RegisterMail" class="form-control" type="text"
                                  placeholder="" required>
                           <p ng-show="registerForm.RegisterMail.$invalid && formSubmited" class="error">El email es requerido</p>
                        </div>
                </div>
                 

                </div>
                <div class="col-md-6">
                    <div class="form-group" ng-class="{'has-error has-feedback' : registerForm.RegisterPassword.$invalid && formSubmited }">
                        <label>Ingresa tu contraseña</label>
                           <input id="login_password" name="password" ng-model="registerFormR.RegisterPassword" class="form-control"
                                  type="password" placeholder="" required>
                           <p ng-show="registerForm.RegisterPassword.$invalid && formSubmited" class="error">la Contraseña es requerida</p>
                        </div>
                        <div class="form-group" ng-class="{'has-error has-feedback' : registerForm.RegisterPasswordConfirm.$invalid && formSubmited }">
                         <label>Repite la contraseña</label>
                           <input id="login_password" name="password" ng-model="registerFormR.RegisterPasswordConfirm" class="form-control"
                                  type="password" placeholder="" required>
                           <p ng-show="registerForm.RegisterPasswordConfirm.$invalid && formSubmited" class="error">la Contraseña es requerida</p>
                        </div>
                         <div class="checkbox-group">
                        <input type="checkbox" id="checkBox3" name="remember">
                        <label for="checkBox3">
                            <span class="check"></span>
                            <span class="box"></span>
                           Acepto el envio de e-mails promocionales
                        </label>
                    </div>
                     <div class="checkbox-group">
                        <input type="checkbox" id="checkBox4" name="remember">
                        <label for="checkBox4">
                            <span class="check"></span>
                            <span class="box"></span>
                             Acepto los terminos  y condiciones
                        </label>
                    </div>
                </div>
                   
                    <button  type="submit" class="btn btn--ys btn--full btn--lg ">Registrarse</button>
                    <div class="divider divider--xs"></div>
                </form>
          
        </div>
    </div>
</div>
<!-- /modalLoginForm-->
