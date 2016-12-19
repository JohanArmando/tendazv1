<div class="container">
    <div class="col-md-12">
        <div id="main-slider">
            @foreach($sliders as $slider)
                @if($slider->id == $shop->id)
                    @if(!$slider->slider1 == '')
                        <div class="item">
                            <a href="{{url('/')}}"><img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider1) }}" alt="Slider"
                                                        style="max-width: 100%;max-height: 510px;min-height: 510px"></a>
                        </div>
                    @else
                        <div class="item"><a href="{{url('/')}}"><img src="themes_tendaz/theme2/img/main-slider1.jpg" alt="Slider"></a></div>
                    @endif

                    @if(!$slider->slider2 == '')
                        <div class="item">
                            <a href="{{url('/')}}"><img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider2) }}" alt="Slider"
                                                        style="max-width: 100%;max-height: 510px;min-height: 510px"></a>
                        </div>
                    @else
                        <div class="item"><a href="{{url('/')}}"><img src="themes_tendaz/theme2/img/main-slider2.jpg" alt="Slider"></a></div>
                    @endif

                    @if(!$slider->slider3 == '')
                        <div class="item">
                            <a href="{{url('/')}}"><img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider3) }}" alt="Slider"
                                                        style="max-width: 100%;max-height: 510px;min-height: 510px"></a>
                        </div>
                    @else
                        <div class="item">
                            <a href="{{url('/')}}"><img src="themes_tendaz/theme2/img/main-slider3.jpg" alt="Slider"></a>
                        </div>
                    @endif
                    @endif
            @endforeach
        </div>
        <!-- /#main-slider -->
    </div>
</div>
