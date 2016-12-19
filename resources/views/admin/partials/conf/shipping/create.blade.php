<div id="shppingMethod" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="semibold modal-title text-default">Configuracion para el envio de manera manual.</h3>
            </div>
            <div class="modal-body">
                <p align="justify" style="font-size: 15px;">Configura manualmente  tu envio por peso, precio y/o region.</p>
                <form ng-submit="create()" name="shippingMethodForm" data-toggle="validator" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="from-group">
                                <label for="nomb_opc">Nombre de la opcion</label>
                                <input type="text" class="form-control" name="name" ng-model="shipping.name" required/>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="from-group">
                                <label for="costo_envio">Costo envio</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" name="cost" ng-model="shipping.cost"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <label>Rango de Peso</label>
                            <div class="input-group">
                                <span class="input-group-addon">Kg</span>
                                <input type="text" class="form-control" style="width: 125px;" name="min_weight" ng-model="shipping.min_weight"/>
                                <span class="input-group-addon">Kg</span>
                                <input type="text" class="form-control" style="width: 125px;" name="max_weight" ng-model="shipping.max_weight"/>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <label>Rango de Compra</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control" style="width: 130px;" name="min_price" ng-model="shipping.min_price"/>

                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control" style="width: 140px;" name="max_price" ng-model="shipping.max_price"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" ng-click="create()" ng-hide="showEdit" class="btn btn-primary">Agregar costo de envio</button>
                    <button type="submit" ng-click="update()" ng-show="showEdit" class="btn btn-primary">Editar costo de envio</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
