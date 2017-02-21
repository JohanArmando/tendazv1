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
                                                <i  class="fa fa-thumbs-o-up text-tendaz"></i>Publicaci&oacute;n Simple
                                            </h2>
                                            <span class="media-meta" STYLE="margin-left: 15%">Publica de forma r&aacute;pida</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#comments" data-toggle="tab">
                                            <h2>
                                                <i  class="fa fa-hand-peace-o text-tendaz"></i>Publicaci&oacute;n Avanzada
                                            </h2>
                                            <span class="media-meta" style="margin-left: 15%"> Publica tu producto detalladamente</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content panel" style="padding: 2.5%">
                                    <div class="tab-pane  np active" id="popular">
                                        <div class="media-list">
                                            @include('admin.partials.form-simple')
                                        </div>
                                    </div>
                                    <div class="tab-pane np " id="comments">
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
    <script type="text/javascript">
        $('textarea').trumbowyg({
            fullscreenable: true,
            lang: 'es'
        });
    </script>
    <script>
        var Base_Url = "{{ url('') }}"; 
        Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf_token"]').attr('content');
        //alert($('meta[name="csrf_token"]').attr('content'));
        var app = new Vue({
            el: '#app-vue',
            data: {
                values_selected: [],
                options: [],
                values: [],
                option_selected: '',
                option_selected_name: '',
                aux: '',
                option_new: '',
                value_new: {
                    name: '',
                    attribute: ''
                }
            },
            mounted() {
                console.log('Component mounted.');
                this.freshOptions();
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
        });

        var app2 = new Vue({
            el: '#app-vue-simple',
            data: {
                save: false,
                product_new: {
                    name: '',
                    height: '',
                    width: '',
                    large: '',
                    description: '',
                    variant: {
                        price: '',
                        stock: '',
                        weight: ''
                    }
                },
                product:{

                }
            },
            mounted() {
                console.log('Component mounted 2.');
            },
            methods: {
                storeProduct: function () {
                    $('#btn-store-product').button('loading');

                    if (this.option_new == '') {
                        $('#btn-store-product').button('reset');

                        return "";

                    }else{
                        this.$http.post(Base_Url+'/admin/products/advanced?client_secret='+client_secret+'&client_id='+client_id,this.product_new).
                        then((response) => {
                            var data = response.body;
                            this.product = data;
                            this.save = true;
                            $('#btn-store-product').button('reset');

                            console.log(data);
                        }, (response) => {
                        // error callback
                            $('#btn-store-product').button('reset');

                        })
                    }
                },

            },
            computed: {

            }
        });
    </script>


@stop