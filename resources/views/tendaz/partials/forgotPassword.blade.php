<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aira-label="Close"><span aira-hidden="true">&times;</span></button>
                <div class="text-center"><h4><strong>Recuperar Contrase&ntilde;a | Tendaz</strong></h4></div>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img src="{{ elixir('/tendaz/images/icons/login.png')}}" alt="Logo Tendaz peque�a" style="width: 80px; height: 80px;">
                    <p align="center">
                        <strong style="font-size: 18px;">Olvisdaste tu contrase&ntilde;a</strong>
                    </p>
                    <p align="center" style="font-size: 13px;">
                        Ingresa tu Email y te enviaremos los pasos de como recuperar el acceso administrativo a tu tienda.
                    </p>

                </div>
                <br>
                {!! Form::open(['url' => url('/password/email') , 'method' => 'POST']) !!}
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" name="email" required value="{{ old('email') }}" placeholder="email@email.com">
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <br>
                    <div class="text-center">
                        <input class="btn btn-default btn-round" type="submit" style="background-color: #033855; color: white;" value="Recuperar contrase&ntilde;a">
                    </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>