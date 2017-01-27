@extends('layouts.administrator')
    @section('content')
        @include('admin.partials.message')
        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title semibold"><i class="fa fa-user"></i> Mi Cuenta</h4>
            </div>
            <div class="page-header-section">
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="{{url('admin')}}" style="color: grey;"> Inicio</a></li>
                        <li class="active"><a href="#" style="color: orange;">Mi Perfil</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <br>
        @include('admin.partials.message')
        <div class="content">
            <div class="row">

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="title"><i class="fa fa-user"></i> <strong>Perfil</strong></h5>
                        </div>
                            <div class="panel-body">
                                {!! Form::model(Auth('admins')->user(),['url' => "admin/account/profile/".Auth('admins')->user()->id ,
                                'method' => 'PUT','files' => true, 'data-toggle'=>'validator', 'role'=>'form']) !!}
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        {!! Form::text('name',null,['class' => 'form-control' ,'placeholder' => 'Nombre','required']) !!}
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Apellido</label>
                                        {!! Form::text('last_name',null,['class' => 'form-control', 'Placeholder' => 'Apellido','required']) !!}
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        {!! Form::email('email',null,['class' => 'form-control','readonly'=>'readonly','placeholder'=>'Email']) !!}
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>                                
                                <br>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Contrase&ntilde;a</label>
                                        {!! Form::password('actual',['class' => 'form-control','placeholder' => 'Contrase&ntilde;a actual']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Nueva contrase&ntilde;a</label>
                                        {!! Form::password('password',['class' => 'form-control','placeholder'=>'Nueva contrase&ntilde;a']) !!}
                                    </div>
                                </div>
                                <br>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Repertir Contrase&ntilde;a</label>
                                        {!! Form::password('password_confirmation',['class' => 'form-control','placeholder'=>'Repetir contrase&ntilde;a']) !!}
                                    </div>
                                </div>
                                <br>
                                <div class="col-xs-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label>Personalizada</label>
                                        <input type="file" name="image" class="dropify" data-default-file="{{ asset("profile/".Auth('admins')->user()->image) }}" />
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="text-center">
                                        <a href="{{ url('admin') }}" type="reset" class="btn btn-default"><i class="fa fa-times"></i> Cancelar</a>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Guardar Cambios</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection