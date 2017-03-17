@section('title')
Editar {{ucfirst($product->name)}}
@stop

@extends('layouts.administrator')
@section('css')
    <link rel="stylesheet" href="{{ asset('components/admin/css/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/admin/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('components/css/dropzone.css') }}">

    <style>
        .img-product{
            margin-right: 10px; margin-bottom: 10px; height: 75px; width: 75px;
        }
         .img-thumbnail:hover {
            cursor: pointer;
            /*background-color: rgba(81, 81, 81, 0.94) !important;*/
        }
    </style>
    <script>
        var product = "{{$product->uuid}}";
    </script>
@stop
@section('content')
<div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title semibold"><i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp; Editar Productos</h4>
        </div>
        <div class="page-header-section">
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                    <li><a href="{{url('admin/products')}}" style="color: orange;">Products</a></li>
                    <li >Editar Productos</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div id="app-vue-simple">
                    <div v-show="save"
                        style="display: none;">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading-white" >
                                        <div class="panel-title">Navegacion</div>
                                    </div>
                                    <div class="list-group">
                                        <a class="list-group-item" href="#variants" aria-controls="variants" role="tab" data-toggle="tab">Configuracion sobre las variantes</a>
                                        <a class="list-group-item" href="#general" aria-controls="general" role="tab" data-toggle="tab">Informacion General</a>
                                        <a class="list-group-item" href="#seo" aria-controls="seo" role="tab" data-toggle="tab">Configuraciones avanzadas para SEO</a>
                                        <a class="list-group-item" href="#visibity" aria-controls="visibity" role="tab" data-toggle="tab">Configuraciones para la visibilidad</a>


                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading-white" >
                                        <div class="panel-title">Otras Opciones</div>
                                    </div>
                                    <div class="list-group">
                                        <a href="{{ url('/admin/products/create') }}" class="list-group-item">Agregar otro productos</a>
                                        <a href="{{ url('/admin/products') }}" class="list-group-item"> Ir a Productos</a>


                                    </div>
                                </div>
                                <div class="alert alert-info" v-show="messaje.show">
                                    <button v-on:click="messaje.show = false" type="button" class="close">&times;</button>
                                    <strong>@{{ messaje.type }}</strong> @{{ messaje.text }}
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane" id="general">
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
                                                      <label class="control-label" style=" color: darkslategray">Categorias <span data-loading-text="<i class='fa fa-spinner fa-spin'></i> " id="add-category" ></span></label><br>

                                                      <a href="#"  data-loading-text="<i class='fa fa-spinner fa-spin'></i> procesando" v-on:click="removeCategory(category)" v-bind:id="'remove-category-'+category.id" style="margin-right: 4px;" class="btn btn-default" v-for="category in product.categories" >@{{ category.name }} <i class='fa fa-remove'></i></a>
                                                      <div role="presentation" class="dropdown open" style="display: inline-block;">
                                                        <a href="#" v-if="categoriesAdd.length != 0" class="dropdown-toggle btn-default btn" id="drop6" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                          <span class="glyphicon glyphicon-plus"></span> Agregar categoria <span class="caret"></span>
                                                        </a>
                                                        <a href="#" v-else class="btn-default btn" role="button">
                                                          Sin categorias que agregar
                                                        </a>
                                                        <ul v-if="categoriesAdd.length != 0"   class="dropdown-menu" id="menu3" aria-labelledby="drop6">
                                                            <li v-for="category in categoriesAdd">
                                                                <a v-on:click="addCategory(category)"  href="#">@{{ category.name }}</a>
                                                            </li>
                                                        </ul>
                                                      </div>
                                                      <br>
                                                    </div>
                                                 </div>

                                                 <div class="col-md-12">
                                                   <div class="form-group">
                                                     <label for="">Description</label>
                                                     <textarea name="" id="description" class="form-control" rows="3" required="required"></textarea>
                                                   </div>
                                                   <br>
                                                   <button v-on:click="updateGeneral()" data-loading-text="<i class='fa fa-spinner fa-spin'></i> procesando..." id="btn-udate-general" type="button" class="btn btn-primary">Guardar cambios</button>
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
                                                        <button data-loading-text="<i class='fa fa-spinner fa-spin'></i> procesando..." v-on:click="updateSeo()" id="btn-udate-seo" type="button" class="btn btn-primary">Guardar cambios</button>
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
                                                        <button data-loading-text="<i class='fa fa-spinner fa-spin'></i> procesando..." type="button"  v-on:click="updateVisibility()" id="btn-udate-visibility" class="btn btn-primary">Guardar cambios</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane active" id="variants">
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

                                                            <img v-for="image in variant.images" :src="image.url" v-on:click="removeImageVariant(image,variant)" class="img-responsive img-thumbnail img-product"/>
                                                            <input type="file"  @change="addImageVariant(variant,$event)"  class="hide" name="file2" v-bind:id="'file-' + variant.id">
                                                            <label v-bind:for="'file-' + variant.id" style="cursor: pointer;">
                                                                <div class="img-thumbnail" style="padding: 18px 26px 15px 26px;">
                                                                    <h4><i class="fa fa-plus"></i></h4>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <hr>

                                                        <div class="col-md-12">

                                                            <label class="control-label" style="font-size: 1.2em; color: black;">Detalles</label>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label class="control-label" style=" color:darkslategray">Precio</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">$</span>
                                                                        <input type="text" v-model="variant.price" class="form-control" id="" placeholder="">
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="control-label" style=" color:darkslategray">Precio Promocional</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">$</span>
                                                                        <input type="text" v-model="variant.promotional_price" class="form-control" id="" placeholder="">
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="control-label" style=" color:darkslategray">Stock</label>
                                                                    <input type="text" v-model="variant.stock" class="form-control" id="" placeholder="">
                                                                    <br>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="control-label" style=" color:darkslategray">SKU</label>
                                                                        <input type="text" v-model="variant.sku" class="form-control" id="" placeholder="">
                                                                    <br>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="control-label" style=" color:darkslategray">Peso</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">kg</span>
                                                                        <input type="text" v-model="variant.weight" class="form-control" id="" placeholder="">
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="control-label" style=" color:darkslategray">Guardar</label>

                                                                    <button type="button"
                                                                        v-bind:id="'btn-save-details-'+variant.id"
                                                                        data-loading-text="Guardando..."
                                                                        v-on:click="saveDetails(variant)"
                                                                        class="btn btn-primary btn-block">
                                                                        <i class="fa fa-edit"></i> Guardar detalles
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <hr>
                                                        <div class="col-md-12">
                                                            <label class="control-label" style="font-size: 1.2em; color: black;">Caracteristicas agregadas</label>
                                                            <variant-option v-bind:options="options" v-bind:variant="variant"></variant-option>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <hr>
                                                        <div class="col-md-12">
                                                            <a class="btn btn-primary" v-on:click="variant_id = variant.id" data-toggle="modal" href='#modal-id'>Eliminar variacion del producto</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div  v-if="!is_new_variant">
                                            <div class="">
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

                                            <div class="panel-body">
                                                <div class="row">

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
                                                                <button v-on:click="storeVariant()"  type="button" class="btn btn-primary">Guardar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="modal-id">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Eliminar Variacion</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>No se podra dehacer la accion.</p>
                                                        <p>¿Esta seguro de eliminar la variacion?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                        <button type="button"  data-loading-text="eliminando..." id="btn-delete-variant" v-on:click="deleteVariant()" class="btn btn-primary">Eliminar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-show="!save"
                        class="text-center">
                        <h3><i class="fa fa-spinner fa-spin"></i> Cargando...</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <template id="variant-options" >
        <div>
            <button v-for="value in values_selected" type="button" title="remover propiedad" v-bind:class="'btn-remove-value-'+variant.id+'-'+value.id" data-loading-text="<i class='fa fa-spinner fa-spin'></i> eliminando..." v-on:click="removeValue(value)" class="btn btn-primary" style="margin-bottom: 5px; margin-right: 5px;">@{{ value.name }}</button>

            <div class="row" >
                <hr>
                    <div class="col-md-12">
                        <div>
                            <label class="control-label" style="font-size: 1.2em; color: black;">Agregar caracteristicas</label>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-3">

                        <label>Propiedad</label>
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
                            <button type="button" id="btn-store-options" v-on:click="storeOptions()" data-loading-text="<i class='fa fa-spinner fa-spin'></i> procesando" class="btn btn-primary btn-block">Agregar propiedad</button>
                        </div>



                    </div>
                    <div class="col-md-9">


                        <label>Valores de la propiedad</label>

                        <div class="row" v-if="!loadingValues">
                            <div  v-for="value in values" class="col-md-3">
                                <button v-if="!selectedValue(value)"
                                    title="añadir propiedad"
                                    v-bind:id="'btn-add-value-'+variant.id+'-'+value.id"
                                    data-loading-text="<i class='fa fa-spinner fa-spin'></i> procesando..."
                                    type="button" v-on:click="addValue(value)" class="btn btn-block btn-default"
                                    style="margin-bottom: 5px;">
                                        @{{ value.name }}
                                </button>
                                <button v-else
                                    type="button"
                                    title="remover propiedad"
                                    v-bind:class="'btn-remove-value-'+variant.id+'-'+value.id"
                                    data-loading-text="<i class='fa fa-spinner fa-spin'></i> procesando..."
                                    v-on:click="removeValue(value)"
                                    class="btn btn-block btn-primary"
                                    style="margin-bottom: 5px;">
                                        @{{ value.name }}
                                </button>
                            </div>
                            <div class="col-md-3" v-show="!nuevo_valor">
                                <button v-if="!valor_nuevo"
                                    type="button"
                                    v-on:click="valor_nuevo = true"
                                    class="btn btn-block btn-default">
                                        <i class="fa fa-plus"></i> Nuevo
                                </button>
                                <button v-else
                                    type="button"
                                    v-on:click="valor_nuevo = false"
                                    class="btn btn-block btn-default">
                                        <i class="fa fa-minus"></i> Cancelar
                                </button>
                            </div>
                            <div  v-if="valor_nuevo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h5 class="variant-title" style="color:grey !important;">Agregar propiedad</h5>

                                <div class="row">
                                    <div class="col-md-4" >
                                        <input type="text" v-model="value_new.name" class="form-control" id="" placeholder="Nombre">
                                    </div>
                                    <div class="col-md-4" >
                                        <input type="text"  v-model="value_new.attribute" class="form-control" id="" placeholder="Atributo">
                                    </div>
                                    <div class="col-md-4" >
                                        <button v-on:click="storeValues()" id="btn-store-values" data-loading-text="<i class='fa fa-spinner fa-spin'></i> procesando" type="button" class="btn btn-primary btn-block">Agregar valor</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" v-else>
                            <div class="col-md-12" >
                                <div class="text-center">
                                    <h4><i class="fa fa-spinner fa-spin"></i> Cargando valores...</h4>
                                </div>
                            </div>
                        </div>

                    </div> <!-- /col -->
                    <input type="hidden" v-model="ids_selected" name="values">
            </div> <!-- /row -->

        </div>
    </template>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('administrator/plugins/summernote/js/summernote.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/backend/forms/wysiwyg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/ajax-create-category.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/jquery-ui.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/jquery-tmpl.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/flat-ui.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/smoke.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/load-dropzone-edit.js') }}" ></script>
    <script src="{{ asset('components/admin/js/trumbowyg.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.2.0/vue-resource.js"></script>
    <script>
    $('#providers').select2();
    </script>

    <script>
        function justNumbers(e)
        {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))return true;
            return /\d/.test(String.fromCharCode(keynum));
        }
    </script>
    <script>
        $('.name-box').on('click',function(){
            if ($(this).hasClass('ck-button-select')){
                $(this).removeClass('ck-button-select');
            }else{
                $(this).addClass('ck-button-select');
            }
        });
        $('.color-box').on('click',function(){
            if ($(this).hasClass('ck-button-select')){
                $(this).removeClass('ck-button-select');
            }else{
                $(this).addClass('ck-button-select');
            }
        });
    </script>

    <script>
        var Base_Url = "{{ url('') }}";
        Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf_token"]').attr('content');

        Vue.component('variant-option', {
          template: '#variant-options',
          props: ['options','variant'],
          // data is technically a function, so Vue won't
          // complain, but we return the same object
          // reference for each component instance
            data: function () {
                return {
                    isEdit: false,
                    valor_nuevo: false,
                    loadingValues: false,
                    values_selected: this.variant.values,
                    values: [],
                    option_selected: '',
                    option_selected_name: '',
                    aux: '',
                    option_new: '',
                    value_new: {
                        name: '',
                        attribute: ''
                    }
                }
            },
            methods: {
                freshOptions: function () {
                    this.$http.get(Base_Url+'/admin/options/?client_secret='+client_secret+'&client_id='+client_id).
                    then((response) => {
                        var data = response.body;
                        this.options = data;
                        this.option_selected = this.aux;
                        console.log(data);
                    }, (response) => {
                    // error callback
                    })
                },
                freshValues: function () {
                    this.loadingValues = true;
                    this.values = [];
                    if (this.option_selected == -1){
                        this.values = [];
                        this.loadingValues = false;

                    }else{
                        this.$http.get(Base_Url+'/admin/options/'+this.option_selected+'/values?client_secret='+client_secret+'&client_id='+client_id).
                        then((response) => {
                            var data = response.body;
                            this.values = data;
                            this.valor_nuevo = false;
                            this.loadingValues = false;

                            console.log(data);
                        }, (response) => {
                        // error callback
                        })
                    }

                },
                storeOptions: function () {
                    $('#btn-store-options').button('loading');

                    if (this.option_new == '') {
                        $('#btn-store-options').button('reset');

                        return "";

                    }else{
                        this.$http.post(Base_Url+'/admin/options?client_secret='+client_secret+'&client_id='+client_id,{name:this.option_new}).
                        then((response) => {
                            this.freshOptions();
                            var data = response.body;
                            this.aux = data.id;

                            this.option_new = '';
                            $('#btn-store-options').button('reset');

                            console.log(data);
                        }, (response) => {
                        // error callback
                            $('#btn-store-options').button('reset');

                        })
                    }
                },
                storeValues: function () {
                    $('#btn-store-values').button('loading');
                    if (this.value_new.name == '') {
                        $('#btn-store-values').button('reset');

                        return "";


                    }else{
                        this.$http.post(Base_Url+'/admin/options/'+this.option_selected+'/values?client_secret='+client_secret+'&client_id='+client_id,this.value_new).
                        then((response) => {
                            this.value_new = { name: '', attribute: '' };
                            var data = response.body;
                            $('#btn-store-values').button('reset');
                            this.valor_nuevo = false;

                            this.values.push(data);
                        }, (response) => {
                        // error callback
                            $('#btn-store-values').button('reset');

                        })
                    }
                },
                addValue: function (value) {

                        $('#btn-add-value-'+this.variant.id+'-'+value.id).button('loading');


                        this.$http.post(Base_Url+'/admin/variants/'+this.variant.id+'/values/'+value.id+'?client_secret='+client_secret+'&client_id='+client_id,this.value_new).
                        then((response) => {
                           this.values_selected.push(value);
                           $('#btn-add-value-'+this.variant.id+'-'+value.id).button('reset');

                        }, (response) => {
                        // error callback
                           $('#btn-add-value-'+this.variant.id+'-'+value.id).button('reset');

                        });
                },
                removeValue: function (value) {
                        $('.btn-remove-value-'+this.variant.id+'-'+value.id).button('loading');


                        this.$http.delete(Base_Url+'/admin/variants/'+this.variant.id+'/values/'+value.id+'?client_secret='+client_secret+'&client_id='+client_id,this.value_new).
                        then((response) => {
                            this.values_selected = this.values_selected.filter(function(el){
                                return el.id !== value.id;
                            });
                           $('.btn-remove-value-'+this.variant.id+'-'+value.id).button('reset');

                        }, (response) => {
                        // error callback
                           $('.btn-remove-value-'+this.variant.id+'-'+value.id).button('reset');

                        });

                },
                selectedValue: function (value) {
                    for (var i = this.values_selected.length - 1; i >= 0; i--) {
                        if(this.values_selected[i].id == value.id)
                        {
                            return true;
                        }
                    }
                    return false;
                }
            },
            computed:{
                nueva_propiedad: function () {
                    if (this.option_selected == -1){
                        return true;
                    }else{
                        return false;
                    }
                },
                nuevo_valor: function () {
                    if (this.option_selected == '' || this.option_selected == -1){
                        return true;
                    }else{
                        return false;
                    }
                },
                text_selected_value: function () {
                    var text = '';
                    if (this.values_selected.length == 0) {
                        return "Ninguna carasteristica seleccionada";
                    }
                    for (var i = 0 ; i < this.values_selected.length; i++) {
                        if (i == this.values_selected.length - 1 ){
                            text += this.values_selected[i].name+'.';
                        }else{
                            text += this.values_selected[i].name+', ';
                        }

                    }
                    return text;
                },
                ids_selected: function () {
                    var ids = [];

                    for (var i = 0 ; i < this.values_selected.length; i++) {
                        ids.push(this.values_selected[i].id);
                    }
                    return ids;
                }
            }
        })

        var app2 = new Vue({
            el: '#app-vue-simple',
            data: {
                save: false,
                is_new_variant: false,
                variant_id: '',
                messaje:{
                    show: false,
                    text: '',
                    type: ''
                },
                mas: {
                    images: []
                },
                variant_new: {
                    price: '',
                    promotional_price: '',
                    sku: '',
                    stock: '',
                    weight: '',
                    values: [],
                    images: []
                },
                product_new: {
                    name: '',
                    height: '',
                    width: '',
                    large: '',
                    description: '',
                    variant: {
                        price: '',
                        stock: '',
                        weight: '',
                        images: []
                    }
                },
                product:{
                    name: '',
                    height: '',
                    width: '',
                    large: '',
                    description: '',
                    collection: {
                        shipping_free: '',

                    },
                    variant: {
                        price: '',
                        stock: '',
                        weight: '',
                        images: []
                    },
                    categories: []
                },
                options: [],
                aux: '',
                categories: [],
            },
            mounted() {
                console.log('Component mounted 2.');
                $('textarea').trumbowyg({
                    fullscreenable: true,
                    lang: 'es'
                });
                this.freshProduct();
                this.fetchCategories();
            },
            methods: {

                fetchCategories: function () {
                  this.$http.get(Base_Url+'/admin/categories/all?client_secret=' + client_secret + '&client_id=' + client_id).
                  then((response) => {
                      var data = response.body;
                      this.categories = data;
                      ///console.log(data);
                  }, (response) => {
                  // error callback

                  })
                },
                addCategory: function (category) {

                        $('#add-category').button('loading');


                        this.$http.post(Base_Url+'/admin/products/'+this.product.uuid+'/categories/'+category.id+'?client_secret='+client_secret+'&client_id='+client_id,this.value_new).
                        then((response) => {
                          $('#add-category').button('reset');
                          this.product.categories.push(category);

                        }, (response) => {
                        // error callback
                           $('#add-category').button('reset');

                        });
                },
                removeCategory: function (category) {

                        $('#add-category').button('loading');


                        this.$http.delete(Base_Url+'/admin/products/'+this.product.uuid+'/categories/'+category.id+'?client_secret='+client_secret+'&client_id='+client_id,this.value_new).
                        then((response) => {
                              $('#add-category').button('reset');

                              var vm = this;
                              vm.product.categories = vm.product.categories.filter(function(el){
                                  return el.id !== category.id;
                              });
                              setTimeout(function(){
                                var aux = vm.product.categories;
                                vm.product.categories = [];
                                vm.product.categories = aux;

                              }, 2000);


                        }, (response) => {
                        // error callback
                          $('#add-category').button('reset');


                        });

                },
                /*addCategory: function (category) {
                    this.product.categories.push(category);
                },
                removeCategory: function (category) {
                    this.product.categories = this.product.categories.filter(function (el) {
                        return el != category;
                    });
                },*/
                freshProduct: function () {

                    this.$http.get(Base_Url+'/admin/products/'+product+'?client_secret='+client_secret+'&client_id='+client_id,this.product_new).
                    then((response) => {
                        var data = response.body;
                        this.product = data;
                        $('#description').trumbowyg('html', this.product.description);
                        this.save = true;
                        this.freshOptions();
                        $('#btn-store-product').button('reset');
                        console.log(data);
                    }, (response) => {
                    // error callback
                        $('#btn-store-product').button('reset');

                    })

                },
                storeVariant: function () {
                    $('#btn-store-variant').button('loading');
                    this.variant_new.values = this.values_selected;
                    if (this.variant_new.price == '') {
                        $('#btn-store-variant').button('reset');

                        return "";

                    }else{
                        this.$http.post(Base_Url+'/admin/products/'+this.product.uuid+'/variants?client_secret='+client_secret+'&client_id='+client_id,this.variant_new).
                        then((response) => {
                            var data = response.body;
                            this.product.variants.push(data);
                            this.is_new_variant = false;
                            $('#btn-store-variant').button('reset');

                            console.log(data);
                        }, (response) => {
                        // error callback
                            $('#btn-store-variant').button('reset');

                        })
                    }
                },
                freshOptions: function () {
                    this.$http.get(Base_Url+'/admin/options/?client_secret='+client_secret+'&client_id='+client_id).
                    then((response) => {
                        var data = response.body;
                        this.options = data;
                        this.option_selected = this.aux;
                        console.log(data);
                    }, (response) => {
                    // error callback
                    })
                },
                freshValues: function () {
                    if (this.option_selected == -1){
                        this.values = [];
                    }else{
                        this.$http.get(Base_Url+'/admin/options/'+this.option_selected+'/values?client_secret='+client_secret+'&client_id='+client_id).
                        then((response) => {
                            var data = response.body;
                            this.values = data;
                            console.log(data);
                        }, (response) => {
                        // error callback
                        })
                    }

                },
                storeOptions: function () {
                    $('#btn-store-options').button('loading');

                    if (this.option_new == '') {
                        $('#btn-store-options').button('reset');

                        return "";

                    }else{
                        this.$http.post(Base_Url+'/admin/options?client_secret='+client_secret+'&client_id='+client_id,{name:this.option_new}).
                        then((response) => {
                            this.freshOptions();
                            var data = response.body;
                            this.aux = data.id;

                            this.option_new = '';
                            $('#btn-store-options').button('reset');

                            console.log(data);
                        }, (response) => {
                        // error callback
                            $('#btn-store-options').button('reset');

                        })
                    }
                },
                storeValues: function () {
                    $('#btn-store-values').button('loading');
                    if (this.value_new.name == '') {
                        $('#btn-store-values').button('reset');

                        return "";


                    }else{
                        this.$http.post(Base_Url+'/admin/options/'+this.option_selected+'/values?client_secret='+client_secret+'&client_id='+client_id,this.value_new).
                        then((response) => {
                            this.freshValues();
                            this.value_new = { name: '', attribute: '' };
                            $('#btn-store-values').button('reset');

                        }, (response) => {
                        // error callback
                            $('#btn-store-values').button('reset');

                        })
                    }
                },
                addValue: function (value) {
                    this.values_selected.push(value);
                },
                removeValue: function (value) {

                       this.values_selected = this.values_selected.filter(function(el){
                         return el.id !== value.id;
                       });
                },
                selectedValue: function (value) {
                    for (var i = this.values_selected.length - 1; i >= 0; i--) {
                        if(this.values_selected[i].id == value.id)
                        {
                            return true;
                        }
                    }
                    return false;
                },
                onFileChange(e) {
                    var files = e.target.files || e.dataTransfer.files;
                    if (!files.length)
                    return;
                    this.createImage(files[0]);
                },
                createImage(file) {
                    var image = new Image();
                    var reader = new FileReader();
                    var vm = this;

                    reader.onload = (e) => {
                        vm.product_new.variant.images.push(e.target.result);
                    };
                    reader.readAsDataURL(file);
                },
                removeImage: function (image) {
                    this.product_new.variant.images = this.product_new.variant.images.filter(function(el){
                    return el !== image;
                    });
                },
                updateGeneral: function () {

                    $('#btn-udate-general').button('loading');

                    var aux = {
                        name: this.product.name,
                        description: $('#description').trumbowyg('html'),
                        height: this.product.height,
                        width: this.product.width,
                        large: this.product.large,
                        publish: this.product.publish,
                        type: 'general'
                    };
                    this.$http.put(Base_Url+'/admin/products/'+this.product.uuid+'/?client_secret='+client_secret+'&client_id='+client_id,aux).
                    then((response) => {
                        var data = response.body;
                        /*this.product = data;
                        this.save = true;
                        this.freshOptions();*/
                        console.log(data);
                        $('#btn-udate-general').button('reset');
                        toastr.success('La Informacion general del producto '+this.product.name+' fueron actulizadas correctamente');


                        console.log(data);
                    }, (response) => {
                    // error callback
                        $('#btn-udate-general').button('reset');

                    })
                },
                updateSeo:function () {
                    $('#btn-udate-seo').button('loading');
                    var aux = {
                        seo_title: this.product.seo_title,
                        seo_description: this.product.seo_description,
                        type: 'seo'
                    };
                    this.$http.put(Base_Url+'/admin/products/'+this.product.uuid+'/?client_secret='+client_secret+'&client_id='+client_id,aux).
                    then((response) => {
                        var data = response.body;
                        /*this.product = data;
                        this.save = true;
                        this.freshOptions();*/
                        console.log(data);
                        $('#btn-udate-seo').button('reset');
                        toastr.success('Las opciones avanzadas para SEO fueron actulizadas correctamente');
                        console.log(data);
                    }, (response) => {
                    // error callback
                        $('#btn-udate-seo').button('reset');

                    })
                },
                deleteVariant: function () {
                    $('#btn-delete-variant').button('loading');

                    this.$http.delete(Base_Url+'/admin/variants/'+this.variant_id+'?client_secret='+client_secret+'&client_id='+client_id).
                    then((response) => {
                        var data = response.body;
                        /*this.product = data;
                        this.save = true;
                        this.freshOptions();*/

                         console.log(data);
                        $('#btn-delete-variant').button('reset');
                        $('#modal-id').modal('hide');
                        toastr.success('la variante del producto fue eliminada correctamente');
                        this.product.variants = this.product.variants.filter(function(el){
                            return el.id !== data.id;
                        });
                        console.log(data);
                    }, (response) => {
                    // error callback
                        $('#btn-delete-variant').button('reset');

                    })
                },
                updateVisibility:function () {
                    $('#btn-udate-visibility').button('loading');
                    var aux = {
                        primary: this.product.collection.primary,
                        promotion: this.product.collection.promotion,
                        shipping_free: this.product.collection.shipping_free,
                        type: 'visibility'
                    };
                    this.$http.put(Base_Url+'/admin/products/'+this.product.uuid+'/?client_secret='+client_secret+'&client_id='+client_id,aux).
                    then((response) => {
                        var data = response.body;
                        /*this.product = data;
                        this.save = true;
                        this.freshOptions();*/
                         console.log(data);
                        $('#btn-udate-visibility').button('reset');
                        toastr.success('Las opciones para la visilidad del producto en la tienda fueron actualizadas correctamente');


                        console.log(data);
                    }, (response) => {
                    // error callback
                        $('#btn-udate-visibility').button('reset');
                    });
                },
                messajeSuccess: function () {
                    this.messaje.type = 'Genial! ';
                    this.messaje.show = true;
                    this.messaje.text = 'Los datos fueron actualizado correctamente';
                    vm = this;
                    setTimeout(function(){
                        vm.messaje.show = false;
                    }, 2000);
                },
                addImageVariant: function (variant, e) {
                    var files = e.target.files || e.dataTransfer.files;
                    if (!files.length)
                    return;
                    var image = new Image();
                    var reader = new FileReader();
                    var vm = this;

                    reader.onload = (e) => {
                        //vm.mas.images.push(e.target.result);
                        vm.$http.post(Base_Url+'/admin/variants/'+variant.id+'/images?client_secret='+client_secret+'&client_id='+client_id,{image: e.target.result }).
                        then((response) => {
                            var data = response.body;
                            variant.images.push(data);
                            toastr.success('Imagen agregada correctamente');

                            console.log(data);
                        }, (response) => {
                        // error callback
                            $('#btn-udate-visibility').button('reset');

                        })
                    };
                    reader.readAsDataURL(files[0]);
                    //alert(files.length);
                },
                removeImageVariant: function (image ,variant) {

                    this.$http.delete(Base_Url+'/admin/variants/'+variant.id+'/images/'+image.id+'?client_secret='+client_secret+'&client_id='+client_id).
                    then((response) => {
                        var data = response.body;
                        variant.images = variant.images.filter(function(el){
                            return el.id !== data.id;
                        });
                        /*this.product = data;
                        this.save = true;
                        this.freshOptions();*/
                        /* console.log(data);
                        $('#btn-udate-visibility').button('reset');
                        this.messajeSuccess();
                        */
                        toastr.success('Imagen eliminada correctamente!');

                        console.log(data);
                    }, (response) => {
                    // error callback
                        //$('#btn-udate-visibility').button('reset');

                    })
                },
                saveDetails: function (variant) {
                    $('#btn-save-details-'+variant.id).button('loading');
                    var aux = {
                        sku: variant.sku,
                        price: variant.price,
                        promotional_price: variant.promotional_price,
                        weight: variant.weight,
                        stock: variant.stock,
                        show: variant.show
                    };

                    this.$http.put(Base_Url+'/admin/variants/'+variant.id+'?client_secret='+client_secret+'&client_id='+client_id,aux).
                    then((response) => {
                        var data = response.body;
                        /*
                        variant.images = variant.images.filter(function(el){
                            return el.id !== data.id;
                        });
                        /*this.product = data;
                        this.save = true;
                        this.freshOptions();*/
                        /* console.log(data);
                        $('#btn-udate-visibility').button('reset');
                        this.messajeSuccess();
                        */
                        $('#btn-save-details-'+variant.id).button('reset');
                        toastr.success('Datos guardados correctamente!');

                        console.log(data);
                    }, (response) => {
                    // error callback
                        //$('#btn-udate-visibility').button('reset');
                        $('#btn-save-details-'+variant.id).button('reset');

                    })

                }
            },
            computed:{
              categoriesAdd: function () {
                var data = [];
                var find = false;
                for (var i = 0; i < this.categories.length; i++) {
                    find = false;
                    for (var j = 0; j < this.product.categories.length; j++) {
                      if (this.categories[i].id == this.product.categories[j].id)
                      {
                        find = true;
                        break;
                      }
                    }
                    if (!find) {
                      data.push(this.categories[i]);
                    }
                }
                return data;
              }
            }

        });


    </script>
@stop
