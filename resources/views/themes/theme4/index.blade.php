@extends(Theme::current()->viewsPath.'.template')

	@section('css')
	@stop

	@section('content')
		<div ng-controller="productIndexController">
			@include(Theme::current()->viewsPath.'.partials.slider')
			<div class="content separator-section">
				<div class="container">
					<hr>
				</div>
			</div>
			<div class="content">
				<div class="container hidden-xs hidden-sm" ng-cloak="" >
					@include(Theme::current()->viewsPath.'.partials.new-product')
				</div>
				<div class="container hidden-lg hidden-md" ng-cloak="" >
					<div class="col-xs-12"  ng-repeat="product in news">
						<div ng-include="'tpl.html'"></div>
					</div>
				</div>
			</div>
			<div class="content separator-section">
				<div class="container">
					<hr>
				</div>
			</div>

			<div class="content">
				<div class="container">
					<div class="row hidden-xs hidden-sm">
						@include(Theme::current()->viewsPath.'.partials.higth')
						<div class="divider divider--lg hidden  visible-sm visible-xs"></div>
						@include(Theme::current()->viewsPath.'.partials.onsale')
					</div>
					<br><br><br>
				</div>
			</div>
			@include(Theme::current()->viewsPath.'.partials.modal_product')
		</div>
	@endsection

	@section('script')

	@stop