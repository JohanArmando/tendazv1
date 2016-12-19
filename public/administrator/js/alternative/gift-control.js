 $(document).on('ready', function () {
                $('#gif-download').hide();
                $('#download').on('click', function (e) {
                    e.preventDefault();
                    var  route =  $('#route-export-order').val();
                    var token = $('#token-route').val();
                    var so = $('input[name=so]:checked').val();
                        var data = { 'so' : so};
                    $.ajax({
                        'url': route,
                        'type' : 'POST',
                        'dataType' :'json',
                        'headers' : {'X-CSRF-TOKEN':token},
                        'data' : data,
                        beforeSend: function () {
                            $('#gif-download').show();
                            $('#icon').hide();
                            $('#download').attr('disabled' , true);
                            $('#find').text('Descargando');
                            $('#cancelar').attr('disabled' , true);
                        },
                        success:function(response){
                            $(this).show();
                            $('#cancelar').attr('disabled' , false);
                            $('#download').attr('disabled' , false);
                            $('#find').text('Descargar');
                            $('#gif-download').hide();
                            $('#icon').show();
                            $('#download').show();
                            var path = response.path;
                            location.href = path;
                        }
                    });
                });
            });