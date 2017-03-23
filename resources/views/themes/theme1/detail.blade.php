@extends(Theme::current()->viewsPath.'.template')
    @section('css')
          @stop
    @section('content')
            <div class="container" ng-controller="detailProductController" ng-cloak="">
                <div class="row">
                    <div class="breadcrumbs">
                        <div class="container">
                            <ol class="breadcrumb breadcrumb--ys pull-left">
                                <li class="home-link"><a href="{{ url('/') }}" class="fa fa-home"></a></li>
                                <li><a href="{{ url('/products') }}">Todos</a></li>
                                <li class="active"><% product.name %></li>
                            </ol>
                        </div>
                    </div>
                    <div  class="col-sm-12 col-md-12" ng-class="{'col-lg-9': size(relations) >= 1}">
                        <div class="col-lg-12 col-sm-12">
                            <span class="title"><strong><% product.name%></strong></span>
                        </div>
                        <div class="col-lg-12 col-sm-12 hero-feature" >

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <!-- Main Image -->
                                    <div class="product-main-image-container">
                                        <img id="matrix" ng-src="<% product.images.data[0].url %>"
                                             alt="" style="max-height:420px" class="img-responsive"/>
                                    </div>
                                    <!-- End Main Image -->
                                    <!-- Thumbnail Image -->
                                    <div class="product-thumb-image" style="margin-top: 10px;margin-bottom: 10px">
                                        <div class="col-xs-6 col-md-4" ng-repeat="image in product.images.data | limitTo:3" ng-if="image">
                                            <a class="image-click thumbnail">
                                                <img ng-src="<% image.url %>" alt=""
                                                     style="max-height: 100px; min-height: 100px; width: 80px">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Thumbnail Image -->
                                </div>

                                <div class="visible-xs">
                                    <div class="clearfix"></div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="well product-short-detail">
                                        <div class="row">
                                            <div class="the-list">
                                                <h3 class="col-xs-12">
                                                    <div class="text-center">
                                                        <h2 style="color: #628ED8"><% product.name %></h2>
                                                        <hr>
                                                    </div>
                                                    <!-- <span class="price-old">$169</span> -->
                                                    <div class="text-center" ng-if="product.special_price > 0">
                                                        <strong>$ <% product.special_price | number:0%></strong>&nbsp;&nbsp;&nbsp;
                                                        <strong style="text-decoration: line-through; color: red;">$ <% product.price | number:0 %></strong>
                                                        <hr>
                                                    </div>
                                                    <div class="text-center" ng-if="!product.special_price">
                                                        <strong>$ <% product.price | number:0%></strong>&nbsp;&nbsp;&nbsp;
                                                        <hr>
                                                    </div>
                                                </h3>
                                            </div>
                                            <div class="the-list">
                                                <div class="col-xs-4"><strong>SKU</strong></div>
                                                <div class="col-xs-8"><span class="green"><% product.sku ? product.sku : 'NONE' %></span><hr></div>
                                                <div class="col-xs-4"><strong>Disponible</strong></div>
                                                <div class="col-xs-8"><span class="green">
                                                    <% product.stock == none || product.stock > 0 || product.stock == unlimited
                                                    ? 'En Stock ' + '(' + product.stock + ')' : 'Sin Stock' %>
                                                    </span><hr></div>
                                                <div class="col-xs-4"><strong>Medios de Pago</strong></div>
                                                <div class="col-xs-8">
                                                    <span class="green">
                                                        <img src="{{asset('administrator/imagesMediosdePago/payment-1.png')}}" alt="">
                                                        <img src="{{asset('administrator/imagesMediosdePago/payment-2.png')}}" alt="">
                                                        <img src="{{asset('administrator/imagesMediosdePago/payment-3.png')}}" alt="">
                                                        <img src="{{asset('administrator/imagesMediosdePago/payment-4.png')}}" alt="">
                                                    </span><hr>
                                                </div>
                                                <div ng-repeat="filter in filters"  ng-if="filter.name != ''">
                                                    <div class="col-xs-4" ><strong><% filter.name %></strong></div>
                                                    <div class="col-xs-8">
                                                        <span class="green">
                                                            <select class="form-control" style="width: 100px">
                                                                <option ng-repeat="value in filter.options"><% value.value %></option>
                                                            </select>
                                                        </span><hr>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="col-xs-4"><strong>Variantes:</strong></div>
                                                    <div class="col-xs-8">
                                                        <div ng-repeat="variant in product.variants.data" class="col-md-6 col-xs-12 pull-right" style="width: 100px; margin-right: 2px;">
                                                            <a href="{{ url('/') }}<% '/detail/' + product.slug + '/' +variant.id%>" >
                                                                <img ng-mousemove="updateImage(this)"  ng-src="<% variant.images.data[0].url %>"  alt=""  class="img-thumbnail img-clickEa"
                                                                     style="min-height: 120px;max-height: 120px;">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-12"><hr></div>
                                                    </div>
                                                </div>
                                                <div ng-repeat="property in properties">
                                                    <div class="col-xs-4"><strong><% property.name %>:</strong></div>
                                                    <div class="col-xs-8"><span ng-repeat="value in property.values"><% value.name %>, </span><hr></div>
                                                </div>
                                                <div class="col-xs-4" ><strong>Compartir</strong></div>
                                                <div class="col-xs-8">
                                                    <span class="green">
                                                        <a href="http://www.facebook.com/sharer.php?" class="noo-share" title="Share on Facebook">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                        <a href="http://twitter.com/share?" class="noo-share" title="Share on Twitter">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                        <a href="https://pinterest.com/pin/create/bookmarklet/?" class="noo-share" title="Share on Pinterest">
                                                            <i class="fa fa-pinterest"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <hr>
                                            <div class="col-xs-4 text-center">
                                                <!-- <input type="text" class="hidden input-qty-detail form-control input-qty text-center " value="1"> -->
                                            </div>
                                            <div ng-if="!product.stock == 0" class="col-xs-8" ng-controller="productIndexController" ng-cloak="">
                                                <span class="green">
                                                    <button class="btn btn-default pull-left" style="background-color: #2196F3; color: white"  ng-click="add(cartId , product)">
                                                        <i class="fa fa-shopping-cart"></i> Agregar al Carrito
                                                    </button>
                                                </span>
                                            </div>

                                            <div class="clearfix"></div><br>
                                            <div class="col-xs-12 add-to-detail">
                                                <div class="row">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div><br clear="all">

                                <div class="col-xs-12 product-detail-tab" ng-if="product.description">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#desc" data-toggle="tab" aria-expanded="true">Descripcion</a></li>
                                        <li class="hidden"><a href="#review" data-toggle="tab" aria-expanded="false">Comentarios</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="desc">
                                            <div class="well">
                                                <p align="justify" ng-bind-html="product.description | limitTo:250"></p>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="review">
                                            <div class="well">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+">
                                                        <div class="product-rating">

                                                        </div>
                                                    </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading"><strong>John Thor</strong></h5>
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" alt="64x64" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+">
                                                        <div class="product-rating">

                                                        </div>
                                                    </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading"><strong>Michael</strong></h5>
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4>Comentarios</h4>
                                                <p></p>
                                                <form role="form">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">

                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="5" placeholder="Your Review"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-default">Enviar comentario</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div ng-show="size(relations) >= 1" class="col-lg-3 col-md-3 col-sm-12">
                        <div class="no-padding">
                            <span class="title"><strong>Productos Relacionados</strong></span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 visible-lg visible-md">

                            <div class="thumbnail col-lg-12 col-md-12 col-sm-6 text-center" ng-repeat="relation in relations | limitTo:2">
                                <a href="{{ url('/') }}<% '/detail/' + relation.slug %>">
                                    <img src="<% relation.images.data[0].url %>"
                                         style="max-height: 200px; min-height: 200px" alt="">
                                </a>
                                <div class="caption prod-caption">
                                    <h4><a href="{{ url('/') }}<% '/detail/' + relation.slug %>"><% relation.name %></a></h4>
                                    <div class="btn-group"  ng-if="relation.special_price">
                                        <a href="#" class="btn btn-default btn-xs">
                                            <strong style="color: red; text-decoration: line-through;">$<% relation.price | number:0 %></strong>
                                            <a  class="btn btn-default btn-xs"><strong>$<% relation.special_price | number:0 %></strong></a>
                                        </a>
                                        <a class="btn btn-primary btn-xs" ng-hide="relation.stock == 0" ng-click="add(cartId , relation)">
                                            <i class="fa fa-shopping-cart"> Agregar</i>
                                        </a>
                                    </div>
                                    <div class="btn-group"  ng-if="!relation.special_price">
                                        <a  class="btn btn-default btn-xs"><strong>$<% product.price | number:0 %></strong></a>
                                        <a class="btn btn-primary btn-xs" ng-hide="relation.stock == 0" ng-click="add(cartId , relation)">
                                            <i class="fa fa-shopping-cart"></i> Agregar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @endsection
    @section('script')
        <script type="text/javascript">
            $(document).on('ready' , function(){
                $('div').on('click','.image-click', function(e){
                    e.preventDefault();
                    var image = $(this).find('img').attr('src');
                    $('#matrix').attr('src', image);
                });
            });
        </script>
    @stop
