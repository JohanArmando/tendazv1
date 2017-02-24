
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
            <span class="media-body box">
                <div class="row">
                    <div class="col-md-9 col-simple">                    
                        <label class="control-label" style="font-size: 1.2em; color: black;">Imagenes
                            <small style="color: darkgray">(Opcional)</small>
                        </label>
                        <br>
                        <div v-for="image in product_new.variant.images" class="col-md-3 text-center" >
                          <img :src="image" class="img-responsive img-thumbnail" style="height: 220px;"/>

                          <button @click="removeImage(image)" style="margin: 15px;" class="btn-primary btn">Remover imagen</button>

                        </div>
                        <div class="col-md-3">
                          <div class="panel panel-default" style="height: 220px;">
                              <div class="panel-body text-center" > 
                                  <input type="file" id="file" class="hide" @change="onFileChange">
                                    <label for="file" style="cursor: pointer;">
                                        <h1 style="font-size: 80px !important; color: #F26522; margin: 20px;"><i class="ico-cloud-upload2"></i></h1>
                                        <h4>Agregar imagen</h4>
                                    </label>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </span>
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
                            <input type="number" v-model="product_new.variant.weight" id="kilo"  name="weight" class="form-control" data-parsley-type="digits" placeholder="1.0 Kg">
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
                <button type="button" class="btn btn-primary" data-loading-text="procesando..." id="btn-store-product" v-on:click="storeProduct()">Crear Producto</button>
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
    <!-- form store-->
    <div v-else>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default" style="margin-top: 15px;">
                    <div class="panel-heading-white" >
                        <div class="panel-title">Navegacion</div>
                    </div>
                    <div class="list-group">
                        <a class="list-group-item" href="#general" aria-controls="general" role="tab" data-toggle="tab">Informacion General</a>
                        <a class="list-group-item" href="#seo" aria-controls="seo" role="tab" data-toggle="tab">Configuraciones avanzadas para SEO</a>
                        <a class="list-group-item" href="#visibity" aria-controls="visibity" role="tab" data-toggle="tab">Configuraciones para la visibilidad</a>
                        <a class="list-group-item" href="#variants" aria-controls="variants" role="tab" data-toggle="tab">Configuracion sobre las variantes</a>
                    </div>
                </div>
                <div class="alert alert-info" v-show="messaje.show">
                    <button v-on:click="messaje.show = false" type="button" class="close">&times;</button>
                    <strong>@{{ messaje.type }}</strong> @{{ messaje.text }}
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="general">
                        <div class="panel panel-default">
                            <div class="panel-heading-white" >
                                <div class="panel-title">Informacion General</div>
                            </div>
                          <div class="panel-body">
                              <div class="row">

                                 <div class="col-md-12">
                                   <div class="form-group">
                                     <label for="">Nombre del producto</label>
                                     <input type="text" v-model="product.name" class="form-control" id="" placeholder="">
                                   </div>
                                 </div>
                                 <div class="col-md-3">
                                   <div class="form-group">
                                     <label for="">Largo</label>
                                    <span class="input-group">
                                        <span class="input-group-addon">cm</span>
                                        <input type="text" v-model="product.large" class="form-control" id="" placeholder="">
                                    </span>
                                   </div>
                                 </div>
                                 <div class="col-md-3">
                                   <div class="form-group">
                                     <label for="">Alto</label>
                                     <span class="input-group">
                                         <span class="input-group-addon">cm</span>
                                         <input type="text" v-model="product.height" class="form-control" id="" placeholder="">
                                     </span>
                                         
                                   </div>
                                 </div>
                                 <div class="col-md-3">
                                   <div class="form-group">
                                     <label for="">Ancho</label>
                                     <span class="input-group">
                                         <span class="input-group-addon">cm</span>
                                         <input type="text" v-model="product.width" class="form-control" id="" placeholder="">
                                     </span>

                                   </div>
                                 </div>
                                 <div class="col-md-3">
                                     <label class="control-label" style=" color: darkslategray">Visibilidad del producto en tu tienda</label>
                                     
                                     <span class="checkbox custom-checkbox" style="margin-top: 8px;">
                                         <input class="checkbox" v-model="product.publish" id="checkbox5" name="checkbox5" type="checkbox" value="1">
                                         <label for="checkbox5" style="color: #7b7b7b">&nbsp;&nbsp;Quiero que este producto se muestre en mi tienda</label>
                                     </span>
                                     <br>
                                 </div>
                                 <div class="col-md-12">
                                   <div class="form-group">
                                     <label for="">Description</label>
                                     <textarea name="" v-model="product.description" id="input" class="form-control" rows="3" required="required"></textarea>
                                   </div>
                                   <br>
                                   <button v-on:click="updateGeneral()" data-loading-text="procesando..." id="btn-udate-general" type="button" class="btn btn-primary">Guardar cambios</button>
                                 </div>
                              </div>
                          </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="seo">
                        <div class="panel panel-default">
                            <div class="panel-heading-white" >
                                <div class="panel-title">Configuraciones avanzadas para SEO</div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
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
                                        <br>
                                        <button data-loading-text="procesando..." v-on:click="updateSeo()" id="btn-udate-seo" type="button" class="btn btn-primary">Guardar cambios</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="visibity">
                        <div class="panel panel-default">
                            <div class="panel-heading-white" >
                                <div class="panel-title">Configuracion de publicacion</div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
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
                                        <button data-loading-text="procesando..." type="button"  v-on:click="updateVisibility()" id="btn-udate-visibility" class="btn btn-primary">Guardar cambios</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="variants">
                        <div class="panel panel-primary" v-for="variant in product.variants">
                            <div class="panel-heading-white" >
                                <h3 class="panel-title">Detalles del producto</h3>
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                            </div>

                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <label class="control-label" style="font-size: 1.2em; color: black;">Imagenes</label>
                                                <br>
                                            </div>

                                                <img v-for="image in variant.images" :src="image.url" v-on:click="removeImageVariant(image,variant)" class="img-responsive img-thumbnail" style="margin-right: 10px; margin-bottom: 10px; height: 75px; width: 75px;"/>
                                                    <input type="file"  @change="addImageVariant(variant,$event)"  class="hide" name="file2" v-bind:id="'file-' + variant.id">
                                                    <label v-bind:for="'file-' + variant.id" style="cursor: pointer;">
                                                        <div class="img-thumbnail" style="padding: 18px 26px 15px 26px;">
                                                            <h4><i class="fa fa-plus"></i></h4>
                                                        </div>
                                                    </label>
                                        </div>
                                        <div class="col-md-12">

                                            <label class="control-label" style="font-size: 1.2em; color: black;">Detalles</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="control-label" style=" color:darkslategray">Precio</label>
                                                    <input type="text" v-model="variant.price" class="form-control" id="" placeholder="">
                                                    <br>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="control-label" style=" color:darkslategray">Precio Promocional</label>
                                                    <input type="text" v-model="variant.promotional_price" class="form-control" id="" placeholder="">
                                                    <br>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="control-label" style=" color:darkslategray">Stock</label>
                                                    <input type="text" v-model="variant.stock" class="form-control" id="" placeholder="">
                                                    <br>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="control-label" style=" color:darkslategray">SKU</label>
                                                    <input type="text" v-model="variant.sku" class="form-control" id="" placeholder="">
                                                    <br>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="control-label" style=" color:darkslategray">Peso</label>
                                                    <input type="text" v-model="variant.weight" class="form-control" id="" placeholder="">
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label" style="font-size: 1.2em; color: black;">Variacion</label>
                                            <variant-option v-bind:options="options" v-bind:variant="variant"></variant-option>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  v-if="!is_new_variant">
                            <div class="text-center">
                                <button v-on:click="is_new_variant=true" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar variacion del producto</button>
                            </div>
                        </div>
                        <div class="panel panel-primary" v-else>
                            <div class="panel-heading-white">
                                <h3 class="panel-title">Nueva variacion del producto</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn" v-on:click="is_new_variant=false" ><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            {{-- <div class="panel-heading-white" >
                                <div class="panel-title">Nueva variacion del producto <a v-on:click="is_new_variant=false" class="pull-right btn btn-sm btn-default"><i class="fa fa-remove"></i></a></div>
                            </div> --}}
                            <div class="panel-body">
                                <div class="row">
                                    {{-- <div class="col-md-12">
                                        <div>
                                            <label class="control-label" style="font-size: 1.2em; color: black;">Imagenes</label>
                                            <br>
                                        </div>
                                        <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> agregar imagen</button>
                                    </div> --}}
                                    <div class="col-md-12">
                                        <label class="control-label" style="font-size: 1.2em; color: black;">Detalles</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label" style=" color:darkslategray">Precio</label>
                                                <input type="text" v-model="variant_new.price" class="form-control" id="" placeholder="">
                                                <br>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="control-label" style=" color:darkslategray">Precio Promocional</label>
                                                <input type="text" v-model="variant_new.promotional_price" class="form-control" id="" placeholder="">
                                                <br>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="control-label" style=" color:darkslategray">Stock</label>
                                                <input type="text" v-model="variant_new.stock" class="form-control" id="" placeholder="">
                                                <br>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="control-label" style=" color:darkslategray">SKU</label>
                                                <input type="text" v-model="variant_new.sku" class="form-control" id="" placeholder="">
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="control-label" style=" color:darkslategray">Peso</label>
                                                <input type="text" v-model="variant_new.weight" class="form-control" id="" placeholder="">
                                                <br>
                                                <button v-on:click="storeVariant()" id="btn-store-variant" type="button" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- 
                                    <div class="col-md-12">

                                        <label class="control-label" style="font-size: 1.2em; color: black;">Variacion</label>
                                        <br>
                                        @{{ text_selected_value }}
                                        <hr>
                                        <div class="row">
                                                <div class="col-md-12">
                                                    <h4 class="variant-title" style="color: grey;">Propiedad</h4>
                                                    <select v-model="option_selected" class="form-control" v-on:change="freshValues()">
                                                      <option v-for="option in options" v-bind:value="option.id">
                                                        @{{ option.name }}
                                                      </option>
                                                      <option value="-1">
                                                        Nueva...
                                                      </option>
                                                    </select>
                                                    <div v-show="nueva_propiedad">
                                                        <h4 class="variant-title" style="color: grey;">Nueva propiedad</h4>
                                                        <div class="form-group">
                                                            <input type="text" v-model="option_new" class="form-control" id="" placeholder="nombre">
                                                        </div>
                                                        <button type="button" id="btn-store-options" v-on:click="storeOptions()" data-loading-text="procesando" class="btn btn-primary btn-block">Agregar propiedad</button>
                                                    </div>
                                                    

                                                </div>
                                                <div class="col-md-12">
                                                    <div class="option-name-tab" style="display:none;">
                                                        <h4 class="new-variant-title">Nombre de la nueva propiedad</h4>
                                                        <div class="clearfix ">
                                                            <input id="" class="form-control option-name-edit" name="" type="text" size="30" tabindex="1301" value="" data-lang="es_ar"/>
                                                        </div>
                                                    </div>
                                                    <h4 class="variant-title" style="color:grey !important;">Valores de la propiedad</h4>
                                                    
                                                    <div class="row">
                                                        <div  v-for="value in values" class="col-md-3">
                                                            <button v-if="!selectedValue(value)" type="button" v-on:click="addValue(value)" class="btn btn-block btn-default" style="margin-bottom: 5px;">@{{ value.name }}</button>
                                                            <button v-else type="button" v-on:click="removeValue(value)" class="btn btn-block btn-primary" style="margin-bottom: 5px;">@{{ value.name }}</button>
                                                        </div>
                                                        <div  v-if="!nuevo_valor" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <h5 class="variant-title" style="color:grey !important;">Agregar propiedad</h5>

                                                            <div class="row">
                                                                <div class="col-md-4" >
                                                                    <input type="text" v-model="value_new.name" class="form-control" id="" placeholder="Nombre">
                                                                </div>
                                                                <div class="col-md-4" >
                                                                    <input type="text"  v-model="value_new.attribute" class="form-control" id="" placeholder="Atributo">
                                                                </div>
                                                                <div class="col-md-4" >
                                                                    <button v-on:click="storeValues()" id="btn-store-values" data-loading-text="procesando" type="button" class="btn btn-primary btn-block">Agregar valor</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div> <!-- /col -->
                                                <input type="hidden" v-model="ids_selected" name="values">
                                        </div> <!-- /row -->

                                    </div>
                                    --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--{!! Form::close() !!}--}}