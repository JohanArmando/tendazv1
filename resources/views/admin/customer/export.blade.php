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
                    <div class="panel-boy">
                        <br>
                        <form action="#">
                            <p class="help-block col-md-6" align="justify">
                                Esta opcion te permite exportar la lista de los cliente que se hayan registrado desde tu tienda. Te recomendamos que tengas en cuenta el sistema operativo que normalmente utilizasa para que este sea legible en cualquier otro ordenador. <strong>El archivo que se descarga tiene extension XLS, este es compatible con cualquier version de Microsoft Excel o cualquier hoja de calculo que acepte esta extension.</strong>
                            </p>
                            <div class="container">
                                <div class="form-group ">
                                    <input type="radio" name="so" id="so" value="windows" checked>
                                    <label for="">Descargar para Windows</label>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="so" id="so" value="Mac">
                                    <label for="">Descargar para Mac</label>
                                </div>
                                <button type="button" class="btn btn-primary text-center" id="download">
                                    <i class="glyphicon glyphicon-cloud-download" id="icon"></i>
                                    <i id="gif-download" class="fa fa-cog fa-spin"></i> &nbsp;
                                    <div id="find" style="display: inline;">Descargar</div></button>
                                <a  href="{{ url('admin/customers') }}" id="cancelar" class="btn btn-default">
                                    <i class="fa fa-times"></i> Cancelar</a>
                            <br>
                            <br>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="hidden" value="{{ url('admin/customers/export') }}" id="route-export-order">
                    <input type="hidden" value="{{ csrf_token() }}" id="token-route">
                </div>
            </div>
    </div>
    @endsection

    @section('scripts')
        <script type="text/javascript" src="{{asset('admin/js/alternative/gift-control.js')}}"></script>
    @stop
