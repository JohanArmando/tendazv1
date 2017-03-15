   <!-- Modal -->
   <div class="modal fade bs-example-modal-lg buyModal" tabindex="-1" aria-labelledby="mySmallModalLabel" id="myModalPlan" role="dialog" >
       <div class="modal-dialog modal-lg" role="document">
           <div class="modal-content buyContent">
               <div class="modal-header buyHeader">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="closeBuy" aria-hidden="true">&times;</span></button>
                   <h4 class="modal-title" id="myModalLabel">Pagar Plan</h4>
               </div>
               <div class="modal-body buyBody">
                    {!! Form::open(['url' => '/plans/payment' , 'method' => 'POST' , 'id'=>'formCardPayment' , 'class' => 'no-padding submit_form']) !!}
                    <input type="hidden" name="token" class="input_uuid" value="">
                    <input type="hidden" name="plan" id="plan" class="input_uuid" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <legend>Datos personales</legend>
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <span class="input-group-addon"><i aria-hidden="true" class="fa fa-user"></i></span>
                                    <input id="name" type="text" name="name"  placeholder="Pepito Perez" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <input id="email" type="email"  name="email" placeholder="email@email.com" class="form-control" required>
                                    <p id="result"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <legend>Datos de la tarjeta</legend>

                            <div class="form-group">
                                <label for="">Numero de Tarjeta *</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <div class="input-group-addon" id="type-card"><i class="fa fa-credit-card"></i></div>
                                    <input type="text" id="card" placeholder="- - - -  - - - -  - - - -  - - - -" class="form-control"  required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-8">
                                    <label for="">Expide el *</label>
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" id="expiry" placeholder="MM / YYYY" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">CVC *</label>
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <span class="input-group-addon"><i aria-hidden="true" class="fa fa-check"></i></span>
                                        <input id="cvc" type="text" placeholder="- - -" class="form-control" maxlength="3" pattern="[0-9]*" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <legend>Datos de la tienda</legend>
                            <div class="form-group col-md-6">
                                <label for="">Nombre</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <span class="input-group-addon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                    <input id="shop" type="text"  name="shop_name" placeholder="Mi tienda" class="form-control" required>
                                </div>
                                <a class="conditions" style="color: grey" href="{{asset('tendaz/TERMINOSYCONDICIONES.pdf')}}" target="_black"> &nbsp; Acepto Termino y Condiciones</a>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Contrase&ntilde;a</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                    <input id="password" type="password"  name="password" placeholder="- - - - - -" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <legend>Direcci&oacute;n de facturaci&oacute;n</legend>

                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Direccion 1 *</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <span class="input-group-addon"><i aria-hidden="true" class="fa fa-pencil"></i></span>
                                <input id="addrLine1" type="text" value="" name="addrLine1" placeholder="Calle 140" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Direccion 2 (opcional)</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <span class="input-group-addon"><i aria-hidden="true" class="fa fa-pencil"></i></span>
                                <input id="addrLine2" type="text" value="" name="addrLine2" placeholder="Barrio" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Ciudad *</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <span class="input-group-addon"><i aria-hidden="true" class="fa fa-pencil"></i></span>
                                <input id="city" type="text" name="city" placeholder="Bogota" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Codigo Postal *</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <span class="input-group-addon"><i aria-hidden="true" class="fa fa-pencil"></i></span>
                                <input id="zipCode" type="text" name="zipCode" placeholder="111011" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Estado *</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <span class="input-group-addon"><i aria-hidden="true" class="fa fa-pencil"></i></span>
                                <input id="state" type="text" name="state" placeholder="Cundinamarca" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Pais *</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <span class="input-group-addon"><i aria-hidden="true" class="fa fa-globe"></i></span>
                                <input id="country" type="text" name="country" placeholder="Colombia" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button id="enviar" type="button" data-loading-text="<i class='fa fa-spinner fa-spin'></i> procesando..." class="btn btn-primary pull-right buyRight" disabled="true"></button>
                        </div>
                    </div>
                    {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
<!-- end Modal -->