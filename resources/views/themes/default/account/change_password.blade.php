@extends('themes.default.template')
	@section('css')
		@stop
	@section('content')
		<div class="container">
			<div class="row">
					<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Actualizar Contraseña</h2>

                  <div class="panel-body">

                    {!! Form::open(['url' => url('myProfile/change_password') , 'method' => 'POST',
                    'role' => 'form', 'data-toggle' => 'validator']) !!}

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
                    <div class="form-group">
                      <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Actualizar Contraseña" type="submit">
                    </div>
                    {!! Form::close() !!}

                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
			</div>
		</div>
		@endsection
	@section('script')
		@stop