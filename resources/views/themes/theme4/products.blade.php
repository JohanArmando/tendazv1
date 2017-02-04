@extends(Theme::current()->viewsPath.'.template')
<script>
	var search = "{{ Request::input('search') }}"
</script>
	@section('css')
		<style>
			#off-canvas-menu .expander-list .name {
				height: 10%;
			}
			.active{
				color: #1fc0a0;
			}
		</style>
	@stop

	@section('content')
	<div ng-controller="productController" ng-cloak="">
		<div class="breadcrumbs">
			<div class="container">
				<ol class="breadcrumb breadcrumb--ys pull-left" ng-cloak="">
					<li class="home-link"><a href="{{ url('/') }}" class="icon icon-home"></a></li>
					<li><a href="{{ url('/products') }}">Todos</a></li>
					<li ng-repeat="ancestor in ancestors" >
						<a  ng-class="{active : cate == ancestor.slug }" href="<% BASEURL + '/products/' + ancestor.slugable %>"><% ancestor.name %></a>
					</li>
				</ol>
			</div>
		</div>

		<div id="pageContent">
			<div class="container">
				<div class="row">
					<aside class="col-md-4 col-lg-3 col-xl-2 visible-xs visible-sm" id="leftColumn">
						<a href="#" class="slide-column-close visible-sm visible-xs">
							<span class="icon icon-chevron_left"></span>atras
						</a>
						<div class="filters-block visible-xs">
							<div class="filters-row__select">
								<label>Ordernar por: </label>
								<div class="select-wrapper">
									<select class="select--ys">
										<option>Nombre</option>
										<option>Precio</option>
										<option>Prmocion</option>
										<option>Fecha</option>
									</select>
								</div>
								<a href="#" class="sort-direction icon icon-arrow_back"></a>
							</div>
							<div class="filters-row__select">
								<label>Show: </label>
								<div class="select-wrapper">
									<select class="select--ys">
										<option>25</option>
										<option>50</option>
										<option>100</option>
									</select>
								</div>
							</div>
							<a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a>
						</div>
					</aside>
					<aside class="col-md-12 col-lg-12 col-xl-10" id="centerColumn">
						@include(Theme::current()->viewsPath.'.partials.title_category')
						<div class="filters-row">
							<div class="pull-left">
								<div class="filters-row__mode">
									<a href="#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Filter</a>
									<a class="filters-row__view active link-grid-view btn-img btn-img-view_module"><span></span></a>
									<a class="filters-row__view link-row-view btn-img btn-img-view_list"><span></span></a>
								</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Ordenar por: </label>
									<div class="select-wrapper">
										<select class="select--ys" ng-click="sortBy(propertyName)" ng-model="propertyName">
											<option value="name">Nombre</option>
											<option value="price">Precio</option>
											<option value="promotion">Promocion</option>
											<option value="created_at">Fecha</option>
										</select>
									</div>
									<a href="#" class="sort-direction fa fa-arrow-up active" ng-show="!reverse"></a>
									<a href="#" class="sort-direction fa fa-arrow-down active" ng-show="reverse"></a>
								</div>
							</div>
							<div class="pull-right">
								<div class="filters-row__items hidden-sm hidden-xs">Mostrando <% filtered.length %>  de <% products.length %> Item(s)</div>
								<div class="filters-row__select hidden-sm hidden-xs">
									<label>Mostrar: </label>
									<div class="select-wrapper">
										<select class="select--ys show-qty" ng-model="itemsPerPage">
											<option value="10">10</option>
											<option value="15">15</option>
											<option value="25">25</option>
											<option value="50">50</option>
											<option value="100">100</option>
										</select>
									</div>
									<a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a>
								</div>

								<div class="filters-row__pagination">
									<dir-pagination-controls></dir-pagination-controls>
								</div>
							</div>
						</div>

						<div class="product-listing row" >
							<h4 class="text-center" ng-if="filtered.length == 0"><strong>No se encontraron productos</strong></h4>
							<div class="col-xs-6 col-sm-4 col-md-3 col-lg- col-xl-one-fifth" dir-paginate="product in filtered = (products  | itemsPerPage: 15 | filter:search | orderBy:propertyName:reverse)">
								<div ng-include="'tpl.html'"></div>
							</div>
						</div>
					</aside>
					{{--@include(Theme::current()->viewsPath.'.partials.filter')--}}
				</div>
			</div>
		</div>
	</div>
	@endsection

	@section('script')
	@stop