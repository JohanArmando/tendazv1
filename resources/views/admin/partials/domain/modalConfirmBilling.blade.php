<div id="bs-modal-confirm-billing" class="modal fade" aira-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close dismiss" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-left">Confirmar informacion de pago</h3>
            </div>
            <div class=" body">
                <form class="setup-billing hidden payment-form" method="POST" action="{{ url('admin/configuration/domain/get/') }}">
                    <div class="display-td">
                        <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                    </div>
                    <div class="main">

                    </div>
                    <div class="divider-top">
                        <p>Direcci&oacute;n envioo.</p>
                    </div>
                    {!!  csrf_field() !!}

                    <div class="row">
                        <div class="col-xs-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('name' , 'Nombre:' , array('class' => 'next-label')) !!}
                                {!! Form::text('name' , Auth::client()->get()->name , array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('last_name' , 'Apellido:' ,  array('class' => 'next-label')) !!}
                                {!! Form::text('last_name' , Auth::client()->get()->last_name , array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                {!! Form::label('address' , 'Direccion:' ,  array('class' => 'next-label')) !!}
                                {!! Form::text('address' , Auth::client()->get()->shop->state , array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('city' , 'Ciudad:' ,  array('class' => 'next-label')) !!}
                                {!! Form::text('city' , null , array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('zip' , 'Zip Code:' ,  array('class' => 'next-label')) !!}
                                {!! Form::text('zip' , null , array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('country' , 'Pais:' ,  array('class' => 'next-label')) !!}
                                {!! Form::select('country'  ,$countries , Auth::client()->get()->shop->base_de_operaciones , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('state' , 'Estado:' ,  array('class' => 'next-label')) !!}
                                {!! Form::text('state' , Auth::client()->get()->shop->state , array('class' => 'form-control')) !!}
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default cancel-payment" data-dismiss="modal">Cancelar</button>
                @if(!Auth::client()->get()->subscribed())
                    <button type="button" class="btn btn-defaul payment-success" style="background-color: #033855; color: white;" >Confirmar</button>
                @else
                    <button type="button" class="btn btn-defaul payment-with-is-susbcribed" style="background-color: #033855; color: white;" >Confirmar</button>
                @endif
            </div>
        </div>
    </div>
</div>