@extends('admin.template')
    @section('css')
            <link rel="stylesheet" href="{{asset('admin/font-awesome/font-awesome.min.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('admin/css/payment-plan.css')}}">
        @stop
    @section('content')
        <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title semibold"><i class="fa fa-money"></i>&nbsp; Pagar mi Plan</h4>
        </div>
        <div class="page-header-section">
            <!--Toolbar-->
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin/home')}}">Inicio</a></li>
                    <li class="active"><a href="#" style="color: orange;">Pagar mi plan</a></li>
                </ol>
            </div>
        </div>
    </div>
    <br>
    <br> 
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Informacion de pago</h4>
                </div>
                
                <div>
                    <div class="panel-collapse pull out">
                        <div class="panel-body">
                            <p style="font-size: 15px;"><strong>Plan: Empezar a vender online</strong></p>
                            <div class="text-left">
                                <a href="#" class="btn btn-default btn-xs"><strong>Cambiar Plan</strong></a>                     
                            </div>
                            <hr/>
                            <p style="font-size: 15px;"><strong>Valor Mensual:</strong> $123.456</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Selecciona un medido de pago y periodo</h4>
                </div>
                <div class="panel-collapse pull out">
                                <!-- panel toolbar -->
                                <div class="panel-toolbar-wrapper">
                                    <div class="panel-toolbar">
                                        <ul class="nav nav-tabs nav-justified">
                                            <li class="active"><a href="#one" data-toggle="tab" aria-expanded="true">Metodo de Pago <i class="fa fa-credit-card"></i></a></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ panel toolbar -->
                                
                        <div class="panel-body">
                                <div class="panel-content">
                                <br>
                                    <div class="col-md-12 well">
                                            <div class="col-md-1" style="position: relative;">
                                                <span class="radio custom-radio custom-radio-primary">  
                                                <input type="radio" id="customradio1" value="option1">  
                                                <label for="customradio1"></label>   
                                            </span>
                                            </div>
                                            <div class="col-md-10">
                                                <p style="font-size:  20px;"><strong>Mensual</strong></p>
                                                <div class="text-help"><strong>En un pago de $ 123.456</strong></div>
                                            </div>
                                            <a href="#bs-modal-lg" data-toggle="modal">modal</a>
                                        </div>
                                    
                                        <div class="col-md-12 well">
                                            <div class="col-md-1" style="position: relative;">
                                               <div class="col-md-1" style="position: relative;">
                                                <span class="radio custom-radio custom-radio-primary">  
                                                <input type="radio" id="customradio2" value="option1">  
                                                <label for="customradio2"></label>   
                                            </span>
                                            </div>
                                            </div>
                                                <div class="col-md-10">
                                                    <p style="font-size:  20px;"><strong>Mensual</strong></p>
                                                    <div class="text-help"><strong>En un pago de $ 123.456</strong></div>
                                                </div>
                                                <a href="#bs-modal-lg" data-toggle="modal">modal</a>
                                        </div>
                                                                        
                                        <div class="col-md-12 well">
                                            <div class="col-md-1" style="position: relative;">
                                            <div class="col-md-1" style="position: relative;">
                                                    <span class="radio custom-radio custom-radio-primary">  
                                                        <input type="radio" id="customradio3" value="option1">  
                                                        <label for="customradio3"></label>   
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="col-md-10">
                                                    <p style="font-size:  20px;"><strong>Mensual</strong></p>
                                                    <div class="text-help"><strong>En un pago de $ 123.456</strong></div>
                                                </div>
                                                <a href="#bs-modal-lg" data-toggle="modal">modal</a>
                                            </div>
                                </div>
                         </div>

                    <div class="panel-footer">
                        <div class="text-center">
                        <button class="btn btn-success"><strong>Pagar Plan</strong> <i class="fa fa-credit-card"></i></button>
                        </div>
                    </div>   

                  </div>
            </div>
        </div>      
        

        <!--Modal Credit-card -->
            <div id="bs-modal-lg" class="modal fade">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="fa fa-credit-card fa-3x style="font-size:36px;"></div>
                                <h3 class="semibold modal-title">Informacion Personal para el Pago</h3>
                                <p class="text-muted">Debes tener tu tarjeta de credito a la mano y digitar con exactitud, para no tener problemas, se prudente con tus datos.</p>
                            </div>
                            <div class="modal-body">
                             <br>
                                <div class="container">
                                    <div class="row">
                                        
                                        <div class="col-md-1"></div> 
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4 col-xs-4">
                                            <div class="panel panel-default credit-card-box">
                                                <div class="panel-heading display-table" >
                                                    <div class="row display-tr" >
                                                        <h3 class="panel-title display-td" >Detalles del pago</h3>
                                                            <div class="display-td">                            
                                                                <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                                                            </div>
                                                    </div>                    
                                                </div>
                                                <div class="panel-body">
                                                    <form role="form" id="payment-form" method="POST" action="">
                                                        <div class="row">
                                                            <div class="col-md-4"></div>
                                                            <div class="col-xs-12">
                                                            <div class="form-group">
                                                    <label for="cardNumber">NUMERO DE TARJETA</label>
                                                    <div class="input-group">

                                                        <input type="tel" class="form-control" name="cardNumber"      placeholder="numero de tarjeta"
                                                            autocomplete="cc-number"
                                                            required autofocus 
                                                        />
                                                    </div>
                                                </div>                            
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-7 col-md-7">
                                                <div class="form-group">
                                                    <label for="cardExpiry"><span class="hidden-xs">FHECHA</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                                    <input 
                                                        type="tel" 
                                                        class="form-control" 
                                                        name="cardExpiry"
                                                        placeholder="MM / YY"
                                                        autocomplete="cc-exp"
                                                        required 
                                                    />
                                                </div>
                                            </div>
                                            <div class="col-xs-5 col-md-5 pull-right">
                                                <div class="form-group">
                                                    <label for="cardCVC">CV</label>
                                                    <input 
                                                        type="tel" 
                                                        class="form-control"
                                                        name="cardCVC"
                                                        placeholder="CVC"
                                                        autocomplete="cc-csc"
                                                        required
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="row" style="display:none;">
                                            <div class="col-xs-12">
                                                <p class="payment-errors"></p>
                                            </div>
                                        </div>
                                    </form>


                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-1"></div>
                                       </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                                <button type="button" class="btn btn-success"><i class="fa fa-credit-card"></i>  <strong>Confirmar datos</strong></button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                
        <!--Fin del modal-->
        @endsection
    @section('scripts')
<script type="text/javascript" src="{{asset('admin/js/jquery-validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/jquery-payment.min.js')}}"></script>
@stop

