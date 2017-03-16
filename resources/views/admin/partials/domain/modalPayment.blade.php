
<!-- Modal -->
<div class="modal fade bs-example-modal-md buyModal" tabindex="-1" aria-labelledby="mySmallModalLabel" id="namecheapPayment" role="dialog" >
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content buyContent">
            <div class="modal-header buyHeader">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="closeBuy" aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Pagar Suscripci&oacute;n</h4>
            </div>
            <div class="modal-body buyBody">
                {!! Form::open(['url' => '/admin/setting/domain/buy' , 'method' => 'POST' , 'id'=>'formCardPayment' , 'class' => 'no-padding submit_form']) !!}
                <input type="hidden" name="token" class="input_uuid" value="">
                <input type="hidden" name="domain" class="input_uuid" id="domainAvailable" value="">
                <input type="hidden" name="domainTld" class="input_uuid" id="domainTld" value="">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="">Numero de Tarjeta *</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" id="type-card"></div>
                            <input type="text" id="card" placeholder="---- ---- ---- ----" class="form-control inputBuy"  required>
                        </div>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="">Expide el *</label>
                        <input type="text" id="expiry" placeholder="MM / YYYY" class="form-control inputBuy" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">CVC *</label>
                        <input id="cvc" type="text" placeholder="---" class="form-control inputBuy" maxlength="3" pattern="[0-9]*" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Nombres</label>
                        <input id="name" type="text" name="name" value="{{ Auth('admins')->user()->name }} {{ Auth('admins')->user()->last_name }}" placeholder="John Doe" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Email</label>
                        <input id="email" type="text" value="{{ Auth('admins')->user()->email }}" name="email" placeholder="123 Main Street" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Direccion</label>
                        <input id="addrLine1" type="text" value="" name="addrLine1" placeholder="calle 140" class="form-control" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="">Ciudad</label>
                        <input id="city" type="text" name="city" placeholder="Bogota" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Codigo Postal</label>
                        <input id="zipCode" type="text" name="zipCode" placeholder="111011" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Departamento</label>
                        <input id="state" type="text" name="state" placeholder="Cundinamarca" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Pais</label>
                        <input id="country" type="text" name="country" placeholder="Colombia" class="form-control" required>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-6">El dominio <span id="d"></span>  cuesta <span id="p"></span> USD</div>
                        <button id="enviar" type="button" data-loading-text="<i class='fa fa-spinner fa-spin'></i> procesando..." class="btn btn-primary pull-right buyRight" disabled="true">Enviar</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!-- end Modal -->