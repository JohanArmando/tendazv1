@section('title')
Mis productos
@stop
@extends('layouts.administrator')
    @section('css')
        <style>
            th.image {
                width: 12px;
            }
            th.variants {
                min-width: 475px;
            }
            .sub-col {
                display: inline-block;
                min-width: 65px;
            }
            .m-half-right {
                margin-right: 10px;
            }
            .values-heading {
                margin-left: 5px;
            }
            .total.actions {
                width: 200px;
            }
            #product-table .vm  .check{
               margin-top: 10px !important;
            }

            #product-table .vm  a .check{
                margin-top: 100px !important;
            }
            #product-table td {
                padding: 20px 10px;
            }
            #product-table tbody td.image {
                width: 50px;
                padding: 15px 5px 4px 0;
            }
            .box-social {
                background: #ccc;
                color: #fff;
                width: 25px;
                height: 25px;
                display: inline-block;
                border-radius: 2px;
                line-height: 25px;
                text-align: center;
                float: left;
                margin-left: 5px;
                cursor: pointer;
                margin-bottom: 5px;
            }
            #product-table tbody tr td .box-social:hover{
                color: white;
            }
            #product-table tbody tr td .fb-share:hover {
                background-color: #3B5998 ;
            }
            #product-table tbody tr td .tw-share:hover{
                background-color: #2AA9E0 ;
            }
            #product-table tbody tr td .gp-share:hover{
                background-color: #D95433 ;
            }
            a:visited .box-social{
                color: white;
            }

            #product-table ul {
                padding: 0;
            }
            .actions-col {
                float: left;
                width: 100%;
                margin: 5px 0 0 25px;
            }
            .fa-ul {
                margin-left: 2.14285714em;
            }
            .fa-ul>li {
                text-align: left;
                position: relative;
            }
            .list-unstyled, .list-unstyled>ul {
                min-width: 120px;
            }
            .variant-list {
                margin: 0;
            }
            .variant-list li {
                margin: 15px 0 2px;
                width: 100%;
                padding: 0 4px;
                height: inherit;
                display: inline-block;
            }

            .attribute-form {
                float: left;
                padding-left: 0;
            }
            #product-table span.label, span.label.important {
                color: #333;
            }
            .variant-list li .attributes span.stock-count {
                min-width: 40px;
                margin-right: 20px;
                margin-left: 0px;
            }
            .variant-list li .attributes span, .variant-list li .attributes span.label {
                color: #fff;
                background-color: #bfbfbf;
            }
            .variant-list li .attributes span {
                margin: 0 8px 5px 5px;
                font-size: 13px;
                line-height: 25px;
                cursor: pointer;
                min-width: 70px;
                display: inline-block;
                font-weight: 700;
                padding: 1px 3px 2px;
                border-radius: 3px;
                height: inherit;
            }
            .v-hidden{
                visibility:  hidden;
            }
            .price-promotional{
                margin-left: 10px !important;
                width: 80px !important;
            }
            .values {
                width: 200px;
                float: left;
                text-align: left;
                margin: -5px 0 0 90px;
            }
            .variant-list li p {
                font-size: 13px;
                line-height: 18px;
                margin: 0 5px 0 -40px;
                display: inline-block !important;
            }
            [ng\:cloak], [ng-cloak], .ng-cloak {
                display: none !important;
            }
            .stock-form .attribute-edit input {
                width: 40px;
            }
            .attribute-edit input {
                width: 70px;
                padding: 1px 3px 2px;
                margin: 0 8px 5px 5px;
                text-align: center;
            }
            table .form-control{
                height: 28px !important;
                width: 40px !important;
                padding: 1px 3px 2px !important;
                margin: 0 20px 5px 0px !important;
                text-align: center !important;
            }
            .price{
                width: 80px !important;
                margin: 0 20px 5px 5px !important;
            }
            .price_promotion{
                width: 80px !important;
                margin: 0 8px 5px 10px !important;
            }

            .controls {
                border: 1px solid #d7e4ea;
                font-size: 11px;
                border: none;
                overflow: hidden;
                margin-bottom: 25px;
            }
            #product-count {
                color: #333;
                margin: 10px 0 40px 15px !important;
                font-size: 1.2em;
            }
        </style>
        @stop
    @section('content')
        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title">
                    <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/products.png')}}">&nbsp; Productos 
                </h4>
            </div>
            <div class="page-header-section">
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                        <li><a href="#" style="color: orange;">Productos</a></li>
                        <li class="active" style="color: orange;">Mis Productos</li>
                    </ol>
                </div>
            </div>
        </div>
        <br>
        @include('admin.partials.message')
        <div class="row" ng-app="Product" ng-controller="controllerProducts">
            {{-- @include('admin.partials.product.index.filter_advanced') --}}
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-list-ul"></i> <strong>Mis Productos</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @include('admin.partials.product.index.accions')
                            <span id="product-count" class="note count ng-cloak" ng-show="selecteds() > 0">@{{ selecteds() }} producto@{{ selecteds() > 1 ? 's' : '' }} seleccionado@{{ selecteds() > 1 ? 's' : '' }} 
                            </span>
                            <br>
                            <table class="table table-striped" id="product-table"  ng-hide="preload">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="checkbox custom-checkbox pull-left"
                                                 data-original-title="Seleccionar todos"
                                                 data-toggle="tooltip"
                                                 data-placement="right">
                                                <input id="all-products"  type="checkbox"  ng-change="allSelects()" ng-model="confirmed" >
                                                <label for="all-products"></label>
                                            </div>
                                        </th>
                                        <th class="image text-center">&nbsp;</th>
                                        <th class="product">Producto</th>
                                        <th class="variants">
                                            <span class="sub-col">Stock</span><span></span>
                                            <span class="sub-col m-half-right ">Precio Original</span><span></span>
                                            <span class="sub-col m-half-right  ">Precio Promocional</span><span></span>
                                            <!-- <span class="values-heading  ">Variante</span> -->
                                        </th>
                                        <th  class="total actions">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <tr dir-paginate="product in products
                                        | filter:search
                                        | orderBy:order
                                        | filter : { categories : category }
                                        | filter : { stock : stock }
                                        | itemsPerPage: pageSize
                                        | filter: { price_promotion : price_promotion}
                                        | filter: {visible : show}  " class="ng-cloak" ng-show="product.show">
                                    <td class="vm">
                                        <div class="checkbox custom-checkbox pull-left check" data-original-title="Seleccionar @{{ product.name }}" data-toggle="tooltip" data-placement="right">
                                            <input id="product_@{{ product.product_id }}"  ng-model="product.select" type="checkbox"  ng-checked="all">
                                            <label for="product_@{{ product.product_id }}"></label>
                                        </div>
                                    </td>
                                    <td class="image vm c">
                                        <label for="1">
                                            <img ng-src="@{{ product.images.data[0].url }}" alt="" title="" width="50"  height="50" ng-if="product.images.data[0] && !product.meli" class="img-circle">
                                            <img ng-src="{{ asset('administrator/image/noImage.png') }}" alt="" title="" width="50"  height="50" ng-if="!product.images.data[0]">
                                        </label>
                                    </td>
                                    <td class="vm">
                                        <span>
                                            <a  href="@{{  BASEURL + '/admin/products/' + 'edit/'+ product.product_id }}" title="" class=" check pjax-link">@{{ product.name }}</a>
                                        </span>
                                    </td>
                                    <td>
                                            <ul class="list-unstyled variant-list row" ng-repeat="variant in product.variants.data | stockFilter:stock:product">
                                            <li class="fl text-center m-bottom">
                                                <div class="attributes">
                                                    <div class=" ">
                                                        <div class="attribute-form stock-form"  >
                                                            <span class="attribute-value stock-count label"
                                                                  ng-show="!variant.span.stock"
                                                                  title="Modificar stock"
                                                                  data-content="Haz click para poder modificarlo"
                                                                  ng-click="showInput(variant , 'stock')"
                                                                  ng-bind-html=" variant.stock == 'unlimited' ? '∞' : variant.stock | html">
                                                            </span>
                                                            <div class="attribute-edit"
                                                                 ng-show="variant.span.stock">
                                                                <input type="text"
                                                                       onfocus="this.select();"
                                                                       id="variant_stock@{{ variant.id }}"
                                                                       class="form-control"
                                                                       focus-if="variant.stock"
                                                                       my-enter="update(variant , 'stock')"
                                                                       ng-blur="update(variant , 'stock')"
                                                                       name="stock" value="@{{ variant.stock == 'unlimited' ? 0 :variant.stock }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="attribute-form price-form">
                                                            <span class="attribute-value price label"
                                                                  title="Modificar precio"
                                                                  ng-show="!variant.span.price"
                                                                  ng-click="showInput(variant , 'price')"
                                                                  data-content="Haz click para poder modificarlo">$ @{{ variant.price | currency:"":0}}
                                                            </span>
                                                            <div class="attribute-edit" ng-show="variant.span.price">
                                                                <input type="text"
                                                                       class="form-control price"
                                                                       onfocus="this.select();"
                                                                       focus-if="variant.span.price"
                                                                       id="variant_price@{{ variant.id }}"
                                                                       name="price"
                                                                       ng-blur="update(variant , 'price')"
                                                                       my-enter="update(variant , 'price')"
                                                                       value="@{{ variant.price }}" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=" ">
                                                        <div class="attribute-form price-form" ng-class="{'v-hidden' : variant.promotion_price == 0 || variant.promotion_price == null}">
                                                            <span class="attribute-value price-promotional label"
                                                                  title="Modificar precio promocional"
                                                                  ng-show="!variant.span.promotion_price"
                                                                  ng-click="showInput(variant , 'promotion_price')"
                                                                  data-content="Haz click para poder modificarlo">
                                                                $@{{ variant.promotion_price | currency:"":0}}
                                                            </span>
                                                            <div class="attribute-edit" ng-show="variant.span.promotion_price">
                                                                <input type="text"
                                                                       onfocus="this.select();"
                                                                       id="variant_price_promotion@{{ variant.id }}"
                                                                       class="form-control price_promotion"
                                                                       name="price_promotion"
                                                                       ng-blur="update(variant , 'promotion_price')"
                                                                       my-enter="update(variant , 'promotion_price')"
                                                                       value="@{{ variant.promotion_price | currency:"":0}}"
                                                                       focus-if="variant.span.promotion_price">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-1 col-xs-2" ng-if="variant.data.length > 0">
                                                    <div class="values">
                                                        <p class="note" ng-repeat="value in variant.data">@{{ value.value + ' | ' }} </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-right vm">
                                        <a  ng-click="shareFacebook(product)" id="share_facebook@{{ variant.id }}" class="box-social fb-share" data-share-url="@{{ urlBase + '/detail-product/sasasas/'+ '?utm_source=facebook&amp;utm_medium=social&amp;utm_campaign=insta-social' }}">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a ng-click="shareTwitter(product)" id="share_twitter@{{ variant.id }}"class="box-social tw-share " data-share-url="@{{ urlBase + '/detail-product/sasasas/'+ '?utm_source=twitter&amp;utm_medium=social&amp;utm_campaign=insta-social'}}" data-description="�Chequea nuestro producto! Si te gusta podes ayudarnos con un RT :)">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a  ng-click="shareGoogle(product)"  id="share_google@{{ variant.id }}" class="box-social gp-share" data-share-url="@{{ urlBase + '/detail-product/sasasas/'+ '?utm_source=google-plus&amp;utm_medium=social&amp;utm_campaign=insta-social'}}">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                        <ul class="fa-ul actions-col ">
                                            <li>
                                                <a href="@{{ BASEURL + '/admin/products/' + 'edit/'+ product.product_id }}" title="Modificar" class="edit pjax-link">
                                                    <i class="fa-li fa fa-pencil-square-o"></i> <strong class="">Editar</strong>
                                                </a>
                                            </li>
                                            <li>
                                                <a  ng-click="delete(product.product_id , $index)" confirm-if="checked" confirm="Estas seguro que quieres eliminar el producto, @{{ product.name }}?"  confirm-title="Eliminar producto" confirm-ok="Yes" confirm-cancel="No" style="cursor: pointer">
                                                    <i class="fa-li fa fa-trash-o"></i><strong class="">Eliminar</strong>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <span id="product-count" class="note count text-primary ng-cloak"  data-ng-show="(products | filter:{ price_promotion : price_promotion}).length==0">No hay productos con precio promocional</span>
                            <span id="product-count" class="note count text-primary ng-cloak"  data-ng-show="(products | filter:{ visible : show}).length==0">Todos tus productos estan ocultos</span>
                            <span id="product-count" class="note count text-primary ng-cloak"  data-ng-show="(products | filter:search).length==0">No se encontraron productos</span>
                            <div class="col-md-2 col-md-offset-5 spin" ng-show="preload">
                                <i class="fa fa-spinner fa-pulse fa-4x fa-fw " style="color: #F26522"></i><p style="margin: 5px 0 0 5px;color: #F26522">Cargando</p>
                            </div>
                            <div class="row">
                                <div class="col-xs-4"></div>
                                <div class="col-xs-4 col-xs-offset-1">
                                    <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" >

                                    </dir-pagination-controls>
                                </div>
                                <div class="col-xs-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-end-space"></div>
       </div>
    @endsection

    @section('scripts')

        <script src="{{ asset('administrator/angular/angular.min.js') }}"></script>
        <script src="{{ asset('administrator/angular/pagination.js') }}"></script>
        <script src="{{ asset('administrator/angular/ui-bootstrap.min.js') }}"></script>
        <script src="{{ asset('administrator/angular/focusIf.min.js') }}"></script>
        <script src="{{ asset('administrator/angular/angular-confirm.min.js') }}"></script>
        <script src="{{ asset('components/js/angularSanitize.min.js') }}"></script>
        <script src="{{ asset('administrator/angular/moduleProducts.js') }}"></script>
        <script src="{{ asset('administrator/js/angular-locale-es_es.js')}}"></script>
    @stop
