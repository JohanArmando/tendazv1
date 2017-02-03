@extends('layouts.administrator')
@section('title')
    Pagar Plan
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('administrator/css/custom_tendaz.css') }}">
@stop
@section('content')
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
            <p style="margin-left: 15px">
               {{-- <span class="label label-warning">Tu tienda esta vencida {{ str_replace('termino' , '' , \Carbon\Carbon::parse(Auth::client()->get()->originalSubscription->first()->trial_ends_at)->diffForHumans()) }}</span>--}}
            </p>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading tendaz-panel-heading">
                        <h3 class="panel-title">Detalle del pago</h3>
                    </div>
                    <div class="panel-body">
                        <p class="text-left">
                            Plan:
                            <strong>{{ $plan->plan->name }}</strong>
                        </p>
                        <a href="{{ url('/admin/account/plans') }}" class="a-tendaz">Cambiar plan</a>
                        <hr>
                        <h4 class="text-left">Valor: <strong class="tendaz">$ {{ $plan->getPrice() }} USD</strong></h4>
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

                                            {{-- @include('admin.partials.account.payment.transfer-payment') --}}

                                        </div>
                                    </div>
                                    <div role="tabpanel" id="ticket" class="tab-pane">
                                        <div class="panel panel-default ticket panel-method">

                                            {{--@include('admin.partials.account.payment.ticket-payment')--}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection
@section('scripts')
    <script>
        $(".choose-period").find(".selection").click(function(){
            var $this = $(this);
            //escoge el parent de dicho div
            var $panel = $this.closest('.panel-method');
            var uuid = $this.data('uuid');
            var installments = $this.data('installments');

            $panel.find(".selection").removeClass('selected');
            $this.addClass('selected');

            $panel.find("input.input_uuid").val(uuid);
            $panel.find("input.input_installments").val(installments);

            //This give feedback of the method selected
            $panel.addClass('method-selected');


            //This change button color and text for discounts
            $apps_monthly = $('#apps').find('.monthly');
            if ($panel.find(':selected').hasClass('selected')){
                $apps_monthly.hide();
            } else {
                $apps_monthly.show();
            }
            return false;
        });
    </script>
    <script src="{{asset('administrator/js/payform.js')}}"></script>
    <script>
        // Format input for card number entry
        $('#card').payform('formatCardNumber');
        $('#expiry').payform('formatCardExpiry');

        // Validate
        $.payform.validateCardNumber('4242 4242 4242 4242'); //=> true
        $.payform.validateCardExpiry('01 / 2017'); //=> true
    </script>
@stop