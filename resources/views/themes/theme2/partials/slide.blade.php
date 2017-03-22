<div class="container">
    <div class="col-md-9">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach($sliders as $slider)
                    @if($slider->id == $shop->id)
                        @if(!$slider->slider1 == '')
                            <div class="item active">
                                <a href="{{url('/')}}">
                                    <img class="max-image" src="{{ asset("sliders/".$slider->id.'/'.$slider->slider1) }}" alt="Slider">
                                </a>
                            </div>
                        @else
                            <div class="item active">
                                <a href="{{url('/')}}">
                                    <img class="max-image" src="themes_tendaz/theme2/img/main-slider1.jpg" alt="Slider">
                                </a>
                            </div>
                        @endif

                        @if(!$slider->slider2 == '')
                            <div class="item">
                                <a href="{{url('/')}}">
                                    <img class="max-image" src="{{ asset("sliders/".$slider->id.'/'.$slider->slider2) }}" alt="Slider">
                                </a>
                            </div>
                        @else
                            <div class="item">
                                <a href="{{url('/')}}">
                                    <img class="max-image" src="themes_tendaz/theme2/img/main-slider2.jpg" alt="Slider">
                                </a>
                            </div>
                        @endif

                        @if(!$slider->slider3 == '')
                            <div class="item">
                                <a href="{{url('/')}}">
                                    <img class="max-image" src="{{ asset("sliders/".$slider->id.'/'.$slider->slider3) }}" alt="Slider">
                                </a>
                            </div>
                        @else
                            <div class="item">
                                <a href="{{url('/')}}">
                                    <img class="max-image" src="themes_tendaz/theme2/img/main-slider3.jpg" alt="Slider">
                                </a>
                            </div>
                        @endif

                        @if(!$slider->slider4 == '')
                            <div class="item">
                                <a href="{{url('/')}}">
                                    <img class="max-image" src="{{ asset("sliders/".$slider->id.'/'.$slider->slider4) }}" alt="Slider">
                                </a>
                            </div>
                        @else
                            <div class="item">
                                <a href="{{url('/')}}">
                                    <img class="max-image" src="themes_tendaz/theme2/img/main-slider2.jpg" alt="Slider">
                                </a>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-md-3" ng-if="randomProduct.name">

        <div class="product">
        <div class="flip-container">
            <div class="flipper">
                <div class="front">
                    <a href="<% BASEURL + '/detail/' + randomProduct.slug %>">
                        <img ng-src="<% randomProduct.images.data[0].url %>" alt="" ng-show="product.images.data" class="img-responsive"
                             style="min-height:250px ;max-height: 250px" alt="">
                        <img ng-src="<% randomProduct.images.data[0].url %>" alt="" class="img-responsive"
                             style="min-height:200px ;max-height: 200px" alt="">
                    </a>
                </div>
                <div class="back">
                    <a href="<% BASEURL + '/detail/' + randomProduct.slug %>">
                        <img class="img-responsive" style="min-height:200px ;max-height: 200px" ng-src="<% randomProduct.images.data[0].url %>" alt="">
                    </a>
                </div>
            </div>
        </div>
        <a href="<% BASEURL + '/detail/' + randomProduct.slug %>" class="invisible">
            <img class="img-responsive" style="min-height:188px ;max-height: 188px" ng-src="<% BASEURL + '/administrator/image/noImage.png' %>" alt="">
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
