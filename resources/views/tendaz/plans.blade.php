@extends('layouts.tendaz')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/css/plans-account2.css')}}">
@stop
@section('content')
<div class="container" style="width: 100%; background-color: #f7f7f7;">
    <section class="text-center heading-description">
        <h1>Nuestros planes</h1>
        <p class="MainByline">
            Sin obligaciones. Cambia de plan en cualquier momento. Incrementa tus ganancias!
        </p>
    </section>
    <section>
        <div class="row">
            <div class="col-md-3 col-md-offset-3"></div>
            <div class="col-md-4">
                <div class="col-md-6 col-xs-6 space">
                    <span class="name">Plan Estadar</span>
                    <span class="price">USD $25</span>
                </div>
                <div class="col-md-6 col-xs-6 space">
                    <span class="name">Plan Avanzado</span>
                    <span class="price">USD $40</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE INICIO</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Resumen de ventas plan de ventas.</p>
                <p>Plan de ordenes.</p>
                <p>Ordenes pendientes.</p>
                <p>Todas las ordenes.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE PRODUCTOS</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Cargue de productos ilimitados.</p>
                <p>Creacion de categorias ilimitadas.</p>
                <p>Importaci&oacute;n y exportaci&oacute;n masiva de productos.</p>
                <p>Variantes por articulo, talla, color entre otras.</p>
                <p>Publicaci&oacute;n de cupones.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE VENTAS</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Ordenes de pedido(fecha,total,comprador).</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE ClIENTES</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Administraci&oacute;n de clientes(total consumido).</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE MARKETING</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Inicio de sesion con redes sociales.</p>
                <p>Cupones de descuento.</p>
                <p>Email marketing.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE DISE&Ntilde;O</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Selecci&oacute;n m&uacute;ltiples templates.</p>
                <p>Cambiar logo.</p>
                <p>P&aacute;gina en construcci&oacute;n.</p>
                <p>Dise&ntilde;o responsivo.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-xs-6 col-md-offset-3 items"></div>
            <div class="col-md-2 col-xs-3 text-center items">
                @foreach($plans as $plan)
                    @if($plan->id == 2)
                         <button rel="{{$plan->uuid}}" class="btn btn-primary paymetUuid">Comprar Estandar</button>
                    @endif
                @endforeach
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                @foreach($plans as $plan)
                    @if($plan->id == 3)
                        <button rel="{{$plan->uuid}}" class="btn btn-primary paymetUuid">Comprar Avanzado</button>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE CONFIGURACI&Oacute;N</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Pasarelas de pago(mercadopago o personalizada).</p>
                <p>Envios a trav&eacute;s de servientrega.</p>
                <p>Subdomio gratis de Tendaz.com.</p>
                <p>Integraci&oacute;n con mercadolibre.</p>
                <p>SEO avanzado (url personalizada).</p>
                <p>Configuraci&oacute;n de redes sociales.</p>
                <p>Cont&aacute;ctanos del cliente.</p>
                <p>Multiples dominios.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-times" style="color: red"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>


        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE ESTAD&Iacute;STICAS</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Estadisticas avanzadas.</p>
                <p>Producto con mayor facturaci&oacute;n.</p>
                <p>Productos m&aacute;s vendidos.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-times" style="color: red"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>BUSINESS INTELLIGENT</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>An&aacute;lisis de tendencias, clientes y envio de emails con
                    promociones dependiendo las busquedas que realice el cliente
                    en el sitio.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-times" style="color: red"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>APLICATIVO MOVIL PARA SU TIENDA</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>App movil de tienda.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-times" style="color: red"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-md-offset-3 item-principal">
                <p>M&Oacute;DULO DE HERRAMIENTAS Y AYUDA</p>
            </div>
            <div class="col-md-3 col-xs-6 col-md-offset-3 items">
                <p>Temas generales.</p>
                <p>Temas especificos con manuales.</p>
                <p>Chat de soporte.</p>
                <p>Vista de foros.</p>
                <p>Contacto de soporte.</p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
                <p><i class="fa fa-check"></i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-xs-6 col-md-offset-3 items"></div>
            <div class="col-md-2 col-xs-3 text-center items">
                @foreach($plans as $plan)
                    @if($plan->id == 2)
                        <button rel="{{$plan->uuid}}" class="btn btn-primary paymetUuid">Comprar Estandar</button>
                    @endif
                @endforeach
            </div>
            <div class="col-md-2 col-xs-3 text-center items">
                @foreach($plans as $plan)
                    @if($plan->id == 3)
                        <button rel="{{$plan->uuid}}" class="btn btn-primary paymetUuid">Comprar Avanzado</button>
                    @endif
                @endforeach
            </div>
        </div>

    </section>
    <section id="plans" class="hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    @foreach($plans as $plan)
                    <div class="col-md-4  text-center {{ $plan->main == 1 ? 'active_plan':'' }}" style="padding-left: 0px !important; padding-right: 0px !important;">
                        <div id="plan-1" class="panel-pricing {{ $plan->main == 1 ? 'shadow_plan':'' }}">
                            <div class="panel-heading">
                                <div class="panel-body text-center" style="font-size: 18px">
                                     <h3>
                                         <img src="" style="max-height: 32px; margin-top: -2%" >
                                         {{$plan->name}}
                                     </h3>
                                     <h1>${{ number_format($plan->price ) }} USD</h1>
                                      Por mes
                                      <br>
                                      <br>
                                      <a  class="btn btn-primary" href="{{ url("/") }}">
                                            Registrate
                                      </a>
                                 </div>
                                <br>
                                <br>
                                <ul class="text-left">
                                    <br>
                                    <br>
                                    @foreach(explode('***', $plan->description ) AS $keyplan)
                                      <li>{!!$keyplan!!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
    @include('tendaz.partials.modalPaymentPlan')
@endsection
@section('script')
    <script src="{{asset('administrator/js/payform.js')}}"></script>
    <script type="text/javascript" src="https://www.2checkout.com/checkout/api/2co.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.2.0/vue-resource.js"></script>
    <script>
        $(document).on('ready' , function () {
            var price = $(".choose-period").find(".selection").data('price');
            $('#enviar').html('Pagar Plan');
            $('.paymetUuid').click(function (){
                $('#myModalPlan').modal('show');
                $('#plan').val($(this).attr('rel'));
            });

            disabledButton()

            /*validateform('#name');
             validateform('#email');
             validateform('#city');
             validateform('#country');
             validateform('#state');
             validateform('#zipCode');
             validateform('#addrLine1');
             */
            $('#card').payform('formatCardNumber');
            $('#expiry').payform('formatCardExpiry');


            $('#card').keyup(function () {
                var val =  $(this).val();

                if ($.payform.validateCardNumber(val)){
                    $(this).parent().addClass('has-success').removeClass('has-error');
                    $(this).parent().find('span.glyphicon-remove').addClass('hidden');
                    $(this).parent().find('span.glyphicon-ok').removeClass('hidden');
                }else{
                    $(this).parent().addClass('has-error');
                    $(this).parent().find('span.glyphicon-remove').removeClass('hidden');
                    $(this).parent().find('span.glyphicon-ok').addClass('hidden');
                }

                if ($.payform.parseCardType( val ) != null) {
                    $('#type-card').html("<strong>" + $.payform.parseCardType( val ) + "</strong>")
                }
                disabledButton();
            });

            $('#expiry').keyup(function () {
                var val =  $(this).val().split('/');
                var month = val[0];
                var year = val[1];
                if ($.payform.validateCardExpiry(month , year)){
                    $(this).parent().addClass('has-success').removeClass('has-error');
                    $(this).parent().find('span.glyphicon-remove').addClass('hidden');
                    $(this).parent().find('span.glyphicon-ok').removeClass('hidden');
                }else{
                    $(this).parent().addClass('has-error');
                    $(this).parent().find('span.glyphicon-remove').removeClass('hidden');
                    $(this).parent().find('span.glyphicon-ok').addClass('hidden');
                }
                disabledButton();
            });

            $('#cvc').keyup(function () {
                var val =  $(this).val();
                if ($.payform.validateCardCVC(val)){
                    $(this).parent().addClass('has-success').removeClass('has-error');
                    $(this).parent().find('span.glyphicon-remove').addClass('hidden');
                    $(this).parent().find('span.glyphicon-ok').removeClass('hidden');
                }else{
                    $(this).parent().addClass('has-error');
                    $(this).parent().find('span.glyphicon-remove').removeClass('hidden');
                    $(this).parent().find('span.glyphicon-ok').addClass('hidden');
                }
                disabledButton();
            });

            $('#name').keyup(function () {
                var val =  $(this).val();
                validateform(this);

            });
            $('#email').keyup(function () {
                var val =  $(this).val();
                validateform(this);

            });

            $('#city').keyup(function () {
                var val =  $(this).val();
                validateform(this);

            });

            $('#country').keyup(function () {
                var val =  $(this).val();
                validateform(this);

            });

            $('#state').keyup(function () {
                validateform(this);
            });

            $('#zipCode').keyup(function () {
                validateform(this);
            });

            $('#addrLine1').keyup(function () {
                validateform(this);
            });


        });

        function validateform(val) {
            var value =  $(val).val();

            if (value != ''){
                $(val).parent().addClass('has-success').removeClass('has-error');
                $(val).parent().find('span.glyphicon-remove').addClass('hidden');
                $(val).parent().find('span.glyphicon-ok').removeClass('hidden');
            }else{
                $(val).parent().addClass('has-error');
                $(val).parent().find('span.glyphicon-remove').removeClass('hidden');
                $(val).parent().find('span.glyphicon-ok').addClass('hidden');
            }
            disabledButton();
        }

        function disabledButton() {
            if ($.payform.validateCardCVC($('#cvc').val())
                    && $.payform.validateCardExpiry( $('#expiry').val().split('/')[0] , $('#expiry').val().split('/')[1])
                    && $.payform.validateCardNumber(  $('#card').val() )
                    && ($('#state').val() != '')
                    && ($('#name').val() != '')
                    && ($('#country').val() != '')
                    && ($('#zipCode').val() != '')
                    && ($('#email').val() != ''))
            {
                $('#enviar').attr('disabled' , false);
            }else{
                $('#enviar').attr('disabled' , true);
            }
        }

        var successCallback = function(data) {
            var myForm = document.getElementById('formCardPayment');
            //alert(data.response.token.token);
            myForm.token.value = data.response.token.token;
            //console.log(myForm.token.value);
            myForm.submit();
        };

        var errorCallback = function(data) {
            if (data.errorCode === 200) {
            } else {
                alert(data.errorMsg);
            }
        };

        var tokenRequest = function() {
            var args = {
                sellerId: "{{ env('SELLER_ID_TWO') }}",
                publishableKey: "{{ env('PUBLIC_KEY_TWO') }}",
                ccNo: $("#card").val(),
                cvv: $("#cvc").val(),
                expMonth: $("#expiry").val().split('/')[0].trim(),
                expYear: $("#expiry").val().split('/')[1].trim()
                /*ccNo: '4000000000000002',
                 cvv: '123',
                 expMonth: '02',
                 expYear:'20'*/
            };
            console.log(args);
            TCO.requestToken(successCallback, errorCallback, args);
        };

        $(function() {

            TCO.loadPubKey( @if (env('SANBOX_TWO',false)) 'sandbox' @else 'production' @endif );
            $("#enviar").click(function(e) {
                $("#enviar").button('loading');
                tokenRequest();
                return false;
            });
        });

    </script>
@endsection


