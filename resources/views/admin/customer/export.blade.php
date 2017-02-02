@section('title')
Exportar clientes
@stop
@extends('layouts.administrator')
@section('css')
        <style type="text/css">
            input[type="radio"], input[type="checkbox"]{
               zoom: 1.5 !important; 
            }
        </style>
    @stop
@section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title semibold"><i class="ico-user"></i>&nbsp; Mis Clientes</h4>
        </div>
        <div class="page-header-section">
            <!-- Toolbar -->
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                    <li><a href="{{ url('admin/customers') }}" style="color: orange;">Clientes</a></li>
                    <li class="active" style="color: orange;">Exportar lista de clientes</li>
                </ol>
            </div>
            <!--/ Toolbar -->
        </div>
    </div>
    <div style="margin-bottom: 100px !important;"></div>
    <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h5><i class="glyphicon glyphicon-cloud-download"></i>&nbsp; <strong>Descargar lista de cliente.</strong></h5>
                        </div>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/admin/customers/export' , 'method' => 'POST']) !!}
                            <p class="help-block col-md-6" align="justify">
                                Esta opcion te permite exportar la lista de los cliente que se hayan registrado desde tu tienda.
                                Te recomendamos que tengas en cuenta el sistema operativo que normalmente utilizasa para que este sea legible en cualquier otro ordenador.
                                <strong>El archivo que se descarga tiene extension XLS, este es compatible con cualquier version de Microsoft Excel o cualquier hoja de calculo que acepte esta extension.</strong>
                            </p>

                            <div class="container">
                                <div class="form-group ">
                                    <input type="radio" name="so" id="so" value="xls" checked>
                                    <label for="">Descargar para Windows</label>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="so" id="so" value="csv">
                                    <label for="">Descargar para Mac</label>
                                </div>
                                <input type="submit" class="btn btn-primary text-center" value="Descargar">
                                <a  href="{{ url('admin/customers') }}"
                                     class="btn btn-default">
                                    <i class="fa fa-times"></i> Cancelar
                                </a>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-md-2">

                </div>
            </div>
    </div>
    @endsection

    @section('scripts')
    @stop
