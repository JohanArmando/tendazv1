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
				<div class="container" ng-cloak="" >
					@include(Theme::current()->viewsPath.'.partials.new-product')
				</div>
			</div>
			<div class="content separator-section">
				<div class="container">
					<hr>
				</div>
			</div>

			<div class="content">
				<div class="container">
					<div class="row">
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