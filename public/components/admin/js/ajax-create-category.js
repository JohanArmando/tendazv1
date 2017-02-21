
$(document).on('ready', function () {
    function limpiaForm(miForm) {
        $(':input', miForm).each(function() {
            var type = this.type;
            var tag = this.tagName.toLowerCase();
            if (type =='text' || type == 'password' || tag == 'textarea')
                this.value = "";
            else if (type == 'checkbox' || type == 'radio')
                this.checked = false;
            else if (tag == 'select')
                this.selectedIndex = -1;
        });
    }
    $('#selectCategory').select2();
    $('#submitCategory').on('click',function(){
        var url = $('#routeIdCategory').val();
        var token = $('#tokenCategory').val();
        var categorias = $('#sub');
        var select2 = $('#selectCategory');
        var categoria = $('#sub').val();
        var data = { '_token' : token, 'name' : $('#nameCategory').val() , 'title' : $('#title_seo').val(), 'description' : $('#description_seo').val(), 'url' : $('#url_product').val() , 'sub' : $('#sub').val() };
        $.ajax({
            url: url+'?client_secret='+client_secret+'&client_id='+client_id,
            data :  data,
            type : 'POST',
            dataType : 'json',
            success:function(response){
                console.log(response);
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
                var seleccionadas = select2.val();
                toastr["success"]("Categoria Agregada");
                limpiaForm($(".form-category"));
                ($("#nameCategory").val(''));
                ($("#title_seo").val(''));
                ($("#description_seo").val(''));
                ($("#url_product").val(''));
                ($("#collapseOne").collapse('toggle'));
                $('#modalCategory').modal('hide');
                select2.html('');
                categorias.find('option').remove();
                categorias.append('<option value="' +'' + '">' +'--Selected Option--' + '</option>');
                var array = response[0];
                $(response[0]).each(function(i,v) {
                    categorias.append('<option value="' + v.id + '">' + v.name + '</option>');
                    $(seleccionadas).each(function(indice , valor ){
                        if(valor == v.id){
                            select2.append('<option selected value="' + v.id + '">' + v.name + '</option>');
                            delete array[i];
                        }
                    });
                    if(v.name == response[1].name){
                        $("#selectCategory option[value='" +  v.id + "']").remove();
                    }
                });
                $(array).each(function(i,v) {
                    if(v == undefined){

                    }else{
                        if(v.id == response[1].id){
                            delete array[i];
                        }
                    }
                });
                $(array).each(function(i,v) {
                    if(v == undefined){

                    }else{
                        select2.append('<option  value="' + v.id + '">' + v.name + '</option>');
                    }
                });
                select2.append('<option selected value="' + response[1].id + '">' + response[1].name + '</option>');
                $('#selectCategory').select2();
            }
        });
    });

});