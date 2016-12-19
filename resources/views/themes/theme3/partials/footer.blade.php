<footer class="wrap-footer footer-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sidebar-right-footer">
                                <div class="sidebar-top-footer">
                                    <div class="widget widget_about">
                                        <div class="noo_about_widget">
                                            <a href="#">
                                                <img src="{{asset('tema3/images/logo-dark.png')}}" alt="">
                                            </a>
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
                                                <div class="widget widget_tag_cloud" ng-controller="categoryTemplateController">
                                                    <h4 class="widget-title">Categorias</h4>
                                                    <div class="tagcloud" >
                                                        <a ng-repeat="category in categories | limitTo:8"
                                                           href="<% BASEURL + '/products/' + category.slug %>"><% category.name %></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 item-footer-four">
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
                                                    <h4 class="widget-title">Horarios</h4> 
                                                    <ul class="noo-openhours">
                                                        <li>
                                                            <span>Lunes a Viernes:</span>
                                                            <span>08:00am - 08:00pm </span>
                                                        </li>
                                                        <li>
                                                            <span>Sabados &amp; Domingos: </span>
                                                            <span>10:00am - 06:00pm </span>
                                                        </li>
                                                    </ul>
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
                        2016 tendaz.<br class="br"/> Tienda Creada por <a href="https://tendaz.com">Tendaz</a>. </div>
                </div>

            </footer>
