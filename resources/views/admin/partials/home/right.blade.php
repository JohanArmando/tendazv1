<div class="col-md-4">
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-default sidebar-nav">
                <div class="panel-heading-white">
                    <h5 class="panel-title"><i class="ico-thumbs-up"></i> Importante</h5>
                </div>
                <div class="panel-collapse">
                    <div class="panel-body listing">
                        <p>Las estadisticas se actualizan cada 24 horas aproximadamente.</p>
                        <p>Recuerda compartir tus articulos en redes sociales para incrementar tus ventas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if (isset($subscription->plan->plan->name))
    <div class="col-md-4">
        <div class="container-fluid">
            <div class="row">
                <div class="panel panel-default sidebar-nav">
                    <div class="panel-heading-white">
                        <h5 class="panel-title"><i class="ico-thumbs-up"></i>Plan {{ $subscription->plan->plan->name }} con cobro {{ $subscription->plan->name or '' }}</h5>
                    </div>
                    <div class="panel-collapse">
                        <div class="panel-body listing">
                            @if ($subscription->recurrent)
                                <p>Su proxima fecha de cobro es {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $subscription->end_at )->diffForHumans() }}</p>

                                <button class="btn btn-primary" data-toggle="modal" data-target="#subscription-modal">
                                  Cancelar subscriccion
                                </button>
                            @else
                                <p>Su tienda estara activa hasta {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $subscription->end_at )->diffForHumans()  }}</p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="subscription-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="">Cancelar suscripción</h4>
          </div>
          <div class="modal-body">
            <p>Al cancelar la suscripccion no se haran mas cobros recurrentes a su targeta de credito y la tienda tendra el resto del tiempo activona vez acabe el tiempo la tienda quedara inactiva.</p>
            <p>¿Esta seguro de cancelar la suscripcion?</p>
          </div>
          <div class="modal-footer">
            <form class="" action="{{ url('admin/account/checkout/stop-subscription') }}" method="post">
              {{ csrf_field() }}
              <button type="button" class="btn btn-default" data-dismiss="modal">No cancelar suscripción</button>
              <button type="submit" class="btn btn-primary" name="button">Cancelar Suscripción</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@else

@endif
