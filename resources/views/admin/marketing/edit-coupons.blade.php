@section('title')
Cupones de descuento
@stop
@extends('layouts.administrator')
	@section('css')
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="{{ asset('administrator/plugins/timepicker/css/bootstrap-datetimepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('components/admin/css/select2.css') }}">
	@stop
@section('content')
	 <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title">
                    <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/coupon.png')}}">&nbsp; Cupones
                </h4>
            </div>
            <div class="page-header-section">
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="{{url('admin')}}" style="color: #adadad;">Inicio</a></li>
                        <li><a href="#" style="color: #adadad;">Marketing</a></li>
                        <li class="active" style="color: orange;">Cupones de descuento</li>
                    </ol>
                </div>
            </div>
     </div>

        <div class="row">
            <div class="col-md-12">
                        <div class="panel-body">
                            <br><br>
                                <div class="row">
                                    <div class="col-md-12" id="modal1">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Editar Cupon {{$coupon->code}}</h4>
                                            </div>
                                            <div class="panel-body">
                                                {!! Form::open(['url' => 'admin/marketing/coupons/'.$coupon->uuid, 'data-toggle'=>'validator' , 'role'=>'form','method' => 'PUT' , 'files' => true,]) !!}
                                                <div class="form-group">
                                                    <label for="codigo_de_cupo">Codigo del cupon<p><sub><a  id="generate">Generar codigo</a></sub></p> </label>
                                                    <input type="text" class="form-control" value="{{$coupon->code}}" id="cod" name="discount[code]" required/>
                                                    <div class="help-block with-errors"></div>
                                                    <p class="help-block">Este es el codigo que deberan ingresar los clientes para recibir el beneficio.</p>
                                                    <hr>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tipo_descuento">Tipo Descuento</label>
                                                    <select class="form-control" id="type-2" name="discount[type]">
                                                        <option value="percentage">Porcentaje del total</option>
                                                        <option value="absolute">Monto fijo</option>
                                                        <option value="shipping">Envio gratis</option>
                                                    </select>
                                                    <hr>
                                                </div>
                                                <div class="form-group" >
                                                    <label for="porcentaje_descuento" id="shippingLabel">Porcentaje de Descuento</label>
                                                    <div class="input-group">
                                                        <span  class="input-group-addon" id="absolute-2">$</span>
                                                        <input type="number" id="shipping" class="form-control" value="{{$coupon->value}}" name="discount[value]" onkeypress="return justNumbers(event);"/>
                                                        <span class="input-group-addon" id="percentage-2">%</span>
                                                    </div>
                                                    <p class="help-block" style="height: 68px !important;">Es el monto de descuento que recibir&aacute;n tus clientes sobre el total de la compra (no se aplica sobre los costos de env&iacute;o).</p>
                                                </div>
                                                <div class="text-right vertical-center">
                                                    <a href="#" id="limit">Agregar Limitantes al Cup&oacute;n</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 " id="modal2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Limitancias del Cupon</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Limitar la disponibilidad por cantidad de usos:</label>
                                                        <div class="form-group">
                                                            <input id="0" type="radio" name="discount[limit_uses]" value="0">
                                                            <label for="0">Disponible siempre</label>
                                                        </div>
                                                        <div class="form-group" style="height: 38px">
                                                            <input id="1" type="radio" name="discount[limit_uses]" value="1"/>
                                                            <label for="1">Permitir hasta <strong id="4" class="hidden">
                                                                    <input type="text" class="inputFrom"  name="discount[max_uses]"> usos.</strong></label>
                                                        </div>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label>Limitar la disponibilidad por fecha:</label>
                                                        <div class="form-group">
                                                            <p><input type="radio" name="discount[limit_dates]" id="sinDate" value="0"/>
                                                                <label for="sinDate">Disponible siempre.</label></p>
                                                            <input type="radio" value="1" name="discount[limit_dates]" id="date">
                                                            <label for="date">Disponible desde:</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control hasDatepicker hidden col-sm-6" style="width: 50%" id="date-from" name="discount[start_date]" placeholder="Desde">
                                                                <input type="text" class="form-control hasDatepicker hidden col-sm-6" style="width: 50%" id="date-to" name="discount[end_date]" placeholder="Hasta">
                                                                <div class="col-sm-12"><hr></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Limitar segun contenido del carrito:</label>
                                                            <p><i class="fa fa-angle-right"></i>
                                                                S&oacute;lo si el valor de la compra es mayor a</p>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">$</span>
                                                                <input type="number" class="form-control" name="discount[restrictions][min_price]" onkeypress="return justNumbers(event);"/>
                                                            </div>
                                                            <hr>
                                                        </div>
                                                        @if(count($categories) > 0)
                                                            <div class="form-group media border-dotted">
                                                                <label>Limitar la disponibilidad por categoria:</label>
                                                                <p><i class="fa fa-angle-right"></i>
                                                                    Aplicar s&oacute;lo a productos de las categor&iacute;as</p>
                                                                {!! Form::select('discount[restrictions][categories][]',$categories,null,['style' => 'width:100%',
                                                                'class' => 'select2' , 'multiple' => 'multiple', 'id' => 'selectCategory']) !!}
                                                            </div>
                                                        @endif

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- button -->
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i> Guardar Cambios</button>
                                        <a type="button" href="{{url('/admin/marketing/coupons')}}" class="btn btn-default">
                                            <i class="fa fa-times"></i> Cancelar </a>
                                    </div>
                                </div>
                                <!-- end button-->
                        </div>
                    </div>
            </div>
    @endsection
	@section('scripts')
	<script type="text/javascript" src="{{asset('administrator/js/dataTables.min.js')}}"></script>
    <script src="{{ asset('administrator/plugins/timepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript">
		$(document).ready(function() {
			$('#tbl_cupones').DataTable();
            $('#percentage').show();
            $('#percentage-2').show();
            $('#absolute').hide();
            $('#absolute-2').hide();
            $('#type').on('change', function () {
               if($(this).val() == 'percentage'){
                    $('#percentage').show();
                    $('input[name=percentage]').val("");
                    $('input[name=discount]').val("");
                    $('#absolute').hide();
               }
                if($(this).val() == 'absolute'){
                    $('#percentage').hide();
                    $('input[name=percentage]').val("");
                    $('input[name=discount]').val("");
                    $('#absolute').show();
                }

                if($(this).val() == 'shipping'){
                    $('#percentage').hide();
                    $('input[name=percentage]').val("");
                    $('input[name=discount]').val("");
                    $('#absolute').hide();
                    $('#value').hide();
                }
            });
            $('#type-2').on('change', function () {
                if($(this).val() == 'percentage'){
                    $('#percentage-2').show();
                    $('input[name=percentage]').val("");
                    $('input[name=discount]').val("");
                    $('#absolute-2').hide();
                    $('#shippingLabel').show();
                    $('#shipping').show();
                }
                if($(this).val() == 'absolute'){
                    $('input[name=percentage]').val("");
                    $('input[name=discount]').val("");
                    $('#percentage-2').hide();
                    $('#absolute-2').show();
                    $('#shippingLabel').show();
                    $('#shipping').show();
                }

                if($(this).val() == 'shipping'){
                    $('input[name=percentage]').val("");
                    $('input[name=discount]').val("");
                    $('#percentage-2').hide();
                    $('#absolute-2').hide();
                    $('#shippingLabel').hide();
                    $('#shipping').hide();
                }
            });
            var meses = new Array ("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");
            var f =new Date();
            $('#generar').on('click',function(){
                $('input[name=code]').val("PROMO"+meses[f.getMonth()]);
            });
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
            $('#cupon_limitantes').on('shown.bs.collapse', function (e) {
                var offset = $('.panel.panel-default ').offset();
                if(offset) {
                    $('html,body').animate({
                        scrollTop: $('.panel-title').offset().top -20
                    }, 500);
                }
                $(window).ready(function(){
                    $("body").animate({ scrollTop: $(document).height()}, 1000);
                });
            });
        });
	</script>
    <script>
        $('#modal2').hide();
        $('#limit').on('click', function (e) {
            e.preventDefault();

            setTimeout(function(){  $('#modal2').slideDown(); }, 1000);
            $('#modal1').removeClass('col-md-12');
            $('#modal1').addClass('col-md-6',1000, "easeOutCirc");
            $('#limit').addClass('hidden');
        });
        $('#1').change(function() {
            if ($('#1').is(':checked')) {
                $('#4').removeClass('hidden');
            }
            $('#0').change(function() {
                if ($('#0').is(':checked')) {
                    $('#4').addClass('hidden');
                }
            });
        });

        $('#date').change(function(){
            if($('#date').is(':checked')){
                $('#date-from').removeClass('hidden');
                $('#date-to').removeClass('hidden');
            }
            $('#sinDate').change(function() {
                if ($('#sinDate').is(':checked')) {
                    $('#date-from').addClass('hidden');
                    $('#date-to').addClass('hidden');
                }
            });
        });
    </script>
        <!-- generar codigo para cupon -->
    <script>
        $('#generate').on('click',function(){
            var text = "";
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

            for( var i=0; i < 5; i++ )
                text += possible.charAt(Math.floor(Math.random() * possible.length));
            $("#cod").val(text);
        });
    </script>
	@stop