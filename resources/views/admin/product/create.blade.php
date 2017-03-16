@section('title')
    Crear producto
@stop
@extends('layouts.administrator')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('administrator/font-awesome/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('components/admin/css/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/admin/css/app.css') }}">
@stop
@section('content')
    <div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title">
                <img class="page-header-section-icon" src="{{asset('administrator/image/icons/icons-base/products.png')}}">&nbsp; Agregar productos
            </h4>
        </div>
        <div class="page-header-section">
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                    <li><a href="{{url('admin/products')}}" style="color: orange;">Productos</a></li>
                    <li style="color: orange;">Agregar Productos</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="border: none">
                    <br>
                    <div class="panel-body" style="background-color: white;">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-tabs" style="background-color: white; ">

                                    <li class="active">
                                        <a href="#popular" data-toggle="tab">
                                            <h2>
                                                <i  class="fa fa-thumbs-o-up text-tendaz"></i>Publicaci&oacute;n de producto
                                            </h2>
                                            <span class="media-meta" STYLE="margin-left: 15%">Publica de forma r&aacute;pida</span>
                                        </a>
                                    </li>

                                    {{--
                                    <li class="active">
                                        <a href="#comments" data-toggle="tab">
                                            <h2>
                                                <i  class="fa fa-hand-peace-o text-tendaz"></i>Publicaci&oacute;n de productos
                                            <span class="media-meta" style="margin-left: 15%"> Publica tu producto detalladamente</span>
                                        </a>
                                    </li>
                                    --}}
                                </ul>
                                <div class="tab-content panel" style="padding: 2.5%">
                                    <div class="tab-pane  np " id="comments">
                                        <div class="media-list">
                                            @include('admin.partials.form-simple')
                                        </div>
                                    </div>
                                    <div class="tab-pane np active" id="popular">
                                        <div class="media-list">
                                            {{-- {!! Form::open(['url' => url ("admin/products?client_secret=".$shop->uuid."&client_id=".$shop->id)  , 'method' => 'POST' , 'class' => 'dropzone' ,'id' => 'my-dropzone-avanzado' , 'files' => true]) !!}
                                            @include('admin.partials.form-advanced')
                                            --}}
                                            @include('admin.partials.form-simple-2')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-end-space"></div>
    </div>

    <div id="variant-modal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Editando <span id="variant-modal-values"></span></h4>
                </div>
                <div class="modal-body">
                    <div class="row phone-input">
                        <div class="col-xs-4">
                            <label>Precio</label>
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input class="form-control" name="price" size="30" type="text" value="" />
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <label>Peso</label>
                            <div class="input-group">
                                <div class="input-group-addon">kg</div>
                                <input class="form-control" name="weight" size="30" type="text" value="" />

                            </div>
                        </div>
                        <div class="col-xs-4">
                            <label>Stock</label>
                            <input class="form-control" name="stock" size="30" type="text" value="" />
                        </div>
                    </div>
                    <div class="row m-top phone-input">
                        <div class="col-xs-4">
                            <label>Precio Promocional</label>
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input class="form-control" name="promotional_price" size="30" type="text" value="" />
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <label>SKU</label>
                            <input class="form-control" name="sku" size="30" type="text" value="" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-right">
                        <input type="submit" class="btn btn-default pull-left" value="Cerrar"  data-dismiss="modal"/>
                        <a href="#" class="btn btn-default prev-variant">Anterior</a>
                        <a href="#" class="btn btn-default next-variant">Siguiente</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('scripts')

    <script type="text/javascript" src="{{ asset('administrator/plugins/summernote/js/summernote.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administrator/js/backend/forms/wysiwyg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/load-dropzone-avanzado.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/load-dropzone-simple.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/ajax-create-category.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/jquery-ui.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/jquery-tmpl.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/flat-ui.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('components/admin/js/smoke.min.js') }}" ></script>
    <script src="{{ asset('components/admin/js/trumbowyg.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.2.0/vue-resource.js"></script>


    <script>
        $('#providers').select2();
        $('#categories').select2();
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


        var app2 = new Vue({
            el: '#app-vue-simple',
            data: {
                mas: {
                    images: []
                },
                edit_url: '',
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

                },
                options: [],
                aux: '',
            },
            mounted() {
                console.log('Component mounted 2.');
                $('textarea').trumbowyg({
                    fullscreenable: true,
                    lang: 'es'
                });
            },
            methods: {
                storeProduct: function () {
                    $('#btn-store-product').button('loading');
                    this.product_new.description = $('#simple-description2').trumbowyg('html');

                    if (this.product_new.name == '') {
                        $('#btn-store-product').button('reset');

                        return "";

                    }else{
                        this.$http.post(Base_Url+'/admin/products/advanced?client_secret='+client_secret+'&client_id='+client_id,this.product_new).
                        then((response) => {
                            var data = response.body;
                            //this.product = data;
                            //this.save = true;
                            //this.freshOptions();
                            //$('#btn-store-product').button('reset');
                            $('#modal-success-product').modal('show');
                            this.product_new = {
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
                            };
                            this.product_new.description = $('#simple-description2').trumbowyg('empty');

                            $('#btn-store-product').button('reset');

                            this.edit_url = Base_Url+'/admin/products/edit/'+data.uuid;
                            ///console.log(data);
                        }, (response) => {
                        // error callback
                            $('#btn-store-product').button('reset');

                        })
                    }
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
                        description: this.product.description,
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
                        this.messajeSuccess();

                        console.log(data);
                    }, (response) => {
                    // error callback
                        $('#btn-udate-general').button('reset');

                    })
                },
            }
        });


    </script>
    <script type="text/javascript">

    </script>


@stop
