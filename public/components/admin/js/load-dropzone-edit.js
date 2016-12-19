
(function ($) {
    $.fn.serializeFormJSON = function () {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function () {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };
})(jQuery);
Dropzone.options.myDropzoneEdit = {
    autoProcessQueue: false,
    uploadMultiple: true,
    maxFilezise: 10,
    maxFiles: 10,
    parallelUploads : 100,
    forceFallback: false,
    acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
    maxFilesize : 2,
    previewsContainer: ".dropzone-previews-edit",
    init: function(file) {
        var submitBtn = document.querySelector("#submit-edit");
        myDropzone = this;
        var id = $('#producto_id').val();
        $.get( BASEURL + '/admin/products/images/'+ id , function(data) {
            $.each(data, function(key,value){
                var removeButton = Dropzone.createElement("<button class='btn btn-block btn-primary' id='remove' style='margin-top: 3%; cursor: pointer'>Remove</button>");
                var mockFile = { name: value.name, size: value.size };
                myDropzone.options.addedfile.call(myDropzone, mockFile);
                myDropzone.options.thumbnail.call(myDropzone, mockFile, BASEURL + "/images-products/"+store+"/"+value.name);
                $('.dz-message img').attr({'width':'120px' , 'height' : '120px'});
                mockFile.previewElement.appendChild(removeButton);
                removeButton.addEventListener("click", function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    var prev = $('#images-delete').val();
                    if(prev != ''){
                        $('#images-delete').val(prev + ',' + mockFile.name);
                    }else{
                        $('#images-delete').val(mockFile.name);
                    }
                    var _ref;
                    return (_ref = mockFile.previewElement) != null ? _ref.parentNode.removeChild(mockFile.previewElement) : void 0;
                });
                mockFile.previewElement.appendChild(removeButton);
            });
        });
        submitBtn.addEventListener("click", function(e){
            e.preventDefault();
            e.stopPropagation();
            $("#submit-edit").text('Guardando ...');
            $("#submit-edit").attr('disabled',true);
            if (myDropzone.getQueuedFiles().length > 0) {
                myDropzone.processQueue();
            }
            else {
                var route = $('#my-dropzone-edit').attr('action');
                var token = $('#token_id').val();
                if($('#images-delete').val()  == ''){
                    var data = {'data' : ($('#my-dropzone-edit').serializeFormJSON()) , 'category_id' : $('#selectCategory').val(),'manual':'1'}
                }else{
                    var images = $('#images-delete').val().split(',');
                    var data = {'data' : ($('#my-dropzone-edit').serializeFormJSON()) , 'category_id' : $('#selectCategory').val() , 'deletes': images, 'manual' : '1'}
                }
                $.ajax({
                    'url' : route ,
                    'type' : 'PUT',
                    headers: {'X-CSRF-TOKEN': token},
                    'dataType' : 'json',
                    'data' : data,
                    beforeSend : function () {
                        $('#loading').addClass('show');
                    },
                    'success' : function (response) {
                        $("#submit-edit").text('Actualizar producto');
                        $("#submit-edit").attr('disabled',false);
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-full-width",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "toggle",
                            "hideMethod": "fadeOut"
                        }
                        $('#loading').addClass('hide');
                        $('#loading').removeClass('show');
                        toastr["success"]("Enhorabuena! Producto editado correctamente.")
                        setTimeout(function(){  window.location.href = BASEURL + '/admin/products'; }, 3000);
                    }
                });
            }
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
            $("#submit-edit").text('Actualizar producto');
            $("#submit-edit").attr('disabled',false);
        });

        this.on("sendingmultiple",function(totalBytesSent){
                $('#loading').addClass('show');
            }
        );

        this.on("successmultiple",function(files,response) {
            myDropzone.processQueue.bind(myDropzone);
            $('#loading').addClass('hide');
            $('#loading').removeClass('show');
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-full-width",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "toggle",
                "hideMethod": "fadeOut"
            }
            toastr["success"]("Enhorabuena! Producto editado correctamente.")
            setTimeout(function(){  window.location.href = BASEURL + '/admin/products'; }, 3000);
        });
        this.on("errormultiple", function(files, response) {
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
            toastr["error"]("Hubo un error al crear tu producto");
        });
        this.on("thumbnail", function(file) {
            if (file.width < maxImageWidth || file.height < maxImageHeight) {
                alert('Te recomendamos que subas imagenes con mayor resolucion.')
            }
            if (file.width > 1000 || file.height > 2000) {
                alert('Tal vez la resoulcion de tu imagen no sea la optima para tu tienda       .')
            }
        });
    }
};