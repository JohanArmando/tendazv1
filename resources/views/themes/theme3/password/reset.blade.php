@extends(Theme::current()->viewsPath.'.template')

@section('content')
    <script>
        var token = "{{ $token }}";
    </script>
<section class="content content-bg-1 fixed-bg" ng-controller="ResetPasswordController">
    <div class="container">
        <br><br><br>
        <h2 class="text-center text-uppercase title-under">Restablecer Contrase&ntilde;a</h2>
        <div class="row">
            <div class="slider-blog slick-arrow-bottom slick-initialized slick-slider">
                <div aria-live="polite" class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 100%; " role="listbox">
                    <div class="link-hover-block slick-slide " style="width: 1200px;">
                        <div class="slider-blog__item">
                            <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                             <div class="panel-body">
                                 <div class="alert alert-danger" ng-if="errors">
                                     <ul>
                                         <li style="font-size: 0.8em" ng-repeat="error in errors"><% error %></li>
                                     </ul>
                                 </div>
                            <form class="form-horizontal" name="resetPasswordForm" ng-submit="resetPassword(resetPasswordForm)"  accept-charset="utf-8" autocomplete="off" role="form"  novalidate>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Correo:</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" ng-init="reset.email = getParameterByName('email')"  ng-model="reset.email" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Contrase&ntilde;a:</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password"  ng-model="reset.password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirmar Contrase&ntilde;a:</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  ng-model="reset.password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary btn--ys btn--xl btn-top resetPassword">
                                        <i class="fa fa-refresh">  </i>
                                          Restablecer Contrase&ntilde;a
                                    </button>
                                </div>
                            </div>
                        </form>

                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
