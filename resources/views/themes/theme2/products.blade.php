@extends(Theme::current()->viewsPath.'.template')
    @section('css')
           @stop
    @section('content')
            <div class="container" ng-controller="productController" ng-cloak="">
                <div class="col-md-3">
                    @include(Theme::current()->viewsPath.'.partials.category')
                </div>
                <div class="col-md-9">
                    <div class="box">
                        <div>
                            <span class="title"><a href="{{ url('/products') }}"><strong>Todos los Productos</strong></a>
                            <span ng-repeat="ancestor in ancestors" > |
                                <a  ng-class="{active : cate == ancestor.slug }" href="<% BASEURL + '/products/' + ancestor.slugable %>">
                                    <% ancestor.name %></a>
                            </span>
                            </span>
                        </div>
                    </div>
                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Mostrando <% filtered.length %>  de <% products.length %> Item(s)
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Ordenar por</strong>
                                                <select name="show" tabindex="-1" aria-hidden="true" ng-model="itemsPerPage" class="form-control">
                                                    <option value="10">10</option>
                                                    <option value="15">15</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Ordenar por</strong>
                                                <select name="sortby" ng-click="sortBy(propertyName)" ng-model="propertyName" class="form-control">
                                                    <option value="name">Nombre</option>
                                                    <option value="price">Precio</option>
                                                    <option value="promotion">Promocion</option>
                                                    <option value="created_at">Fecha</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row products">
                        <div class="col-md-4 col-sm-6" dir-paginate="product in filtered = (products  | itemsPerPage: itemsPerPage | orderBy:propertyName:reverse)">
                            <div ng-include="'tpl.html'"></div>
                            <!-- /.product -->
                        </div>
                    </div>
                    <div class="col-xs-12 col-dm-8 text-center">
                        <div class="filters-row__pagination">
                            <dir-pagination-controls></dir-pagination-controls>
                        </div>
                    </div>
                </div>
            </div>
           @endsection
    @section('script')
           @stop