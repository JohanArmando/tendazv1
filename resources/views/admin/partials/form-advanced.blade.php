<input type="hidden" value="{{ url ("admin/products"."?client_secret=".$shop->uuid."&client_id=".$shop->id) }}" id="ruta-avanzada">
<input type="hidden" value="{{ csrf_token() }}" id="token-avanzado">
<div class="media border-dotted">
    <div class="row">
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
    </div>
</div>
<div class="media border-dotted">
    <div class="row">
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
    </div>
</div>
<div class="media border-dotted">
    <div class="row">
        <span class="media-body box">
            <div class="form-group">
                @include('admin.partials.sin-variante')
            </div>
<<<<<<< HEAD
        </div>
    </span>
</a>
<br>
{{-- DIV tab con variante y sin variante --}}

<div  class="media-body box" >
    {{--Estar list tabs --}}
    <ul class="nav nav-tabs text-center" style="height: 100px; font-size: 2.0em; background-color: transparent">
        <li class="hidden">
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
=======
        </span>
    </div>
</div>
>>>>>>> de56f50f23a9e6d447d5c0fa96b55b8cda2a162c

<div class="media border-dotted">
    <div class="row">
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
    </div>
</div>
<div class="media border-dotted">
    <div class="row">
        <span class="media-body box">
            <div class="form-group">
                <div class="col-md-9 col-simple">

                </div>
                <div class="col-md-3 col-simple">
                    <label class="control-label" style="font-size: 1.2em; color: black">Categorias</label>
                    <button class="btn btn-block btn-primary modalCategory" data-toggle="modal" data-target="#modalCategory" type="button"><i class="fa fa-plus"></i> Nueva categoria</button>
                </div>
                <div class="col-md-9 col-simple" style="margin-top: 2%;">
                    <label for="control-label" style="font-size: 1.2em; color: black">
                        O Selecciona una de las categorias que ya creaste
                    </label>
                    {!! Form::select('category_id[]',$categories, isset($product) ? $product->categories->pluck('id')->toArray() : null, ['multiple' => true , 'style' => 'width: 100%' ,'class' => "select2", "id" => "selectCategory"])!!}
                </div>
            </div>
        </span>
    </div>
</div>
<div class="media border-dotted">
    <div class="row">
        <span class="media-body box">
            <div class="form-group">
                <div class="col-md-9 col-simple" >
                    <label for="control-label" style="font-size: 1.2em; color: black">Asigna un provedor para este producto</label>

                    {!! Form::select('provider_id',$categories, isset($product) ? $product->categories->pluck('id')->toArray() : null, ['class' => "", "id" => "providers"])!!}
                </div>
            </div>
        </span>
    </div>
</div>
<div class="media border-dotted">
    <div class="row">
        <span class="media-body box">
            <div class="form-group">
                <div class="col-sm-6 col-simple">
                    <label class="control-label" style="font-size: 1.2em; color: black">Envio 
                    </label>
                    <span class="checkbox custom-checkbox">
                        {!! Form::checkbox('shipping_free' , 1 , null , ['id' => 'shipping_free' , 'class' => 'checkbox']) !!}
                        <label for="shipping_free" style="color: #7b7b7b">&nbsp;&nbsp;Este producto no tiene costo de envio
                        </label>
                    </span>
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
                    <label class="control-label" style="font-size: 1.2em; color: black">Visibilidad del producto en tu tienda
                    </label>
                    <div class="checkbox custom-checkbox" >
                        {!! Form::checkbox('publish' , 1 , 1 , ['id' => 'publish' , 'class' => 'checkbox']) !!}
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
                <div class="form-group">
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
        </span>
    </div>
</div>
<div class="media border-dotted">
    <div class="row">                                     
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
</div>
<div class="indicator hide" id="loading">
    <img style="position: absolute;z-index: 999;left: 37%;top: 35%;opacity: 0.5" src="{{ asset('administrator/image/loading/cloud_loading.gif') }}" alt="">
</div>

@include('admin.partials.modal-category')