<div id="vue-payment">
    @foreach($plan->plan->periods as $key => $period)
       <div class="choose-period list-unstyled big-radio-container selections chosen-period text-center p-top ">
           <div class="col-xs-10 col-xs-offset-1 text-left selection cc recurring one-month-selection m-bottom {{ $key != 0 ?: 'selected' }}" data-period="{{ $period->getIntervalInMonthly() }}" data-uuid="{{ $period->uuid }}" data-price="{{ $period->getTotalPriceWithDiscount() }}" data-credit-until=''>
               <div class="p-top-half p-bottom-half text-black row">
                   <div class="col-md-1">
                       <i class="fa fa-circle-o"></i>
                       <i class="fa fa-check-circle-o"></i>
                   </div>
                   <div class="col-md-10">
                       <strong>{{ $period->name }} </strong>
                       <span class="text-tertiary {{ $period->discount >  0 ? : 'hidden'}}">
                           <strong>{{ $period->discount }}%</strong> de descuento
                       </span>
                       <div class="text-greylight {{ $period->getDiscount( $period->getTotalPrice() ) > 0 ?: 'hidden' }}"><i>Ahorras {{ $period->getDiscount( $period->getTotalPrice() ) }} USD </i></div>
                       <div class="text-greylight">
                           En un pago de <strong>{{  $period->getTotalPriceWithDiscount() }} USD</strong>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   @endforeach 
        
           <!-- Boton pago con tarjeta -->
   <div class="checkout-confirm-container confirm">
       <div class="checkout-confirm container">
            <div style="display: none; margin-left: 4.5%"><strong>Medio de pago:</strong> <span class="confirm-method">Tarjeta de cr&eacute;dito</span></div>
            <div style="display: none ;width: 59%; margin-left: 4.5%"><strong>Per&eacute;odo a contratar:</strong> <span class="confirm-period"></span></div>
            
            

           <div class="clearfix"></div>
           <div class="panel-footer text-center">
               <div class="text-center">
                   <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-default-tendaz confirm_button m-half-bottom m-half-top">
                       Contratar plan
                       <span class="one-time-in-button" style="display: none">y ahorrar
                           <strong class="savings"></strong>
                       </span>
                       <i class="fa fa-spinner fa-spin fa-fw margin-bottom" style="display: none"></i>
                   </a>
               </div>
           </div>
           
           <button data-toggle="modal" data-target="#myModal" class="hidden btn btn-primary">
               Contratar plan Modal
           </button>
       </div>
   </div>

   <!-- Modal -->
   <div class="modal fade bs-example-modal-md buyModal" tabindex="-1" aria-labelledby="mySmallModalLabel" id="myModal" role="dialog" >
       <div class="modal-dialog modal-md" role="document">
           <div class="modal-content buyContent">
               <div class="modal-header buyHeader">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="closeBuy" aria-hidden="true">&times;</span></button>
                   <h4 class="modal-title" id="myModalLabel">Pagar Suscripci&oacute;n</h4>
               </div>
               <div class="modal-body buyBody">
                    {!! Form::open(['url' => '/admin/account/checkout/finish' , 'method' => 'POST' , 'id'=>'formCardPayment' , 'class' => 'no-padding submit_form']) !!}
                        <input type="hidden" name="uuid" class="input_uuid" value="{{ $plan->plan->periods[0]->uuid }}">
                        <input type="hidden" name="token" class="input_uuid" value="">
                       <div class="row">
                           <div class="form-group col-md-12">
                               <label for="">Numero de Tarjeta *</label>
                               <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                   <div class="input-group-addon" id="type-card"></div>
                                   <input type="text" id="card" placeholder="---- ---- ---- ----" class="form-control inputBuy"  required>
                               </div>
                           </div>
                           <div class="form-group col-md-8">
                               <label for="">Expide el *</label>
                               <input type="text" id="expiry" placeholder="MM / YYYY" class="form-control inputBuy" required>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="">CVC *</label>
                               <input id="cvc" type="text" placeholder="---" class="form-control inputBuy" maxlength="3" pattern="[0-9]*" required>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="">Nombres</label>
                               <input id="name" type="text" name="name" value="{{ Auth('admins')->user()->name }} {{ Auth('admins')->user()->last_name }}" placeholder="John Doe" class="form-control" required>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="">Email</label>
                               <input id="email" type="text" value="{{ Auth('admins')->user()->email }}" name="email" placeholder="123 Main Street" class="form-control" required>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="">Direccion</label>
                               <input id="addrLine1" type="text" value="" name="addrLine1" placeholder="123 Main Street" class="form-control" required>
                           </div>
                           
                           <div class="form-group col-md-6">
                               <label for="">Ciudad</label>
                               <input id="city" type="text" name="city" placeholder="Townsville" class="form-control" required>
                           </div>
                           <div class="form-group col-md-6">
                               <label for="">Codigo Postal</label>
                               <input id="zipCode" type="text" name="zipCode" placeholder="43206" class="form-control" required>
                           </div>
                           <div class="form-group col-md-6">
                               <label for="">Estado</label>
                               <input id="state" type="text" name="state" placeholder="Ohao" class="form-control" required>
                           </div>
                           <div class="form-group col-md-6">
                               <label for="">Pais</label>
                               <input id="country" type="text" name="country" placeholder="USA" class="form-control" required>
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
</div>
