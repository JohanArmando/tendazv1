<div class="container">
    <div class="col-md-9">
        <div id="main-slider">
            @foreach($sliders as $slider)
                @if($slider->id == $shop->id)
                    @if(!$slider->slider1 == '')
                        <div class="item">
                            <a href="{{url('/')}}"><img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider1) }}" alt="Slider"
                                                        style="max-width: 100%;max-height: 510px"></a>
                        </div>
                    @else
                        <div class="item"><a href="{{url('/')}}"><img src="themes_tendaz/theme2/img/main-slider1.jpg" alt="Slider"></a></div>
                    @endif

                    @if(!$slider->slider2 == '')
                        <div class="item">
                            <a href="{{url('/')}}"><img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider2) }}" alt="Slider"
                                                        style="max-width: 100%;max-height: 510px"></a>
                        </div>
                    @else
                        <div class="item"><a href="{{url('/')}}"><img src="themes_tendaz/theme2/img/main-slider2.jpg" alt="Slider"></a></div>
                    @endif

                    @if(!$slider->slider3 == '')
                        <div class="item">
                            <a href="{{url('/')}}"><img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider3) }}" alt="Slider"
                                                        style="max-width: 100%;max-height: 510px"></a>
                        </div>
                    @else
                        <div class="item">
                            <a href="{{url('/')}}"><img src="themes_tendaz/theme2/img/main-slider3.jpg" alt="Slider"></a>
                        </div>
                    @endif

                    @if(!$slider->slider4 == '')
                        <div class="item">
                            <a href="{{url('/')}}"><img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider4) }}" alt="Slider"
                                                        style="max-width: 100%;max-height: 510px"></a>
                        </div>
                    @else
                        <div class="item">
                            <a href="{{url('/')}}"><img src="themes_tendaz/theme2/img/main-slider2.jpg" alt="Slider"></a>
                        </div>
                    @endif
                @endif
            @endforeach
        </div>
        <!-- /#main-slider -->
    </div>
    <div class="col-md-3" ng-if="randomProduct.name">
        <div class="product">
        <div class="flip-container">
            <div class="flipper">
                <div class="front">
                    <a href="<% BASEURL + '/detail/' + randomProduct.slug %>">
                        <img ng-src="<% randomProduct.images.data[0].url %>" alt="" ng-show="product.images.data" class="img-responsive"
                             style="min-height:335px ;max-height: 335px" alt="">
                        <img ng-src="<% randomProduct.images.data[0].url %>" alt="" class="img-responsive"
                             style="min-height:335px ;max-height: 335px" alt="">
                    </a>
                </div>
                <div class="back">
                    <a href="<% BASEURL + '/detail/' + randomProduct.slug %>">
                        <img class="img-responsive" style="min-height:250px ;max-height: 250px" ng-src="<% randomProduct.images.data[0].url %>" alt="">
                    </a>
                </div>
            </div>
        </div>
        <a href="<% BASEURL + '/detail/' + randomProduct.slug %>" class="invisible">
            <img class="img-responsive" style="min-height:310px ;max-height: 310px" ng-src="<% BASEURL + '/administrator/image/noImage.png' %>" alt="">
        </a>
        <div class="text" ng-if="randomProduct.special_price">
            <h3><a href="<% BASEURL + '/detail/' + randomProduct.slug %>"><% randomProduct.name %></a></h3>
            <p class="price"><del>$<% randomProduct.price | number:0 %></del> $<% randomProduct.special_price | number:0 %></p>
            <p class="buttons">
                <a ng-hide="randomProduct.stock == 0" ng-click="add(cartId , randomProduct)" class="btn btn-primary">
                    <i class="fa fa-shopping-cart"></i>Agregar al carrito</a>
            </p>
        </div>
        <div class="text" ng-if="!randomProduct.special_price">
            <h3><a href="<% BASEURL + '/detail/' + randomProduct.slug %>"><% randomProduct.name %></a></h3>
            <p class="price">$<% randomProduct.price | number:0 %></p>
            <p class="buttons">
                <a ng-hide="product.stock == 0" ng-click="add(cartId , randomProduct)" class="btn btn-primary">
                    <i class="fa fa-shopping-cart"></i>Agregar al carrito</a>
                <a ng-if="product.stock == 0" class="btn btn-primary">
                    <i class="fa fa-shopping-cart"></i>Agotado</a>
            </p>
        </div>

        <div class="ribbon gift" ng-if="randomProduct.special_price">
            <div class="theribbon">
                Sale
                <% randomProduct.promotion_price_percent | number:0 %>%
            </div>
            <div class="ribbon-background"></div>
        </div>
    </div>
        </div>
</div>
