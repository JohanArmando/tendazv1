@extends('layouts.administrator')
@section('title')
    Verifica tu dominio
@stop
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/payment-plan.css')}}">
@stop
    @section('content')
        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title semibold"><i class="fa fa-globe"></i>&nbsp; Dominio</h4>
            </div>
            <div class="page-header-section">
                <!--Toolbar-->
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="{{url('admin/home')}}" style="color: orange;">Inicio</a></li>
                        <li class="active"><a href="{{url('admin/setting/domain')}}" style="color: orange;">Dominios</a></li>
                        <li class="">{{ $domain->name }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <br>
        @include('admin.partials.message')
        <br>
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <h3>Detalles del dominio</h3>
                <p>Todo lo que necesitas saber sobre tu dominio.</p>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Dominio agregado {{ \Tendaz\components\DateGenerator::dateGenerate($domain->created_at) }}</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p align="justify">
                            Estado del dominio
                        </p>
                        <input type="hidden" id="uuid" value="{{ $domain->uuid }}">
                        <input type="hidden"  name="_token" value="{{ csrf_token() }}" id="token">
                        <input type="hidden"  name="status_domain" value="{{ $domain->state }}">
                        <p id="status_code"></p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@section('scripts')
    <script>
        $('#status_code').html('<h5>Verificando ...<h5>');
        var status = $('input[name=status_domain]').val();
        var id = "{{$domain->uuid}}";
        urlVerify = "{{url('admin/setting/domain/verify/')}}"+"/"+ id + '?client_secret='  + client_secret + '&client_id=' + client_id;
        if(status == '401'){
            url = urlVerify;
        }else if(status == 402){
            //aqui la url para verificcar ssl
            //falta url para verificar si el dominio expiro o no y cambiar el estado a expeirado
        }
        $(document).on('ready' , function () {
            var id = $('#uuid').val();
            var token = $('#token').val();
            $.ajax({
               'url' : urlVerify,
                'type' : 'POST',
                'dataType': 'json',
                'headers' : {'X-CSRF-TOKEN' : token},
                'success' : function (response) {
                    if(response){
                        $('#status_code').html();
                        if(response == 200){
                            var html = '<span class="label label-success">OK</span>'
                        }else if(response == 401){
                            var html = '<span class="label label-warning">Completar instalacion</span>'
                        }else if(response == 402){
                            var html = '<span class="label label-info">Certificado ssl requerido</span>';
                            alert('Aunque no tengas certificado ssl, puedes usar tu domminio');
                        }
                        $('#status_code').html(html);
                    }
                }
            });
        });
    </script>
@stop