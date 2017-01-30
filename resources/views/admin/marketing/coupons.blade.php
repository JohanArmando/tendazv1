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

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <a href="#" data-toggle="collapse" aria-expanded="true" id="scroll" aria-controls="cupon_limitantes" data-target="#cupon_limitantes">
                            <i class="fa fa-plus"></i> Agregar Cup&oacute;n</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-envelope"></i> Gestiona aqu&iacute; los cupones de descuentos.</h3>
                        </div>

                        <div class="panel-body">
                            <br><br>
                            <div class="table-responsive">
                            <table id="melopelaTable" class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th><strong>Codigo</strong></th>
                                        <th>Descuento</th>
                                        <th>Limite de uso</th>
                                        <th>Limite de fecha</th>
                                        <th>Otros limites</th>
                                        <th colspan="2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($coupons as $coupon)
                                    <tr>
                                        <td>{{ $coupon->code }}</td>
                                        <td>
                                            @if($coupon->type == 'shipping')
                                                Envio gratis
                                            @endif
                                            @if($coupon->type == 'percentage')
                                                {{ number_format($coupon->value,2) }}%
                                            @endif
                                            @if($coupon->type == 'absolute')
                                                $ {{ number_format($coupon->value,2) }}
                                            @endif
                                        </td>
                                        <td>
                                            @if(!$coupon->limit_uses)
                                                Sin limites
                                            @else
                                                {{ $coupon->max_uses }}
                                            @endif
                                        </td>
                                        <td>
                                            @if(!$coupon->limit_dates)
                                                Disponible siempre
                                            @else
                                                {{ $coupon->start_date  ?  'Desde :'.$coupon->start_date :'Siempre' }} {{ $coupon->end_date ? 'Hasta :'.$coupon->end_date  :'Siempre'}}
                                            @endif
                                        </td>
                                        <td>
                                            {{ $coupon->restrictions->min_price ? 'Precio minimo por compra :'.$coupon->restrictions->min_price : '' }}
                                        </td>
                                        <td>
                                            {!! Form::open(['url' => ['admin/marketing/coupons/'.$coupon->uuid] ,'method'=> 'DELETE' ]) !!}
                                            <button onclick="return confirm('Seguro que deseas eliminar este cupon?')"
                                                    class="eliminar btn btn-danger" data-id="{{ $coupon->uuid }}"><i class="fa fa-trash-o"></i></button>
                                            {!! Form::close() !!}
                                        </td>
                                        <td>
                                            @if($coupon->available == 0)
                                                <a class="btn btn-success" href="{{ url("admin/marketing/coupons/$coupon->uuid") }}" data-toggle="tooltip" data-placement="top" title="Activar"><i class="fa fa-eye"></i></a>
                                            @else
                                                <a data-toggle="tooltip" data-placement="top" title="Desactivar"  href="{{ url("admin/marketing/coupons/$coupon->uuid") }}" class="btn btn-tendaz" style="background-color: lightgrey;border:1px solid lightgrey"><i class="fa fa-eye-slash"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                @include('admin.partials.marketing.gift.collapse-gift-advanced')

            </div>
            <div class="page-end-space"></div>
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