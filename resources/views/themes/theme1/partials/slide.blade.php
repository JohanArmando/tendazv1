<!-- Slider -->
            <div class="col-lg-9 col-md-12">
                <div class="slider">
                    <ul class="bxslider">
                        @foreach($sliders as $slider)
                            @if($slider->id == $shop->id)
                                @if(!$slider->slider1 == '')
                                <li>
                                    <a href="{{url('/')}}">
                                        <img src="{{ asset("sliders/".auth('admins')->user()->shop->id.'/'.$slider->slider1) }}" alt=""
                                             style="max-width: 850px;max-height: 350px"/>
                                    </a>
                                </li>
                                    @else
                                    <li>
                                        <a href="{{url('/')}}">
                                            <img src="{{asset('themes_tendaz/theme1/images/banner_slider-3.jpg')}}" alt=""/>
                                        </a>
                                    </li>
                                @endif

                                @if(!$slider->slider2 == '')
                                <li>
                                    <a href="{{url('/')}}">
                                        <img src="{{ asset("sliders/".auth('admins')->user()->shop->id.'/'.$slider->slider2) }}" alt=""
                                             style="max-width: 850px;max-height: 350px"/>
                                    </a>
                                </li>
                                    @else
                                    <li>
                                        <a href="{{url('/')}}">
                                            <img src="{{asset('themes_tendaz/theme1/images/banner_slider-2.jpg')}}" alt=""/>
                                        </a>
                                    </li>
                                @endif

                                @if(!$slider->slider3 == '')
                                <li>
                                    <a href="{{url('/')}}">
                                        <img src="{{ asset("sliders/".auth('admins')->user()->shop->id.'/'.$slider->slider3) }}" alt=""
                                             style="max-width: 850px;max-height: 350px"/>
                                    </a>
                                </li>
                                    @else
                                    <li>
                                        <a href="{{url('/')}}">
                                            <img src="{{asset('themes_tendaz/theme1/images/banner_slider-1.jpg')}}" alt=""/>
                                        </a>
                                    </li>
                                @endif

                                @if(!$slider->slider4 == '')
                                    <li>
                                        <a href="{{url('/')}}">
                                            <img src="{{ asset("sliders/".auth('admins')->user()->shop->id.'/'.$slider->slider4) }}" alt=""
                                                 style="max-width: 850px;max-height: 350px"/>
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{url('/')}}">
                                            <img src="{{asset('themes_tendaz/theme1/images/banner_slider-2.jpg')}}" alt=""/>
                                        </a>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
         <div ng-controller="productIndexController" ng-cloak="">
            <div class="col-lg-3 visible-lg" ng-if="rand.name">
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 hero-feature">
                        <div class="thumbnail">
                            <a href="<% BASEURL + '/detail/' + rand.slug %>">
                                <img ng-src="<% rand.attributes.image %>"
                                     style="max-height: 220px; min-height: 220px" alt="">
                            </a>
                            <div class="caption prod-caption">
                                <h4>
                                    <a href="<% BASEURL + '/detail/' + rand.slug %>">
                                        <% rand.name %></a>
                                </h4>
                                    <div class="btn-group">
                                    <div class="price text-center" ng-if="rand.promotion">
                                        <strong>$<% rand.promotion_price | number:0 %></strong>
                                        <span class="price-old">$<% rand.price | number:0 %></span>
                                    </div>
                                    <div class="price text-center" ng-if="!rand.promotion">
                                        <strong>$<% rand.price | number:0 %></strong>
                                    </div>
                                        <a href="#" ng-hide="rand.stock == 0" ng-click="add(rand)" class="btn btn-primary">
                                            <i class="fa fa-shopping-cart"></i> Comprar</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- End Slider -->