<div class="panel panel-default sidebar-menu">

    <div class="panel-heading">
        <h3 class="panel-title">Categorias</h3>
    </div>

    <div class="panel-body" ng-controller="categoryTemplateController" ng-init="x = 1" ng-cloak="">
        <ul class="nav nav-pills nav-stacked category-menu">
            <li>
                <a href="{{asset('/products')}}">Todos los Productos</a>
            </li>
            <li ng-repeat="category in categories">
                <a href="<% slug ? 'products' + slug + '/' + category.slug : 'products'  + '/' +category.slug %>">
                    <i class="fa fa-arrow-circle-right"></i> <% category.name %></a>
            </li>
        </ul>

    </div>
</div>

<div class="panel panel-default sidebar-menu hidden">

    <div class="panel-heading">
        <h3 class="panel-title">Marcas </h3>
    </div>

    <div class="panel-body">

        <form>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Armani (10)
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Versace (12)
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Carlo Bruni (15)
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Jack Honey (14)
                    </label>
                </div>
            </div>

            <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Aplicar</button>

        </form>

    </div>
</div>

<div class="panel panel-default sidebar-menu hidden">

    <div class="panel-heading">
        <h3 class="panel-title">Colores</h3>
    </div>

    <div class="panel-body">
        <form>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> <span class="colour white"></span> Blanco (14)
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> <span class="colour blue"></span> Azul (10)
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> <span class="colour green"></span> Verde (20)
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> <span class="colour yellow"></span> Amarillo (13)
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> <span class="colour red"></span> Rojo (10)
                    </label>
                </div>
            </div>

            <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Aplicar</button>
        </form>
    </div>
</div>
