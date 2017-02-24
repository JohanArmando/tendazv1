<!--Modal para agregar nuevo local-->
<div id="nuevo_local" class="modal fade" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="semibold modal-title text-defautl">Datos importantes para tu local</h3>
                <p class="text-muted"></p>
            </div>
            <div class="modal-body">

                <form role="form" data-toggle="validator" role="form">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <div class="form-group">
                        <label for="nombre_local">Nombre del local</label>
                        <input type="text" class="form-control" name="name" ng-model="local.name" required/>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="descripcion_local">Descripcion del local</label>
                        <textarea class="form-control" name="description" ng-model="local.description"></textarea>
                        <p class="help-blocker">
                            Direccion completa del local Cll 123 # 12-34,
                        </p>
                    </div>
                    <input type="checkbox" name="principal"  value="local.principal">Sede principal
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" ng-click="createLocal()" ng-hide="showEditLocal" id="agregar">Agregar local</button>
                        <button type="submit" class="btn btn-primary" ng-click="updateLocal()" ng-show="showEditLocal">Editar local</button>
                    </div>
                </form>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- fin -->
</div>