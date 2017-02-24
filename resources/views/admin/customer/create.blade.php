@section('title')
Crear nuevo cliente
@stop
@extends('layouts.administrator')
@section('css')
    <link rel="stylesheet" href="{{asset('admin/plugins/jquery-ui/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/selectize/css/selectize.css')}}">
    <link rel="stylesheet" href="{{asset('admin')}}">
    <link rel="stylesheet" href="{{asset('admin/font-awesome/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/summernote/css/summernote.css')}}">
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
                    <li><a href="{{url('admin/home')}}" style="color: darkgrey;">Inicio</a></li>
                    <li><a href="{{ url('admin/customers')}}" style="color: orange;">Clientes</a></li>
                    <li class="active" style="color: orange;">Agregar cliente</li>
                </ol>
            </div>
            <!--/ Toolbar -->
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><strong>Registro de Clientes.</strong></h4>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="{{url('admin/customers')}}" method="post" data-parsley-validate data-toggle="validator" role="form">
                        <!--Este el formulario que tienes que darle la direccion action-->
                        @include('admin.partials.client.form')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h5><i class="ico-pencil"></i>&nbsp;<strong>Datos Adicionales</strong></h5>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Datos Adicionales"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar cliente</button>
                            <a href="{{url('admin/customers')}}" class="btn btn-default"><i class="fa fa-times"></i> Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div class="page-end-space"></div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{asset('admin/plugins/jquery-ui/js/jquery-ui.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/selectize/js/selectize.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/select2/js/select2.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/summernote/js/summernote.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/backend/forms/wysiwyg.js')}}"></script>
    <script>
        $('#country_id').on('change' , function () {
            $.ajax({
                'url' : apiUrl + '/countries/' + $('#country_id').val() +'/states?client_secret=' + client_secret + '&client_id=' + client_id,
                'dataType' : 'JSON',
                'method' : 'GET',
                headers : {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                'success' : function (response) {
                    $('#state_id').hide();
                    if (response.length > 0){
                        $('#state_id').show();
                        $('#state_id').find('option').remove().end();
                        $.each(response, function (i, item) {
                            $.each(item, function (i, v) {
                                console.log(v);
                                $('#state_id').append('<option value="' + v.id +'">' + v.name +'</option>')
                            });
                        });
                    }
                }
            })
        });

        $('#state_id').on('change' , function () {
            $.ajax({
                'url' : apiUrl + '/states/' + $('#state_id').val() +'/cities?client_secret=' + client_secret + '&client_id=' + client_id,
                'dataType' : 'JSON',
                'method' : 'GET',
                headers : {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                'success' : function (response) {
                    $('#city_id').removeClass('hidden');
                    $('#city_id').find('option').remove().end();
                    $.each(response, function (i, item) {
                        $.each(item, function (i, v) {
                            $('#city_id').append('<option value="' + v.id +'">' + v.name +'</option>')
                        });
                    });
                }
            })
        });
    </script>
@stop
