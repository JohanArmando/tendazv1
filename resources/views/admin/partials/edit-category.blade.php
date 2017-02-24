<div class="modal fade" id="editModalCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Editar categoria</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Nombre:</label>
                        <input type="text" class="form-control" id="recipient-name" ng-model="category.name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Titulo SEO:</label>
                        <input type="text" class="form-control" id="recipient-name" ng-model="category.title">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Descripcion SEO:</label>
                        <input type="text" class="form-control" id="recipient-name" ng-model="category.description">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">URL:</label>
                        <div class="input-group">
                            <div class="input-group-addon">{{ url('/').'/' }}</div>
                            <input type="text" class="form-control" id="recipient-name" ng-model="category.slug">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-default" confirm-click="Seguro, quieres eliminar esta categoria ?" ng-click="remove(); cambiar();actual()" style="float: left;background-color: #F42B03;color: white;border: 1px solid #F42B03;" data-dismiss="modal">Eliminar</button>
                <button type="button" class="btn btn-primary" ng-click="update()">Actualizar</button>
            </div>
        </div>
    </div>
</div>