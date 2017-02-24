@extends('themes.default.template')
	@section('css')
		@stop
	@section('content')
			<div class="container">
				<div class="row">
					<div class="clearfix"></div>
					<div class="col-md-12 col-md-offset-3">
						<div class="text-center">
							<img class="img-responsive" src="{{asset('themes_tendaz/default/images/buildpage.png')}}">
						</div>
					</div>
					<div class="text-center">
						<a href="http://www.google.com" class="btn btn-default btn-lg"><i class="fa fa-arrow-left"></i> Salir de la tienda</a>
					</div>
					<br><br>
				</div>
			</div>
		@endsection
	@section('script')
		@stop