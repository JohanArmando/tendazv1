@section('title')
Modo construcion
@stop
@extends('layouts.administrator')
    @section('css')

        @stop
    @section('content')
        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title">
                    <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/mechanic.png')}}">&nbsp; Pagina en construccion
                </h4>
            </div>
            <div class="page-header-section">
                <!-- Toolbar -->
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                        <li><a href="#" style="color: darkgrey;">Dise&ntilde;o</a></li>
                        <li class="active" style="color: orange;">P&aacute;gina en construcci&oacute;n</li>
                    </ol>
                </div>
                <!--/ Toolbar -->
            </div>
        </div>
        <br>
        <br>
        @include('admin.partials.message')
        <div class="row">
            
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><strong>Datos</strong></h4>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => ['admin/design/build/'] , 'method' => 'POST']) !!}
                        <div class="form-group">
                            <input  type="checkbox" name="build" value="1"
                                    @if($shop->store->build)
                                    checked
                                    @endif >
                                    Mostrar la Pantalla "P&aacute;gina en construcci&oacute;n" <small>
                                    <strong>(Recomendado)</strong>
                                    Mientras realizas cambios en tu tienda
                                    </small>.
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje que ver&aacute;n tus clientes (Puedes utilizar el texto que quieras).</label>
                            {!! Form::text('message' ,$shop->store->message , ['placeholder' => 'Estamos realizando algunas mejoras para un mejor servicio' , 'class' => 'form-control'] ) !!}
                        </div>
                        <div class="panel-footer">
                            <div class="text-center">

                                <button type="submit" class="btn btn-primary">

                                    <i class="fa fa-floppy-o"></i> Guardar Cambios
                                </button>
                                <a  class="btn btn-default" style="background-color: black;border: hidden; color: white" href="{{ url('admin/home') }}">
                                    <i class="fa fa-times"></i> Cancelar
                                </a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            
        </div>
        @endsection
    @section('scripts')
        @stop