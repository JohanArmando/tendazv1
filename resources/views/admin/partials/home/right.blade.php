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
                            <p> <button type="button" class="btn btn-primary">Cancelar Subcripcion</button></p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else

@endif

