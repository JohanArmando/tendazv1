<div class="footer">
    <div class="container">
        <div class="inset-bottom-60">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="mobile-collapse">
                        <h4 class="text-left  title-under  mobile-collapse__title">INFORMACION</h4>
                        <div class="v-links-list mobile-collapse__content">
                            <ul>
                                <li><a href="{{ url('/') }}">Inicio</a></li>
                                <li><a href="{{ url('/cart/buy') }}">Carrito</a></li>
                                <li><a href="{{ url('products') }}">Productos</a></li>
                                <li><a href="{{url('contact')}}">Contactenos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="mobile-collapse">
                        <h4 class="text-left  title-under  mobile-collapse__title">MAS INFORMACI&Oacute;N</h4>
                        <div class="v-links-list mobile-collapse__content">
                            <ul>
                                @if(!$shop->store->address_1 == '')
                                    <li><a href="">Email: </a><span> {{$shop->store->address_1}}</span></li>
                                @endif
                                @if(!$shop->store->number_phone == '')
                                    <li><a href="">Telefono: </a><span> {{$shop->store->number_phone}}</span></li>
                                @endif
                                @if(!$shop->store->number_phone == '')
                                    <li><a href="">Direcci&oacute;n: </a><span> {{$shop->store->address_2}}</span></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2  col-xl-2">
                    <div class="mobile-collapse">
                        <h4 class="text-left  title-under  mobile-collapse__title">MI CUENTA</h4>
                        <div class="v-links-list mobile-collapse__content">
                            <ul>
                                <li><a href="{{url('auth/login')}}">Registrate</a></li>
                                <li><a href="{{url('auth/login')}}">Inicio sesion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="divider divider--lg visible-md visible-sm"></div>
                <div class="col-sm-9 col-md-7 col-lg-4 col-xl-3 col-offset-1"  ng-controller="customerStoreController">
                    <div class="subscribe-box">
                        <div class="mobile-collapse">
                            <h4 class="text-left  title-under  mobile-collapse__title">SUBSCRIBETE</h4>
                            <div class="mobile-collapse__content">
                                <form class="form-inline" name="userForm" ng-submit="sendSubscriber(userForm.$valid)" ng-show="!letter.news" novalidate>
                                    <input class="form-control" type="email"  name="subscribe" style="width: 65%;" placeholder="correo electronico" ng-model="letter.email" required>
                                    <button type="submit" class="btn btn--ys btn--xl" style="background-color: #2196F3; color: white">
                                        subscribete</button>
                                </form>
                                <div class="contact-ok alert alert-success text-center-xs" ng-show="letter.news">
                                    <i class="fa fa-check-circle fa-2x d-inline pull-left m-half-right m-none-xs m-quarter-bottom-xs"></i>
                                    <p>Se inscribi&oacute; al newsletter correctamente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider divider--md"></div>
                    <div class="col-sm-6 col-sm-offset-2">
                        <br>
                        <a href="#">
                            <img src="{{asset('themes_tendaz/default/images/facebook-logo.png')}}">
                        </a>
                        <a href="#">
                            <img src="{{asset('themes_tendaz/default/images/twitter-letter-logo.png')}}">
                        </a>
                        <a href="#">
                            <img src="{{asset('themes_tendaz/default/images/google-plus.png')}}">
                        </a>
                        <a href="#">
                            <img src="{{asset('themes_tendaz/default/images/instagram.png')}}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center copyright">
        Copyright @ 2016 <a href="http://tendaz.com" target="_blank" style="color: white;">tendaz.com</a> By Maxcorp Inc.
    </div>
</div>