@foreach($plan->plan->periods as $key => $period)
    <div class="choose-period list-unstyled big-radio-container selections chosen-period text-center p-top ">
        <div class="col-xs-10 col-xs-offset-1 text-left selection cc recurring one-month-selection m-bottom {{ $key != 0 ?: 'selected' }}" data-period="{{ $period->getIntervalInMonthly() }}" data-uuid="{{ $period->uuid }}" data-price="{{ $period->getTotalPriceWithDiscount() }}" data-credit-until=''>
            <div class="p-top-half p-bottom-half text-black row">
                <div class="col-md-1">
                    <i class="fa fa-circle-o"></i>
                    <i class="fa fa-check-circle-o"></i>
                </div>
                <div class="col-md-10">
                    <strong>{{ $period->name }} </strong>
                    <span class="text-tertiary {{ $period->discount >  0 ? : 'hidden'}}">
                        <strong>{{ $period->discount }}%</strong> de descuento
                    </span>
                    <div class="text-greylight {{ $period->getDiscount( $period->getTotalPrice() ) > 0 ?: 'hidden' }}"><i>Ahorras {{ $period->getDiscount( $period->getTotalPrice() ) }} USD </i></div>
                    <div class="text-greylight">
                        En un pago de <strong>{{  $period->getTotalPriceWithDiscount() }} USD</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
<!-- Boton pago con tarjeta -->
<div class="checkout-confirm-container confirm">
    <div class="checkout-confirm container">
        <div style="display: none; margin-left: 4.5%"><strong>Medio de pago:</strong> <span class="confirm-method">Tarjeta de cr&eacute;dito</span></div>
        <div style="display: none ;width: 59%; margin-left: 4.5%"><strong>Per&eacute;odo a contratar:</strong> <span class="confirm-period"></span></div>
        {!! Form::open(['url' => '/admin/account/checkout/finish' , 'method' => 'POST' , 'class' => 'no-padding submit_form']) !!}
            <input type="hidden" name="uuid" class="input_uuid" value="{{ $plan->plan->periods[0]->uuid }}">
            <div class="clearfix"></div>
            <div class="panel-footer text-center">
                <div class="text-center">
                    <button type="submit" class="btn btn-default-tendaz confirm_button m-half-bottom m-half-top">
                        Contratar plan
                        <span class="one-time-in-button" style="display: none">y ahorrar
                            <strong class="savings"></strong>
                        </span>
                        <i class="fa fa-spinner fa-spin fa-fw margin-bottom" style="display: none"></i>
                    </button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>