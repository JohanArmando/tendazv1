
<div class="controls ">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-all-half">
        <div class="row-fluid">
            <div class="col-xs-6">
                <p class="m-quarter-bottom"><strong>Acciones</strong></p>
                <select id="product-select" name="action" class="form-control" ng-change="updateSelect()" ng-model="accion">
                    <option value="" selected="selected">Seleccionar Accion...</option>
                    <option value="destroy" class="indent selection">Eliminar @{{ selecteds() > 0 ? (selecteds()) : '' }}</option>
                    <option value="publish" class="indent selection" >Mostrar en mi tienda  @{{ selecteds() > 0 ? (selecteds()) : '' }}</option>
                    <option value="draft" class="indent selection">No mostrar en mi tienda  @{{ selecteds() > 0 ? (selecteds()) : '' }}</option>
                </select>
            </div>
            <div class="col-xs-6">
                <p class="m-quarter-bottom"><strong>Cualquier campo:</strong></p>
                <input type="text" class="form-control" placeholder="Busca un producto por cualquier campo" ng-model="search">
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-all-half">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <p class="m-quarter-bottom"><strong>Categoria</strong></p>
                <select name="categories" id="myCategory" class="form-control"
                        ng-options="category.name for category in categories track by category.id"
                        ng-model="category">
                    <option value>Sin categoria</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <p class="m-quarter-bottom"><strong>Ordenar por:</strong></p>
                <select id="sort-order-inline" class="select-link form-control" ng-model="order">
                    <option value="price" >Precio: Menor a Mayor</option>
                    <option value="-price">Precio: Mayor a Menor</option>
                    <option value="name">A - Z</option>
                    <option value="-name">Z - A</option>
                    <option value="created_at">M&aacute;s Nuevo al m&aacute;s Viejo</option>
                    <option value="-created_at">M&aacute;s Viejo al m&aacute;s Nuevo</option>
                    <option value="-best_seller">M&aacute;s vendidos</option>
                </select>
            </div>
        </div>
    </div>
</div>
</div>