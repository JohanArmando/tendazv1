<div id="envios_resto_del_mundo" class="modal fade" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="semibold modal-title text-default">Configuracion para el envio de manera manual</h3>
            </div>

            <div class="modal-body">
                <h5 class="semibold mt0">Configura manualmente  tu envio por peso, precio y/o region.</h5>
                <br>
                <form action="{{ url('admin/shipping/send') }}" method="POST" data-toggle="validator" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="nomb_opc">Nombre de la opcion</label>
                        <input type="text" class="form-control" name="name" ng-model="sendWord.name" required/>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="costo_envio">Costo envio</label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" name="cost" ng-model="sendWord.cost"
                                   onkeypress="return justNumbers(event);"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label>Rango de peso de la compra</label>
                            <div class="input-group">
                                <span class="input-group-addon">Kg</span>
                                <input type="text" class="form-control" style="width: 50px;" name="min_weight" ng-model="sendWord.min_weight"
                                       onkeypress="return justNumbers(event);"/>

                                <span class="input-group-addon">Kg</span>
                                <input type="text" class="form-control" style="width: 50px;" name="max_weight" ng-model="sendWord.max_weight"
                                       onkeypress="return justNumbers(event);"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label>Rango de precio de la compra</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control" style="width: 50px;" name="min_price" ng-model="sendWord.min_price"
                                       onkeypress="return justNumbers(event);"/>

                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control" style="width: 50px;" name="max_price" ng-model="sendWord.max_price"
                                       onkeypress="return justNumbers(event);"/>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" >Cerrar</button>
                        <button type="submit" class="btn btn-primary"  id="agregar-word" >Agregar costo de envio</button>
                        <a  class="btn btn-primary" id="modificar-word" ng-click="updateWord()" >Modificar Envio</a>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!--fin-->
</div>
