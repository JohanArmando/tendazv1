{!! Form::open(['url' => "admin/products?client_secret=$shop->uuid&client_id=$shop->id" ,
'method' => 'POST' , 'class' => 'dropzone hidden-xs hidden-sm' ,'id' => 'my-dropzone' , 'files' => true]) !!}
<div class="media border-dotted">
    <div class="row">
         <span class="media-body box col-lg-offset-0">
             <div class="col-sm-9 col-simple">
                     <div class="form-group">
                     <label class="control-label" style="font-size: 1.2em; color: black">Nombre del producto
                         <small style="color: darkgray">(Obligatorio)</small></label>
                     <input type="text" name="name" class="form-control" placeholder="Ejemplo: Zapato de cuero">
                 </div>
             </div>
         </span>
    </div>
</div>

<div class="media border-dotted">
    <div class="row">
      <span class="media-body box">
        <div class="form-group">
          <div class="row">
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
          </div>
        </div>
      </span>
    </div>
</div>
<div class="media border-dotted">
    <div class="row">
      <span class="media-body box">
        <div class="form-group" >
          <div class="row">
            <div class="col-md-12 col-simple">
              <label class="control-label" style="font-size: 1.2em; color: black;">Dimensiones
              <small style="color: darkgray">(Es importante completar tus dimensiones para calcular el valor del envio)</small>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group" >
          <div class="row">
            <div class="col-md-12  col-simple">
              <div class="col-md-3">
                  <div class="input-group">
                      <label class="col-md-6 control-label" id="label-precio">
                        Largo
                      </label>
                      <span class="input-group-addon">
                        Cm.
                      </span>
                      <input type="number" id="price" name="large" class="form-control" placeholder="1.0 CM">
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="input-group">
                      <label class="col-md-6 control-label" id="peso">
                        Alto
                      </label>
                      <span class="input-group-addon">
                        Cm
                      </span>
                      <input type="number"  id="kilo"  name="height" class="form-control" data-parsley-type="digits" placeholder="1.0 CM">
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="input-group">
                      <label class="col-md-6 control-label" id="label-stock">
                        Ancho
                      </label>
                      <span class="input-group-addon">
                        Cm
                      </span>
                      <input type="number" id="stock" name="width" class="form-control" data-parsley-type="number" placeholder="1.0 CM">
                  </div>
              </div>
            </div>
            
          </div>
        </div>
      </span>
    </div>
</div>
<div class="media border-dotted">
  <div class="row">
    <span class="media-body box">
      <div class="form-group" >
        <div class="row">
          <div class="col-md-12  col-simple">
            <div class="col-md-3">
                <div class="input-group">
                    <label class="col-md-6 control-label" id="label-precio">
                      Precio
                    </label>
                    <span class="input-group-addon">
                      $
                    </span>
                    <input type="number" id="price" name="product[variants][0][price]" class="form-control" placeholder="$12000">
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <label class="col-md-6 control-label" id="peso">
                      Peso
                    </label>
                    <span class="input-group-addon">
                      Kg.
                    </span>
                    <input type="number"  id="kilo"  name="product[variants][0][weight]" class="form-control" data-parsley-type="digits" placeholder="1.0 Kg">
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <label class="col-md-6 control-label" id="label-stock">
                      Stock
                    </label>
                    <span class="input-group-addon">
                      #
                    </span>
                    <input type="number" id="stock" name="product[variants][0][stock]" class="form-control" data-parsley-type="number" placeholder="12">
                </div>
            </div>
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
        <div class="row">
            <div class="col-sm-9 col-simple">
                <label class="control-label" style="font-size: 1.2em; color: black;">Descripcion
                    <small style="color: darkgray">(Menciona todas las caracteristicas de tu producto)</small>
                </label>
                <br>
             <textarea  class="form-control" name="description" id="simple-description" data-parsley-type="alphanum">
             </textarea>
            </div>
        </div>
        </div>
     </span>
    </div>
</div>
<div class="row" style="padding: 2.5%">
    <div class="col-md-4 " style="margin-left: 13%">
        <button type="submit" id="submit" class="pull-left btn  btn-primary" ><i class="fa fa-check"></i> Crear Producto</button>
    </div>
    <div class="col-md-5" style="margin-left: -1.5%">
        <a href="{{ url('admin/products') }}" class="pull-right btn  btn-default"><i class="fa fa-times"></i> Cancelar</a>
    </div>
    <div class="col-md-4">
        <div class="help-block-create  with-errors hidden" id="name"></div>
    </div>
</div>
<div class="indicator hide" id="loading"><img style="
      position: absolute;
      z-index: 999;
      left: 37%;
      top: 35%;
     opacity: 0.5" src="{{ asset('administrator/image/loading/cloud_loading.gif') }}" alt="">
</div>
{!! Form::close() !!}