<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <h5><i class="ico-ok"></i> Datos Basicos</h5>
            </div>
        </div>

        <div class="panel-body">
            <div class="form-group">
                <label for="">Nombre</label>
                    {!!  Form::text('name',null,array('class' => 'form-control','id'=>'full_name','data-parsley-required' => 'data-parsley-required', 'required')) !!}
                <div class="help-block with-errors"></div>
            <div class="form-group">
                <label for="">Apellido</label>
                    {!!  Form::text('last_name',null,array('class' => 'form-control','id'=>'full_name','data-parsley-required' => 'data-parsley-required', 'required')) !!}
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
            <label for="">Email</label>
            {!!  Form::email('email',null,array('class' => 'form-control','id'=>'email','data-parsley-type' => 'email', 'required')) !!}
                <div class="help-block with-errors"></div>
            </div>
            <label for="">Telefono</label>
            {!!  Form::number('phone',null,array('class' => 'form-control','id'=>'email','data-parsley-type' => 'number', 'data-mask' => '999-9999-999')) !!}
            <p class="help-block">(Opcional)</p>
            <label for="">Identificacion</label>
            {!!  Form::text('identification',null,array('class' => 'form-control','id'=>'cedula','data-parsley-maxlenght' => '10')) !!}
            <p class="help-block">(Opcional)</p>
            <div class="form-group">
            <label for="inputPassword" class="control-label">Contrase&ntilde;a</label>
                <div class="form-group">
                   <input type="password" data-minlength="6" class="form-control" name="password" id="password" placeholder="Contrase&ntilde;a" >
                   <div class="help-block">Minimo 6 caracteres</div>
                </div>
                <div class="form-group">
                   <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#password"
                               data-match-error="Upz, contrase&ntilde;a no coincide" placeholder="Confirmar Contrase&ntilde;a">
                   <div class="help-block with-errors"></div>
                </div>
            </div>
    </div>
</div>
    </div>
    </div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <h5><i class="ico-safari"></i>&nbsp;<strong>Direccion</strong></h5>
            </div>
        </div>
        <div class="panel-body">
            <label for="">Nombre</label>
            {!! Form::text('shipping[0][name]',null,['class'=>'form-control']) !!}
            <p class="help-block">(Opcional)</p>
            <label for="">Direccion</label>
            {!! Form::text('shipping[0][street]',null,['class'=>'form-control']) !!}
            <p class="help-block">(Opcional)</p>
            <label for="">Complemento</label>
            {!! Form::text('shipping[0][complement]',null,['class'=>'form-control']) !!}
            <label for="">Barrio</label>
            {!! Form::text('shipping[0][neighborhood]',null,['class'=>'form-control']) !!}

        </div>
    </div>

</div>


