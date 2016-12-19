<!--Collapse de cupon con limitaciones-->
<div class="collapse" id="cupon_limitantes">
    <div class="well">
        <div class="row">
            <div class="col-md-12" id="modal1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Datos Importantes del Cupon</h4>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => 'admin/marketing/coupons', 'data-toggle'=>'validator' , 'role'=>'form','method' => 'POST' , 'files' => true,]) !!}
                        <div class="form-group">
                            <label for="codigo_de_cupo">Codigo del cupon<p><sub><a  id="generate">Generar codigo</a></sub></p> </label>
                            <input type="text" class="form-control" value="" id="cod" name="discount[code]" required/>
                            <div class="help-block with-errors"></div>
                            <p class="help-block">Este es el codigo que deberan ingresar los clientes para recibir el beneficio.</p>
                            <hr>
                        </div>
                        <div class="form-group">
                            <label for="tipo_descuento">Tipo Descuento</label>
                            <select class="form-control" id="type-2" name="discount[type]">
                                <option value="percentage">Porcentaje del total</option>
                                <option value="absolute">Monto fijo</option>
                                <option value="shipping">Envio gratis</option>
                            </select>
                            <hr>
                        </div>
                        <div class="form-group" >
                            <label for="porcentaje_descuento">Porcentaje de Descuento</label>
                            <div class="input-group">
                                <span  class="input-group-addon" id="absolute-2">$</span>
                                <input type="number" class="form-control" name="discount[value]" onkeypress="return justNumbers(event);"/>
                                <span class="input-group-addon" id="percentage-2">%</span>
                            </div>
                            <p class="help-block" style="height: 68px !important;">Es el monto de descuento que recibir&aacute;n tus clientes sobre el total de la compra (no se aplica sobre los costos de env&iacute;o).</p>
                        </div>
                        <div class="text-right vertical-center">
                            <a href="#" id="limit">Agregar Limitantes al Cup&oacute;n</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 " id="modal2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Limitancias del Cupon</h4>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Limitar la disponibilidad por cantidad de usos:</label>
                            <div class="form-group">
                                <input id="0" type="radio" name="discount[limit_uses]" value="0">
                                <label for="0">Disponible siempre</label>
                            </div>
                            <div class="form-group" style="height: 38px">
                                <input id="1" type="radio" name="discount[limit_uses]" value="1"/>
                                <label for="1">Permitir hasta <strong id="4" class="hidden">
                                <input type="text" class="inputFrom"  name="discount[max_uses]"> usos.</strong></label>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-6">
                            <label>Limitar la disponibilidad por fecha:</label>
                            <div class="form-group">
                                <p><input type="radio" name="discount[limit_dates]" id="sinDate" value="0"/>
                                <label for="sinDate">Disponible siempre.</label></p>
                                <input type="radio" value="1" name="discount[limit_dates]" id="date">
                                <label for="date">Disponible desde:</label>
                            </div>
                            <div class="form-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control hasDatepicker hidden col-sm-6" style="width: 50%" id="date-from" name="discount[start_date]" placeholder="Desde">
                                        <input type="text" class="form-control hasDatepicker hidden col-sm-6" style="width: 50%" id="date-to" name="discount[end_date]" placeholder="Hasta">
                                        <div class="col-sm-12"><hr></div>
                                    </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Limitar segun contenido del carrito:</label>
                                <p><i class="fa fa-angle-right"></i>
                                S&oacute;lo si el valor de la compra es mayor a</p>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="number" class="form-control" name="discount[restrictions][min_price]" onkeypress="return justNumbers(event);"/>
                                </div>
                                <hr>
                            </div>
                            @if(count($categories) > 0)
                                    <div class="form-group media border-dotted">
                                        <label>Limitar la disponibilidad por categoria:</label>
                                        <p><i class="fa fa-angle-right"></i>
                                        Aplicar s&oacute;lo a productos de las categor&iacute;as</p>
                                        {!! Form::select('discount[restrictions][categories][]',$categories,null,['style' => 'width:100%',
                                        'class' => 'select2' , 'multiple' => 'multiple', 'id' => 'selectCategory']) !!}
                                    </div>
                            @endif

                        </div>

                         </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- button -->
        <div class="row">
            <div class="col-md-12 text-center">
                <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i> Agregar cupon</button>
                <button type="button" data-toggle="collapse" data-target="#cupon_limitantes" class="btn btn-default"><i class="fa fa-times"></i> Cancelar </button>
            </div>
        </div>
        <!-- end button-->
    </div>
</div>
    <div class="page-end-space"></div>
{!! Form::close() !!}
