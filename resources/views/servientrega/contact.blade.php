@extends('servientrega.template')
	@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('servientrega/css/other-sections.css')}}">
		@stop
        <div class="container-fluid">
            @include('servientrega.partials.top')
               
        </div>
         @include('servientrega.partials.nav')
	@section('content')
		<div class="container principal container-fluid" >
        <section class="text-center heading-description">
            <h1>Contactanos</h1>
            <p class="MainByline">
                Envianos un email y nos pondremos en contacto en menos de 24 horas o llama a nuestras lineas de atencion.
            </p>
        </section>
        <br>
        <br>
        <section class="container" >
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <div class="panel-group">
                            <div class=" col-md-6 col-md-offset-1">
                                <p>Gracias por ponerte en contacto con nosotros. Por favor, seleccione el asunto que mejor se ajuste a su razón para ponerse en contacto con nosotros.
                                </p>
                                <hr>
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
                                        <button type="submit" class="btn btn-primary make_tendaz pull-left" id="btnContactUs">
                                            <i class="fa fa-envelope"></i> Enviar Mensaje
                                        </button>
                                    </div>
                                {!! Form::close() !!}
                            </div>

                            <div class="col-md-5" style="padding-top: 27px; padding-left: 35px">
                                    <span class="text-center">
                                        <legend style="margin-top: -30px;padding-bottom: 30px;">¿Dónde estamos?</legend>  
                                    </span>
                                <div class="support-contact">
                                    <p><i class="fa fa-phone" style="color: #008834;"></i>&nbsp; Telefono<strong>:</strong> (571) 7700410 ext. 110777</p>
                                    <hr>
                                    <p><i class="fa fa-envelope" style="color: #008834;"></i>&nbsp;Email<strong>:</strong> maria.cardoso@servientrega.com</p>
                                    <hr>
                                    <p><i class="fa fa-home" style="color: #008834;"></i>&nbsp; Direccion<strong>:</strong> </p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    @include('servientrega.partials.footer')
		@endsection

	@section('script')
		@stop