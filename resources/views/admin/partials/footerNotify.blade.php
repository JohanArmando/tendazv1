<style>
    .p-fixed.bottom {
        bottom: 0;
        top: auto;
        z-index: 999;
    }
    .fixed-panel {
        max-height: 57px;
        width: 100%;
        background: #3c3c3c !important;
        opacity: 0.8;
        filter: alpha(opacity=80); /* For IE8 and earlier */
    }
    .p-fixed {
        position: fixed;
    }
    .footer {
        position: relative;
        z-index: 10;
        font-size: 12pt;
        clear: left;
        background: #333;
        padding: 20px 0;
    }
    .affix {
        position: fixed;
    }
    .small{
        margin-left: -30%;
        margin-top: -0.5%;
    }
    .small > a{
        color: #F26522;
        font-weight: bold;
        margin-left: 0.5%;
    }
    .small > a:hover{
        color: #FFFFFF;
        text-decoration: underline;
    }
</style>

@if(isset($_GET['ref']) && $_GET['ref'] == 'from_payment_bottom_bar')

@else

    @if(Auth::client()->get()->haveCancelled() && Auth::client()->get()->isSubscriber() && !Auth::client()->get()->isOvercome())
        <div class="fixed-panel col-md-12 p-fixed bottom row-fluid footer affix" >
            <div class="container text-center">
                <p class="text-white small" >Tienes {{ count(Auth::client()->get()->haveCancelled()) > 1 ? 'subscripciones' : 'una subscripcion' }}  en estado cancelada(s)
                    <a href="{{ url('/admin/account/plan/checkout/start/?ref=from_payment_bottom_bar') }}"  style=" margin-left: 2%">Puedes verlas aqui</a>
                </p>
            </div>
        </div>
    @endif

    @if(Auth::client()->get()->onTrial())
        <div class="fixed-panel col-md-12 p-fixed bottom row-fluid footer affix" >
            <div class="container text-center">
                <p class="text-white small" >Tu prueba gratis {{ Auth::client()->get()->time() }}
                    <a href="{{ url('/admin/account/plan/checkout/start/?ref=from_payment_bottom_bar') }}"  style=" margin-left: 2%">Elige tu plan</a>
                </p>
            </div>
        </div>
    @endif

    @if(Auth::client()->get()->forFinish() && !Auth::client()->get()->onTrial())
        <div class="fixed-panel col-md-12 p-fixed bottom row-fluid footer affix" >
            <div class="container text-center">
                <p class="text-white small" >Tu subscripcion {{ Auth::client()->get()->time() }}
                    <a href="{{ url('/admin/account/plans/?ref=from_payment_bottom_bar') }}"  style=" margin-left: 2%">Renovar</a>
                </p>
            </div>
        </div>
    @endif

    @if(Auth::client()->get()->isOvercome())
        <div class="fixed-panel col-md-12 p-fixed bottom row-fluid footer affix" >
            <div class="container text-center">
                <p class="text-white small" >Tu  subscripcion {{ Auth::client()->get()->time() }}
                    <a href="{{ url('/admin/account/plans/?ref=from_payment_bottom_bar') }}"  style=" margin-left: 2%">Elige tu plan</a>
                </p>
            </div>
        </div>
    @endif

    @if(Auth::client()->get()->isCancel())
        <div class="fixed-panel col-md-12 p-fixed bottom row-fluid footer affix" >
            <div class="container text-center">
                <p class="text-white small" >Tu suscripcion esta en estado cancelado.{{ Auth::client()->get()->time() }}
                    <a href="{{ url('/admin/account/plan/checkout/start/?ref=from_payment_bottom_bar') }}"  style=" margin-left: 2%">Activala</a>
                </p>
            </div>
        </div>
    @endif

@endif
