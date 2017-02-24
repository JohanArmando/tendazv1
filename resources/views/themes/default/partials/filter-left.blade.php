<div class="filter-sidebar" ng-controller="categoryTemplateController" ng-init="x = 1" ng-cloak="">
    <div class="title"><span>Categorias</span></div>
    <ul class="list-group">
        <li class="list-group-item">
            <a href="{{url('/products')}}">Todos los Productos</a>
        </li>
        <li ng-repeat="category in categories" class="list-group-item">
            <i class="fa fa-arrow-circle-right"></i>
            <a href="<% slug ? 'products' + slug + '/' + category.slug : 'products'  + '/' +category.slug %>"><% category.name %></a>
        </li>
    </ul>
</div>

<div class="hidden">
<div class="filter-sidebar">
    <div class="title"><span>Filtros</span></div>
    <ul>
        <li>Categoria: T-Shirts <a href="#" class="remove-filter"><i class="fa fa-remove"></i></a></li>
        <li>Disponibilidad: En Stock <a href="#" class="remove-filter"><i class="fa fa-remove"></i></a></li>
        <li>Marca: Brand Name 1 <a href="#" class="remove-filter"><i class="fa fa-remove"></i></a></li>
    </ul>
</div>
<div class="filter-sidebar">
    <div class="title"><span>Disponibilidad</span></div>
    <ul>
        <li>
            <div class="checkbox"><input type="checkbox" id="InStockCheckbox" checked="checked"><label for="InStockCheckbox">En Stock (20)</label></div>
        </li>
    </ul>
</div>
<div class="filter-sidebar">
    <div class="title"><span>Marcas</span></div>
    <ul>
        <li>
            <div class="checkbox"><input type="checkbox" id="BrandName1Checkbox" checked="checked"><label for="BrandName1Checkbox" Marca 1 (11)</label></div>
        </li>
        <li>
            <div class="checkbox"><input type="checkbox" id="BrandName2Checkbox"><label for="BrandName2Checkbox">Marca 2 (12)</label></div>
        </li>
        <li>
            <div class="checkbox"><input type="checkbox" id="BrandName3Checkbox"><label for="BrandName3Checkbox">Marca 3 (13)</label></div>
        </li>
        <li>
            <div class="checkbox"><input type="checkbox" id="BrandName4Checkbox"><label for="BrandName4Checkbox">Marca 4 (14)</label></div>
        </li>
    </ul>
</div>
<div class="filter-sidebar">
    <div class="title"><span>Rango de Precios</span></div>
    <div id="range-value">Rango: <span id="min-price">20 $</span> - <span id="max-price">80 $</span></div>
    <input type="hidden" name="min-price" value="">
    <input type="hidden" name="max-price" value="">
    <div class="price-range">
        <div id="price" class="noUi-target noUi-ltr noUi-horizontal noUi-background"><div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 20%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 80%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>
    </div>
</div>
<div class="filter-sidebar">
    <div class="title"><span>Talla</span></div>
    <ul>
        <li>
            <div class="checkbox"><input type="checkbox" id="SCheckbox"><label for="SCheckbox">S (11)</label></div>
        </li>
        <li>
            <div class="checkbox"><input type="checkbox" id="MCheckbox"><label for="MCheckbox">M (12)</label></div>
        </li>
        <li>
            <div class="checkbox"><input type="checkbox" id="LCheckbox"><label for="LCheckbox">L (13)</label></div>
        </li>
        <li>
            <div class="checkbox"><input type="checkbox" id="XLCheckbox"><label for="XLCheckbox">XL (14)</label></div>
        </li>
    </ul>
</div>
</div>