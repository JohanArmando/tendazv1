@extends(Theme::current()->viewsPath.'.template')
@section('css')
@stop
@section('content')
    <div class="main" ng-controller="detailProductController" ng-cloak="">
        <div class="commerce single-product noo-shop-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product">
                            <div class="single-inner">
                                <div class="images">
                                    <div class="product-simple-image">
                                        <img ng-src="<% product.images.data[0].url %>" style="max-height: 500px; min-height: 500px"
                                             id="matrix" alt="" height="400" width="350px" class="image-responsive" />
                                    </div>
                                </div>
                                <div class="summary entry-summary">
                                    <hr>
                                    <h1 class="product_title entry-title"><% product.name%></h1>
                                    <div ng-if="product.special_price > 0">
                                        <strong class="price">$ <% product.special_price | number:0%></strong>&nbsp;&nbsp;&nbsp;
                                        <strong class="price" style="text-decoration: line-through; color: red;">$ <% product.price | number:0 %></strong>
                                    </div>
                                    <div ng-if="!product.special_price">
                                        <strong class="price">$ <% product.price | number:0%></strong>&nbsp;&nbsp;&nbsp;
                                    </div>
                                    <br><br>
                                    <div class="product_meta">
                                        <span class="col-xs-6">SKU:</span>
                                <span class="col-xs-6">
                                    <a href="#"><% product.sku ? product.sku : 'NONE' %></a><hr>
                                </span>
                                        <span class="col-xs-6">Disponible:</span>
                                <span class="col-xs-6">
                                    <a href="#">
                                        <% product.stock == none || product.stock > 0 || product.stock == unlimited
                                                        ? 'En Stock ' + '(' + product.stock + ')' : 'Sin Stock' %>
                                    </a><hr>
                                </span>
                                        <span class="col-xs-6">Cantidad:</span>
                                <span class="col-xs-6">
                                    <div class="quantity">
                                        <div class="input-group">
                                    <span class="input-text qty text" ng-click="updateQuantityCart(cart.id , cart.quantity , false)"
                                          ng-show="!showCart.loading">
                                        <button class="btn btn-default bootstrap-touchspin-down" type="button">-</button>
                                    </span>
                                            <i style="margin-left: 40px" class="fa fa-cog fa-spin fa-2x fa-fw" ng-show="showCart.loading"></i>
                                            <input type="text" style="height: 33px" name="quantity" value="1" ng-show="!showCart.loading" class="input-text qty text"/>
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                    <span class="input-text qty text" ng-click="updateQuantityCart(cart.id , cart.quantity , true)"
                                          ng-show="!showCart.loading">
                                        <button class="btn btn-default bootstrap-touchspin-up" type="button">+</button>
                                    </span>
                                        </div>
                                    </div><hr>
                                </span>
                                        <span class="col-xs-6">Medios de Pago</span>
                                <span class="col-xs-6">
                                    <span class="green">
                                        <img src="{{asset('administrator/imagesMediosdePago/payment-1.png')}}" alt="">
                                        <img src="{{asset('administrator/imagesMediosdePago/payment-2.png')}}" alt="">
                                        <img src="{{asset('administrator/imagesMediosdePago/payment-3.png')}}" alt="">
                                        <img src="{{asset('administrator/imagesMediosdePago/payment-4.png')}}" alt="">
                                    </span><hr>
                                </span>
                                <span ng-repeat="filter in filters"  ng-if="filter.name != ''">
                                    <span class="col-xs-6"><% filter.name %> :</span>
                                    <span class="col-xs-6">
                                        <select class="form-control" style="width: 100px">
                                            <option ng-repeat="value in filter.options"><% value.value %></option>
                                        </select>
                                    </span>
                                </span>
                                    </div>
                                    <form class="cart" ng-controller="productIndexController" ng-cloak="">
                                        <div class="quantity hidden">
                                            <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4"/>
                                        </div>
                                        <button ng-if="!product.stock == 0" ng-click="add(cartId , product)" type="submit" class="single_add_to_cart_button button" >
                                            <i class="fa fa-shopping-cart"></i> Agregar al carro</button>
                                    </form>

                                    <div class="clear"></div>
                                    <div class="noo-social-share">
                                        <span>Comparte:</span>
                                        <a href="http://www.facebook.com/sharer.php?" class="noo-share" title="Share on Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="http://twitter.com/share?" class="noo-share" title="Share on Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="https://pinterest.com/pin/create/bookmarklet/?" class="noo-share" title="Share on Pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-12"><br><br>
                                    <a class="image-click"ng-repeat="image in product.images.data | limitTo:3"
                                       ng-if="image" href="#">
                                        <img src="<% image.url %>" alt="" class="image-click img-thumbnail"
                                             style="max-height: 100px; min-height: 100px;width: 80px"></a>
                                </div>

                                <div class="commerce-tabs" ng-if="product.description">
                                    <ul class="nav nav-tabs tabs">
                                        <li class="active">
                                            <a data-toggle="tab" href="#tab-1">Descripcion</a>
                                        </li>
                                        <li class="hidden">
                                            <a data-toggle="tab" href="#tab-2">Reviews</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab-1" >
                                            <p ng-bind-html="product.description | limitTo:250"></p>
                                        </div>
                                        <div id="tab-2" class="tab-pane fade">
                                            <div id="comments" class="comments-area">
                                                <h2 class="comments-title">3 Comments</h2>
                                                <ol class="comments-list">
                                                    <li class="comment">
                                                        <div class="comment-wrap">
                                                            <div class="comment-img">
                                                                <img alt='' src='http://placehold.it/100x100' height='80' width='80' />
                                                            </div>
                                                            <article class="comment-block">
                                                                <header class="comment-header">
                                                                    <cite class="comment-author">
                                                                        admin
                                                                    </cite>
                                                                    <div class="comment-meta">
                                                                <span class="time">
                                                                    4 months ago
                                                                </span>
                                                                    </div>
                                                                </header>
                                                                <div class="comment-content">
                                                                    <p>fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus</p>
                                                                </div>
                                                        <span class="comment-reply">
                                                            <a class='comment-reply-link' href='#'><i class="fa fa-reply"></i> Reply</a>
                                                        </span>
                                                            </article>
                                                        </div>
                                                        <ol class="children">
                                                            <li class="comment">
                                                                <div class="comment-wrap">
                                                                    <div class="comment-img">
                                                                        <img alt='' src='http://placehold.it/100x100' height='80' width='80' />
                                                                    </div>
                                                                    <article class="comment-block">
                                                                        <header class="comment-header">
                                                                            <cite class="comment-author">
                                                                                admin
                                                                            </cite>
                                                                            <div class="comment-meta">
                                                                        <span class="time">
                                                                            4 months ago
                                                                        </span>
                                                                            </div>
                                                                        </header>
                                                                        <div class="comment-content">
                                                                            <p>fSames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus</p>
                                                                        </div>
                                                                <span class="comment-reply">
                                                                    <a class='comment-reply-link' href='#'><i class="fa fa-reply"></i> Reply</a>
                                                                </span>
                                                                    </article>
                                                                </div>
                                                            </li><!-- #comment-## -->
                                                        </ol><!-- .children -->
                                                    </li><!-- #comment-## -->
                                                    <li class="comment">
                                                        <div class="comment-wrap">
                                                            <div class="comment-img">
                                                                <img alt='' src='http://placehold.it/100x100' height='80' width='80' />
                                                            </div>
                                                            <article class="comment-block">
                                                                <header class="comment-header">
                                                                    <cite class="comment-author">
                                                                        admin
                                                                    </cite>
                                                                    <div class="comment-meta">
                                                                <span class="time">
                                                                    4 months ago
                                                                </span>
                                                                    </div>
                                                                </header>
                                                                <div class="comment-content">
                                                                    <p>fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus</p>
                                                                </div>
                                                        <span class="comment-reply">
                                                            <a class='comment-reply-link' href='#'><i class="fa fa-reply"></i> Reply</a>
                                                        </span>
                                                            </article>
                                                        </div>
                                                    </li><!-- #comment-## -->
                                                </ol> <!-- /.comments-list -->
                                                <div id="respond-wrap">
                                                    <div id="respond" class="comment-respond">
                                                        <h3 id="reply-title" class="comment-reply-title">
                                                            <span>Leave your thought</span>
                                                        </h3>
                                                        <form class="comment-form">
                                                            <div class="row">
                                                                <div class="comment-form-author col-sm-6">
                                                                    <input id="author" name="author" type="text" placeholder="Enter Your Name*" class="form-control" value="" size="30" />
                                                                </div>
                                                                <div class="comment-form-email col-sm-6">
                                                                    <input id="email" name="email" type="text" placeholder="Enter Your Email*" class="form-control" value="" size="30" />
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="comment-form-comment">
                                                                        <textarea class="form-control" placeholder="Enter Your Comment" id="comment" name="comment" cols="40" rows="6"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-submit">
                                                                <input name="submit" type="submit" id="submit" class="submit" value="Post Comments" />
                                                            </div>
                                                        </form>
                                                    </div><!-- #respond -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @include(Theme::current()->viewsPath.'.partials.related-product')
                            </div>
                        </div>
                    </div>
                    {{--@include(Theme::get().'.partials.right')--}}
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