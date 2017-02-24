{!! Form::open(['url' => url('auth/login') , 'method' => 'POST' , 'class' => 'form-horizontal' , 'id' => "form-login", 'data-toggle'=>"validator" , 'role'=>"form"]) !!}
    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="inputEmail" class="control-label sr-only"></label>
        <div class="col-sm-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input style="border-radius: 0 5px 5px 0" type="email" class="form-control" name="email" placeholder="Email" required id="email" value="{{ old('email') }}">
            </div>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="inputPassword" class="control-label sr-only"></label>
        <div class="col-sm-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input style="border-radius: 0 5px 5px 0" type="password" class="form-control" id="password" name="password"
                       placeholder="Contrase&ntilde;a" data-minlength="6" required>
            </div>
            @if ($errors->has('email'))
                <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
            @endif
        </div>

    </div>

    <div class="form-group">
        <div class="col-xs-7">
            <button type="submit" class="btn btn-primary" >
                <i class="fa fa-sign-in"></i> Iniciar Sesion
            </button>
        </div>
    </div>

<input type="hidden" value="1" name="remember">
    <div class="form-group">
        <div class="col-md-12 text-left">
            <em>&iquest;No tiene cuenta todavia? </em> <a href="{{url('/')}}"><strong>Registrate</strong></a>
            <br>
            <a type="button" href="#" data-toggle="modal" data-target="#mymodal"><em>&iquest;Olvidaste tu contrase&ntilde;a?</em>
            </a>
        </div>
    </div>
{!! Form::close() !!}