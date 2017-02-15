@section('title')
Editar {{ucfirst($product->name)}}
@stop

@extends('layouts.administrator')
@section('css')
    <link rel="stylesheet" href="{{ asset('components/admin/css/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/admin/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('components/css/dropzone.css') }}">
    <style>
        .dropzone{
            background-color: transparent;
            border: 2px dashed #f26522;
            border-radius: 8px;
        }
        .dz-error-message{display: none}
        .dz-success-mark{display: none}
        .dz-remove{ display: none}
        .dz-remove a:hover{ color: transparent}
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
                <div class="panel panel-default" style="border: none">
                    <br>
                    <div class="panel-body" style="background-color: white;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-content panel" style="padding: 2.5%; border-top: 1px solid #cfd9db;">
                                    <div class="tab-pane active np" id="popular">
                                      <div class="media-list">
                                        {!! Form::model($product ,['url' => url("admin/products/edit/$product->uuid?client_secret=$shop->uuid&client_id=$shop->id"),
                                        'method' => 'PUT' , 'files' => true]) !!}
                                            <input type="hidden" id="producto_id" name="uuid" value="{{ $product->uuid }}">
                                            @include('admin.partials.form-advanced-edit')
                                        {!! Form::close() !!}
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script type="text/javascript">
            $('textarea').trumbowyg({
                fullscreenable: false
            });
    </script>
@stop
