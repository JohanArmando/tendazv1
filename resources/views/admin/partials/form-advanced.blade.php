
{{--  DIV NAME --}}
<input type="hidden" value="{{ url ("admin/products"."?client_secret=".$shop->uuid."&client_id=".$shop->id) }}" id="ruta-avanzada">
<input type="hidden" value="{{ csrf_token() }}" id="token-avanzado">
<a href="javascript:void(0);" class="media border-dotted">
    
    <span class="media-body box">
        <div class="form-group">
            <div class="col-sm-9 col-simple">

                <label class="control-label" style="font-size: 1.2em; color: black;">Nombre del producto <small style="color: darkgray">(Obligatorio)</small></label>

                <div class="input-group">
                    {!! Form::text('name' , null , ['class' => 'form-control' ,"placeholder" => "Ejemplo: Zapato de cuero"]) !!}
                </div>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </span>
</a>

<br>

<!-- indicator image load -->
<div class="indicator hide" id="loading"><img style="
  position: absolute;
  z-index: 999;
  left: 37%;
  top: 35%;
 opacity: 0.5" src="{{ asset('administrator/image/loading/cloud_loading.gif') }}" alt=""></div>
<!--/ indicator -->

{{-- DIV DROPZONE --}}
<a href="javascript:void(0);" class="media border-dotted">
    

    <span class="media-body box">
        <div class="form-group">
            <div class="col-sm-9 col-simple">
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
    </span>
</a>
<br>
{{-- DIV tab con variante y sin variante --}}

<div  class="media-body box" >
    {{--Estar list tabs --}}
    <ul class="nav nav-tabs text-center" style="height: 100px; font-size: 2.0em; background-color: transparent">
        <li class="active">
            <a style="padding-top: 7.5%;" href="#sinVariante" data-toggle="tab" >
                <i class="fa fa-shopping-cart text-tendaz" style="margin-right: 5%; font-size: 1.9em;"></i>Sin Variante
            </a>
        </li>
        <li class="hidden">
            <a style="padding-top: 7.5%;" href="#conVariante" data-toggle="tab">
                <i  class="fa fa-shopping-cart text-tendaz" style="margin-right: 5%; font-size: 1.9em;"></i>Con Variante
            </a>
        </li>
    </ul>

    <div class="tab-content panel">

        {{-- Start tab sin variante --}}
        <div class="tab-pane active np" id="sinVariante">
            @include('admin.partials.sin-variante')
            <div class="media-list">
                <a href="javascript:void(0);" class="media border-dotted">

                </a>
            </div>
        </div>
        {{-- Endt tab sin variante --}}

        <div class="hidden tab-pane np" id="conVariante">
            <div class="media-list">
                <a href="javascript:void(0);" class="media border-dotted">
                    @include('admin.partials.con-variante')
                </a>
            </div>
        </div>
    </div>
</div>

<br>
<a href="javascript:void(0);" class="media border-dotted">
    <span class="media-body box">
        <div class="form-group">
            <div class="col-sm-9 col-simple">
            <label class="control-label" style="font-size: 1.2em; color: black;">Descripcion
                <small style="color: darkgray">(Menciona todas las caracteristicas de tu producto)</small>
            </label>
            <br>
                {!!  Form::textarea('description', null , ['id' => 'simple-description' ,  'data-parsley-type'=>"alphanum" , 'required' => 'required' , 'class' => 'form-control']) !!}
        </div>
        </div>
    </span>
</a>
<br>
<a href="javascript:void(0);" class="media border-dotted">
    <span class="media-body box">
        <div class="form-group">
            <div class="col-md-9 col-simple">

            </div>
            <div class="col-md-3 col-simple">
                <label class="control-label" style="font-size: 1.2em; color: black">Categorias</label>
                <button class="btn btn-block btn-primary modalCategory" data-toggle="modal" data-target="#modalCategory" type="button"><i class="fa fa-plus"></i> Nueva categoria</button>
            </div>
            <div class="col-md-9 col-simple" style="margin-top: 2%;">
                <label for="control-label" style="font-size: 1.2em; color: black">O Selecciona una de las categorias que ya creaste</label>
                {!! Form::select('category_id[]',$categories, isset($product) ? $product->categories->pluck('id')->toArray() : null, ['multiple' => true , 'style' => 'width: 100%' ,'class' => "select2", "id" => "selectCategory"])!!}
            </div>
        </div>
    </span>
</a>
<br>
<a href="javascript:void(0);" class="media border-dotted">

    <span class="media-body box">
        <div class="form-group">
            <div class="col-sm-6 col-simple">
                <label class="control-label" style="font-size: 1.2em; color: black">Envio </label>
                <span class="checkbox custom-checkbox">
                    {!! Form::checkbox('shipping_free' , 1 , null , ['id' => 'shipping_free' , 'class' => 'checkbox']) !!}
                    <label for="shipping_free" style="color: #7b7b7b">&nbsp;&nbsp;Este producto no tiene costo de envio</label>
                </span>
            </div>
        </div>
    </span>
</a>
<br>
<a href="javascript:void(0);" class="media border-dotted">

    <span class="media-body box">
        <div class="form-group">
            <div class="col-md-6 col-simple">
                <label class="control-label" style="font-size: 1.2em; color: black">Visibilidad del producto en tu tienda</label>
                <br><br>

                <span class="radio custom-radio">
                    {!! Form::radio('publish' , 1 , !isset($product) ? true : null , ['id' => 'visibiliad']) !!}
                    <label for="visibiliad" style="color: #7b7b7b">&nbsp;&nbsp;Quiero que este producto se muestre en mi tienda</label>
                    <br><br>
                    {!! Form::radio('publish' , 0 , null , ['id' => 'visibiliad']) !!}
                    <label for="visibiliad2" style="color: #7b7b7b">&nbsp;&nbsp;No quiero que este producto se muestre en mi tienda</label>
                </span>
            </div>
                <div class="col-md-6 col-simple">
                    <div class="form-group">
                        <br>
                        <label class="control-label" style="font-size: 1.2em; color: black">
                            Destacar este producto en tu tienda
                        </label>
                        <br><br>
                        <span class="checkbox custom-checkbox"  >
                            {!! Form::checkbox('collection[primary]' , 1 , null , ['id' => 'destacado' , 'class' => 'checkbox']) !!}
                            <label for="destacado" style="color: #7b7b7b">&nbsp;&nbsp;Productos Destacados</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <small style="color: black; margin-left: 6%;">Pon aqui los productos que apreceran de primera</small>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
        </div>
    </span>
</a>
<br>
<a href="javascript:void(0);" class="media border-dotted">                                     
   <span class="media-body box">
    <div class="form-group">
    <div class="col-md-9 col-simple">
      <label class="control-label" style="font-size: 1.2em; color: black;">Configuraciones avanzadas para SEO</label>
      <br>
      <label class="control-label" style="font-size: 0.8em; color: darkslategray">Titulo para SEO</label>
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
     </span>
</a>

<div class="row" style="padding: 2.5%">
    <div class="col-md-4 " style="margin-left: 13%">
        <button type="submit" id="submit-avanzado" class="pull-left btn  btn-primary" ><i class="fa fa-check"></i> Crear Producto</button>
    </div>
    <div class="col-md-5" style="margin-left: -1.5%" >
        <a href="{{url('admin/products')}}" class="pull-right btn btn-default">Cancelar</a>
    </div>
</div>
@include('admin.partials.modal-category')