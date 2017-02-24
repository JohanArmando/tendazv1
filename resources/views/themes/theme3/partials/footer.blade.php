<footer class="wrap-footer footer-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sidebar-right-footer">
                                <div class="sidebar-top-footer">
                                    <div class="widget widget_about">
                                        <div class="noo_about_widget">
                                            <p>
                                                Maecenas tristique gravida, odio et sagi ttis justo. Suspendisse ultricies nisi vel quam suscipit, et rutrum odio porttitor. Donec dictum non nulla ut lobortis molestie tortor sapien ermentum libero ndisse ultricies nisi vel quam 
                                            </p>
                                        </div>
                                    </div>
                                    <div class="widget widget_noo_social">
                                        <div class="noo_social">
                                            <div class="social-all">
                                                <a href="#" class="fa fa-facebook"></a>
                                                <a href="#" class="fa fa-google-plus"></a>
                                                <a href="#" class="fa fa-twitter"></a>
                                                <a href="#" class="fa fa-pinterest"></a>
                                                <a href="#" class="fa fa-flickr"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="colophon wigetized">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6 item-footer-four">
                                                <div class="widget widget_text">
                                                    <h4 class="widget-title">Paginas</h4>
                                                    <div class="textwidget">

                                                            <p><a href="{{ url('/') }}">Inicio</a></p>
                                                            <p><a href="{{ url('/cart/buy') }}">Carrito</a></p>
                                                            <p><a href="{{ url('products') }}">Productos</a></p>
                                                            <p><a href="{{url('contact')}}">Contactenos</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 item-footer-four">
                                                <div class="widget widget_tag_cloud">
                                                    <h4 class="widget-title">MAS INFORMACI&Oacute;N</h4>
                                                    <div>
                                                        <ul>
                                                            @if(!$shop->store->address_1 == '')
                                                                <li><strong>Email: </strong><span> {{$shop->store->address_1}}</span></li>
                                                            @endif
                                                            @if(!$shop->store->number_phone == '')
                                                                <li><strong>Telefono: </strong><span> {{$shop->store->number_phone}}</span></li>
                                                            @endif
                                                            @if(!$shop->store->number_phone == '')
                                                                <li><strong>Direcci&oacute;n: </strong><span> {{$shop->store->address_2}}</span></li>
                                                            @endif
                                                            @if(!$shop->store->conditions == '')
                                                                <li><a href="" data-toggle="modal" data-target="#modalConditions">Terminos  y condiciones</a></li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div ng-if="!usuario" class="col-md-3 col-sm-6 item-footer-four">
                                                <div class="widget noo-nav-menu-widget">

                                                    <h4 class="widget-title">Mi Cuenta</h4>
                                                    <div class="menu-userful-link-container">
                                                        <ul>
                                                            <li><a href="{{url('auth/login')}}">Registrate</a></li>
                                                            <li><a href="{{url('auth/login')}}">Inicio sesion</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 item-footer-four">
                                                <div class="widget widget_noo_openhours">
                                                    <h4 class="widget-title">Siguenos en</h4>
                                                </div>
                                                <div class="widget widget_noo_social">
                                                    <div class="noo_social">
                                                        <div class="social-all">
                                                            @if(!$shop->store->facebook == '')
                                                                <a class="fa fa-facebook" href="{{url('https://'.$shop->store->facebook)}}"></a>
                                                            @endif
                                                            @if(!$shop->store->twitter == '')
                                                                <a class="fa fa-twitter" href="{{url('https://'.$shop->store->twitter)}}"></a>
                                                            @endif
                                                            @if(!$shop->store->google_plus == '')
                                                                <a class="fa fa-google-plus" href="{{url('https://'.$shop->store->google_plus)}}"></a>
                                                            @endif
                                                            @if(!$shop->store->instagram == '')
                                                                <a class="fa fa-instagram" href="{{url('https://'.$shop->store->instagram)}}"></a>
                                                            @endif
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
                </div>
                <div class="noo-bottom-bar-content">
                    <div class="container">
                        <img src="{{asset('administrator/image/servientrega-footer.gif')}}" alt="">
                        <br class="br"/>2017 By Maxcorp.Inc. </div>
                </div>

            </footer>
