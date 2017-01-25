@if(!isset($_GET['ref']))
    @if($shop->subscription()->onTrial())
        {!! footerNotification('Adquiere un plan.' , 'trial' , $shop->subscription()->trial_at) !!}
    @elseif($shop->subscription()->cancelled())
        {!! footerNotification('Re-activala aqui.' , 'cancel' , $shop->subscription()->end_at) !!}
    @elseif($shop->subscription()->onGracePeriodBefore())
        {!! footerNotification('Re-nuevala aqui.' , 'beforeGrace' ,  $shop->subscription()->end_at) !!}
    @elseif($shop->subscription()->onGracePeriod())
        {!! footerNotification('Re-nuevala aqui.' , 'onGrace' ,  $shop->subscription()->end_at) !!}
    @endif
@endif

