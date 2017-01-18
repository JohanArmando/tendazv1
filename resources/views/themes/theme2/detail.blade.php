@extends(Theme::current()->viewsPath.'.template')
@section('css')
@stop
@section('content')
    <div class="container" ng-controller="detailProductController" ng-cloak="">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-5">
                    <div class="box">
                        <div>
                            <img  id="matrix" ng-src="<% product.images.data[0].url %>"
                                  alt="" style="max-height:550px" class="img-responsive" />
                        </div>
                    </div>
                    <div class="box col-xs-12" style="display: inline-block">
                        <div class="col-xs-4" ng-repeat="image in product.images.data | limitTo:3"
                             ng-if="image" style="margin-top: 10px">
                            <a href="#" class="image-click thumb active">
                                <img ng-src="<% image.url %>" alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="box">
                        <h1 class="text-center" style="color: #3DA892"><% product.name%></h1>
                        <hr>
                        <div class="text-center" ng-if="product.special_product > 0">
                            <strong style="font-size: 25px" class="price">$ <% product.special_product | number:0%></strong>&nbsp;&nbsp;&nbsp;
                            <strong class="price" style="font-size: 25px;text-decoration: line-through; color: red">$ <% product.price | number:0 %></strong>
                        </div>
                        <div class="text-center" ng-if="!product.special_product">
                            <strong style="font-size: 25px" class="price">$ <% product.price | number:0%></strong>&nbsp;&nbsp;&nbsp;
                        </div>
                        <hr>
                        <br><br>
                        <div class="the-list">
                            <div class="col-xs-6 text-center"><strong>SKU</strong></div>
                            <div class="col-xs-6 text-center">
                                <span class="green"><% product.sku ? product.sku : 'NONE' %></span><hr>
                            </div>
                            <div class="col-xs-6 text-center"><strong>Disponible</strong></div>
                            <div class="col-xs-6 text-center">
                                <span class="green">
                                    <% product.stock == none || product.stock > 0 || product.stock == unlimite ? 'En Stock ' + '(' + product.stock + ')' : 'Sin Stock' %>

                                </span><hr>
                            </div>
                            <div class="col-xs-6 text-center"><strong>Medios de Pago</strong></div>
                            <div class="col-xs-6 text-center">
                                                    <span class="green">
                                                        <img src="{{asset('administrator/imagesMediosdePago/payment-1.png')}}" alt="">
                                                        <img src="{{asset('administrator/imagesMediosdePago/payment-2.png')}}" alt="">
                                                        <img src="{{asset('administrator/imagesMediosdePago/payment-3.png')}}" alt="">
                                                        <img src="{{asset('administrator/imagesMediosdePago/payment-4.png')}}" alt="">
                                                    </span><hr>
                            </div>
                            <div class="col-xs-6 text-center"><strong>Cantidad</strong></div>
                            <div class="col-xs-6 text-center">
                                    <span class="green">
                                    <div class="input-group">
                                            <span>
                                                <button class="btn btn-default bootstrap-touchspin-down" type="button">-</button>
                                            </span>
                                        <i class="centerFa fa fa-cog fa-spin fa-2x fa-fw ng-hide"></i>
                                        <input style="max-width: 20% !important; height: 33px" type="text" name="quantity" value="1"
                                               class="text-center">
                                        <span></span>
                                            <span>
                                                <button class="btn btn-default bootstrap-touchspin-up" type="button">+</button>
                                            </span>
                                    </div>
                                    </span><hr>
                            </div>
                            <div ng-repeat="filter in filters"  ng-if="filter.name != ''">
                                <div class="col-xs-6 text-center" ><strong><% filter.name %></strong></div>
                                <div class="col-xs-6 text-center">
                                        <span class="green">
                                            <select class="form-control" style="width: 100px">
                                                <option ng-repeat="value in filter.options"><% value.value %></option>
                                            </select>
                                        </span><hr>
                                </div>
                            </div>
                            <div class="col-xs-6 text-center" ><strong>Compartir</strong></div>
                            <div class="col-xs-6 text-center">
                                    <span class="green">
                                        <a href="http://www.facebook.com/sharer.php?" class="noo-share text-center" title="Share on Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="http://twitter.com/share?" class="noo-share text-center" title="Share on Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="https://pinterest.com/pin/create/bookmarklet/?" class="noo-share text-center" title="Share on Pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </span><hr>
                            </div>
                        </div>

                        <p class="text-center buttons" ng-controller="productIndexController" ng-cloak="">

                            <a href="#" ng-hide="product.stock == 0" ng-click="add(cartId , product)" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"></i> Agregar al carrito</a>
                            <a href="#" ng-if="product.stock == 0" class="btn btn-primary">Producto Agotado</a>
                        </p>
                    </div>

                    <div class="row hidden" id="thumbs">
                        <div class="col-xs-4">
                            <a href="{{asset('tema2/img/detailbig1.jpg')}}" class="thumb">
                                <img src="{{asset('tema2/img/detailsquare.jpg')}}" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{asset('tema2/img/detailbig2.jpg')}}" class="thumb">
                                <img src="{{asset('tema2/img/detailsquare2.jpg')}}" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{asset('tema2/img/detailbig3.jpg')}}" class="thumb">
                                <img src="{{asset('tema2/img/detailsquare3.jpg')}}" alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="box" id="details" ng-if="product.description">
                <p>
                <h4>Descripcion del Producto</h4>
                <p ng-bind-html="product.description | limitTo:250"></p>
                <hr>
                <div class="hidden social">
                    <h4>Sigenos en</h4>
                    <p>
                        <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                    </p>
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
        })
    </script>
@stop