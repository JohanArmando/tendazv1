<!-- START Template Sidebar (Left) -->
       <aside class="sidebar sidebar-left sidebar-menu">
     <!-- START Sidebar Content -->
           <section class="content slimscroll">
       <!-- START Template Navigation/Menu -->
               <ul class="topmenu topmenu-responsive" data-toggle="menu">
                   <li @if(Request::is('admin')) class="active" @endif>
                       <a href="{{url('admin')}}" data-target="#dashboard" data-parent=".topmenu">
                          <span class="figure">
                            <img class="img-responsive" src="{{asset('administrator/image/icons/icons-nav/dashboard.png')}}">
                          </span>
                          <span class="text">Inicio</span>
                       </a>
                   </li>

                   <li @if(Request::is('admin/stats/basic')) class="active" @endif>
                       <a href="javascript:void(0);"  data-toggle="submenu" data-target="#dashboard" data-parent=".topmenu">
                           <span class="figure">
                              <img class="img-responsive" src="{{asset('administrator/image/icons/icons-nav/analytics.png')}}"></span>
                           <span class="text">Estad&iacute;sticas</span>
                           <span class="arrow"></span>
                       </a>

                       <ul id="dashboard" class="submenu collapse ">
                           <li >
                               <a href="{{ url('admin/stats') }}">
                                   <span class="text">Basicas</span>
                               </a>
                           </li>
                           <li >
                               <a href="{{ url('admin/stats/advanced') }}">
                                   <span class="text">Avanzadas</span>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li @if(Request::is('admin/products') || Request::is('admin/products/create') || Request::is('admin/categories') || Request::is('admin/products/import'))  class="active" @endif>
                       <a href="javascript:void(0);" data-toggle="submenu" data-target="#layout" data-parent=".topmenu">
                           <span class="figure"><img class="img-responsive" src="{{asset('administrator/image/icons/icons-nav/trolley.png')}}"></span>

                           <span class="text">Productos</span>

                           <span class="arrow"></span>
                       </a>
                       <!-- START 2nd Level Menu -->
                       <ul id="layout" class="submenu collapse ">
                          <li>
                             <a href="{{ url('admin/products') }}">
                                 <span class="text">Mis Productos</span>
                             </a>
                           </li>
                           <li>
                               <a href="{{ url('admin/categories')}}">
                                   <span class="text">Categorias</span>

                               </a>
                           </li>
                           <li>
                               <a href="{{ url('admin/products/create') }}">
                                   <span class="text">Agregar Productos</span>
                               </a>
                           </li>
                           <li >
                               <a href="{{ url('admin/products/import') }}">
                                   <span class="text">Importar Productos</span>

                               </a>
                           </li>

                       </ul>
                   </li>
                   <li @if(Request::is('admin/orders') || Request::is('admin/providers')) class="active" @endif>
                       <a href="javascript:void(0);" data-target="#componentsII" data-toggle="submenu" data-parent=".topmenu">
                           <span class="figure"><img class="img-responsive" src="{{asset('administrator/image/icons/icons-nav/store.png')}}"></span>
                           <span class="text">Ventas</span>
                           <span class="arrow"></span>
                       </a>
                       <ul id="componentsII" class="submenu collapse">
                            <li>
                                <a href="{{ url('admin/orders')}}">
                                    <span class="text">Mis ventas</span>
                                </a>
                            </li>
                           <li>
                               <a href="{{ url('admin/providers')}}">
                                   <span class="text">Mis Proveedores</span>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li @if(Request::is('admin/customers')
                        || Request::is('admin/customers/contact')
                        || Request::is('admin/customers/export'))
                        class="active"
                        @endif>
                       <a href="javascript:void(0);" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                           <span class="figure"><img class="img-responsive" src="{{asset('administrator/image/icons/icons-nav/team.png')}}"></span>
                           <span class="text">Cliente</span>
                           <span class="arrow"></span>
                       </a>
                       <!-- START 2nd Level Menu -->
                       <ul id="components" class="submenu collapse ">
                           <li >
                               <a href="{{ url('admin/customers')}}">
                                   <span class="text">Mis Clientes</span>
                               </a>
                           </li>
                           <li>
                              <a href="{{url('admin/customers/contact')}}">
                                  <span class="text">Mis consultas</span>
                              </a>
                           </li>
                       </ul>
                   </li>
                   <li @if(Request::is('admin/marketing/discounts') || Request::is('admin/marketing/social') || Request::is('admin/marketing/app') || Request::is('admin/marketing/robot') || Request::is('admin/marketing/coupons'))
                   class="active" @endif>
                       <a href="javascript:void(0);" data-toggle="submenu" data-target="#table" data-parent=".topmenu">
                           <span class="figure"><img class="img-responsive" src="{{asset('administrator/image/icons/icons-nav/video-player.png')}}"></span>
                           <span class="text">Marketing</span>
                           <span class="arrow"></span>
                       </a>
                       <ul id="table" class="submenu collapse ">
                           <li>
                               <a href="{{url('admin/marketing/app')}}">
                                   <span class="text"> App Mobile </span>
                               </a>
                           </li>
                           <li>
                               <a href="{{url('admin/marketing/robot')}}">
                                   <span class="text"> Maxi bot </span>
                               </a>
                           </li>
                           <li>
                               <a href="{{url('admin/marketing/social')}}">
                                   <span class="text">Login con Redes Sociales</span>
                               </a>
                           </li>
                           <li>
                               <a href="{{ url('admin/marketing/coupons')}}">
                                   <span class="text">Cupones de Descuento</span>
                               </a>
                           </li>
                       </ul>
                   </li>

                   <li  @if(Request::is('admin/design/theme')
                         || Request::is('admin/design/logo')
                         || Request::is('admin/design/build')
                         || Request::is('admin/design/social_network')
                         || Request::is('admin/design/info'))
                        class="active" @endif>
                      <a href="javascript:void(0);" data-toggle="submenu" data-target="#dis" data-parent=".topmenu">
                        <span class="figure"><img class="img-responsive" src="{{asset('administrator/image/icons/icons-nav/laptop.png')}}"></span>
                        <span class="text">Dise&ntilde;o</span>
                        <span class="arrow"></span>
                      </a>
                        <ul id="dis" class="submenu collapse ">
                            <li>
                               <a href="{{url('admin/design/theme')}}">
                                   <span class="text">Elegir Tema </span>
                               </a>
                            </li>
                            <li>
                                <a href="{{url('admin/design/logo')}}">
                                    <span class="text">Cambiar logo </span>
                                </a>
                            </li>
                            <li >
                               <a href="{{url('admin/design/build')}}">
                                   <span class="text">P&aacute;gina en construcci&oacute;n</span>
                               </a>
                            </li>
                            <li>
                              <a href="{{url('admin/design/social_network')}}">
                                  <span class="text">Redes sociales</span>
                              </a>
                            </li>
                            <li>
                                <a href="{{url('admin/design/info')}}">
                                    <span class="text">Informaci&oacute;n de contacto</span>
                                </a>
                            </li>
                        </ul>
                   </li>

                   <li  @if(Request::is('admin/setting/payments')
                         || Request::is('admin/setting/shipping')
                         || Request::is('admin/setting/mercadolibre/')
                         || Request::is('admin/setting/configuration/domain')
                         || Request::is('admin/setting/domain'))
                        class="active" @endif>
                       <a href="javascript:void(0);" data-toggle="submenu" data-target="#configuration" data-parent=".topmenu">
                           <span class="figure"><img class="img-responsive" src="{{asset('administrator/image/icons/icons-nav/settings.png')}}"></span>
                           <span class="text">Configuraci&oacute;n</span>
                           <span class="arrow"></span>
                       </a>
                       <!-- START 2nd Level Menu -->
                       <ul id="configuration" class="submenu collapse ">
                           <li>
                               <a href="{{ url('admin/setting/payments') }}">
                                   <span class="text">Medios de pago</span>
                               </a>
                           </li>
                           <li >
                               <a href="{{url('admin/setting/shippings')}}">
                                   <span class="text">Env&iacute;o y locales</span>
                               </a>
                           </li>
                           <li>
                              <a href="{{url('admin/setting/mercadolibre')}}">
                                <span class="text">Tu Mercadolibre</span>
                              </a>
                           </li>
                           <li>
                              <a href="{{url('admin/setting/domain')}}">
                                <span class="text">Configura tu dominio</span>
                              </a>
                           </li>
                       </ul>
                   </li>

                    <li @if(Request::is('admin/help')) class="active" @endif>
                       <a href="{{url('admin/help')}}" data-target="#dashboard" data-parent=".topmenu">
                           <span class="figure"><img class="img-responsive" src="{{asset('administrator/image/icons/icons-nav/info.png')}}"></span>
                           <span class="text">Herramientas y Ayuda</span>
                       </a>
                   </li>
                   <li></li>
                   </li>
                </ul>

                <div style="margin-bottom: 3.0em;"></div>

               <style>
                   li {
                       list-style: none !important;
                   }
               </style>
               <li>
                   <div class="wrapper">
                       <div class="text-center">
                           <a href="{{ url('/') }}" target="_blank" class="btn btn-default-tendaz" >Visita tu tienda</a>
                       </div>
                   </div>
               </li>
               <!--/ END Template Navigation/Menu -->
               <br>
               <br>
           </section>
           </section>
     <!--/ END Sidebar Container -->
       </aside>
       <!--/ END Template Sidebar (Left) -->