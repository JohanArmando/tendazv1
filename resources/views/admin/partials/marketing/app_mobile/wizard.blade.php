<style type="text/css">
    #boton-rect{
        border-radius: 0 !important;
    }
</style>
<div class="">
	<div class="row">
		<section>
            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist"> 

                        <li role="presentation" class="active">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-picture"></i>
                                </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-ok"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <form role="form">
                    <div class="tab-content">
                        <!--STEP 1-->
                        <div class="tab-pane active" role="tabpanel" id="step1">
                           <div class="container-fluid">
                               <div class="row">
                                <div class="col-md-12" style="border: 1 px solid red;">
                                 <div class="text-center"> <h3>INFORMACION DE LA APLICACION</h3> </div>
                                 <div style="margin-bottom: 10px;"></div>
                                 <p align="justify">
                                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                 </p>
                                 <div class="clearfix"></div>
                                 <div style="margin-bottom: 10px;"></div>
                                 <form method="POST" action="#" role="form">
                                     <div class="row">
                                         <div class="form-group col-sm-6">
                                             <label>Nombre del Administrador</label>
                                             <input type="text" class="form-control" value="{{auth('admins')->user()->full_name}}" disabled>
                                         </div>
                                         <div class="form-group col-sm-6">
                                             <label>Correo electronico Autorizado</label>
                                             <input type="text" class="form-control" value="{{auth('admins')->user()->email}}" >
                                         </div>
                                         <div class="form-group col-sm-6">
                                             <label>Otra informacion</label>
                                             <input type="text" class="form-control" name="">
                                         </div>
                                         <div class="form-group col-sm-6">
                                             <label>Otra informacion</label>
                                             <input type="text" class="form-control" name="">
                                         </div>
                                     </div>
                                     <div style="margin-bottom: 10px;"></div>
                                     <div class="form-group pull-right">
                                         <ul class="list-inline pull-right">    
                                           <li><button id="boton-rect" type="button" class="btn btn-default hidden" disabled>Anterior</button></li>
                                           <li><button id="boton-rect" type="button" class="btn btn-primary next-step">Continuar <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                           </button></li>
                                       </ul>
                                   </div>
                               </form>
                               <br>
                           </div>
                       </div>
                   </div>

               </div>
               <!--Fin-->

               <!-- STEP 2-->
               <div class="tab-pane" role="tabpanel" id="step2">
                <div class="container-fluid">
                    <form role="form">
                        <div class="col-sm-12" ">
                            <h3 class="text-center">Personaliza tu App Mobil</h3>
                            <div class="clearfix"></div>

                            <div class=" form-group col-sm-6">
                                <label>Esquema de color</label>
                                <div id="cpicker-esquema" class="input-group colorpicker-component">
                                    <input type="text" value="#00AABB" class="form-control" />
                                    <span class="input-group-addon"><i></i></span>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Tipo de fuente</label>
                                 
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Color de los botones</label>
                                <div id="cpicker-boton" class="input-group colorpicker-component">
                                    <input type="text" class="form-control" value="#FFA500" />
                                    <span class="input-group-addon"><i></i></span>
                                </div>
                            </div>
                             <div class="form-group col-sm-6">
                                <label>Color de los botones</label>
                                <div id="cpicker-font" class="input-group colorpicker-component">
                                    <input type="text" class="form-control" value="#000000" />
                                    <span class="input-group-addon"><i></i></span>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <p align="justify" style="font-size: 18px;">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    <strong>Ejemplo del texto de tu aplicacion</strong>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <ul class="list-inline pull-right">
                    <li><button id="boton-rect" type="button" class="btn btn-default prev-step"><i class="fa fa-arrow-left"></i> Anterior</button></li>
                    <li><button id="boton-rect" type="button" class="btn btn-primary next-step">Guardar y Continuar <i class="fa fa-arrow-right"></i></button></li>
                </ul>
            </div>
            <!-- FIN-->

            <!--STEP 3-->
            <div class="tab-pane" role="tabpanel" id="step3">
                <div class="container-fluid">
                    <div class="col-md-7 col-md-offset-2">
                        <h3 class="text-center">Imagen principal de tu App mobil</h3>
                        <div class="clearfix"></div>
                        <div style="margin-bottom: 10px;"></div>
                        <p>Para que tu tienda tenga un excelente icono te recomendamoe que la imagen tengo una dimension de. </p>
                    </div>
                    <form method="POST" action="#" accept-charset="UTF-8" role="form">
                        <div class="row">
                            <div class="form-group col-md-7 col-md-offset-2" id="MyId">
                            <input type="file" name="icon_image" class="dropify" data-default-file="">
                        </div>
                        </div>
                    </form>
                </div>
                <ul class="list-inline pull-right">
                    <li><button id="boton-rect" type="button" class="btn btn-default prev-step"><i class="fa fa-arrow-left"></i> Anterior</button></li>
                    <li><button id="boton-rect" type="button" class="btn btn-primary next-step">Guardar y Continuar <i class="fa fa-arrow-right"></i></button></li>
                </ul>
            </div>
            <!-- FIN -->

            <!--STEP COMPLETE-->
            <div class="tab-pane" role="tabpanel" id="complete">
                <h3>Completar</h3>
                <p>Tu App mobile ha sido configurada y Solicitada, en un plazo de 72 horas sera entregada.</p>
                
            </div>
            <div class="clearfix"></div>
            <!--FIN-->
        </div>
    </form>
</div>
</section>
</div>
</div> 



