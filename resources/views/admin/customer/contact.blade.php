@section('title')
    Mis consultas
@stop
@extends('layouts.administrator')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/alternative/count-note.css')}}">
@endsection
@section('content')
    <input type="hidden" id="url-contact-unread" value="{{ url('in/contact/unread') }}">
    <input type="hidden" id="url-contact-read" value="{{ url('admin/contact/read') }}">
    <input type="hidden" id="url-contact-delete" value="{{ url('admin/contact/delete') }}">
    <input type="hidden" id="token-contact" value="{{ csrf_token() }}">
    <input type="hidden" id="basic-url" value="{{ url('/') }}">
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title semibold">
                <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/theme.png')}}">&nbsp; Mis Consultas
            </h4>
        </div>
        <div class="page-header-section">
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{ url('admin') }}" style="color: darkgrey;">Inicio</a></li>
                    <li><a href="{{ url('admin/customers') }}" style="color: orange;">Clientes</a></li>
                    <li class="active">Mis consultas</li>
                </ol>
            </div>
        </div>
    </div>
    @if(count($contacts) >=1 )
        <div class="row" >
            <div class="col-md-12" id="contact-main">
                <div class="panel panel-default" id="toolbar-showcase">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="panel-icon mr5">
                                <i class="fa fa-envelope"></i></span> Mensajes de Clientes
                        </h3>
                    </div>
                    <div class="panel-toolbar-wrapper pl10 pr10 pt5 pb5">
                        <div class="panel-toolbar hide" id="toolbar-toshow">
                            <button class="btn btn-sm btn-danger" type="button"><i class="ico-remove3"></i></button>
                            <div class="btn-group">
                            </div>
                        </div>
                        <div class="panel-toolbar text-rigth">
                            <div class="col-sm-6 hidden">
                                <select id="contact-select" name="action" class="form-control">
                                    <option value="" selected="selected">Seleccionar acción...</option>
                                    <option value="read" class="indent">Marcar como leído</option>
                                    <option value="unread" class="indent">Marcar como no leído</option>
                                    <option value="delete" class="indent">Eliminar</option>
                                </select>
                            </div>
                            <span id="contact-count" class="note count"></span>
                        </div>
                    </div>
                    <div class="table-responsive" style="padding: 10px 10px 10px 10px;">
                        <table class="table table-bordered table-hover" id="contactTable">
                            <thead>
                            <tr>
                                <th width="3%" class="text-center hidden">
                                    <div title="" class="checkbox custom-checkbox pull-left" data-original-title="Check all" data-toggle="tooltip" data-placement="right">
                                        <input id="customcheckbox-two0"  type="checkbox" value="1" >
                                        <label for="customcheckbox-two0"></label>
                                    </div>
                                </th>

                                <th width="10%">Fecha</th>
                                <th>Cliente</th>
                                <th width="8%">Email</th>
                                <th width="10%">Telefono</th>
                                <th>Mensaje</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr @if($contact->message == '') class="success" @endif>
                                    <td class="hidden">
                                        <div class="checkbox custom-checkbox nm">
                                            <input  id="{{ $contact->id }}" onclick="elementos()" type="checkbox" value="{{ $contact->id }}" data-toggle="selectrow" data-target="tr" data-contextual="info">
                                            <label for="{{ $contact->id  }}"></label>
                                        </div>
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($contact->created_at)->format('d/m/Y') }}</td>
                                    <td><a href="{{ url('admin/customers') }}">{{ $contact->customer->full_name }}</a></td>
                                    <td>{{ $contact->customer->email }}</td>
                                    <td>{{ $contact->customer->phone }}</td>
                                    <td>
                                        <p>{{ $contact->message }}</p>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="alert alert-dismissable alert-info" style="margin: 2% 10% 0% 10%" id="contact-notify">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4>Tus clientes a&uacute;n no se han contactado contigo.</h4>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-12">
                <div class="widget panel text-center">
                    <blockquote>
                        <p>No tienes ninguna consulta pendiente aún.</p>
                    </blockquote>
                </div>
            </div>
        </div>
    @endif
    <div class="page-end-space"></div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('components/admin/js/contact.js') }}"></script>
@stop