@section('title')
Editar cliente
@stop
@extends('layouts.administrator')
@section('css')
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
                    <li class="active">Edicion de {{ $customer->full_name }}</li>
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
                    {!! Form::model($customer, ['url' => ['admin/customers',$customer->uuid], 'method' => 'PUT' ]) !!}
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
                    $('#city_id').removeClass('hidden   ');
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
