@extends('themes.default.template')
    @section('css')
           @stop
    @section('content')
            <div class="row" ng-controller="detailProductController" ng-cloak="">
                <div class="breadcrumbs">
                    <div class="container">
                        <ol class="breadcrumb breadcrumb--ys pull-left">
                            <li class="home-link"><a href="{{ url('/') }}" class="fa fa-home"></a></li>
                            <li><a href="{{ url('/products') }}">Todos</a></li>
                            <li class="active"><% product.name %></li>
                        </ol>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="image-detail">
                        <a href="<% image.url %>">
                        <img id="matrix" ng-src="<% product.images.data[0].url %>"
                              alt="" style="min-height: 400px;max-height: 400px"></a>
                    </div>

                    <!-- sliders image --->
                    <div  class="products-slider-detail owl-carousel owl-theme owl-loaded owl-text-select-on">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" >
                                <div ng-repeat="image in product.images.data | limitTo:3" ng-if="image"
                                     class="owl-item active" style="width: 100px; margin-right: 5px;">
                                    <a>
                                        <img ng-src="<% image.url %>"  alt="" onclick="updateImage(this)" class="img-thumbnail img-clickEa"
                                             style="min-height: 120px;max-height: 120px;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="title-detail"><h2><% product.name %></h2></div>
                    <table class="table table-detail">
                        <tbody>
                        <tr ng-if="product.sku">
                            <td>SKU</td>
                            <td class="text-success"><% product.sku ? product.sku : 'NONE' %></td>
                        </tr>
                        <tr>
                            <td>Disponible</td>
                            <td>
                                <div class="input-qty">
                                    <% product.stock == none || product.stock > 0 || product.stock == unlimited
                                    ? 'En Stock ' + '(' + product.stock + ')' : 'Sin Stock' %>
                                </div>
                            </td>
                        </tr>
                        <tr class="price-box product-info__price" ng-if="product.special_price > 0">
                            <td>Precio</td>
                            <td>
                            <span class="price-box__new">$ <% product.special_price | number:0%></span>
                            <span class="price-box__old" style="text-decoration: line-through; color: red">$ <% product.price | number:0 %></span>
                            </td>
                        </tr>
                        <tr class="price-box product-info__price" ng-if="!product.special_price">
                            <td>Precio</td>
                            <td>
                            <span class="price-box__new">$ <% product.price | number:0%></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Cantidad</td>
                            <td>
                                <div class="pull-left">
                                    <button ng-click="product.quantity = product.quantity > 1 ? product.quantity - 1 : 1" class="btn btn-default bootstrap-touchspin-down" type="button">-</button>
                                </div>
                                <div class="pull-left">
                                    <input type="text" class="form-control input-qty text-center" ng-model="product.quantity ? product.quantity : 1 " value="<% product.quantity ? product.quantity : 1 %>">
                                </div>
                                <div class="pull-left">
                                    <button class="btn btn-default bootstrap-touchspin-up" type="button" ng-click="product.quantity = product.quantity + 1">+</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Medios de Pago</td>
                            <td>
                                <img src="{{asset('administrator/imagesMediosdePago/payment-1.png')}}" alt="">
                                <img src="{{asset('administrator/imagesMediosdePago/payment-2.png')}}" alt="">
                                <img src="{{asset('administrator/imagesMediosdePago/payment-3.png')}}" alt="">
                                <img src="{{asset('administrator/imagesMediosdePago/payment-4.png')}}" alt="">
                            </td>
                        </tr>
                        <tr ng-repeat="filter in filters"  ng-if="filter.name != ''">
                            <td><% filter.name %> :</td>
                            <td>
                                <select class="form-control" style="width: 100px">
                                    <option ng-repeat="value in filter.options"><% value.value %></option>
                                </select>
                            </td>
                        </tr>
                        <tr ng-if="!product.stock == 0" ng-controller="productIndexController" ng-cloak="">
                            <td class="btn-action"></td>
                            <td class="text-left">
                                <a class="btn btn-sm"  ng-click="add(cartId , product)">
                                    <i class="fa fa-shopping-cart"></i>
                                    Agregar al Carrito</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Comparte:</td>
                            <td>
                                <div class="noo-social-share">
                                    <a href="http://www.facebook.com/sharer.php?" class="noo-share" title="Share on Facebook">
                                        <i class="fa fa-facebook fa-2x"></i>
                                    </a>
                                    <a href="http://twitter.com/share?" class="noo-share" title="Share on Twitter">
                                        <i class="fa fa-twitter fa-2x"></i>
                                    </a>
                                    <a href="https://pinterest.com/pin/create/bookmarklet/?" class="noo-share" title="Share on Pinterest">
                                        <i class="fa fa-pinterest fa-2x"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                        </tr>

                        </tbody>
                    </table>
                    @include('themes.default.partials.detail-product-coment')
                </div>
                <div class="clearfix"></div>
            </div>


            <!-- products relations-->
            <div class="row row-related" ng-show="size(relations) >= 1" ng-controller="detailProductController" ng-cloak="">
                <div class="col-xs-12">
                    <div class="title">Productos Relacionados</div>
                    <div class="col-sm-3 col-md-2 box-product-outer" ng-repeat="relation in relations ">
                        <div class="box-product" style="min-height: 270px !important;">
                            <div class="img-wrapper">
                                <a href="{{ url('/') }}<% '/detail/' + relation.slug %>">
                                <img src="<% relation.images.data[0].url %>" style="max-height: 200px; min-height: 200px" alt="">
                                </a>
                                <div ng-if="!relation.stock == 0" class="option" ng-click="add(cartId , relation)">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom"
                                       title="Agregar al carrito">
                                        <i class="ace-icon fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <h6 class="text-center">
                                <a href="{{ url('/') }}<% '/detail/' + relation.slug %>"><% relation.name %>
                                </a>
                            </h6>
                            <div class="price text-center"  ng-if="relation.special_price">
                                <span>$<% relation.special_price | number:2 %></span>
                                <span class="price-old">$<% relation.price | number:2 %></span>
                            </div>
                            <div class="price text-center" ng-if="!relation.special_price">
                                $<% relation.price | number:2 %>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
           @endsection
    @section('script')
        <script type="text/javascript">
            $(document).on('ready' , function(){
                updateImage = function(img){
                    var image = img.src;
                    $('#matrix').attr('src', image);
                };
            });
        </script>
           @stop