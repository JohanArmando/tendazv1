Dropzone.autoDiscover = false;
var maxImageWidth = 250, maxImageHeight = 250;
var url = BASEURL + "/admin/products/refresh/"+product+"?client_secret="+client_secret+"&client_id="+client_id;

$("div#dropzone-edit").dropzone({
    autoProcessQueue: false,
    uploadMultiple: true,
    maxFilezise: 10,
    maxFiles: 5,
    previewsContainer: "#dropzone-edit",
    method: "GET",
    dictDefaultMessage: "",
    url : url,
        init: function(file) {
            myDropzone = this;
            /*var submitBtn = document.querySelector("#submit-edit");
            submitBtn.addEventListener("click", function(e){
                e.preventDefault();
                e.stopPropagation();
                myDropzone.processQueue();
            });*/
            var id = $('#producto_id').val();
                //images que ya existing
                $.get( BASEURL + '/admin/products/images/'+ id , function(data) {
                    $.each(data, function(key,value){
                        var removeButton = Dropzone.createElement("<button class='btn btn-block btn-primary' id='remove' style='margin-top: 3%; cursor: pointer'>Quitar</button>");
                        var mockFile = { name: value.name, size: 4 };
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
                this.on("addedfile", function(file) {
                    var removeButton = Dropzone.createElement("<button class='btn btn-block btn-primary' style='margin-top: 3%; cursor: pointer'>Quitar</button>");
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
                this.on("sendingmultiple",function(totalBytesSent){
                        $('#loading').addClass('show');
                });
                this.on("successmultiple",function(files,response) {
                    myDropzone.processQueue.bind(myDropzone);
                    $('#submit-edit').addClass('disabled');
                    $.ajax({
                        type: "POST",
                        url: url
                    });
                    console.log(files);
                    myDropzone.removeFile(files);
                });
                this.on("thumbnail", function(file) {
                    if (file.width < maxImageWidth || file.height < maxImageHeight) {
                        alert('Te recomendamos que subas imagenes con mayor resolucion.')
                    }
                    if (file.width > 1000 || file.height > 2000) {
                        alert('Tal vez la resolucion de tu imagen no sea la optima para tu tienda.')
                    }
                });
               /*this.on("queuecomplete", function (file) {
                    alert("Imagenes Cargadas...");
                });*/
        }/*,
        success: function (file, response) {
            //console.log(file);
            file.previewElement.classList.add("dz-success");
        },
        error: function (file, response) {
            file.previewElement.classList.add("dz-error");
        }*/

});