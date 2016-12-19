@extends('admin.template')
    @section('css')
        <link rel="stylesheet" href="{{ asset('admin/plugins/timepicker/css/bootstrap-datetimepicker.min.css') }}">
    @stop
    @section('content')
        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title">
                    <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/rich.png')}}">&nbsp; Exportar mis ventas 
                </h4>
            </div>
            <div class="page-header-section">
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="{{url('admin/home')}}" style="color: darkgrey;">Inicio</a></li>
                        <li><a href="{{ url('admin/orders') }}" style="color: orange;">Ventas</a></li>
                        <li class="active" style="color: orange;">Exportar Ventas</li>
                    </ol>
                </div>
            </div>
        </div>
        <div style="margin-bottom: 50px !important;"></div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h5><i class="glyphicon glyphicon-cloud-download"></i>&nbsp; <strong>Descargar lista de Ventas.</strong>
                                <a  class="pull-right" href="{{url('admin/orders')}}">
                                    <i class="fa fa-times"></i>
                                </a>
                            </h5>
                        </div>
                    </div>
                    <div class="panel-body" >
                       
                        <div class="collapse col-sm-12 col-md-12 col-lg-12" id="filtros" style="margin: 5% !important;">
                            <div class="container">
                                <div  class="row well" style="max-width: 500px">

                                    <div class="col-md-12 col-sm-12" style="margin-bottom: 10px">
                                        <label>Filtrar por dato especifico</label>
                                    <input type="text" class="form-control" name="q" id="filter-q" placeholder="Filtrar por numero de orden, nombre, email de cliente o valor exacto de la compra">
                                    </div>
                                        <div class="col-md-6 col-lg-12 col-sm-12">
                                        <label>Estado de la orden</label>
                                        <select class="form-control" name="state" id="state">
                                            <option value="" disabled>Estado de la orden</option>
                                            <option selected value="all">Todas</option>
                                            <option value="open">Todas(salvo archivadas y canceladas)</option>
                                            <option value="archivada">Archivadas</option>
                                            <option value="cancelar">Canceladas</option>
                                            <option value="wait">Esperando confirmacion de pago</option>
                                            <option value="pagada">Esperando que empaquetes la orden</option>
                                            <option value="empaquetar">Esperando confirmacion de envio</option>
                                            <option value="retirado">Listas para archivar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Rango de fechas</label>
                                        <select class="form-control" name="range-date" id="range-date">
                                            <option disabled value="" selected>Rango de fechas</option>
                                            <option value="all" selected>Todas las fechas</option>
                                            <option value="last">Ultimo dia</option>
                                            <option value="eight">Ultimo 7 dias</option>
                                            <option value="month">Ultimo 30 dias</option>
                                            <option value="custom">Rango Personalizado</option>
                                        </select>
                                    </div>
                                    <div class="row" style="margin-top: 10%" id="range">
                                        <div class="col-md-3 pull-right ">
                                                <label for="">Hasta</label>
                                                <input type="text" style="" class="form-control " id="date-to">
                                        </div>
                                        <div class="col-md-3 pull-right ">
                                            <label for="">Desde</label>
                                            <input type="text"  style="" class="form-control " id="date-from">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="#">
                            <div class="col-md-6">
                            <p class="help-block" align="justify">
                               Esta operacion nos permite descargar la lista de las ventas que se han registrado en la base de datos,
                                te damos la opcion de poder filtar cada una de las ventas, por estados de las ordenes, por rango de fechas.
                                <strong>Tener en cuenta el sistema operativos con que frecuencia usas para que tu archivo sea legible en
                                    cualquier ordenado.</strong>
                            </p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="radio" name="so" id="so" value="windows" checked>
                                    <label for="">Descargar para Windows</label>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="so" id="so" value="Mac">
                                    <label for="">Descargar para Mac</label>
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-default" href="#filtros" data-toggle="collapse" role="button" aira-expanded="false"
                                       aira-controls="collapseExample" style="background-color: #3C3C3C; color: white">
                                        <i class="fa fa-pencil"></i> Editar filtros</a>
                                <button type="button" class="btn btn-primary"  id="download"><i class="glyphicon glyphicon-cloud-download"
                                  id="icon"></i><i id="gif-download" class="fa fa-cog fa-spin"></i>
                                    <div id="find" style="display: inline;"> Descargar</div>
                                </button>
                                </div>
                            </div>
                            <div style="margin-bottom: 20px;"></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
        <input type="hidden" value="{{ url('admin/export/orders') }}" id="route-export-order">
        <input type="hidden" value="{{ csrf_token() }}" id="token-route">
    @endsection
@section('scripts')
    <script>
        $(document).on('ready', function () {
            $('#range').hide();
           $('#range-date').on('change', function () {
                if($(this).val()=='custom'){
                    $('#range').show();
                }else{
                    $('#range').hide();
                }
           });
        });
    </script>
    <script src="{{ asset('admin/plugins/timepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $('#date-from').datetimepicker({
                viewMode: 'years',
                format: 'DD/MM/YYYY'
            });
            $('#date-to').datetimepicker({
                viewMode: 'years',
                format: 'DD/MM/YYYY',
                useCurrent: false
            });
            $("#date-from").on("dp.change", function (e) {
                $('#date-to').data("DateTimePicker").minDate(e.date);
            });
            $("#date-to").on("dp.change", function (e) {
                $('#date-from').data("DateTimePicker").maxDate(e.date);
            });
        });
    </script>
    <script>
        $(document).on('ready', function () {
            $('#gif-download').hide();
            $('#download').on('click', function (e) {
                e.preventDefault();
                var  route =  $('#route-export-order').val();
                var token = $('#token-route').val();
                var q = $('#filter-q').val();
                var date = $('#range-date').val();
                var state = $('#state').val();
                var so = $('input[name=so]:checked').val();
                if(date == 'custom'){
                    var from = $('#date-from').val();
                    var to = $('#date-to').val();
                    var data = {'filter' :  q , 'state' : state , 'date' : date , 'from':from , 'to' : to , 'so' : so};
                }else{
                    var data = {'filter' :  q , 'state' : state , 'date' : date , 'so' : so};
                }
                $.ajax({
                    'url': route,
                    'type' : 'POST',
                    'dataType' :'json',
                    'headers' : {'X-CSRF-TOKEN':token},
                    'data' : data,
                    beforeSend: function () {
                        $('#gif-download').show();
                        $('#icon').hide();
                        $('#download').attr('disabled' , true);
                        $('#find').text('Descargando');
                        $('#cancelar').attr('disabled' , true);
                    },
                    success:function(response){
                        $(this).show();
                        $('#cancelar').attr('disabled' , false);
                        $('#download').attr('disabled' , false);
                        $('#find').text('Descargar');
                        $('#gif-download').hide();
                        $('#icon').show();
                        $('#download').show();
                        var path = response.path;
                        location.href = path;
                    }
                });
            });
        });
    </script>
@stop