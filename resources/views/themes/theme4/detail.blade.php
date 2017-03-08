@extends(Theme::current()->viewsPath.'.template')
	@section('css')
		<style>
			.options-swatch--lg li a {
				width: 40px;
				height: 40px;
				font-size: 13px;
				line-height: 40px;
				float: left;
				margin-left: 5px;
			}
			a.active.ng-binding.ng-scope{
				background: #000;
				color: #fff;
			}
			.options-swatch img {
				width: 100%;
				height: 100%;
				border-bottom: 6px solid #1fc0a0;
			}
		</style>
	@stop
	@section('content')
		<div ng-controller="detailProductController" ng-cloak="">
			<div class="breadcrumbs">
				<div class="container">
					<ol class="breadcrumb breadcrumb--ys pull-left">
						<li class="home-link"><a href="{{ url('/') }}" class="icon icon-home"></a></li>
						<li><a href="{{ url('/products') }}">Todos</a></li>
						<li class="active"><% product.name %> <% product.variants.data[0].values.data[0].value %></li>
					</ol>
				</div>
			</div>
			<div id="pageContent">
				<section class="content offset-top-1">
					<div class="container">
						<div class="row product-info-outer">
							<div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
								<div class="row">
									<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
									<div class="container-fluid">
										<div class="row">
											<div class="col-md-2 nopad carou_tend">
										<div class="box col-xs-12 nopad" style="display: inline-block">
											<div class="col-xs-12" ng-repeat="image in product.images.data "
												 ng-if="image" style="margin-top: 10px">
												<a href="#" class="image-click thumb active">
													<img ng-src="<% image.url %>" width="150" height="150">
												</a>
											</div>
										</div>												
											</div>
											<div class="col-md-10 hidden-xs">
											<div class="product-main-image">
											<div class="product-main-image__item">
												<img id="matrix" class="image-responsive" ng-src="<% product.images.data[0].url %>"
												alt="" height="700" />
											</div>
											<div class="product-main-image__zoom"></div>
										</div>
											</div>
										</div>
									</div>


									</div>
									<div class="product-info col-sm-6 col-md-6 col-lg-6 col-xl-6">
										<div class="wrapper hidden-xs">
											<div class="product-info__sku pull-left" ng-if="product.sku" >SKU: <strong><% product.sku ? product.sku : 'NONE' %></strong></div>
											<div class="product-info__availability pull-right">Disponible:   <strong class="color"><% product.stock == none || product.stock > 0 || product.stock == unlimited  ? 'En Stock ' + '(' + product.stock + ')' : 'Sin Stock' %></strong></div>
										</div>
										<div class="product-info__title">
											<h2><% product.name %></h2>
										</div>
										<div class="wrapper visible-xs">
											<div class="product-info__sku pull-left" ng-if="product.sku" >SKU: <strong><% product.sku ? product.sku : 'NONE' %></strong></div>
											<div class="product-info__availability pull-right">Disponible:   <strong class="color"><% product.stock == none || product.stock > 0 || product.stock == unlimited  ? 'En Stock ' + '(' + product.stock + ')' : 'Sin Stock' %></strong></div>
										</div>
										<div class="visible-xs">
											<div class="clearfix"></div>
												<span>
													<slick  class="product-images-carousel" ng-if="images.length > 0" current-index="index" responsive="breakpoints" slides-to-show=1 slides-to-scroll=1>
														<div ng-repeat="image in images" style="margin: 0 10px 0  10px !important;">
															<a href="#" data-image="<% image.url %>" data-zoom-image="<% image.url %>">
																<img src="<% image.url %>" alt="" height="700" />
															</a>
														</div>
													</slick>
												</span>
										</div>
										<div class="price-box product-info__price" ng-if="product.special_price">
											<span class="price-box__new">$ <% product.special_price | currency:"":0 %></span>
											<span class="price-box__old">$ <% product.price | currency:"":0  %></span>
										</div>
										<div class="price-box product-info__price" ng-if="!product.special_price">
											<span class="price-box__new">$ <% product.price | currency:"":0 %></span>
										</div>
										<div class="divider divider--xs product-info__divider hidden-xs" ng-show="product.description"></div>
										<div class="product-info__description hidden-xs">
											<div class="product-info__description__text" ng-bind-html="product.description | limitTo:50"></div>
										</div>
										<div class="divider divider--xs product-info__divider"></div>
										<div>
											<span>
												<img src="{{asset('administrator/imagesMediosdePago/payment-1.png')}}" alt="">
												<img src="{{asset('administrator/imagesMediosdePago/payment-2.png')}}" alt="">
												<img src="{{asset('administrator/imagesMediosdePago/payment-3.png')}}" alt="">
												<img src="{{asset('administrator/imagesMediosdePago/payment-4.png')}}" alt="">
											</span><br>
											<small>Opciones de Pago</small>
										</div>
										<div class="divider divider--xs product-info__divider"></div>
										<div ng-repeat="value in values">
											<div class="wrapper">
												<div class="pull-left">
													<span class="option-label"><% value.name %>:</span>
												</div>
											</div>

											<ul class="options-swatch options-swatch--size options-swatch--lg" ng-if="value.name == 'Talle'">
												<li><a ng-repeat="v in value.values" ng-class="{'active' : product.variants.data[0].values.data[0].value == v ||  product.variants.data[0].values.data[1].value == v }">
														<% v | lowercase %></a></li>
											</ul>
											<ul class="hidden options-swatch options-swatch--color options-swatch--lg" ng-if="value.name == 'Color'">
												<li ng-repeat="v in value.values">
													<a href="#" >
											<span class="swatch-label">
												<img ng-src="<% BASEURL + '/themes_tendaz/tema4/images/colors/' +  v + '.gif'  | lowercase %>" alt=""/>
											</span>
													</a>
												</li>
											</ul>

											<select class="form-control" ng-if="value.name != 'Color' && value.name != 'Talle'">
												<option ng-repeat="v in value.values"><% v | lowercase %></option>
											</select>
											<div class="pull-left required"></div>
										</div>
										<div class="col-xs-2"><strong>Variantes:</strong></div>
										<div class="col-xs-10">
											<div ng-repeat="variant in product.variants.data" class="col-md-5 pull-right" style="width: 100px; margin-right: 5px;">
												<a href="{{ url('/') }}<% '/detail/' + product.slug + '/' +variant.id%>" >
													<img ng-mousemove="updateImage(this)"  ng-src="<% variant.images.data[0].url %>"  alt=""  class="img-thumbnail img-clickEa"
														 style="min-height: 120px;max-height: 120px;">
												</a>
											</div>
											<div class="col-md-12"><hr></div>
										</div>
										<div ng-repeat="property in properties">
											<div class="col-xs-2"><strong><% property.name %>:</strong></div>
											<div class="col-xs-10"><span ng-repeat="value in property.values"><% value.name %>, </span><hr></div>
										</div>
										<br>
										<div class="divider divider--sm"></div>
										<div class="wrapper" ng-if="!product.stock == 0">
											<div class="pull-left"><span class="qty-label">CANT:</span></div>
											<div class="pull-left">
												<div class="number input-counter">
													<span class="minus-btn"  ng-click="product.quantity = product.quantity > 1 ? product.quantity - 1 : 1	"></span>
													<input type="text" name="quantity" ng-model="product.quantity" value="<% product.quantity ? product.quantity : 1 %>"  size="5">
													<span class="plus-btn"  ng-click="product.quantity = product.quantity + 1"></span>
												</div>
											</div>
											<div ng-repeat="variante in product.variants.data">
												
											</div>
											<div class="pull-left"><button  ng-click="add(cartId , product)" type="submit" class="btn btn--ys btn--xxl"><span class="icon icon-shopping_basket"></span> Comprar</button></div>
										</div>
									</div>
								</div>
								<div class="content" style="margin-left: 20px">
									<ul class="nav nav-tabs nav-tabs--ys1" role="tablist">
										<li class="active"><a href="#Tab1"  role="tab" data-toggle="tab" class="text-uppercase">Descripci&oacute;n</a></li>
										<li class="hidden"><a href="#Tab2" role="tab" data-toggle="tab" class="text-uppercase">Comentarios</a></li>
									</ul>
									<div class="tab-content tab-content--ys nav-stacked">
										<div role="tabpanel" class="tab-pane active" id="Tab1">
											<p ng-bind-html="product.description"></p>
											<div class="divider divider--md"></div>
										</div>
										<div role="tabpanel" class="tab-pane" id="Tab2">
											<h5><strong class="color">COMENTARIOS DE <% product.name | uppercase%></strong></h5>
										</div>
									</div>
								</div>
							</div>
							@include(Theme::current()->viewsPath.'.partials.product-related')
						</div>
					</div>
				</section>
			</div>
		</div>
	@endsection
	@section('script')
		<script>
			$(document).ready(function() {
				$('.video-link').magnificPopup({
					disableOn: 767,
					type: 'iframe',
					removalDelay: 160,
					preloader: false,
					fixedContentPos: false
				});
				elevateZoom();

			})
		</script>
		<script type="text/javascript">
			$(document).ready( function(){
				$('div').on('click','.image-click', function(e){
					e.preventDefault();
					var image = $(this).find('img').attr('src');
					$('#matrix').attr('src', image);
				});
			})
		</script>

		@stop