{!! Form::open(['url' => "admin/products?client_secret=$shop->uuid&client_id=$shop->id" , 'method' => 'POST' , 'class' => 'dropzone hidden-xs hidden-sm' ,
    'id' => 'my-dropzone' , 'files' => true,'role'=>'form', 'data-toggle'=> 'validator']) !!}
    <div class="media border-dotted">
        <div class="row">
             <span class="media-body box col-lg-offset-0">
                 <div class="form-group">
                     <div class="col-sm-9 col-simple">
                        <label class="control-label" style="font-size: 1.2em; color: black">Nombre del producto
                            <small style="color: darkgray">(Obligatorio)</small></label>
                        <input type="text" name="name" class="form-control" placeholder="Ejemplo: Zapato de cuero" required>
                         <div class="help-block with-errors"></div>
                     </div>
                 </div>
             </span>
        </div>
    </div>

<<<<<<< HEAD
     <span class="media-body box col-lg-offset-0">
         <div class="col-sm-9 col-simple">
             <div class="form-group">
                <label class="control-label" for="inputName" style="font-size: 1.2em; color: black">Nombre del producto
                    <small style="color: darkgray">(Obligatorio)</small></label>
                <input type="text" name="name" id="inputName" class="form-control" placeholder="Ejemplo: Zapato de cuero" required>
                 <div class="help-block with-errors"></div>
             </div>
         </div>
     </span>
</a>
<br>
<!-- indicator -->
<div class="indicator hide" id="loading"><img style="
  position: absolute;
  z-index: 999;
  left: 37%;
  top: 35%;
 opacity: 0.5" src="{{ asset('administrator/image/loading/cloud_loading.gif') }}" alt="">
</div>
<!--/ indicator -->
<a href="javascript:void(0);" class="media border-dotted">
        <span class="media-body box">
            <div class="form-group">
                <div class="col-sm-9 col-simple">
                    <label class="control-label" style="font-size: 1.2em; color: black;">Imagenes
                        <small style="color: darkgray">(Opcional)</small>
                    </label>
                    <div class="dz-message" style="height:190px; border-width: 2px; border-style: dashed; border-color: #F26522; ">
                        <h1 style="font-size: 80px !important; color: #F26522; "><i class="ico-cloud-upload2"></i></h1>
                        <label>Arrastra tus imagenes </label>
=======
    <div class="media border-dotted">
        <div class="row">
                <span class="media-body box">
                    <div class="form-group">
                        <div class="col-md-9 col-simple">
                            <label class="control-label" style="font-size: 1.2em; color: black;">Imagenes
                                <small style="color: darkgray">(Opcional)</small>
                            </label>
                            <div class="dz-message" style="height:190px; border-width: 2px; border-style: dashed; border-color: #F26522; ">
                                <h1 style="font-size: 80px !important; color: #F26522; "><i class="ico-cloud-upload2"></i></h1>
                                <label>Arrastra tus imagenes </label>
                            </div>
                        </div>
                        <div class="text-center col-md-9 col-simple">
                            <div  class="dropzone-previews"></div>
                        </div>
>>>>>>> de56f50f23a9e6d447d5c0fa96b55b8cda2a162c
                    </div>
                </span>
        </div>
    </div>
    <div class="media border-dotted">
        <div class="row">
            <span class="media-body box">
                <div class="form-group" >
                    <div class="col-md-2 col-simple">

                        <div class="input-group">
                            <label class="col-md-6 control-label" id="label-precio">Precio</label>
                            <span class="input-group-addon">$</span>
                           <input type="text" style=" height: 30px; width: 85px; text-align: center;" id="price" name="product[variants][0][price]" class="form-control"
                                  onkeypress="return justNumbers(event);" placeholder="0,00">
                        </div>
                    </div>
                    <div class="col-md-2 col-simple" style="margin-left: 6.5%">
                        <div class="input-group">
                            <label class="col-md-6 control-label" id="peso">Peso</label>
                            <span class="input-group-addon">Kg.</span>
                            <input type="text"  id="kilo"  name="product[variants][0][weight]" class="form-control" data-parsley-type="digits"
                                   style="width: 55px;" onkeypress="return justNumbers(event);">
                        </div>
                    </div>
                    <div class="col-md-2 col-simple" style="margin-left: 6.5%">
                        <div class="input-group">
                            <label class="col-md-6 control-label" id="label-stock">Stock</label>
                            <span class="input-group-addon">Cantidad</span>
                            <input type="text"  id="stock" name="product[variants][0][stock]" class="form-control" data-parsley-type="number"
                                   style="width: 55px;  text-align: center;" onkeypress="return justNumbers(event);">
                        </div>
                    </div>
                </div>
            </span>
        </div>
    </div>
    <div class="media border-dotted">
        <div class="row">
              <span class="media-body box">
                <div class="form-group">
                   <div class="col-sm-9 col-simple">
                   <label class="control-label" style="font-size: 1.2em; color: black;">Descripcion
                   <small style="color: darkgray">(Menciona todas las caracteristicas de tu producto)</small>
                  </label>
                  <br>
                     <textarea  class="form-control" name="description" id="simple-description" data-parsley-type="alphanum">
                     </textarea>
                 </div>
                </div>
             </span>

        </div>
<<<<<<< HEAD
     </span>

</a>
<br>
<br>
<div class="row" style="padding: 2.5%">
    <div class="col-md-4 " style="margin-left: 13%">
        <div class="form-group">
            <button type="submit" id="submit" class="pull-left btn  btn-primary" ><i class="fa fa-check"></i> Crear Producto</button>
        </div>
=======
>>>>>>> de56f50f23a9e6d447d5c0fa96b55b8cda2a162c
    </div>
    <div class="row" style="padding: 2.5%">
        <div class="col-md-4 " style="margin-left: 13%">
            <button type="submit" id="submit" class="pull-left btn  btn-primary" ><i class="fa fa-check"></i> Crear Producto</button>
        </div>
        <div class="col-md-5" style="margin-left: -1.5%">
            <a href="{{ url('admin/products') }}" class="pull-right btn  btn-default"><i class="fa fa-times"></i> Cancelar</a>
        </div>
    </div>
    <div class="indicator hide" id="loading"><img style="
      position: absolute;
      z-index: 999;
      left: 37%;
      top: 35%;
     opacity: 0.5" src="{{ asset('administrator/image/loading/cloud_loading.gif') }}" alt="">
    </div>
<<<<<<< HEAD
</div>
{!! Form::close() !!}
=======
{!! Form::close() !!}                            
>>>>>>> de56f50f23a9e6d447d5c0fa96b55b8cda2a162c
