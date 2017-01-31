<style>
    [data-tooltip] {
        position: relative;
        z-index: 2;
        cursor: pointer;
    }

    /* Hide the tooltip content by default */
    [data-tooltip]:before,
    [data-tooltip]:after {
        visibility: hidden;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
        opacity: 0;
        pointer-events: none;
    }

    /* Position tooltip above the element */
    [data-tooltip]:before {
        position: absolute;
        bottom: 150%;
        left: 50%;
        margin-bottom: 5px;
        margin-left: -80px;
        padding: 7px;
        width: 200px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        background-color: #000;
        background-color: hsla(0, 0%, 20%, 0.9);
        color: #fff;
        content: attr(data-tooltip);
        text-align: center;
        font-size: 14px;
        line-height: 1.2;
    }

    /* Triangle hack to make tooltip look like a speech bubble */
    [data-tooltip]:after {
        position: absolute;
        bottom: 150%;
        left: 50%;
        margin-left: -5px;
        width: 0;
        border-top: 5px solid #000;
        border-top: 5px solid hsla(0, 0%, 20%, 0.9);
        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
        content: " ";
        font-size: 0;
        line-height: 0;
    }

    /* Show tooltip content on hover */
    [data-tooltip]:hover:before,
    [data-tooltip]:hover:after {
        visibility: visible;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=100);
        opacity: 1;
    }
</style>
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
                        ng-model="category.data">

                    <option value="">------------ Escoge Una Categoria ---------</option>
                </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <p class="m-quarter-bottom"><strong>Ordenar por:</strong></p>
                <select id="sort-order-inline" class="select-link form-control" ng-model="order">
                    <option value="price" >Precio: Menor a Mayor</option>
                    <option value="-price">Precio: Mayor a Menor</option>
                    <option value="name">A - Z</option>
                    <option value="-name">Z - A</option>
                    <option value="created_at">M&aacute;s Nuevo al m&aacute;s Antiguo</option>
                    <option value="-created_at">M&aacute;s Antiguo al m&aacute;s Nuevo</option>
                    <option value="-best_seller">M&aacute;s vendidos</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-right" style="margin-top: 10px">
        <div class="col-md-9"></div>
        <div class="col-md-3">
            <div class="col-md-8" style="padding-left: 8px;padding-right: 2px">
                <button data-tooltip="Ver Productos sin categoria" class="btn btn-default btn-category" ng-click="category.data = []">Sin Categoria</button>
            </div>
            <div class="col-md-4" style="padding-left: 2px;padding-right: 2px">
                <button data-tooltip="Ver Todos los Productos" class="btn btn-default btn-category" ng-click="category = []">Todos</button>
            </div>
        </div>
    </div>
</div>
</div>