<div class="clearfix"></div>
<div style="margin-bottom: 100px;"></div>
<div style="background-color: #45B284" ng-controller="customerStoreController">
    <div class="noo-sh-mailchimp" >
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xs-12">
                    <h3 class="noo-mail-title">Subscribete!</h3>
                    <p class="noo-mail-desc" style="color: white">
                        Registrate y te mantendremos al tanto de nuestras promociones y descuentos
                    </p>
                </div>
                <div class="col-md-7 col-xs-12">
                    <form name="userForm" ng-submit="sendSubscriber(userForm.$valid)" ng-show="!letter.news" role="">
                        <div class="newsletter-form-fields">
                            <input type="email" name="subscribe" placeholder="Correo electronico" ng-model="letter.email" required />
                            <input type="submit" value="Enviar"/>
                        </div>
                    </form>
                    <div class="contact-ok alert alert-success text-center-xs" ng-show="letter.news">
                        <i class="fa fa-check-circle fa-2x d-inline pull-left m-half-right m-none-xs m-quarter-bottom-xs"></i>
                        <p>Se inscribi&oacute; al newsletter correctamente.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>