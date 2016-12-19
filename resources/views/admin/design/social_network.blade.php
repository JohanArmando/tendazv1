@section('title')
Redes sociales
@stop
@extends('layouts.administrator')
@section('css')
    @stop
@section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title">
                <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/network.png')}}">&nbsp; Redes sociales
            </h4>
        </div>
        <div class="page-header-section">
            <!-- Toolbar -->
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                    <li><a href="#" style="color: darkgrey;">Dise&ntilde;o</a></li>
                    <li class="active" style="color: orange;">Redes sociales</li>
                </ol>
            </div>
            <!--/ Toolbar -->
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fa fa-plus"></i> <strong>Agrega tus redes sociales</strong></h4>
                </div>
                <div class="panel-body">
                    {!! Form::model($store , ['url' => ['admin/design/social_network/'] , 'method' => 'PUT']) !!}
                        <div class="form-group">
                            <label for="facebook">P&aacute;gina de facebook</label>
                            <div class="input-group">
                                <span class="input-group-addon">https://</span>
                                {!! Form::text('facebook' ,$store->facebook , ['class' => 'form-control'] ) !!}
                            </div>
                            <p class="help-block"><i class="fa fa-exclamation"></i> <a href="https://www.facebook.com/pages/create/?ref_type=registration_form" target="_blank">C&oacute;mo crear tu p&aacute;gina en Facebook en 4 pasos.</a></p>
                        </div>
                        <div class="form-group">
                            <label for="twitter">Cuenta de Twitter</label>
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                {!! Form::text('twitter' ,$store->twitter , ['class' => 'form-control'] ) !!}
                            </div>
                            <p class="help-block"> 
                                <i class="fa fa-exclamation"></i> <a href="https://twitter.com/signup?lang=es" target="_blank">Crear tu cuenta en Twitter</a>
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="google">P&aacute;gina de Google+</label>
                            <div class="input-group">
                                <span class="input-group-addon">https://</span>
                                {!! Form::text('google_plus' ,$store->google_plus , ['class' => 'form-control'] ) !!}
                            </div>
                            <p class="help-block">
                                <i class="fa fa-exclamation"></i>
                                <a href="https://accounts.google.com/ServiceLogin?sacu=1&continue=https%3A%2F%2Fplus.google.com%2Fup%2F%3Fcontinue%3Dhttps%3A%2F%2Fplus.google.com%2Fcollections%2Ffeatured%26gpsrc%3Dgplp0&hl=es&service=oz#identifier" target="_blank">C&oacute;mo crear una pagina en google+</a>
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="instagram">Usuario de instagram</label>
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                {!! Form::text('instagram' ,$store->instagram , ['class' => 'form-control'] ) !!}
                            </div>
                            <p class="help-block">
                                <i class="fa fa-exclamation"></i>
                                <a href="https://www.instagram.com/" target="_blank">Crear Cuenta en instagram</a>
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="blog">Blog</label>
                            <div class="input-group">
                                <span class="input-group-addon">http://</span>
                                {!! Form::text('blog' ,$store->blog , ['class' => 'form-control'] ) !!}
                            </div>
                            <p class="help-block">
                                <i class="fa fa-exclamation"></i>
                                <a href="https://www.blogger.com/about/?r=1-null_user" target="_blank">Crear cuenta en Blogger</a>
                            </p>
                        </div>
                        <br>
                    <input type="hidden" value="{{ $store->id }}" name="id">
                    <div class="panel-footer">
                        <div class="text-center">

                            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Guardar Cambios</button>
                            &nbsp;
                            <a class="btn btn-default" style="background-color: black;border: hidden; color: white" href="{{ url('/admin/home') }}"><i class="fa fa-times"></i> Cancelar</a>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-md-1">

            </div>
        </div>
    </div>
    <div class="page-end-space"></div>
</div>
    @endsection
@section('scripts')
    @stop