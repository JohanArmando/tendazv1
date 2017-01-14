<div class="rev_slider_wrapper fullscreen-container">
    <div id="rev_slider_2" class="rev_slider fullscreenbanner">
        <ul>
            @foreach($sliders as $slider)
                @if($slider->id == $shop->id)
                    @if(!$slider->slider1 == '')
                        <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">
                            <img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider1) }}" alt="" width="1920" height="960" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" />
                        </li>
                    @else
                        <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">
                            <img src="{{asset('themes_tendaz/theme3/images/banner/banner-4.jpg')}}" alt="" width="1920" height="960" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" />
                        </li>
                    @endif

                        @if(!$slider->slider2 == '')
                            <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                <img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider2) }}" alt="" width="1920" height="960" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" />
                            </li>
                        @else
                            <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                <img src="{{asset('themes_tendaz/theme3/images/banner/banner-5.jpg')}}" alt="" width="1920" height="960" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" />
                            </li>
                        @endif

                        @if(!$slider->slider3 == '')
                            <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                <img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider3) }}" alt="" width="1920" height="960" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" />
                            </li>
                        @else
                            <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                <img src="{{asset('themes_tendaz/theme3/images/banner/banner-6.jpg')}}" alt="" width="1920" height="960" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" />
                            </li>
                        @endif

                        @if(!$slider->slider4 == '')
                            <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                <img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider4) }}" alt="" width="1920" height="960" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" />
                            </li>
                        @else
                            <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                <img src="{{asset('themes_tendaz/theme3/images/banner/banner-5.jpg')}}" alt="" width="1920" height="960" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" />
                            </li>
                        @endif
                @endif
            @endforeach
        </ul>
        <div class="tp-bannertimer"></div>
    </div>
</div>
<br><br><br>