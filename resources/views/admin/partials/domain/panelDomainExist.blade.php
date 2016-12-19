<div class="col-md-12">
    <div class="">
        <div class="">
            <div class="">
                <!--<strong>Agregar un domino existente</strong>-->
            </div>
        </div>
        <div class="panel-body">
            <p align="justify">
                Cuando est&eacute;n disponibles , los dominios comprados a tendaz.com incluyen la privacidad de WHOIS ( valor aproximado de USD 15 $ / a&ntilde;o) . Su informaci&otilde;n personal no se mostrar&acute; en los registros de inscripci&oacute;n de dominio p&uacute;blico.
            </p>
            <br>
            @if(Auth::client()->get()->originalSubscription->first()->active)
                @if(Auth::client()->get()->shop->domains->count() < 2)
                    <div class="text-center">
                        <button type="button" id="btn-domain" class="btn btn-primary" data-toggle="modal"  data-target="#bs-modal-add">
                            <i class="fa fa-plus"></i> Agregar dominio Existente
                        </button>
                    </div>
                @endif
            @else
                @if(Auth::client()->get()->originalSubscription->first()->status == 'free' && Auth::client()->get()->shop->domains->count() < 2)
                    <div class="text-center">
                        <button type="button" id="btn-domain" class="btn btn-primary"  data-toggle="modal" data-target="#bs-modal-add">
                            <i class="fa fa-plus"></i> Agregar dominio Existente
                        </button>
                    </div>
                @endif
            @endif
            <br>
        </div>
    </div>
</div>