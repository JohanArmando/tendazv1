$(document).on('ready', function () {
    $('#contact-notify').hide();
    var BASEURL = $('#base-url').val();
});
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
    "showMethod": "slideDown",
    "hideMethod": "slideUp"
};
var ids = [];
$("#customcheckbox-two0").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
    elementos();
    ids = (countID());
});
function elementos(){
    var elementosSeleccionados = ($('input[type="checkbox"]:checked').not('#customcheckbox-two0').size());
    if(elementosSeleccionados == 0){
        $('#contact-count').html('');
    }else{
        $('#contact-count').html('Has seleccionado '+ elementosSeleccionados + ' contacto');
        ids = (countID());
    }
}
function countID(){
    var ides = [];
    $('input[type="checkbox"]:checked').not('#customcheckbox-two0').each(function(){
        ides.push($(this).val());
    });
    return ides;
}
$('#contact-select').on('change',function(){
    var valueSelected = $(this).val();
    var token = $('#token-contact').val();
    if(valueSelected == 'read'){
        var url = $('#url-contact-read').val();
        ajax(url , token , ids , valueSelected);
    }else if(valueSelected == 'unread'){
        var url = $('#url-contact-unread').val();
        ajax(url , token , ids , valueSelected);
    }else if(valueSelected == 'delete'){
        var url = $('#url-contact-delete').val();
        ajax(url , token , ids , valueSelected);
    }else{
        ids  = [];
        $("input:checkbox").prop('checked', false);
        $("#customcheckbox-two0").prop('checked', false);
        token = '';
        url = '';
        valueSelected = '';
    }
});
function ajax(url , token , data , value){
    if(data.length >= 1){
        var loading = '<center style="margin-left: 425px !important;><p"><i class="fa fa-spinner fa-5x" aria-hidden="true"></i><h3>Cargando datos</h3></p></center>';
        var table = $("#contactTable tbody");
        table.html(loading);
        $.ajax({
            url : url ,
            dataType: 'json',
            type : 'POST',
            headers : {'X-CSRF-TOKEN':token},
            data : { 'ids' : data},
            success: function (response) {
                table.html("");
                if(value == 'read'){
                    toastr["warning"]("<center><h4> Las consultas han sido marcadas como le&iacute;das</h4></center>");
                }
                if(value == 'unread'){
                    toastr["warning"]("<center><h4> Las consultas han sido marcadas como no le&iacute;das</h4></center>");
                }
                if(value == 'delete'){
                    toastr["warning"]("<center><h4> Las consultas han sido eliminadas</h4></center>");
                }
                if(response == 'void'){
                    $('#contact-main').hide();
                    $('#contact-notify').show();
                }else{
                    $('#contact-main').show();
                    $('#contact-notify').hide();
                    $.each(response , function(key , value ){
                        if(value.allowed == 0){
                            var fila = "<tr class='success'>";
                        }else{
                            var fila = "<tr>";
                        }
                        fila += "<td><div class='" + 'checkbox custom-checkbox nm' +"'><input id='" + value.id +"' onclick='" + 'elementos()' + "' type='" + 'checkbox' + "' value='" + value.id + "' data-toggle='" + 'selectrow' + "' data-target='" + 'tr' + "' data-contextual='" + 'info' +"'> <label for='" + value.id + "'></label> </div></td>";
                        fila += "<td>" + $.formatDateTime('dd/mm/yy', new Date(value.created_at));  + "</td>";
                        fila += "<td><a href='"  + BASEURL +  "/admin/customers/" + value.user_id+"'>" + value.name  + ' '+ value.last + "</a></td>";
                        fila += "<td>" + value.email + "</td>";
                        fila += "<td>" + value.phone + "</td>";
                        fila += "<td><p>" + value.message + "</p></td>";
                        fila += "</tr>";
                        table.append(fila);
                        $("#customcheckbox-two0").prop('checked', false);
                        $('#contact-count').html('');
                    });
                }
            }
        });
    }
}