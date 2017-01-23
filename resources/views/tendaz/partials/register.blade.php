{!! Form::open(['url' => url('auth/register') , 'method' => 'POST' , 'name' => "form-register" , 'data-toggle'=> "validator" , 'role'=>"form"]) !!}
    <div class="form-group">
        <div class="input-group">
       <span class="input-group-addon">
            <i class="fa fa-envelope"></i>
       </span>
            <input style="border-radius: 0 5px 5px 0" class="form-control" placeholder="Correo electronico" autocomplete="off" required name="email"  value="{{ old('email') }}" type="email">
        </div>
        <div class="help-block">{{ $errors->default->first('email') }}</div>
        <div class="help-block with-errors"></div>
    </div>
<input type="hidden" name="plan" value="{{ isset($_GET['plan']) ? $_GET['plan'] : '' }}">
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="fa  fa-bars"></i>
            </span>
            <input style="border-radius: 0 5px 5px 0" class="form-control" placeholder="Nombre de tu tienda" autocomplete="off" value="{{ old('storename') }}" required="required" name="storename" type="text">
        </div>
        <div class="help-block">{{ $errors->default->first('storename') }}</div>
        <div class="help-block with-errors"></div>
    </div>
    <div class="name_store"></div>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="fa fa-key"></i>
            </span>
            <input style="border-radius: 0 5px 5px 0" class="form-control" placeholder="Password" autocomplete="off" required="required" name="password" type="password" value="">
        </div>
        <div class="help-block">{{ $errors->default->first('password') }}</div>
        <div class="help-block with-errors"></div>
    </div>
<input type="hidden" name="plan" value="1">
    <div class="form-group">
        {!! Form::checkbox('term' , null , false , ['required' => 'required']) !!}
        <strong>
            <a href="{{asset('tendaz/TERMINOSYCONDICIONES.pdf')}}" target="_black"> Acepto Termino y Condiciones</a>
        </strong>
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary"  >
            <i class="fa fa-shopping-cart"></i> Crear tienda
        </button>
    </div>
<input type="hidden" value="1" name="remember">
{!! Form::close() !!}