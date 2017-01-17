@extends(Theme::current()->viewsPath.'.template')
    @section('css')
        @stop
    @section('content')
            <div class="container">
                <div class="row">

                <div ng-controller="productController" ng-cloak="">
                    <div class="col-lg-9 col-md-9 col-sm-12" ng-controller="productIndexController" ng-cloak="">
                        <div>
                            <span class="title"><a href="{{ url('/products') }}"><strong>Todos los Productos</strong></a>
                            <span ng-repeat="ancestor in ancestors" > |
                                <a  ng-class="{active : cate == ancestor.slug }" href="<% BASEURL + '/products/' + ancestor.slugable %>">
                                    <% ancestor.name %></a>
                            </span>
                            </span>
                        </div>
                        <div class="title-box">
                            <h2 class="text-center text-uppercase title-under"><% cate ? cate : 'Todos los productos' %></h2>
                        </div>
                        <h4 class="text-center text-uppercase">
                            <small>{{ !Request::input('search') ?'': "Buscando '". Request::input('search') ."' en $shop->name" }}</small>
                        </h4>

                        <div class="offset-top-20">
                            <p class="light-font text-center" ng-if="products.length <= 0">No hay productos en esta categoria</p>
                            <p class="light-font text-center" ng-if="products.length > 0 && cate != ''"><% notAvaliable %></p>
                        </div>
                        <div>
                            <hr>
                            <table style="width: 100%">
                                <tr>
                                    <td>
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
                                    </td>
                                    <td>
                            <div>Mostrar
                                <select name="show" tabindex="-1" aria-hidden="true" ng-model="itemsPerPage" style="height: 33px; width: 50px !important;">
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                                    </td>
                                    <td>
                            <div>
                                <p style="margin-top: 5px">Mostrando <% filtered.length %>  de <% products.length %> Item(s)</p>
                            </div>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                        </div>

                        <div class="col-sm-12 col-md-4"  dir-paginate="product in filtered = (products  | itemsPerPage: itemsPerPage | filter:search | orderBy:propertyName:reverse)">
                            <div class="hero-feature text-center">
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

                    <div class="col-lg-3 col-md-3 col-sm-12">

                        <!-- Categories -->
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="no-padding">
                                <span class="title"><strong>Categorias</strong></span>
                            </div>
                            <div class="filter-sidebar" ng-controller="categoryTemplateController" ng-init="x = 1" ng-cloak="">
                                <div class="list-group panel panel-cat">
                                    <a href="{{url('/products')}}" class="list-group-item">Todas los Productos</a>
                                    <a  ng-repeat="category in categories"
                                        href="<% slug ? 'products' + slug + '/' + category.slug : 'products'  + '/' +category.slug %>" class="list-group-item">
                                        <i class="fa fa-arrow-circle-right"></i> <% category.name %></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Categories -->

                        <!-- Categories -->
                        <div class="col-lg-12 col-md-12 col-sm-6 hidden">
                            <div class="no-padding">
                                <span class="title"><strong>Otros</strong></span>
                            </div>
                            <div class="filter-sidebar" >
                                <div>
                                    <p align="justify">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium atque beatae,
                                    blanditiis cum ea esse est fugiat in labore libero molestiae, nam, natus quod rem
                                    repudiandae saepe ut? Cupiditate, ratione.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Categories -->

                    </div>
                    <div class="clearfix visible-sm"></div>

                </div>
            </div>
        @endsection
    @section('scripts')
        <script>
            var search = "{{ Request::input('search') }}"
        </script>
        @stop