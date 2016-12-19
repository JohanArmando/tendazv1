@section('title')
Editar cliente
@stop
@extends('admin.template')
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
                    <li><a href="{{ url('admin/customers') }}" style="color: orange;">Clientes</a></li>
                    <li class="active">Edicion de {{ $data->full_name }}</li>
                </ol>
            </div>
            <!--/ Toolbar -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><strong>Edicion de Clientes.</strong></h4>
                    </div>
                </div>
                <div class="panel-body">
                    {!! Form::model($data, ['url' => ['admin/customers',$data ->id], 'method' => 'PUT' ]) !!}
                    @include('admin.partials.client.form')
                    <div class="col-md-12">

                        <button type="submit" class="btn btn-primary">Editar  cliente</button>
                        <a class="btn btn-default" href="{{ url('admin/customers') }}"> <i class="fa fa-times"></i> Cancelar</a>
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
    <script type="text/javascript" src="{{asset('admin/plugins/jquery-ui/js/jquery-ui.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/selectize/js/selectize.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/select2/js/select2.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/backend/forms/element.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/summernote/js/summernote.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/backend/forms/wysiwyg.js')}}"></script>
@stop
