@extends(Theme::current()->viewsPath.'.template')
    @section('css')
        @stop
    @section('content')
        <div id="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        @if(Session::has('message'))
                            <div class="alert alert-success text-center-xs">
                                <i class="fa fa-check-circle fa-2x d-inline pull-left m-half-right m-none-xs m-quarter-bottom-xs"></i>
                                <p>{!! Session::get('message')['message'] !!}</p>
                            </div>
                        @endif
                        <form class="form" action="{{url('contact/email')}}" role="form" method="POST" data-toggle="validator" >
                            {!! csrf_field() !!}
                           <h3>Contactenos</h3>
                           <p align="justify">
                               Es importante que nos mantengas en informados de tus solucitudes, para brindarte el mejor servicio. O si teienes algun problemas informanos te brindaremosla mejor solucion lo pronto posible.
                           </p>
                           <div class="row">
                               <div class="col-md-4 col-sm-12">
                                   <div class="form-control-wrap your-name form-group">
                                       <input type="text" name="name" value="" size="40" class="form-control" placeholder="Nombres" required/>
                                       <div class="help-block with-errors"></div>
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                    <div class="form-control-wrap your-website form-group">
                                        <input type="text" name="last_name" value="" size="40" class="form-control" placeholder="Apellido" required/>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-4 col-sm-12">
                                   <div class="form-control-wrap your-website form-group">
                                       <input type="number" name="phone" value="" size="40" class="form-control" placeholder="Telefono" required/>
                                       <div class="help-block with-errors"></div>
                                   </div>
                               </div>
                                <div class="col-md-6 col-sm-12">
                                        <div class="form-control-wrap your-email form-group">
                                            <input type="email" name="email" value="" size="40" class="form-control" placeholder="Email" required/>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                        <div class="form-control-wrap your-phone form-group">
                                            <input type="text" name="subject" value="" size="40" class="form-control" placeholder="Asunto" required/>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                </div>
                                <div class="col-md-12">
                                        <div class="form-control-wrap your-message form-group">
                                            <textarea name="message" cols="40" rows="10" class="form-control" placeholder="Mensaje" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                </div>
                                <div class="col-md-12" style="margin-bottom: 20px">
                                        <input type="submit" value="Enviar" class="form-control submit btn-primary"/>
                                    </div>
                           </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-12">

                        <div class="google-map">
                        <iframe width="600" height="450" frameborder="0"  allowfullscreen class="hidden-xs"></iframe>
                                    <div class="noo-address-info-wrap">
                                            <div class="address-info {{ $shop->store->number_phone  || $shop->store->address_2 ||
                                                    $shop->store->address_1 ? '' : 'hidden' }}">
                                                <br><br>
                                                <h3>Informacion</h3>
                                                <p align="justify">
                                                    Si quieres saber mas sobre nuesta tienda, comunicate con nosotros:
                                                </p>

                                                <ul>
                                                    <li class="{{ !$shop->store->address_2 ? 'hidden' : '' }}">
                                                        <i class="fa fa-map-marker"></i>
                                                        <span>{{$shop->store->address_2}}</span>
                                                    </li>
                                                    <li class="{{ !$shop->store->number_phone ? 'hidden' : '' }}">
                                                        <i class="fa fa-phone"></i>
                                                        <span>({{$shop->store->number_phone}})</span>
                                                    </li>
                                                    <li class="{{ !$shop->store->address_1 ? 'hidden' : '' }}">
                                                        <i class="fa fa-envelope"> </i>
                                                        <span> {{$shop->store->address_1}}</span></li>
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
    @endsection
    @section('script')
        @stop