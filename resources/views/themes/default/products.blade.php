@extends('themes.default.template')
    @section('css')
        @stop
    @section('content')
            <div class="row" ng-controller="productController" ng-cloak="">

                    <div class="col-sm-3">
                        @include('themes.default.partials.filter-left')
                    </div>
                <div class="col-md-9">
                    <div class="title">
                        <span><a href="{{ url('/products') }}">Todos los Productos</a></span>
                        <span ng-repeat="ancestor in ancestors" > |
                            <a  ng-class="{active : cate == ancestor.slug }" href="<% BASEURL + '/products/' + ancestor.slugable %>"><% ancestor.name %></a>
                        </span>
                    </div>
                    <div class="title-box">
                        <h2 class="text-center text-uppercase title-under"><% cate ? cate : 'Todos los productos' %></h2>
                    </div>

                    <div class="offset-top-20">
                        <p class="light-font text-center" ng-if="products.length <= 0">No hay productos en esta categoria</p>
                        <p class="light-font text-center" ng-if="products.length > 0 && cate != ''"><% notAvaliable %></p>
                    </div>
                    <h4 class="text-center text-uppercase">
                        <small>{{ !Request::input('search') ?'': "Buscando '". Request::input('search') ."' en $shop->name" }}</small>
                    </h4>
                    <div class="product-sorting-bar">
                        <div>
                            Ordenar por:
                            <select name="sortby" ng-click="sortBy(propertyName)" ng-model="propertyName" style="height: 33px; width: 100px !important;">
                                <option value="name">Nombre</option>
                                <option value="price">Precio</option>
                                <option value="promotion">Promocion</option>
                                <option value="created_at">Fecha</option>
                            </select>
                            <a href="#" class="sort-direction fa fa-arrow-up active" ng-show="!reverse"></a>
                            <a href="#" class="sort-direction fa fa-arrow-down active" ng-show="reverse"></a>
                        </div>
                        <div>Mostrar
                            <select name="show" tabindex="-1" aria-hidden="true" ng-model="itemsPerPage" style="height: 33px; width: 50px !important;">
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div>
                            <p style="margin-top: 5px">Mostrando <% filtered.length %>  de <% products.length %> Item(s)</p>
                        </div>
                        <div>
                            <form>
                                <div class="search-input">
                                    <input type="text" class="form-control" placeholder="Buscar productos...">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3"  dir-paginate="product in filtered = (products  | itemsPerPage: itemsPerPage | filter:search | orderBy:propertyName:reverse)">
                        <div class="box-product-outer">
                            <div ng-include="'tpl.html'"></div>
                            </div>
                        </div>
                    <div class="col-xs-12 text-center">
                        <div class="filters-row__pagination">
                            <dir-pagination-controls></dir-pagination-controls>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    @section('script')
        <script>
            var search = "{{ Request::input('search') }}"
        </script>
        @stop