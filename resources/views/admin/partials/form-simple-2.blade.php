
{{-- {!! Form::open(['url' => "admin/products?client_secret=$shop->uuid&client_id=$shop->id" ,
'method' => 'POST' , 'class' => 'dropzone' ,'id' => 'my-dropzone' , 'files' => true]) !!} --}}
<div id="app-vue-simple">
    <form v-if="!save" action="{{ url('admin/products?client_secret=$shop->uuid&client_id=$shop->id') }}"  method="POST" role="form">
    <div class="media border-dotted">
      <div class="row">
        <span class="media-body box">
          <div class="col-md-9 col-simple">
            <div class="form-group">
              <div class="row">
                <label class="control-label" style="font-size: 1.2em; color: black">Nombre del producto
                <small style="color: darkgray">(Obligatorio)</small></label>
                <input type="text" v-model="product_new.name" name="name" class="form-control" placeholder="Ejemplo: Zapato de cuero">
              </div>
            </div>
          </div>
        </span>
      </div>
    </div>

    <div class="media border-dotted">
        <div class="row">
          <span class="media-body box">
            <div class="col-md-9 col-simple">
              <div class="form-group">
                <div class="row">
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
            <div class="col-md-12 col-simple">
              <div class="form-group" >
                <div class="row">
                
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
                          <input type="number" v-model="product_new.large" id="price" name="large" class="form-control" placeholder="1.0 CM">
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
                          <input type="number"  id="kilo"  v-model="product_new.height" name="height" class="form-control" data-parsley-type="digits" placeholder="1.0 CM">
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
                          <input type="number" id="stock" v-model="product_new.width" name="width" class="form-control" data-parsley-type="number" placeholder="1.0 CM">
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
          <div class="col-md-12  col-simple">
            <div class="form-group" >
              <div class="row">
              
                <div class="col-md-3">
                    <div class="input-group">
                        <label class="col-md-6 control-label" id="label-precio">
                          Precio
                        </label>
                        <span class="input-group-addon">
                          $
                        </span>
                        <input type="number" v-model="product_new.variant.price" id="price" name="price" class="form-control" placeholder="$12000">
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
                        <input type="number" v-model="product_new.weight" id="kilo"  name="weight" class="form-control" data-parsley-type="digits" placeholder="1.0 Kg">
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
                        <input type="number" id="stock" v-model="product_new.variant.stock" name="stock" class="form-control" data-parsley-type="number" placeholder="12">
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
            <div class="col-sm-9 col-simple">
              <div class="form-group">
                <div class="row">
                
                    <label class="control-label" style="font-size: 1.2em; color: black;">Descripcion
                        <small style="color: darkgray">(Menciona todas las caracteristicas de tu producto)</small>
                    </label>
                    <br>
                 <textarea  class="form-control" v-model="product_new.description" name="description" id="simple-description" data-parsley-type="alphanum">
                 </textarea>
                </div>
            </div>
            </div>
         </span>
        </div>
    </div>
    <div class="row" style="padding: 2.5%">
        <div class="col-md-4 " style="margin-left: 13%">
            {{--<button type="submit" id="submit" class="pull-left btn  btn-primary" ><i class="fa fa-check"></i> Crear Producto</button>--}}
            <button type="button" class="btn btn-primary" id="btn-store-product" v-on:click="storeProduct()">Crear Producto</button>
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
  </form>
  <div v-else>
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
              <div class="row">

                 <div class="col-md-12">
                    <label class="control-label" style="font-size: 1.2em; color: black;">Informacion General</label>
                   <div class="form-group">
                     <label for="">Nombre del producto</label>
                     <input type="text" v-model="product.name" class="form-control" id="" placeholder="">
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="">Largo</label>
                    <span class="input-group">
                        <span class="input-group-addon">cm</span>
                        <input type="text" v-model="product.large" class="form-control" id="" placeholder="">
                    </span>
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="">Alto</label>
                     <span class="input-group">
                         <span class="input-group-addon">cm</span>
                         <input type="text" v-model="product.height" class="form-control" id="" placeholder="">
                     </span>
                         
                   </div>
                 </div>
                 <div class="col-md-4">
                   <div class="form-group">
                     <label for="">Ancho</label>
                     <span class="input-group">
                         <span class="input-group-addon">cm</span>
                         <input type="text" v-model="product.width" class="form-control" id="" placeholder="">
                     </span>

                   </div>
                 </div>
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="">Description</label>
                     <textarea name="" v-model="product.description" id="input" class="form-control" rows="3" required="required"></textarea>
                   </div>
                 </div>
              </div>
              

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label" style="font-size: 1.2em; color: black;">Configuraciones avanzadas para SEO</label>
                        <br>
                        <label class="control-label" style=" color:darkslategray">Titulo para SEO</label>
                        <input type="text" v-model="product.seo_title" class="form-control" id="" placeholder="">

                        <br>
                        <label class="control-label" style=" color: darkslategray">Descripcion SEO</label>
                        <input type="text" v-model="product.seo_description" class="form-control" id="" placeholder="">

                        <br>
                        <label class="control-label" style=" color: darkslategray">URL del producto</label>

                        <span class="input-group">
                            <span class="input-group-addon">{{ url('products/') }}</span>
                            <input type="text" v-model="product.slug" class="form-control" id="" placeholder="" readonly="">
                        </span>
                    </div>
                </div>
            </div>
        </div>
      </div><!-- end col md 6 -->
      <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label" style="font-size: 1.2em; color: black;">Configuracion de publicacion</label>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label" style=" color: darkslategray">Envio</label>
                        
                        <span class="checkbox custom-checkbox">
                            <input class="checkbox" v-model="product.collection.shipping_free" id="checkbox1" name="checkbox1" type="checkbox" value="1">
                            <label for="checkbox1" style="color: #7b7b7b">&nbsp;&nbsp;Este producto no tiene costo de envio</label>
                        </span>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label" style=" color: darkslategray">Producto destacado</label>
                        
                        <span class="checkbox custom-checkbox">
                            <input class="checkbox" v-model="product.collection.primary" id="checkbox2" name="checkbox2" type="checkbox" value="1">
                            <label for="checkbox2" style="color: #7b7b7b">&nbsp;&nbsp;Este producto es destacado</label>
                        </span>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label" style=" color: darkslategray">Producto en oferta</label>
                        
                        <span class="checkbox custom-checkbox">
                            <input class="checkbox" v-model="product.collection.promotion" id="checkbox3" name="checkbox3" type="checkbox" value="1">
                            <label for="checkbox3" style="color: #7b7b7b">&nbsp;&nbsp;Este producto esta en oferta</label>
                        </span>
                        <br>
                    </div>
                </div>
            </div>
        </div>
      </div><!-- end col md 6 -->
    </div>


    <div class="panel panel-primary">

      <div class="panel-body">
          <label class="control-label" style="font-size: 1.2em; color: black;">Detalles del producto</label>
          <div class="row">
              <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <label class="control-label" style="font-size: 1.2em; color: black;">Imagenes</label>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <label class="control-label" style="font-size: 1.2em; color: black;">Detalles</label>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <label class="control-label" style="font-size: 1.2em; color: black;">Variacion</label>
                    </div>
                </div>
              </div>
          </div>
      </div>
    </div>

  </div>
</div>

{{--{!! Form::close() !!}--}}