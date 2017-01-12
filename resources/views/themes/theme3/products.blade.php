@extends(Theme::current()->viewsPath.'.template')
    @section('css')
        <style>
            /** no borrar **/
            .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
                z-index: 2;
                color: #fff;
                cursor: default;
                background-color: #79CBA8;
                border-color: #79CBA8;
            }
            .pagination>li>a, .pagination>li>span {
                position: relative;
                float: left;
                padding: 6px 12px;
                margin-left: -1px;
                line-height: 1.42857143;
                color: #79CBA8;
                text-decoration: none;
                background-color: #fff;
                border: 1px solid #ddd;
            }
        </style>
        @stop
    @section('content')
            <div class="commerce noo-shop-main" ng-controller="productController" ng-cloak="">
                <div class="container">
                    <div class="row">
                        @include(Theme::current()->viewsPath.'.partials.category-product')
                         <div class="no-main col-md-9">
                             <div style="border: 1px solid #F4EEDE !important; margin: 15px 15px 15px 15px">
                                 <div style="margin: 15px 15px 15px 15px">
                                    <span class="title"><a href="{{ url('/products') }}"><strong>Todos los Productos</strong></a>
                                    <span ng-repeat="ancestor in ancestors" > |
                                        <a  ng-class="{active : cate == ancestor.slug }" href="<% BASEURL + '/products/' + ancestor.slugable %>">
                                            <% ancestor.name %></a>
                                    </span>
                                    </span>
                                 </div>
                             </div>
                             <div class="page-title eff">
                                 <h2 class="text-center"><% cate ? cate : 'Todos los productos' %></h2>
                             </div>
                             <div class="offset-top-20">
                                 <p class="light-font text-center" ng-if="products.length <= 0">No hay productos en esta categoria</p>
                                 <p class="light-font text-center" ng-if="products.length > 0 && cate != ''"><% notAvaliable %></p>
                             </div>
                             <br><br>


                             <div class="noo-catalog">
                                 <p class="commerce-result-count" style="margin: 30px 15px 15px 15px">
                                     Mostrando <% filtered.length %>  de <% products.length %> Item(s)
                                 </p>


                                 <div class="row">
                                     <form class="commerce-ordering" style="margin-left: 10px;">
                                         <select name="show" tabindex="-1" aria-hidden="true" ng-model="itemsPerPage" class="orderby">
                                             <option value="10">10</option>
                                             <option value="15">15</option>
                                             <option value="25">25</option>
                                             <option value="50">50</option>
                                             <option value="100">100</option>
                                         </select>
                                    </form>

                                 <form class="commerce-ordering">
                                     <select name="sortby" ng-click="sortBy(propertyName)" ng-model="propertyName" class="orderby">
                                         <option value="" selected='selected'>Ordenar Por</option>
                                         <option value="name">Nombre</option>
                                         <option value="price">Precio</option>
                                         <option value="promotion">Promocion</option>
                                         <option value="created_at">Fecha</option>
                                     </select>
                                 </form>
                                 </div>

                                    <div class="products row product-list">
                                     <div class="masonry-item noo-product-column col-md-4 col-sm-6 product"
                                          dir-paginate="product in filtered = (products  | itemsPerPage: itemsPerPage | orderBy:propertyName:reverse)">
                                         <div class="noo-product-inner">
                                             <div class="noo-product-thumbnail">
                                                 <a href="<% BASEURL + '/detail/' + product.slug %>">
                                                     <br>
                                                     <img ng-src="<% product.images.data[0].url %>">
                                                 </a>
                                             </div>
                                             <div style="padding: 0 0 0 10px" class="noo-product-title">
                                                 <h3><a href="<% BASEURL + '/detail/' + product.slug %>"><% product.name %></a></h3>
                                                 <span class="price" ng-if="product.special_price">
                                                     <span class="amount" style="font-size: 15px; color: rgba(204, 198, 187, 0.89)">Antes $<% product.price | number:0 %></span><br>
                                                     <span>Ahora $<% product.special_price | number:0 %></span>
                                                 </span>
                                                 <span class="price" ng-if="!product.special_price">
                                                     <span>$<% product.price | number:0 %></span>
                                                 </span>
                                                 <p ng-bind-html="product.description | limitTo:150"></p>
                                                 <div class="noo-product-action">
                                                     <div class="noo-action">
                                                         <a ng-hide="product.stock == 0" ng-click="add(product)" class="button product_type_simple add_to_cart_button">
                                                             <span><i class="fa fa-shopping-cart"></i> Agregar <span class="hidden-xs">Al Carrito</span></span>
                                                         </a>
                                                         <div class="yith-wcwl-add-to-wishlist">
                                                             <div class="yith-wcwl-add-button">
                                                                <i class="fa fa-plus"></i>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             <div class="no-main col-md-12">
                                 <div class="pagination list-center" style="margin-left: 35% !important;">
                                     <dir-pagination-controls></dir-pagination-controls>
                                 </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
            </div>
        @endsection
    @section('script')
        <script type='text/javascript' src='{{asset('themes_tendaz/theme3/js/price-slider.js')}}'></script>
        @endsection