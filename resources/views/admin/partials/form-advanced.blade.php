<input type="hidden" value="{{ url ("admin/products"."?client_secret=".$shop->uuid."&client_id=".$shop->id) }}" id="ruta-avanzada">
<input type="hidden" value="{{ csrf_token() }}" id="token-avanzado">
<div class="media border-dotted">
    <div class="row">
        <span class="media-body box">
            <div class="col-sm-9 col-simple">
                <div class="form-group">
                    <div class="row">
                    
                        <label class="control-label" style="font-size: 1.2em; color: black;">
                            Nombre del producto <small style="color: darkgray">(Obligatorio)</small>
                        </label>
                        <div class="input-group">
                            {!! Form::text('name' , null , ['class' => 'form-control' ,"placeholder" => "Ejemplo: Zapato de cuero"]) !!}
                        </div>
                        <div class="help-block with-errors"></div>
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
                    
                        <label class="control-label" style="font-size: 1.2em; color: black;">Imagenes
                            <small style="color: darkgray">(Opcional)</small>
                        </label>
                        <div class="dz-message" style="height:190px;border-width: 2px; border-style: dashed; border-color: #F26522; ">
                            <h1 style="font-size: 80px !important; color: #F26522; "><i class="ico-cloud-upload2"></i></h1>
                            <label>Arrastra tus imagenes </label>
                        </div>
                    </div>
                    <div class="text-center col-sm-9 col-simple">
                        <div class="dropzone-previews-avanzado"></div>
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
                    @include('admin.partials.sin-variante')
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
        <div class="col-md-12  col-simple">
            <div class="form-group" >
              <div class="row">
            
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
            <div class="col-md-9 col-simple">
                <div class="form-group">
                    <div class="row">
                    
                        <label class="control-label" style="font-size: 1.2em; color: black;">Descripcion
                            <small style="color: darkgray">(Menciona todas las caracteristicas de tu producto)</small>
                        </label>
                        <br>
                        {!!  Form::textarea('description', null , ['id' => 'simple-description' ,  'data-parsley-type'=>"alphanum" , 'class' => 'form-control']) !!}
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
                    
                        <div class="col-md-12">
                            
                            <div class="row">
                                <label class="control-label" style="font-size: 1.2em; color: black">
                                    Categorias
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                <div class="row">
                                <button class="btn btn-block btn-primary modalCategory" data-toggle="modal" data-target="#modalCategory" type="button">
                                    <i class="fa fa-plus"></i> Nueva categoria
                                </button>
                                </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12" >
                            <div class="row">
                                <label for="control-label" style="font-size: 1.2em; color: black">
                                    O Selecciona una de las categorias que ya creaste
                                </label>
                                {!! Form::select('category_id[]',$categories, isset($product) ? $product->categories->pluck('id')->toArray() : null, ['multiple' => true , 'style' => 'width: 100%' ,'class' => "select2", "id" => "selectCategory"])!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </span>
    </div>
</div>
@if($shop->hasAnyPlan(['estandar','premiun']))
<div class="media border-dotted">
    <div class="row">
        <span class="media-body box">
            <div class="col-md-9 col-simple" >
                <div class="form-group">
                    <div class="row">
                        <label for="control-label" style="font-size: 1.2em; color: black">Asigna un provedor para este producto</label>
                        <select name="provider_id" id="providers">
                            <option selected></option>
                            @foreach($providers as $provi)
                                <option value="{{$provi->id}}">{{$provi->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </span>
    </div>
</div>
@endif
<div class="media border-dotted">
    <div class="row">
        <span class="media-body box">   
            <div class="col-sm-6 col-simple">
                <div class="form-group">
                    <div class="row">
                    
                        <label class="control-label" style="font-size: 1.2em; color: black">Envio
                        </label>
                        <span class="checkbox custom-checkbox">
                            {!! Form::checkbox('shipping_free' , 1 , null , ['id' => 'shipping_free' , 'class' => 'checkbox']) !!}
                            <label for="shipping_free" style="color: #7b7b7b">&nbsp;&nbsp;Este producto no tiene costo de envio
                            </label>
                        </span>
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
                <div class="form-group">
                    <div class="row">
                        <label class="control-label" style="font-size: 1.2em; color: black">Visibilidad del producto en tu tienda
                        </label>
                        <div class="checkbox custom-checkbox" >
                            {!! Form::checkbox('publish' , 1 , null, ['id' => 'publish' , 'class' => 'checkbox']) !!}
                            <label for="publish" style="color: #7b7b7b">&nbsp;&nbsp;Quiero que este producto se muestre en mi tienda
                            </label>
                            <div class="row">
                                <div class="col-md-12">
                                    <small style="color: black; ">Decide si tu producto va a ser visible en tu tienda o no
                                    </small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="control-label" style="font-size: 1.2em; color: black">
                            Destacar este producto en tu tienda
                        </label>
                        <br><br>
                        <div class="checkbox custom-checkbox" >
                            {!! Form::checkbox('primary' , 1 , null , ['id' => 'primary' , 'class' => 'checkbox']) !!}
                            <label for="primary" style="color: #7b7b7b">&nbsp;&nbsp;Productos Destacados</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <small style="color: black; ">Pon aqui los productos que apreceran de primera
                                    </small>
                                </div>
                            </div>
                            <br>
                            {!! Form::checkbox('promotion' , 1 , null , ['id' => 'promotion' , 'class' => 'checkbox']) !!}
                            <label for="promotion" style="color: #7b7b7b">&nbsp;&nbsp;Productos En Oferta</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <small style="color: black; ">Pon aqui los productos en oferta</small>
                                </div>
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
            <div class="col-md-9 col-simple">
                <div class="form-group">
                    <div class="row">
                    
                        <label class="control-label" style="font-size: 1.2em; color: black;">Configuraciones avanzadas para SEO</label>
                        <br>
                        <label class="control-label" style="font-size: 0.8em; color:darkslategray">Titulo para SEO</label>
                        {!! Form::text('seo_title' , null , ['class' => 'form-control']) !!}
                        <br>
                        <label class="control-label" style="font-size: 0.8em; color: darkslategray">Descripcion SEO</label>
                        {!! Form::text('seo_description' , null , ['class' => 'form-control']) !!}
                        <br>
                        <label class="control-label" style="font-size: 0.8em; color: darkslategray">URL del producto</label>

                        <span class="input-group">
                            <span class="input-group-addon">{{ url('products/') }}</span>
                            {!! Form::text('slug' , null , ['class' => 'form-control']) !!}
                        </span>
                    </div>
                </div>
            </div>
        </span>
    </div>
</div>
<div class="row" style="padding: 2.5%">
    <div class="col-md-4 " style="margin-left: 13%">
        <button type="submit" id="submit-avanzado" class="pull-left btn  btn-primary" ><i class="fa fa-check"></i> Crear Producto
        </button>
    </div>
    <div class="col-md-5" style="margin-left: -1.5%" >
        <a href="{{url('admin/products')}}" class="pull-right btn btn-default">Cancelar</a>
    </div>
    <div class="col-md-4">
        <div class="help-block-create with-errors hidden" id="name"></div>
    </div>
</div>
<div class="indicator hide" id="loading">
    <img style="position: absolute;z-index: 999;left: 37%;top: 35%;opacity: 0.5" src="{{ asset('administrator/image/loading/cloud_loading.gif') }}" alt="">
</div>

@include('admin.partials.modal-category')