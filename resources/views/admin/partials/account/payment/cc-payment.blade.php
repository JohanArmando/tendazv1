<div class="choose-period list-unstyled big-radio-container selections chosen-period text-center p-top">
    <div class="col-xs-10 col-xs-offset-1 text-left selection cc recurring one-month-selection m-bottom selected" data-period="1" data-price="{{ $plan->price }}" data-credit-until=''>
        <div class="p-top-half p-bottom-half text-black row">
            <div class="col-md-1">
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-check-circle-o"></i>
            </div>
            <div class="col-md-10">
                <strong>Suscripcion mensual</strong>
                <div class="text-greylight">
                    <strong>${{ number_format($plan->price , 0 ,  '' , '.') }}</strong> por mes
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Boton pago con tarjeta -->
<div class="checkout-confirm-container confirm">
    <div class="checkout-confirm container">
        <div style="display: none; margin-left: 4.5%"><strong>Medio de pago:</strong> <span class="confirm-method">Tarjeta de cr&eacute;dito</span></div>
        <div style="display: none ;width: 59%; margin-left: 4.5%"><strong>Per&eacute;odo a contratar:</strong> <span class="confirm-period"></span></div>
        <form id="submit_form-cc" method="post" action="/admin/account/checkout/finish/" class="no-padding submit_form">
            {!! csrf_field() !!}
            <input type="hidden" name="_X_PLAN" value="{{ $plan->uuid }}">
            <input type="hidden" class="input_method" id="input_method" name="method" value="cc">
            <input type="hidden" class="input_period" id="input_period" name="months" value="1">
            <input type="hidden" class="input_installments" id="input_installments" name="installments" value="">
        </form>
        <div class="clearfix"></div>
        <div class="panel-footer text-center">
            <div class="text-center">
                <button id="confirm_button-cc" class="btn btn-default-tendaz confirm_button m-half-bottom m-half-top">
                    Contratar plan
                    <span class="one-time-in-button" style="display: none">y ahorrar
                        <strong class="savings"></strong>
                    </span>
                    <i class="fa fa-spinner fa-spin fa-fw margin-bottom" style="display: none"></i>
                </button>
            </div>
        </div>
    </div>
</div>