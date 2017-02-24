@extends('servientrega.template')
	@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('servientrega/css/login.css')}}">
	@stop
@section('content')
<div class="container-fluid nopad ">
<div class="row nomarserv">
<div class="col-md-12 nopad">
	@include('servientrega.partials.top')
				@include('servientrega.partials.navlogin')
</div>
	
</div>
	
</div>
<div class="container-fluid serv_back" >
	<div class="row" >
		<div class="text-center" >
			<!-- <img src="/tendaz/images/icons/login.png" alt="" style="width: 100px; height:auto; "> -->
		</div>
		@include('servientrega.partials.form-rigth')
		<div class="col-sm-1 col-lg-1"></div>
		<div class="col-sm-5 col-sm-offset-1 col-lg-4 col-lg-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading text-center" >
					<span class="panel-title">Ingresa a tu tienda</span>
				</div>
				<div class="panel-body">
					<div class="account-box login-box login-with-help">
						<div  id="error-div" ></div>
						{!! Form::open(['url' => url('auth/login') , 'method' => 'POST' , 'class' => 'form-horizontal' , 'id' => "form-login", 'data-toggle'=>"validator" , 'role'=>"form"]) !!}
							<div class="form-group ">
								<label for="inputEmail" class="control-label sr-only"></label>
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
										<input  type="email" class="form-control" name="email" placeholder="Email" required id="email" value="">
									</div>
								</div>
							</div>			
							<div class="form-group ">
								<label for="inputPassword" class="control-label sr-only"></label>
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input  type="password" class="form-control" id="password" name="password"
										placeholder="Contrase&ntilde;a" data-minlength="6" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-xs-7">
									<button type="submit" class="btn btn-primary make_tendaz">
                                		<i class="fa fa-shopping-cart"></i> Iniciar Session
                            		</button>
								</div>
							</div>
							<input type="hidden" value="1" name="remember">
							<div class="form-group">
								<div class="col-md-12 text-left">
									<p>&iquest;No tienes cuenta todavía?<a href="#"> <strong>Regístrate</strong></a> </p>
									<div class="clearfix"></div>
									<div ></div>
									<button type="button" class="btn btn-primary make_tendaz" href="#" data-toggle="modal" data-target="#mymodal"><em>&iquest;Olvidaste tu contrase&ntilde;a?</em>
									</button>
								</div>
							</div>
						{!! Form::close() !!}
					</div>
					</div>
				</div>
			</div>
			<div class="col-sm-5 col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading text-center" >
						<span class="panel-title "><i class="fa fa-thumbs-o-up"></i> Cuentale a tus amigos</span>
					</div>
					<div class="panel-body">
						<div class="login-copytext">
							<div class="col-md-12">

								<p align="justify">Comparte con tus amigos de Servientrega Store y enseñales que tan fácil es comenzár a vender por internet.</p>
							</div>
							<div class="col-md-3">
								<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FTendaz-1007603429285331&width=93&layout=box_count&action=like&size=large&show_faces=true&share=true&height=65&appId=1111594842195185" width="93" height="100" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
							</div>
							<div class="col-md-3 col-md-offset-1">
								<a href="https://twitter.com/ServientregaCS" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aira-label="Close"><span aira-hidden="true">&times;</span></button>
					<div class="text-center"><h4><strong>Recuperar Contrase&ntilde;a | Tendaz</strong></h4></div>
				</div>
				<div class="modal-body">
					<div class="text-center">
						<img src="/tendaz/images/icons/login.png" alt="Logo Tendaz peque�a" style="width: 80px; height: 80px;">
						<p align="center">
							<strong style="font-size: 18px;">Olvisdaste tu contrase&ntilde;a</strong>
						</p>
						<p align="center" style="font-size: 13px;">
							Ingresa tu Email y te enviaremos los pasos de como recuperar el acceso administrativo a tu tienda.
						</p>

					</div>
					<br>
					<form method="POST" action="https://tendaz.com/password/email" accept-charset="UTF-8"><input name="_token" type="hidden" value="442npyxzWkZPhKBvfsCxyPRBGpliytSEaxW1YUlO">
						<div class="form-group ">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input class="form-control" type="email" name="email" required value="" placeholder="email@email.com">
							</div>
						</div>
						<br>
						<div class="text-center">
							<input class="btn btn-default btn-round" type="submit" style="background-color: #033855; color: white;" value="Recuperar contrase&ntilde;a">
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>  
		@include('servientrega.partials.footer')
	@endsection
	@section('script')
	@stop