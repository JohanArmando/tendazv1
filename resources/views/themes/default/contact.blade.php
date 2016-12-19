@extends('themes.default.template')
    @section('css')
           @stop
    @section('content')

            <div class="container">
                <div class="col-sm-8 col-xs-12">
                    <div class="title"><span>Contactanos</span></div>
                    <div class="form" role="form">
                        <form action="{{url('contact/email')}}" role="form" method="POST" data-toggle="validator">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="nameInput">Nombre (*)</label>
                                <input type="text" class="form-control" name="name" placeholder="Nombre" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="emailInput">Email (*)</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="subjectInput">Asunto</label>
                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <label for="notesInput">Mensaje (*)</label>
                                <textarea class="form-control" rows="3" name="message" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <button type="submit" class="btn btn-sm pull-right">Enviar <i class="fa fa-arrow-circle-right"></i></button>
                        </form>

                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="title {{ $shop->store->number_phone || $shop->store->address_2 || $shop->store->address_1 ? '' : 'hidden' }}">
                        <span>Para mas Informaci&oacute;n</span></div>
                    <ul class="list-group blog-nav">
                        <li class="list-group-item {{ !$shop->store->address_2 ? 'hidden' : '' }}">&raquo; <a href="#" >
                                <i class="fa fa-map-marker"> </i> {{$shop->store->address_2}}</a></li>
                        <li class="list-group-item {{ !$shop->store->number_phone ? 'hidden' : '' }}">&raquo; <a href="#" >
                                <i class="fa fa-phone"> </i> (+ {{$shop->store->number_phone}}</a></li>
                        <li class="list-group-item {{ !$shop->store->address_1 ? 'hidden' : '' }}">&raquo; <a href="#">
                                <i class="fa fa-envelope"></i> {{$shop->store->address_1}}</a></li>
                    </ul>

                    <div class="hidden">
                    <div class="title"><span>Ubicaci&oacute;n</span></div>
                    <iframe width="100%" height="180" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=central%2Bpark&amp;ie=UTF8&amp;z=12&amp;t=m&amp;iwloc=near&amp;output=embed" style="border:0"></iframe>
                    </div>
                </div>
            </div>
           @endsection
    @section('script')
        @stop