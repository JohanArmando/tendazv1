@extends('tema3.template')
	@section('css')
		@stop
	@section('content')
	<div class="content">
				<div class="container">
					<div class="row">

						<div class="col-md-6 col-md-offset-3">
						<div class="noo-products-menu mt-5">
							<div class="noo-product-menu-content">
								<div class="product-menu-bk"></div>
								<div class="noo-line">
											<span class="line-one">
												<span></span>
												<span></span>
											</span>
											<span class="line-two">
												<span></span>
												<span></span>
											</span>
								</div>
								<ul class="">
									<li  style="margin: 100px 50px 100px 50px">
										<div class="text-center" style="color: white">
										{!! Form::open(['url' => url('myProfile/change_password') , 'method' => 'POST',
                   						'role' => 'form', 'data-toggle' => 'validator']) !!}
										<div class="form-group"><br><br>
											<h2 style="color: white">Cambiar Contrase&ntilde;a</h2>
											<h2><i style="color: white" class="fa fa-lock fa-2x"></i></h2>
										</div>
										<div class="form-group">
											<div class="">
												<label>Contraseña Actual</label>
												{!! Form::password('current_password' ,['class' => 'form-control' ,'required']) !!}
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="form-group">
											<div class="">
												<label>Nueva Contraseña</label>
												{!! Form::password('password' ,['class' => 'form-control' ,'required', 'id' => 'inputPassword']) !!}
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="form-group">
											<div class="">
												<label>Repetir Contraseña</label>
												{!! Form::password('password_confirmation' ,['class' => 'form-control' ,'required' ,
                                                'data-match-error' => 'Upz, Contrase&ntilde;as no son iguales' , 'id' => 'inputPasswordConfirm' ,
                                                'data-match' => '#inputPassword']) !!}
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="form-group" style="height: 100px">
											<button name="recover-submit" class="btn btn-lg btn-primary" type="submit">
												Actualizar <span class="hidden-xs">Contrase&ntilde;a</span>
											</button>
										</div>
										{!! Form::close() !!}
										</div>
									</li>
								</ul>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			<div style="margin-bottom: 5px;"></div>
		@endsection
	@section('script')
		@stop