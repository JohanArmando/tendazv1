@extends(Theme::current()->viewsPath.'.template')
	@section('css')
	@stop

	@section('content')
		<div id="pageContent">
			<div class="content-bottom">
			</div>
			<section class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12 {{ $shop->number_phone  || $shop->store->address_1 || $shop->store->address_2 ? '' : 'hidden' }}">
						<h2 class="text-uppercase title-bottom">Mas Informaci&oacute;n</h2>
					<ul class="list-icon">
						<li class="{{ !$shop->store->address_2 ? 'hidden' : '' }}">
							<span class="icon icon-home"></span>
							<strong>Direccion :</strong> {{$shop->store->address_2}}
						</li>
						<li class="{{ !$shop->store->number_phone  ? 'hidden' : '' }}">
							<span class="icon icon-call"></span>
							<strong>Telefono:</strong> (+{{$shop->store->number_phone}})
						</li>

						<li class="{{ !$shop->store->address_1 ? 'hidden' : '' }}">
							<span class="icon icon-mail"></span>
							<strong>Correo:</strong>
							<a class="color" href="#">{{$shop->store->address_1}}</a>
						</li>
					</ul>
					<div class="divider divider--sm"></div>
					<div class="social-links social-links--large hidden">
						<ul>
							<li><a class="icon fa fa-facebook" href="http://www.facebook.com/"></a></li>
							<li><a class="icon fa fa-twitter" href="http://www.twitter.com/"></a></li>
							<li><a class="icon fa fa-google-plus" href="http://www.google.com/"></a></li>
							<li><a class="icon fa fa-instagram" href="https://instagram.com/"></a></li>
							<li><a class="icon fa fa-youtube-square" href="https://www.youtube.com/"></a></li>
						</ul>
					</div>
					</div>
					<div class="col-md-9 col-sm-12">
						<div class="divider divider--lg visible-xs"></div>
						<h2 class="text-uppercase title-bottom">MANTENTE EN CONTACTO CON NOSOTROS</h2>
						@if (count($errors) > 0)
							<div class="alert alert-danger">
								<h3>Tienes {{ count($errors)  }} errores</h3>
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
						@if(Session::has('message'))
							<div class="alert alert-success text-center-xs">
								<i class="fa fa-check-circle fa-2x d-inline pull-left m-half-right m-none-xs m-quarter-bottom-xs"></i>
								<p>{!! Session::get('message')['message'] !!}</p>
							</div>
						@endif
						{!! Form::open(['url' => url('contact/email') , 'method' => 'POST' , 'class' => 'contact-form']) !!}
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="inputName">Nombre <sup>*</sup></label>
										<input type="text" class="form-control" id="inputName" name="name" value="{{ old('name') }}" required>
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="inputEmail">Email <sup>*</sup></label>
										<input type="email" class="form-control" id="inputEmail" name="email"  value="{{ old('email') }}" required>
									  </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="inputPhone">Asunto</label>
										<input type="text" class="form-control" id="inputasunto" name="subject"  value="{{ old('subject') }}">
									  </div>
								</div>
							</div>
							<div class="form-group">
								<label for="textareaMessage">Mensaje<sup>*</sup></label>
								<textarea class="form-control" rows="12"  name="message"  value="{{ old('message') }}" required></textarea>
						   </div>
						   <div class="pull-right note">* Campos importantes</div>
						   <button class="btn btn--ys btn--xl btn-top" type="submit">Enviar Mensaje
							   <i class="fa fa-envelope"></i>
						   </button>
						{!! Form::close() !!}
					</div>
				</div>
			</section>
		</div>
		@endsection
	@section('script')

	@stop