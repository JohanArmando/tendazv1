<div class="col-md-12">
    <div class=""><!--panel panel-default -->
        <div class=""> <!-- panel-headding -->
            <div class=""> <!--panel-title -->
                <!--<strong>Comprar un Dominio</strong>-->
            </div>
        </div>
        <div class="panel-body">
            <p align="justify">
                Cuando est&eacute;n disponibles , los dominios comprados a <strong>tendaz.com</strong> incluyen la privacidad de WHOIS ( valor aproximado de USD 15 $ / a&ntilde;o) . Su informaci&oacute;n personal no se mostrar&aacute; en los registros de inscripci&oacute;n de dominio p&uacute;blico.
            </p>
            <br>
            @if(auth('admins')->user()->originalSubscription->first()->status)
            <div class="text-center">
                <button type="button" id="btn-domain" class="btn btn-primary" data-toggle="modal" data-target="#bs-modal"><i class="fa fa-credit-card"></i> Compar Dominio</button>
            </div>
            @else
            @if(auth('admins')->user()->originalSubscription->first()->status == 'free' && Auth::client()->get()->shop->domains->count() < 2)
            <div class="text-center">
                <button type="button" id="btn-domain" class="btn btn-primary"  data-toggle="modal" data-target="#bs-modal"><i class="fa fa-credit-card"></i> Compar Dominio</button>
            </div>
            @endif
            @endif
            <br>
        </div>
    </div>
</div>