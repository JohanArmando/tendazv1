<div id="modal-domain-confirm" class="modal fade">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close dismiss"  data-dismiss="modal">&times;</button>
                <h3 class="semibold modal-title">Informacion Personal para el Pago</h3>
                <p class="text-muted">Debes tener tu tarjeta de credito a la mano y digitar con exactitud, para no tener problemas, se prudente con tus datos.</p>
            </div>
            <div class="modal-body">
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-1 col-xs-4" >
                            <div class="panel panel-default credit-card-box">
                                <div class="panel-heading display-table" >
                                    <div class="row display-tr" >
                                        <h3 class="panel-title display-td" >Detalles del pago</h3>
                                        <div class="display-td">
                                            <img class="img-responsive pull-right" src="{{ asset('admin/image/cards.png') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <center>
                                        <h4>Usaremos la tajeta  **** **** **** {{ Auth::client()->get()->last_four }} para realizar el pago.
                                            <br> Si desea cambialar click <a class="btn btn-default" data-toggle="modal" data-target="#modal-update-card">Aqui!</a>.
                                        </h4>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-1"></div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default cancel-payment" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                <button type="button"  class="btn btn-default payment-success" style="background-color: #033855;" ><i class="fa fa-credit-card"></i>  <strong>Realizar pago</strong></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>