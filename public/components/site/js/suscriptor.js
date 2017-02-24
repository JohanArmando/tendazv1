$(document).on('ready', function () {
    $('#button-suscriptor').on('click', function () {
        var name = $('#name-suscriptor').val();
        var email = $('#email-suscriptor').val();
        var url = $('#url-suscriptor').val();
        var token = $('#token-suscriptor').val();
        var button = $(this);
        $.ajax({
           url : url ,
            dataType: 'json',
            type : 'POST',
            headers: { 'X-CSRF-TOKEN' : token},
            data : {'name' : name , 'email' : email},
            beforeSend : function () {
                button.attr('disabled' , 'disabled');
                button.text('');
                button.append('<i class="fa fa-spinner fa-pulse  fa-fw"></i>');
                button.css('width' , '122px');
            },
            success : function (response) {
                $('#name-suscriptor').val('');
                $('#name-suscriptor').hide();
                $('#email-suscriptor').val('');
                $('#email-suscriptor').hide();
                $('#message-suscriptor').html(name + ' Se inscribi&oacute; al newsletter correctamente');
                $('#button-suscriptor').hide();
            }
        });
    });
});