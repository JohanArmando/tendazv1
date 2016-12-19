@extends(Theme::current()->viewsPath.'.template')
    @section('css')
        @stop
    @section('content')
        <div class="container">
                <div class="col-md-8">
                    <div class="box" id="contact"  style="display: inline-block">
                        @if(Session::has('message'))
                            <div class="alert alert-success text-center-xs">
                                <i class="fa fa-check-circle fa-2x d-inline pull-left m-half-right m-none-xs m-quarter-bottom-xs"></i>
                                <p>{!! Session::get('message')['message'] !!}</p>
                            </div>
                        @endif
                        <form action="{{url('/store/contact')}}" role="form" method="post" data-toggle="validator">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-12">
                                <h2>Contactenos</h2>
                                <hr>
                                </div>
                                <div class="col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="firstname">Nombres</label>
                                        <input type="text" class="form-control" name="name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="subject">Asunto</label>
                                        <input type="text" class="form-control" name="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Mensajes</label>
                                        <textarea name="message" class="form-control" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Enviar Mensaje</button>

                                </div>
                            </div>
                            <!-- /.row -->
                        </form>

                    </div>
                </div>

                <div class="col-md-4">

                    <div class="box" id="contact" style="display: inline-block" class="{{ ($shop->phone_number && $shop->phone_country) || $shop->email_contact || $shop->address_contact ? '' : 'hidden' }}">

                        <h2 class="text-center">
                            Mas Informaci&oacute;n</h2>
                        <hr>
                        <div class="col-sm-12 col-md-12 {{ !$shop->address_contact ? '' : '' }}">
                            <h4><i class="fa fa-map-marker"></i> Direccion</h4>
                            <p>{{$shop->address_contact}}</p>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-12 col-md-12 {{ !$shop->phone_number || !$shop->phone_country ? '' : '' }}">
                            <h4><i class="fa fa-phone"></i> Telefono</h4>
                            <p>(+{{$shop->phone_country}}) {{$shop->phone_number}}</p>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-12 col-md-12 {{ !$shop->email_contact ? '' : '' }}">
                            <h4><i class="fa fa-envelope"></i> Soporte Electronico</h4>
                            <p>{{$shop->email_contact}}</p>
                        </div>
                        <!-- /.col-sm-4 -->
                    </div>
                </div>

                <!--Mapa del Contactenos-->
                
                <!--<div class="hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31809.78698638839!2d-74.05938710000001!3d4.7312209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1473862047957" width="1100" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <hr>
                </div>-->

        </div>
        @endsection
    @section('script')
        @stop