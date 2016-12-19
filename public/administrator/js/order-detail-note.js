$(document).on('ready', function () {
    $('#las-notas').hide();
    $('#add').on('click', function () {
        $('#record').hide();
        $('#las-notas').hide();
        $(this).hide();
        $('.other').hide();
    });
    $('#guardar-nota').on('click', function () {
        var route = $('#note-route').val();
        var token = $('#note-token').val();
        var note = $('#note').val();
        var id = $('#id-order').val();
        var data = {'note':note , 'id': id};
        $.ajax({
            url : route + '/' + id,
            'type' :'PUT',
            'dataType':'json',
            'headers':{'X-CSRF-TOKEN':token},
            'data': data,
            success : function (response) {
                if(response == ''){
                    $('#las-notas').hide();
                    $('#las-notas').text('');
                    $('#add').text('Agregar Notas');
                    $('#add').show();
                }else{
                    $('#las-notas').show();
                    $('#las-notas').text(note);
                    $('#add').text('Editar Notas');
                    $('#add').show();
                }
                $('#addnota').collapse('toggle');
            }
        });
    });
});