<!--Modal Personal-->
<div id="personal" class="modal fade" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="semibold modal-title text-default">Activacion Personalizada.</h3>
                Sea cuidadoso con cada uno de los campos que esta diligenciando en el formulario.</p>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="forma-pago">Forma de Pago</label>
                        <input type="text" class="form-control" ng-model="payment.payment_form">
                    </div>
                    <div class="form-group">
                        <label for="intrucciones">Instrucciones para el comprador</label>
                        <textarea class="form-control" placeholder="Describir la forma de pago con el comprador" ng-model="payment.description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="descuento_cliente">Descuento a ofrecer al cliente</label>
                        <div class="input-group">
                            <input type="text" class="form-control" ng-model="payment.discount">
                            <span class="input-group-addon">%</span>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-default" style="background-color:#033855; color: white;" ng-click="active()">@{{ button  }}</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!--fin-->