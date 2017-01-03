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
                           <input id="login_username" name="name" ng-model="registerFormR.RegisterName" class="form-control"
                                  type="text" placeholder="">
                        <p ng-repeat="error in errorname" ng-show="errores" class="error">El campo nombre es requerido</p>
                    </div>
                        <div class="form-group col-md-12" ng-class="{'has-error has-feedback' : registerForm.RegisterLastName.$invalid && formSubmited }">
                    <label>Ingresa tus apellidos</label>
                           <input id="login_username" name="last_name" ng-model="registerFormR.RegisterLastName" class="form-control" type="text"
                                  placeholder="">
                        </div>
                    <p ng-repeat="error in errorlast" ng-show="errores" class="error">El campo apellido es requerido</p>
                     <div class="form-group col-md-12" ng-class="{'has-error has-feedback' : registerForm.RegisterMail.$invalid && formSubmited }">
                    <label>Ingresa tu e-mail</label>
                           <input id="login_username" name="email" ng-model="registerFormR.RegisterMail" class="form-control" type="text"
                                  placeholder="" ng-change="hideErrors()" required>
                           <p ng-show="registerForm.RegisterMail.$invalid && formSubmited" class="error">El email es requerido</p>
                         <p ng-repeat="error in errormail" ng-show="errores">
                             <%error%>
                         </p>
                     </div>
                </div>
                 

                </div>
                <div class="col-md-6">
                    <div class="form-group" ng-class="{'has-error has-feedback' : registerForm.RegisterPassword.$invalid && formSubmited }">
                        <label>Ingresa tu contraseña</label>
                           <input id="login_password" name="password" ng-model="registerFormR.RegisterPassword" class="form-control"
                                  type="password" placeholder="" required>
                        <p ng-repeat="error in errorpassword" ng-show="errores" class="error">El campo password es requerido</p>
                        </div>
                        <div class="form-group" ng-class="{'has-error has-feedback' : registerForm.RegisterPasswordConfirm.$invalid && formSubmited }">
                         <label>Repite la contraseña</label>
                           <input id="login_password" name="password" ng-model="registerFormR.RegisterPasswordConfirm" class="form-control"
                                  type="password" placeholder="" required>
                        </div>
                         <div class="checkbox-group">
                        <input type="checkbox" id="checkBox3" name="remember" checked>
                        <label for="checkBox3">
                            <span class="check"></span>
                            <span class="box"></span>
                           Acepto el envio de e-mails promocionales
                        </label>
                    </div>
                     <div class="checkbox-group">
                        <input type="checkbox" id="checkBox4" name="remember" checked>
                        <label for="checkBox4">
                            <span class="check"></span>
                            <span class="box"></span>
                            <a href="#" data-toggle="modal" data-target="#modalConditions">Acepto los terminos  y condiciones</a>
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
