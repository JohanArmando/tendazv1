<a href="javascript:void(0);" class="media border-dotted">
    <span class="media-body box">
        <div class="form-group">
            <div class="col-sm-9 col-simple">
                <label class="control-label" style="font-size: 1.2em; color: black">Nombre del producto <small style="color: darkgray">(Obligatorio)</small></label>
                {!!Form::text('name',$product->name,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
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

<a href="javascript:void(0);" class="media border-dotted">
    <span class="media-body box">
        <div class="form-group">
            <div class="col-sm-9 col-simple">
                <label class="control-label" style="font-size: 1.2em; color: black;">Imagenes
                <small style="color: #a9a9a9">(Opcional)</small>
                </label>
                <input id='file-1' class='file' type='file' name="product[images][]" multiple="multiple" data-overwrite-initial="false" "data-min-file-count"="2">
            </div>
        </div>
    </span>
</a>
<br>

{{-- DIV tab con variante y sin variante --}}

<div class="media-body box">
    <div class="row"  align="center">
        <table class="table-responsive table-product-no-variante">
            <thead>
            <tr>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <div class="form-group" >
                <tr>
                    <td><label class="col-md-6 control-label" id="label-precio">Precio</label></td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            {!! Form::text('price',isset($variant)? $variant->price : null ,['class'=>'form-control','id'=>'price','style'=>'height: 30px;']) !!}
                        </div>
                    </td>

                </tr>
                <tr>
                    <td><label class="col-md-12 control-label" id="label-stock">Precio Promocional</label></td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            {!! Form::text('promotional_price',isset($variant)? $variant->promotional_price : null ,['class'=>'form-control','id'=>'price','style'=>"height: 30px; text-align: center" ]) !!}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label class="col-md-6 control-label" id="peso">Peso</label></td>
                    <td>
                        <div class="input-group ">
                            {!! Form::text('weight',isset($variant)? $variant->weight : null ,['class'=>'form-control','id'=>'kilo']) !!}
                            <span class="input-group-addon">Kg.</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label class="col-md-6 control-label" id="label-stock">Stock</label></td>
                    <td>
                        <div class="input-group">
                            {!! Form::text('stock',isset($variant)? $variant->stock : null ,['class'=>'form-control','id'=>'stock']) !!}
                        </div>
                    </td>
                </tr>



                <tr>
                    <td><label class="col-md-6 control-label" id="label-stock">SKU</label></td>
                    <td>
                        <div class="input-group">
                            {!! Form::text('sku',isset($variant)? $variant->sku : null ,['class'=>'form-control','id'=>'price','style'=>"height: 30px; text-align: center" ]) !!}
                        </div>
                    </td>
                </tr>

            </div>
            </tbody>
            <tfoot>
            <tr>
                <td></td>
                <td></td>
            </tr>
            </tfoot>
        </table>
    </div>
{{--Estar list tabs --}}
<!--<ul class="nav nav-tabs text-center" style="height: 100px; font-size: 2.0em; background-color: transparent">
        <li class="active">
            <a style="padding-top: 7.5%;" href="#sinVariante" data-toggle="tab">
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
            <div class="media-list">
                <a href="javascript:void(0);" class="media border-dotted">

                </a>
            </div>
        </div>
        {{-- Endt tab sin variante --}}

        <!--<div class="tab-pane np" id="conVariante">
            <div class="media-list">
                <a href="javascript:void(0);" class="media border-dotted">
                    {{--@include('admin.partials.con-variante')--}}
        </a>
    </div>
</div>
</div>-->
</div>

<br>
<a href="javascript:void(0);" class="media border-dotted">

    <span class="media-body box">
        <div class="form-group">
            <br>
            <div class="col-sm-9 col-simple">
                <label class="control-label" style="font-size: 1.2em; color: black;">Descripcion
                    <small style="color: darkgray">(Menciona todas las caracteristicas de tu producto)</small>
                </label>
                <br>
                {!! Form::textarea('description' , $product->description , ['class'=>'form-control', 'id'=>'text_edit']) !!}
            </div>
        </div>
    </span>
</a>
<br>
<a href="javascript:void(0);" class="media border-dotted">

    <span class="media-body box">
        <div class="form-group">
            <div class="col-md-3 col-simple">
                <label class="control-label" style="font-size: 1.2em; color: black">Categorias</label>
                <button class="btn btn-block btn-primary modalCategory" data-toggle="modal" data-target="#modalCategory"  type="button"><i class="fa fa-plus"></i> Categorias</button>
            </div>
            <input type="hidden" id="images-delete" name="image-delete">
            <div class="col-md-9 col-simple" style="margin-top: 2%;">
                <label for="control-label" style="font-size: 1.2em; color: black">O Selecciona una de las categorias que ya creaste</label>
                <select  class="select2" style="width: 100%" name="category_id[]" id="selectCategory" multiple>
                    @foreach($product->categories  as $c)
                        <option value="{{ $c->id }}" selected>{{$c->name}}</option>
                    @endforeach
                    @if(count($categories) > 0)
                        @foreach($categories  as $c)
                            <option value="{{ $c->id }}" >{{$c->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </span>

</a>
<br>
<a href="javascript:void(0);" class="media border-dotted">

    <span class="media-body box">
        <div class="form-group">
            <div class="col-sm-6 col-simple">
                <label class="control-label" style="font-size: 1.2em; color: black;">Envio </label>
                <span class="checkbox custom-checkbox">
                    {!! Form::checkbox('shipping_free',1,$product->shipping_free,['class'=> 'checkbox' , 'id' => 'successcheckbox1']) !!}
                    <label for="successcheckbox1" style="color: #7b7b7b">&nbsp;&nbsp;Este producto no tiene costo de envio</label>
                </span>
            </div>
        </div>
    </span>

</a>
<br>

<div class="media-body box">
    <div class="col-md-12 col-simple">
        <div class="form-group">
            <label class="control-label" style="font-size: 1.2em; color: black">Visibilidad del producto en tu tienda
            </label>
            <div class="checkbox custom-checkbox" >
                {!! Form::checkbox('publish',1,$product->publish, ['id'=> 'publish']) !!}
                <label for="publish" style="color: #7b7b7b">&nbsp;&nbsp;Quiero que este producto se muestre en mi tienda</label>
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
                {!! Form::checkbox('highlight',1,$product->highlight , ['id'=> 'highlight']) !!}
                <label for="highlight" style="color: #7b7b7b">&nbsp;&nbsp;Productos Destacados</label>
                <div class="row">
                    <div class="col-md-12">
                        <small style="color: black; ">Pon aqui los productos que apreceran de primera
                        </small>
                    </div>
                </div>
                <br>
                {!! Form::checkbox('new',1, $product->new , ['id'=> 'new']) !!}
                <label for="new" style="color: #7b7b7b">&nbsp;&nbsp;Productos Recientes</label>
                <div class="row">
                    <div class="col-md-12">
                        <small style="color: black; ">Pon aqui los productos nuevos</small>
                    </div>
                </div>
                <br>
                {!! Form::checkbox('price_declared',1,$variant->price_declared , ['id'=> 'price_declared']) !!}
                <label for="price_declared" style="color: #7b7b7b">&nbsp;&nbsp;Productos En Oferta</label>
                <div class="row">
                    <div class="col-md-12">
                        <small style="color: black; ">Pon aqui los productos en oferta</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<a href="javascript:void(0);" class="media border-dotted">
   <span class="media-body box">
       <div class="form-group">
           <div class="col-md-9 col-simple">
                <label class="control-label" style="font-size: 1.2em; color: black;">Configuraciones avanzadas para SEO</label>
                <br>
                <label class="control-label" style="font-size: 0.8em; color: darkslategray">Titulo para SEO</label>
               {!! Form::text('seo_title',$product->seo_title,['class'=> 'form-control']) !!}
               <br>
                <label class="control-label" style="font-size: 0.8em; color: darkslategray">Descripcion SEO</label>
               {!! Form::text('seo_description',$product->seo_description,['class'=> 'form-control']) !!}
               <br>
                <label class="control-label" style="font-size: 0.8em; color: darkslategray">URL del producto</label>
                <span class="input-group">
                <span class="input-group-addon">{{ url('products/') }}</span>
                    {!! Form::text('slug',$product->slug,['class'=> 'form-control']) !!}
                </span>
           </div>
       </div>
    </span>
</a>
<div class="row" style="padding: 2.5%">
    <div class="col-md-4 " style="margin-left: 13%">
        <button type="submit" id="submit-edit" class="pull-left btn btn-primary">Actualizar Producto</button>
    </div>
    <div class="col-md-5" style="margin-left: -1.5%">
        <a href="{{ url('admin/products') }}"  class="pull-right btn btn-default">Cancelar</a>
    </div>
</div>
@include('admin.partials.modal-category')