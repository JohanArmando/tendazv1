<!--=== box-baners ===-->
<div class="container-fluid box-baners">
	<div class="row">
		<!-- col-left -->
		<div class="col-xs-12 col-sm-12 col-md-6">
			<!-- banner-slider -->
			<div class="banner-slider banner-slider-button">
				<div>
					<a href="#" class="banner zoom-in font-size-responsive">
									<span class="figure">
										 @foreach($sliders as $slider)
											@if($slider->id == $shop->id)
												@if(!$slider->slider1 == '')
													<img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider1) }}" alt="Slider"
														 style="min-height: 570px;max-height: 570px">
												@else
													<img src="themes_tendaz/tema4/images/custom/banner-04.jpg" alt=""/>
												@endif
											@endif
										 @endforeach
									</span>
					</a>
				</div>
				<div>
					<a href="#" class="banner zoom-in font-size-responsive">
									<span class="figure">
										@foreach($sliders as $slider)
											@if($slider->id == $shop->id)
												@if(!$slider->slider2 == '')
													<img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider2) }}" alt="Slider"
														 style="min-height: 570px;max-height: 570px">
												@else
													<img src="themes_tendaz/tema4/images/custom/banner-05.jpg" alt=""/>
												@endif
											@endif
										@endforeach
									</span>
					</a>
				</div>
				<div>
					<a href="#" class="banner zoom-in font-size-responsive">
									<span class="figure">
										@foreach($sliders as $slider)
											@if($slider->id == $shop->id)
												@if(!$slider->slider3 == '')
													<img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider3) }}" alt="Slider"
														 style="min-height: 570px;max-height: 570px">
												@else
													<img src="themes_tendaz/tema4/images/custom/banner-06.jpg" alt=""/>
												@endif
											@endif
										@endforeach
									</span>
					</a>
				</div>
			</div>
			<!-- /banner-slider -->
		</div>
		<!-- /col-left -->
		<!-- col-right -->
		<div class="col-xs-12 col-sm-12 col-md-6 hidden-xs">
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<a data-toggle="modal" data-target="#modalRegisterForm" class="banner zoom-in">
									<span class="figure">
										@foreach($sliders as $slider)
											@if($slider->id == $shop->id)
												@if(!$slider->slider1 == '')
													<img class="responsive_slide" src="{{ asset("sliders/".$slider->id.'/'.$slider->slider1) }}" alt="Slider"
														 style="min-height: 286px;max-height: 286px">
												@else
													<img src="themes_tendaz/tema4/images/custom/banner-07.jpg" alt=""/>
												@endif
											@endif
										@endforeach
											<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="block text-uppercase font-medium font-size62">Registrate</span>
												</span>
											</span>
									</span>
					</a>
				</div>
				<div class="col-sm-6  col-md-6 hidden-xs">
					<a href="{{url('products')}}" class="banner zoom-in">
									<span class="figure">
										@foreach($sliders as $slider)
											@if($slider->id == $shop->id)
												@if(!$slider->slider2 == '')
													<img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider2) }}" alt="Slider"
														 style="min-height: 286px;max-height: 286px">
												@else
													<img src="themes_tendaz/tema4/images/custom/banner-08.jpg" alt=""/>
												@endif
											@endif
										@endforeach
											<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="block text-uppercase font-medium font-size62">Excelentes Precios</span>
												</span>
											</span>
										</span>
									</span>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a href="{{url('products')}}" class="banner zoom-in">
									<span class="figure">
										@foreach($sliders as $slider)
											@if($slider->id == $shop->id)
												@if(!$slider->slider3 == '')
													<img src="{{ asset("sliders/".$slider->id.'/'.$slider->slider3) }}" alt="Slider"
														 style="min-height: 286px;max-height: 286px">
												@else
													<img src="themes_tendaz/tema4/images/custom/banner-09.jpg" alt=""/>
												@endif
											@endif
										@endforeach
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="block text-uppercase font-medium font-size62">Nuevas Colecciones</span>
													<span class="block text-uppercase font-medium font-size26">conoce nuestros nuevos productos</span>
												</span>
											</span>
										</span>
									</span>
					</a>
				</div>
			</div>
		</div>
		<!-- /col-right -->
	</div>
</div>
<!--=== /box-baners ===-->
