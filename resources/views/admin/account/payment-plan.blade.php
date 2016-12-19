@extends('admin.template')
@section('css')
    <link rel="stylesheet" href="{{ asset('administrator/css/custom_tendaz.css') }}">
@stop
@section('content')
igina
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title semibold"><i class="fa fa-money"></i>&nbsp;Pagar mi plan</h4>
        </div>
        <div class="page-header-section">
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li>
                        <a href="{{url('admin/home')}}" style="color: grey;">Mi cuenta</a>
                    </li>
                    <li class="tendaz">Pagar mi plan</li>
                </ol>
            </div>
        </div>
    </div>

    @include('admin.partials.message')
    <div class="row checkout">
        @if(!Auth::client()->get()->onTrial() && !Auth::client()->get()->isSubscriber() )
            <p style="margin-left: 15px">
                <span class="label label-warning">Tu tienda esta vencida {{ str_replace('termino' , '' , \Carbon\Carbon::parse(Auth::client()->get()->originalSubscription->first()->trial_ends_at)->diffForHumans()) }}</span>
            </p>
        @endif
        @if(isset($payment) && $payment->plan_id == $subscription->plan->id )
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading tendaz-panel-heading">
                        <h3 class="panel-title">Detalle del pago</h3>
                    </div>
                    <div class="panel-body">
                        <p class="text-left">
                            Plan:
                            <strong>{{ $plan->name }}</strong>
                        </p>
                        <a href="{{ url('administrator') }}" class="a-tendaz">Cambiar plan</a>
                        <hr>
                        <p>Per&iacute;odo: <strong>1 mes</strong> </p>
                        <p>Elegiste: <strong>{{ $payment->payment_getaway  }}</strong></p>
                        <p><a class="a-tendaz" href="{{ url('admin/account/plan/checkout/start/') }}">Cambiar per&iacute;odo o medio de pago</a></p>
                        <hr>
                        <h4 class="text-left">Valor: <strong class="tendaz">$ {{ number_format(($payment->subscription->duration * $payment->plan->price) ) }} USD</strong></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading tendaz-panel-heading">
                        <h3 class="panel-title">Estado de tu pago</h3>
                    </div>
                    <div class="panel-body">
                        <div class="gateway-specific text-center">
                            <div class="alert alert-{{ $payment->status == 'confirmed' ? 'info' : 'warning'}} admin" role="alert">
                                @if($payment->status == 'confirmed')
                                    <p><i class="fa fa-check-circle"></i> Tu pago ya fue acreditado.</p>
                                    <p>Suscripci&oacute;n activa  hasta {{  str_replace('Termina' , '' , \Carbon\Carbon::parse($payment->subscription->Subscription_end_timestamp)->addDays(5)->diffForHumans()) }}</p>
                                @else
                                    <p><i class="fa fa-exclamation-triangle"></i> Tu pago a&uacute;n no fue acreditado.</p>
                                @endif
                            </div>
                            <div class="text-center" style="{{ $payment->status == 'confirmed' ? 'display:none' : '' }}">
                                <a href="#" id="{{ $payment->payment_getaway == 'bank_transfer'? 'transfer' : $payment->payment_getaway}}_relaunch"
                                   data-method="{{ $payment->payment_getaway }}"
                                   data-payment="{{ $payment->uuid }}"
                                   class="btn btn-primary admin">
                                    Generar otro pago
                                    <i class="fa fa-spinner fa-spin fa-fw margin-bottom hidden"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading tendaz-panel-heading">
                        <h3 class="panel-title">Detalle del pago</h3>
                    </div>
                    <div class="panel-body">
                        <p class="text-left">
                            Plan:
                            <strong>{{ $plan->name }}</strong>
                        </p>
                        <a href="{{ url('admin/account/plans') }}" class="a-tendaz">Cambiar plan</a>
                        <hr>
                        <h4 class="text-left">Valor mensual: <strong class="tendaz">$ {{ number_format($plan->price) , 0 , '' , '.' }}</strong></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading tendaz-panel-heading">
                        <h3 class="panel-title">Selecciona un medio de pago y un per&iacute;odo</h3>
                    </div>
                    <div class="panel panel-body">
                        <div id="choose-method" class="step choose-method">
                            <div>
                                @include('admin.partials.account.payment.tab-payment')
                                <div class="tab-content responsive hidden-xs hidden-sm">
                                    <div role="tabpanel" class="tab-pane active" id="cc">
                                        <div class="panel panel-default cc panel-method">

                                            @include('admin.partials.account.payment.cc-payment')

                                        </div>
                                    </div>
                                    <div role="tabpanel" id="transfer" class="tab-pane">
                                        <div class="panel panel-default transfer panel-method">

                                            @include('admin.partials.account.payment.transfer-payment')

                                        </div>
                                    </div>
                                    <div role="tabpanel" id="ticket" class="tab-pane">
                                        <div class="panel panel-default ticket panel-method">

                                            @include('admin.partials.account.payment.ticket-payment')

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

@endsection
@section('scripts')
    <script>
        function setText(confirm_form_container, period, credit_until, recurring){
            var text = ":num meses (hasta el :date)";
            if (recurring) {
                if (period == 1) {
                    text = "1 mes (hasta el :date). Luego se realizar&aacute; un d&eacute;bito autom&aacute;tico mensual que puedes cancelar en cualquier momento desde este administrador.";
                } else if (period == 3) {
                    text = "3 meses (hasta el :date). Luego se realizar&aacute; un d&eacute;bito autom&aacute;tico una vez cada 3 meses que puedes cancelar en cualquier momento desde este administrador.";
                }
            }
            confirm_form_container.find(".confirm-period").html(text.replace(':num', period).replace(':date', credit_until));
            confirm_form_container.find('.checkout-confirm').children().show();
            confirm_form_container.find('.confirm_button').prop('disabled', false);
        }
        $(document).on('ready' , function () {
            $.getJSON("https://api.ipify.org?format=jsonp&callback=?",function(){
            }).success(function(json){
                $.getJSON( "https://freegeoip.net/json/"+json.ip, function(data) {
                }).done(function(response){
                    $('#submit_form-ticket').append($('<input>').attr('type','hidden').attr('name','country').attr('value',response.country_code));
                    $('#submit_form-transfer').append($('<input>').attr('type','hidden').attr('name','country').attr('value',response.country_code));
                });
            });
            var $choose_method = $("#choose-method");
            var $confirm_button_cc = $("#confirm_button-cc");
            $(".choose-period").find(".selection").click(function(){
                var $this = $(this);
                //escoge el parent de dicho div
                var $panel = $this.closest('.panel-method');
                var period = $this.data('period');
                var installments = $this.data('installments');

                $panel.find(".selection").removeClass('selected');
                $this.addClass('selected');

                $panel.find("input.input_period").val(period);
                $panel.find("input.input_installments").val(installments);

                //This give feedback of the method selected
                $choose_method.find(".method-selected").removeClass('method-selected');
                $panel.addClass('method-selected');


                //This shows the correct app information
                if ($panel.find('.selected').hasClass('has-one-time-discount')){
                    $confirm_button_cc.removeClass('btn-primary').addClass('btn-success');
                    $confirm_button_cc.find('.one-time-in-button').show();
                    // get discount number
                    var discount_number = $('.selected .has_discount').text().match(/\d+/);
                    $confirm_button_cc.find('.savings').text(discount_number + '%');
                } else {
                    $confirm_button_cc.removeClass('btn-success').addClass('btn-default-tendaz');
                    $confirm_button_cc.find('.one-time-in-button').hide();
                }


                //This change button color and text for discounts
                $apps_monthly = $('#apps').find('.monthly');
                if ($panel.find(':selected').hasClass('selected')){
                    $apps_monthly.hide();
                } else {
                    $apps_monthly.show();
                }
                setText($panel.find(".confirm"), period, moment().add(period, 'months').calendar(), $this.hasClass('recurring'));
                return false;
            });

            // Simulate a click on selected options on startup
            $(".selected").click();
            // go to pay with MP
            $confirm_button_cc.click(function(){
                var $this = $(this);
                $this.addClass('disabled').find('.fa-spin').show();
                var method = $this.data('method');
                var $panel = $this.closest('.panel-method');
                var recurring = $panel.find(".selected").hasClass('recurring');
                if(recurring) {
                    callbacks.mp_recurring.call();
                } else {
                    callbacks.mp_onetimer.call();
                }
                return false;
            });
            // go to pay with Transfer
            $("#confirm_button-transfer").click(function(){
                $(this).addClass('disabled').find('.fa-spin').show();
                callbacks.transfer.call();
                return false;
            });
            // go to pay with Boleto-pagofacil-ticket
            $("#confirm_button-ticket").click(function(){
                $(this).addClass('disabled').find('.fa-spin').show();
                callbacks.ticket.call();
                return false;
            });

        });
        callbacks = {};
        callbacks.mp_recurring = function(){
            function addFormFields(form, data) {
                if (data != null) {
                    $.each(data, function (name, value) {
                        if (value != null) {
                            var input = $("<input />").attr("type", "hidden").attr("name", name).val(value);
                            form.append(input);
                        }
                    });
                }
            };
            $.post(BASEURL + "/admin/account/plans/generate/recurring/" , $('#submit_form-cc').serialize() ,function (response) {
                if(response == 401){
                    alert('Ha ocurrido un error con tu plan.POr favor recarga tu pagina');
                }
                $.getJSON("https://api.ipify.org?format=jsonp&callback=?",function(){
                }).success(function(json){
                    $.getJSON( "https://freegeoip.net/json/"+json.ip, function(data) {
                    }).done(function(API) {
                                data  = {
                                    "sid" : response.sid,
                                    "x_receipt_user" : response.user ,
                                    "x_receipt_plan" : response.plan.id,
                                    "mode" :"2CO",
                                    "currency_code" :"USD",
                                    "demo" :"Y",
                                    "lang" :"es_ib",
                                    "card_holder_name" :"Plan Tendaz",
                                    "street_address" : response.shop.address_contact == '' ? "aasasassa" : response.shop.address_contact,
                                    "street_address2" :"",
                                    "city" : API.city ,
                                    "state" :API.region_name,
                                    "zip" :  API.zip_code ? API.zip_code : '111461',
                                    "country" : API.country_name,
                                    "phone" : response.shop.phone_contact,
                                    "phoneExt" :"",
                                    "email" : response.user.email,
                                    "li_0_name" : response.plan.name,
                                    "li_0_quantity" : '1',
                                    "li_0_price" : response.plan.price,
                                    "li_0_recurrence" : response.recurring + " Month",
                                    "li_0_duration" :"Forever",
                                    "tco_use_inline"  :"1"
                                }
                                var form = $('<form></form>');
                                form.attr("action", "{{ env('URL_2CHECKOUT') }}");
                                form.attr("method", "POST");
                                form.attr("target", "tco_lightbox_iframe");
                                form.attr("style", "display:none;");
                                addFormFields(form, data);
                                $("body").append(form);
                                $('.tco_lightbox').remove();
                                $.getScript( "https://www.2checkout.com/static/checkout/javascript/direct.min.js", function( data, textStatus, jqxhr ) {
                                    setTimeout(function() {
                                        form.submit();
                                        form.remove();
                                    }, 1000);
                                });
                                setTimeout(function() {
                                    $('.preloader_general').addClass('hidden');
                                    $("#confirm_button-cc").removeClass('disabled').find('.fa-spin').hide();

                                }, 5500);
                            });
                });
            }).fail(function() {
                alert("error.Por favor contacta a soporte de tendaz");
            });
        };
        callbacks.transfer = function(months){
            $.post(BASEURL + "/admin/account/plans/generate/transfer/", $("#submit_form-transfer,#selected-apps").serialize(), function(response){
                $("#confirm_button-transfer").removeClass('disabled').find('.fa-spin').hide();
                if (response.url){
                    $MPC.openCheckout({
                        url: response.url,
                        mode: "modal",
                        onreturn: function(data) {
                            if (!data.collection_status){
                                return false;
                            }

                        }
                    });
                }
            });
        };
        callbacks.ticket = function(){

            $.post(BASEURL + "/admin/account/plans/generate/onetimer/", $("#submit_form-ticket,#selected-apps").serialize(), function(response){
                $("#confirm_button-ticket").removeClass('disabled').find('.fa-spin').hide();
                console.log(response);
                if (response.url){
                    $MPC.openCheckout({
                        url: response.url,
                        mode: "modal",
                        onreturn: function(data) {
                            if (!data.collection_status){
                                return false;
                            }
                        }
                    });
                }
            });
        };
        $("#ticket_relaunch , #transfer_relaunch").click(function(){
            var button = $(this);
            button.addClass('disabled').find('.fa-spin').removeClass('hidden');
            var payment = $(this).data('payment');
            var method = $(this).data('method');
            $.post(BASEURL + "/admin/account/plans/checkout/regenerate/onetimer/", {payment: payment, method: method , _token: $('[name="csrf_token"]').attr('content')}, function(response){
                button.removeClass('disabled').find('.fa-spin').addClass('hidden');
                if (response.url){
                    $MPC.openCheckout({
                        url: response.url,
                        mode: "modal",
                    });
                }
            });

            return false;
        });
    </script>
    <script type="text/javascript" src="https://www.mercadopago.com/org-img/jsapi/mptools/buttons/render.js"></script>
    <script src="https://www.2checkout.com/static/checkout/javascript/direct.min.js"></script>
@stop