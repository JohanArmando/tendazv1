@section('title')
Login con redes sociales
@stop
@extends('layouts.administrator')
    @section('css')
        <style>
            .social .form-group input{
                margin-bottom: 10px;
            }
        </style>
        @stop
    @section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title">
                <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/network.png')}}">&nbsp; Login con Redes Sociales
            </h4>
        </div>
        <div class="page-header-section">
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin')}}" style="color: grey;">Inicio</a></li>
                    <li><a href="#" style="color: darkgrey;">Marketing</a></li>
                    <li><a href="#" style="color: orange">Redes Sociales</a></li>
                </ol>
            </div>
        </div>
    </div>
    @include('admin.partials.message')
    <div class="row">
        <div class="col-md-12">
            <div class="widget panel">
                <blockquote>
                  <p>Permite que tus clientes inicien sesion en tu sitio con sus cuentas de Facebook o Google+, y de esta manera agilicen el proceso de compra.</p>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="row social" style="margin-top: 0px">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title text-left">
                        <img src="{{asset('administrator/image/icons/icons-base/facebook.png')}}" height="20px"> Credenciales Facebook
                    </h4>
                </div>
                <div class="panel-body">
                    {!! Form::model($social_facebook , ['url' => url('/admin/marketing/social/'.$social_facebook->uuid) , 'method' => 'PUT']) !!}
                        <div class="form-group">
                            {!! Form::label('app_id','App ID') !!}
                            {!! Form::text('app_id' , null ,array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('app_secret','App Secret') !!}
                            {!! Form::text('app_secret' , null ,array('class' => 'form-control')) !!}
                            <input type="hidden" name="provider" value="facebook">
                            <a href="{{url('/admin/marketing/social/tutorial')}}"><i class="fa fa-exclamation-circle"></i>
                                <strong>&iquest;Como activo el login via Facebook para mis clientes?</strong>
                            </a>
                        </div>
                        <div class="panel-footer">
                            <div class="text-center">
                                <a  class="btn btn-primary Facebook">Activar</a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title text-left"> 
                        <img src="{{asset('administrator/image/icons/icons-base/google-plus.png')}}" height="20px"> Credenciales Google+
                    </h4>
                </div>
                <div class="panel-body">
                    {!! Form::model($social_google , ['url' => url('/admin/marketing/social/'.$social_google->uuid) , 'method' => 'PUT']) !!}
                    <div class="form-group">
                        {!! Form::label('app_id','Consumer Key') !!}
                        {!! Form::text('app_id' , null ,array('class' => 'form-control' )) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('app_secret','Consumer Secret') !!}
                        {!! Form::text('app_secret' , null ,array('class' => 'form-control')) !!}
                        <input type="hidden" name="provider" value="google">
                        <a href="#" >
                            <i class="fa fa-exclamation-circle" ></i>
                            <strong>&iquest;Como activo el login via Google+ para mis clientes?</strong>
                        </a>
                    </div>
                    <div class="panel-footer">
                        <div class="text-center">
                            <a class="btn btn-primary Twitter">Activar</a>
                        </div>
                    </div>
                    {!! Form::close() !!}
 
                </div>
            </div>
        </div>
    </div>
    <div class="page-end-space"></div>
    </div>
    @endsection
    @section('scripts')
    <script>
        $(document).on('ready' , function () {
            $('.btn-primary').on('click' , function (e) {
                e.preventDefault();
                var initialText = $(this).text();
                var btn = $(this);
                btn.attr('disabled' , true);
                var form = btn.closest('.panel-default').find('form');
                var red = form.find('input[name=provider]').val();
                var block = red == 'Facebook' ? 'Google' : 'Facebook';
                $('.' + block).attr('disabled' , true);
                btn.html('<i class="fa fa-spin fa-spinner  fa-fw"></i>' + ' Activando login con ' + red );
                form.submit();
            });
        });
    </script>
@stop