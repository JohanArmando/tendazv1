<div class="col-md-4 col-md-offset-1">
    <div class="panel panel-default panel-default_servi">

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                    {!! Form::open(['url' => url('auth/register') , 'method' => 'POST' , 'name' => "form-register" , 'data-toggle'=> "validator" , 'role'=>"form"]) !!}
                        <h2>REGISTRATE</h2>
                        <div class="form-group  text-left">
                            <label>Correo electronico :</label>
                            <div class="input-group">

                                <span class="input-group-addon">
            <i class="fa fa-envelope"></i>
       </span>
                                <input class="form-control" placeholder="" autocomplete="off" required="" name="email" value="" type="email">
                            </div>
                        </div>
                        <div class="form-group text-left">
                            <label>Nombre de tu tienda :</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                <i class="fa  fa-bars"></i>
            </span>
                                <input class="form-control" placeholder="" autocomplete="off" value="" required="required" name="storename" type="text">
                            </div>
                            <div class="help-block"></div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group text-left">
                            <label>Contraseña :</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                <i class="fa fa-key"></i>
            </span>
                                <input class="form-control" placeholder="" autocomplete="off" required="required" name="password" type="password" value="">
                            </div>
                            <div class="help-block"></div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input required="required" name="term" type="checkbox">
                            <strong>Acepto los terminos y condiciones</strong>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary make_tendaz">
                                <i class="fa fa-shopping-cart"></i> Crear tienda
                            </button>
                        </div>
                        <input type="hidden" value="1" name="remember">
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>