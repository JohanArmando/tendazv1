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
            <div class="col-lg-3 visible-lg" ng-if="randomProduct.name">
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 hero-feature">
                        <div class="thumbnail" style="max-height: 360px; min-height: 360px">
                            <a href="{{url('/')}}<% BASEURL + '/detail/' + randomProduct.slug %>">
                                <img ng-src="<% randomProduct.images.data[0].url %>"
                                     style="max-height: 250px; min-height: 250px" alt="">
                            </a>
                            <div class="caption prod-caption">
                                <h4>
                                    <a href="{{url('/')}}<% BASEURL + '/detail/' + randomProduct.slug %>">
                                        <% randomProduct.name %></a>
                                </h4>
                                <div class="btn-group"  ng-if="randomProduct.special_price">
                                    <a href="#" class="btn btn-default btn-xs">
                                        <strong style="color: red; text-decoration: line-through;">$<% randomProduct.price | number:0 %></strong>
                                        <a  class="btn btn-default btn-xs"><strong>$<% randomProduct.special_price | number:0 %></strong></a>
                                    </a>
                                    <a class="btn btn-primary btn-xs" ng-hide="randomProduct.stock == 0" ng-click="add(cartId , randomProduct)">
                                        <i class="fa fa-shopping-cart"> Agregar</i>
                                    </a>
                                </div>
                                <div class="btn-group"  ng-if="!randomProduct.special_price">
                                    <a  class="btn btn-default btn-xs"><strong>$<% randomProduct.price | number:0 %></strong></a>
                                    <a class="btn btn-primary btn-xs" ng-hide="randomProduct.stock == 0" ng-click="add(cartId , randomProduct)">
                                        <i class="fa fa-shopping-cart"></i> Agregar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- End Slider -->