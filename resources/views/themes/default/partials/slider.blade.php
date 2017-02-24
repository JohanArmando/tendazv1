<div class="slider home-slider">
    @foreach($sliders as $slider)
        @if($slider->id == $shop->id)
            @if(!$slider->slider1 == '')
                <div class="item">
                    <a href="{{url('products')}}">
                        <img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider1) }}" alt="Slider"
                      style="max-width: 850px;max-height: 350px"></a>
                </div>
                @else
                <div class="item"><a href="{{url('products')}}">
                        <img src="themes_tendaz/default/images/demo/slide-1.jpg" alt="Slider"></a></div>
            @endif

            @if(!$slider->slider2 == '')
                <div class="item">
                    <a href="{{url('products')}}">
                        <img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider2) }}" alt="Slider"
                      style="max-width: 850px;max-height: 350px"></a>
                </div>
                @else
                <div class="item"><a href="{{url('products')}}">
                        <img src="themes_tendaz/default/images/demo/slide-2.jpg" alt="Slider"></a></div>
            @endif

            @if(!$slider->slider3 == '')
                <div class="item">
                    <a href="{{url('products')}}">
                        <img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider3) }}" alt="Slider"
                       style="max-width: 850px;max-height: 350px"></a>
                </div>
                @else
                <div class="item">
                    <a href="{{url('products')}}">
                        <img src="themes_tendaz/default/images/demo/slide-3.jpg" alt="Slider"></a>
                </div>
            @endif

            @if(!$slider->slider4 == '')
                <div class="item">
                    <a href="{{url('products')}}">
                        <img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider4) }}" alt="Slider"
                             style="max-width: 850px;max-height: 350px"></a>
                </div>
            @else
                <div class="item">
                    <a href="{{url('products')}}">
                        <img src="themes_tendaz/default/images/demo/slide-2.jpg" alt="Slider"></a>
                </div>
            @endif
        @endif
    @endforeach
</div>