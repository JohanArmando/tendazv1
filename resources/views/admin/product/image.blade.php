@section('title')
Editar {{ucfirst($product->name)}}
@stop

@extends('layouts.administrator')
@section('css')
    <link rel="stylesheet" href="{{ asset('components/admin/css/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/admin/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('components/css/dropzone.css') }}">

    <script>
        var product = "{{$product->uuid}}";
    </script>
@stop
@section('content')
<div class="page-header page-header-block">
        <div class="page-header-section">
            <h4 class="title semibold"><i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp; Agregar Imagenes</h4>
        </div>
        <div class="page-header-section">
            <div class="toolbar">
                <ol class="breadcrumb breadcrumb-transparent nm">
                    <li><a href="{{url('admin')}}" style="color: darkgrey;">Inicio</a></li>
                    <li><a href="{{url('admin/products')}}" style="color: orange;">Products</a></li>
                    <li>Agregar Imagenes Productos</li>
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
                                        {!! Form::model($product ,['url' => url("admin/products/refresh/$product->uuid?client_secret=$shop->uuid&client_id=$shop->id"),
                                        'method' => 'POST'  ,'id' => 'my-dropzone' , 'class' => 'dropzone' , 'files' => true]) !!}
                                          <div class="row">
                                              <label class="control-label" style="font-size: 1.2em; color: black;">Agregar Imagenes
                                                  <small style="color: darkgray">al  producto {{$product->name}}</small>
                                              </label>
                                              <div class="dz-message" style="height:190px; border-width: 2px; border-style: dashed; border-color: #F26522; ">
                                                  <h1 style="font-size: 80px !important; color: #F26522; "><i class="ico-cloud-upload2"></i></h1>
                                                  <label>Arrastra tus imagenes </label>
                                              </div>
                                              <div class="text-center col-md-9 col-simple">
                                                  <div  class="dropzone-previews"></div>
                                              </div>
                                              <div class="col-md-12"><br>
                                                  <button type="submit" id="submit" class="btn btn-tendaz">Guardar Imagenes</button>
                                                  <a href="{{url('admin/products/edit/'.$product->uuid)}}" class="btn btn-default">Volver al Editar</a>
                                              </div>
                                          </div>
                                          </div>
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
    <script>
        var maxImageWidth = 250, maxImageHeight = 250;

        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 10,
            dictDefaultMessage: "Subir Imagenes",
            parallelUploads : 100,
            previewsContainer: ".dropzone-previews",
            acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
            maxFilesize : 2,
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    if (myDropzone.getQueuedFiles().length > 0) {
                        myDropzone.processQueue();
                    } else {
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "3000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }

                        toastr["warning"]("Debes escoger al menos una imagen");
                    }
                });
                var id = $('#producto_id').val();
                $.get( BASEURL + '/admin/products/images/'+ id , function(data) {
                    $.each(data, function (key, value) {
                        var removeButton = Dropzone.createElement("<button class='btn btn-block btn-primary' id='remove' style='margin-top: 3%; cursor: pointer'>Quitar</button>");
                        var mockFile = {name: value.name, size: 4};
                        myDropzone.options.addedfile.call(myDropzone, mockFile);
                        myDropzone.options.thumbnail.call(myDropzone, mockFile, BASEURL + "/images-products/" + store + "/" + value.name);
                        $('.dz-message img').attr({'width': '120px', 'height': '120px'});
                        mockFile.previewElement.appendChild(removeButton);
                        removeButton.addEventListener("click", function (e) {
                            e.preventDefault();
                            e.stopPropagation();
                            var prev = $('#images-delete').val();
                            if (prev != '') {
                                $('#images-delete').val(prev + ',' + mockFile.name);
                            } else {
                                $('#images-delete').val(mockFile.name);
                            }
                            var _ref;
                            return (_ref = mockFile.previewElement) != null ? _ref.parentNode.removeChild(mockFile.previewElement) : void 0;
                        });
                        mockFile.previewElement.appendChild(removeButton);
                    });
                });

                this.on("addedfile", function(file) {
                    var removeButton = Dropzone.createElement("<button class='btn btn-block btn-primary' style='margin-top: 3%; cursor: pointer'>Remove</button>");
                    var _this = this;
                    removeButton.addEventListener("click", function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        _this.removeFile(file);
                    });
                    file.previewElement.appendChild(removeButton);
                });
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
                var toas = '';
                this.on("sendingmultiple",function(totalBytesSent){
                            $('#loading').addClass('show');
                        }
                );
                this.on("successmultiple",function(files,response) {
                    myDropzone.processQueue.bind(myDropzone);
                    $('#loading').addClass('hide');
                    $('#loading').removeClass('show');
                    myDropzone.removeFile(files);
                    $(this).closest('#my-dropzone ').find("input[type=text], textarea").val("");
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }

                    toastr["success"]("Las Imagenes fueron agregadas correctamente");
                    $('div.help-block-create').addClass('hidden');
                });
                this.on("errormultiple", function(files, response) {
                    $('#loading').addClass('hide');
                    $('#loading').removeClass('show');
                    $.each(response , function (i , v) {
                        $('div.help-block-create').removeClass('hidden');
                        $('div.help-block-create#'+i).html('');
                        $.each(v , function (index , value) {
                            $('div.help-block-create#'+i).append(value);
                        })
                    });
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "3000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };
                    // setTimeout("location.reload(true);",3000);
                    toastr["error"]("Hubo un error al agregar la imagen");
                });
                this.on("thumbnail", function(file) {
                    if (file.width < maxImageWidth || file.height < maxImageHeight) {
                        alert('Te recomendamos que subas imagenes con mayor resolucion.')
                    }
                    if(file.width > 1000 || file.height > 2000){
                        alert('Tal vez la resoulcion de tu imagen no sea la optima para tu tienda       .')
                    }
                });
            }

        };
    </script>
@stop
