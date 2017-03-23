@extends(Theme::current()->viewsPath.'.template')
    @section('css')
        @stop
    @section('content')
            <div class="container main-container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="no-padding">
                            <span class="title {{ $shop->store->number_phone  || $shop->store->address_2 || $shop->store->address_1 ? '' : 'hidden' }}">
                                <strong>Para mas Informaci&oacute;n</strong>
                            </span>
                            </div>
                            <ul class="list-group blog-nav">
                                <li class="list-group-item {{ !$shop->store->address_2 ? 'hidden' : '' }}">&raquo; <a href="#">
                                        <i class="fa fa-map-marker"></i> {{$shop->store->address_2}}</a></li>
                                <li class="list-group-item {{ !$shop->store->number_phone ? 'hidden' : '' }}">&raquo; <a href="#" >
                                        <i class="fa fa-phone"> </i> + {{$shop->store->number_phone}}</a></li>
                                <li class="list-group-item {{ !$shop->store->address_1 ? 'hidden' : '' }}">&raquo; <a href="#">
                                        <i class="fa fa-envelope"></i> {{$shop->store->address_1}}</a></li>
                            </ul>
                            <div class="hidden">
                            <div class="no-padding">
                                <span class="title"><strong>Localizacion</strong></span>
                            </div>
                            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=cihanjuang&amp;sll=37.0625,-95.677068&amp;sspn=56.637293,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=Cihanjuang.,+Cimahi+Utara,+Cimahi,+Jawa+Barat,+Indonesia&amp;t=m&amp;z=14&amp;ll=-6.858623,107.5664&amp;output=embed"></iframe><br><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=cihanjuang&amp;sll=37.0625,-95.677068&amp;sspn=56.637293,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=Cihanjuang.,+Cimahi+Utara,+Cimahi,+Jawa+Barat,+Indonesia&amp;t=m&amp;z=14&amp;ll=-6.858623,107.5664" style="color:#0000FF;text-align:left">View Larger Map</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="col-lg-12 col-sm-12">
                            <span class="title"><strong>Contactenos</strong></span>
                        </div>
                        <div class="col-lg-12 col-sm-12 hero-feature">
                            @if(Session::has('message'))
                                <div class="alert alert-success text-center-xs">
                                    <i class="fa fa-check-circle fa-2x d-inline pull-left m-half-right m-none-xs m-quarter-bottom-xs"></i>
                                    <p>{!! Session::get('message')['message'] !!}</p>
                                </div>
                            @endif
                            <form action="{{url('contact/email')}}" role="form" method="post" data-toggle="validator">
                                {!! csrf_field() !!}
                            <table class="table table-bordered tbl-checkout">
                                <tbody>
                                <tr>
                                    <td>Nombre</td>
                                    <td>
                                        <div class="form-group">
                                        <input type="text" name="name" class="form-control" required>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Asunto</td>
                                    <td>
                                        <input type="text" name="subject" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mensaje</td>
                                    <td colspan="3">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" rows="5" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="btn-group btns-cart pull-right">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                                <button type="reset" class="btn btn-default">Cancelar</button>
                                <hr>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    @section('scripts')
        @stop
