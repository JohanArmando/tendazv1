@extends('layouts.tendaz')
@section('css')
    <style>
        .banner-contact{  position: relative;  width: 100%;  }
        h1 { position: absolute;top: 140px;text-align: center;width: 100%; color: white !important;font-size: 45px}

    </style>
@stop
@section('content')
    <div class="banner-contact">
        <img src="{{asset('tendaz/images/contact.png')}}" alt="Mi titulo de la imagen" style="max-height: 300px;width: 100%">
        <h1 class="hidden-xs hidden-sm">Contactanos</h1>
    </div>
    <div class="container" >
        <section class="container" >
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <h4 class="text-center">
                        Envianos un email y nos pondremos en contacto en menos de 24 horas o llama a nuestras lineas de atencion.
                    </h4>
                    <br>
                </div>
                <div class="col-md-12">
                            <div class="col-md-6 col-md-offset-1"  style="padding-top: 27px; padding-left: 35px">
                                <span class="text-center">
                                        <legend style="margin-top: -30px;padding-bottom: 30px;color: #f26522;font-weight: bold">Comunicate Con Nosotros</legend>
                                </span>
                                <div class="col-md-12">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                {!! Form::open(['url'=> 'contact' , 'method' => 'POST' ,'id' => 'form-contact','class' => 'form-horizontal']) !!}
                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" style="border-radius: 0 5px 5px 0" class="form-control" name="name" placeholder="Tu nombre" required="required" data-minlength="6" value="{{ old('name') }}"/>
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input type="email" style="border-radius: 0 5px 5px 0" class="form-control" name="email" placeholder="Correo electronico" required="required" data-minlength="6" value="{{ old('email') }}" />
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <select id="subject" name="subject" class="form-control" required="required" >
                                            <option value="na" disabled="true">Escoge un Asunto:</option>
                                            <option value="service">Servico general</option>
                                            <option value="suggestions">Sugerencia</option>
                                            <option value="product">Soporte a productos</option>
                                        </select>
                                    </div>
                                    <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                                        <textarea name="message" id="message" class="form-control" rows="7"  required="required"
                                                  placeholder="Mesaje al equipo de soporte tecnico"></textarea>
                                        @if ($errors->has('message'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('message') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-warning pull-left" style="background-color: #f26522;border: 1px solid #f26522" id="btnContactUs">
                                            <i class="fa fa-envelope"></i> Enviar Mensaje
                                        </button>
                                    </div>
                                {!! Form::close() !!}
                                </div>
                            </div>

                            <div class="col-md-4" style="padding-top: 27px; padding-left: 35px">
                                    <span class="text-center">
                                        <legend style="margin-top: -30px;padding-bottom: 30px;color: #f26522;font-weight: bold">¿Dónde estamos?</legend>
                                    </span>
                                <div class="col-md-12">
                                    <p><i class="fa fa-phone" style="color: #f26522"></i>&nbsp; Telefono<strong>:</strong> 6315645</p>
                                    <hr>
                                    <p><i class="fa fa-whatsapp" style="color: #f26522"></i>&nbsp; Whatsapp<strong>:</strong> 3104763183</p>
                                    <hr>
                                    <p><i class="fa fa-envelope" style="color: #f26522"></i>&nbsp; Email<strong>:</strong> info@tendaz.com</p>
                                    <hr>
                                    <p><i class="fa fa-home" style="color: #f26522"></i>&nbsp; Direccion<strong>:</strong> Carrera 58 No 137 a - 10 Piso 5</p>
                                    <hr>
                                </div>
                            </div>
                    </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script>
        var form = $('#form-contact');
        var btn = form.find('button');
        var initialtext = btn.text();
        btn.on('click' , function (e) {
            e.preventDefault();
            btn.attr('disabled' , true);
            btn.text('Enviando mensaje ......');
            $('.preloader').removeClass('hidden');
            form.submit();
        });
    </script>
@endsection