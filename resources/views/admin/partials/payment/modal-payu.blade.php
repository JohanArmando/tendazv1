<!--modal payu-->
<div id="payu" class="modal fade" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center>
                    <img class="img-responsive" width="100px;" height="150px;" src="//d26lpennugtm8s.cloudfront.net/assets/admin/img/payments/payu.png"/>
                </center>
                <h5 class="semibold modal-title text-primary">Configuracion de la plataforma.</h5>
                <p class="text-muted">
                    Debe tener en cuenta todo y cada uno de los parametros arrojado por la plataforma para su excelente integracion.
                </p>
            </div>
            <div class="modal-body">
                <form role="form">
                    <fieldset>
                        <div class="form-group">
                            <p align="center">
                                <strong>DATOS DE LA CUENTA</strong>
                            </p>
                            <label for="id_comercio">ID Comercio</label>
                            <input type="text" class="form-control" ng-model="payment.merchant_id"/>
                        </div>
                        <div class="form-group">
                            <label for="API">Api Key</label>
                            <input type="text" class="form-control"  ng-model="payment.api_key"/>
                        </div>
                        <div class="form-group">
                            <label for="id_cuenta">ID cuenta</label>
                            <input type="text" class="form-control" ng-model="payment.account_id"/>
                        </div>
                        <div class="form-group">
                            <label for="IVA">IVA</label>
                            <select class="form-control" ng-model="payment.iva" name="iva">
                                <option value="sin" s>Sin IVA</option>
                                <option value="10">10 %</option>
                                <option value="16">16 %</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class=""> <label>Habilitar las tarjetas de creditos internacionales.</label>
                        </div>
                    </fieldset>
            </div>
                <div class="modal-footer">
                    <div class="text-center">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-default" style="background-color: #033855; color: white;"  ng-click="active()">@{{ button }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    	