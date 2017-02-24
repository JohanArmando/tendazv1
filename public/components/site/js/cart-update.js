
    var gif = $('.cart-update-gif').hide();
    function replaceAll( text, busca, reemplaza ){
        while (text.toString().indexOf(busca) != -1)
            text = text.toString().replace(busca,reemplaza);
        return text;
    }
    $('.close').on('click', function () {
        $('#alert_product_stock_'+($(this).data('id'))).hide();
    });
    function soloNumeros(e){
        var key = window.Event ? e.which : e.keyCode
        return (key >= 48 && key <= 57)
    }
        $('.input-update').focusout(function () {
            var route = $(this).data('href');
            var id = $(this).data('id');
            var quantity = $(this).val();
            var quantityOriginal = $('#product_quantity_' + id).val();
            var plus = 'plus';
            var token  = $(this).data('token');
            var table = $('#table-cart-update tbody');
            if(quantity != quantityOriginal){
                var data = {'id' : id , 'quantity' : quantity - quantityOriginal ,'original':quantity, '_token':token, 'cant' : 'other'};
                $.ajax({
                    url: route,
                    type: 'POST',
                    data: data,
                    dataType: 'json',
                    beforeSend: function(){
                        $("#update_" + id).show();
                        $("#product_" + id).hide();
                    },
                    success: function (data) {
                        console.log(data);
                        if(data[0] == 'slow-stock'){
                            $("#product_" + id).show();
                            $("#alert_product_stock_" + id).show();
                            $("#alert_product_stock_" + id + " > p").html('No hay suficiente stock para agregar el producto <strong>' + data[1].name +'</strong> al carrito.');
                            $("#product_" + id).val(quantityOriginal);
                            $("#update_" + id).hide();
                        }else{
                            $("#product_" + id).show();
                            $("#update_" + id).hide();
                            var string = ($('#envio').html().replace('$',''));
                            var envio = parseFloat(replaceAll(string,',',''));
                            var totalorder = numeral(data[1] + envio).format('$0,0.00');
                            var total = numeral(data[1]).format('$0,0.00');
                            var subtotal = numeral(data[2]).format('$0,0.00');
                            $('#total').html(total);
                            $('#total-order').html(totalorder);
                            $('#subtotal').html(subtotal);
                            $('#subtotal-order').html(subtotal);
                            $('#cart-product').html('');
                            $('#view-total-cart').html(subtotal);
                            $('#view-count').html(data[4]);
                            $.each(data[3],function(key,value) {
                                $.each(value.attributes,function(key , value ){
                                    if(value.option_name_1 != ''){
                                        $('#cart-product').append('<li>-'+ (value.option_value_1) + (value.option_value_2) + (value.option_value_3) + '</li>');
                                    }
                                });
                                $('#cart-product').append('<li><a><b>'+ value.name +'</b><span>x'+  value.quantity + '  ' +numeral(value.price * value.quantity).format('$0,0.00')+'</span><a></li>');
                            });
                            $('#product_quantity_' + id).val(data[3][id]['quantity']);
                            $('#alert_product_stock_'+ id).hide();
                            for (var i = 0; i < data.length; i++) {
                                var string = numeral(data[i]['quantity'] * data[i]['price']).format('$0,0.00');
                                $("#fila-subtotal_" + id).html(string);
                                $("#product_" + id).val(data[i]['quantity']);
                            }
                        }
                    }
                });
            }
        });
        $('.plus').on('click', function (e) {
            e.preventDefault();
            var route = $(this).data('href');
            var id = $(this).data('id');
            var quantity = $("#product_" + id).val();
            var plus = 'plus';
            var token  = $('#cart_token').val();
            var data = {'id' : id , 'quantity' : quantity , '_token':token, 'cant' : plus};
            var table = $('#table-cart-update tbody');
                $.ajax({
                    url: route,
                    type: 'POST',
                    data: data,
                    dataType: 'json',
                    beforeSend: function(){
                        $("#update_" + id).show();
                        $("#product_" + id).hide();
                    },
                    success: function (data) {
                        if (data[0] == 'slow-stock') {
                            $("#product_" + id).show();
                            $("#alert_product_stock_" + id).show();
                            $("#alert_product_stock_" + id + " > p").html('No hay suficiente stock para agregar el producto <strong>' + data[1].name + '</strong> al carrito.');
                            $("#update_" + id).hide();
                        } else {
                            $("#product_" + id).show();
                            $("#update_" + id).hide();
                            var string = ($('#envio').html().replace('$', ''));
                            var envio = parseFloat(replaceAll(string, ',', ''));
                            var totalorder = numeral(data[1] + envio).format('$0,0.00');
                            var total = numeral(data[1]).format('$0,0.00');
                            var subtotal = numeral(data[2]).format('$0,0.00');
                            $('#total').html(total);
                            $('#total-order').html(totalorder);
                            $('#subtotal').html(subtotal);
                            $('#subtotal-order').html(subtotal);
                            $('#cart-product').html('');
                            $('#view-total-cart').html(subtotal);
                            $('#view-count').html(data[4]);
                            $.each(data[3], function (key, value) {
                                $.each(value.attributes, function (key, value) {
                                    if (value.option_name_1 != '') {
                                        $('#cart-product').append('<li>-' + (value.option_value_1) + (value.option_value_2) + (value.option_value_3) + '</li>');
                                    }
                                });
                                $('#cart-product').append('<li><a><b>' + value.name + '</b><span>x' + value.quantity + '  ' + numeral(value.price * value.quantity).format('$0,0.00') + '</span><a></li>');
                            });
                            $('#product_quantity_' + id).val(data[3][id]['quantity']);
                            for (var i = 0; i < data.length; i++) {
                                var string = numeral(data[i]['quantity'] * data[i]['price']).format('$0,0.00');
                                $("#fila-subtotal_" + id).html(string);
                                $("#product_" + id).val(data[i]['quantity']);
                            }
                        }
                    }
                });
        });
        $('.minus').on('click', function (e) {
            e.preventDefault();
            var route = $(this).data('href');
            var id = $(this).data('id');
            var quantity = $("#product_" + id).val();
            var token  = $('#cart_token').val();
            var minus = 'minus';
            var data = {'id' : id , 'quantity' : quantity , '_token':token, 'cant' : minus};
            var table = $('#table-cart-update tbody');
            if(quantity <=1){

            }else {
                $.ajax({
                    url: route,
                    type: 'POST',
                    data: data,
                    dataType: 'json',
                    beforeSend: function(){
                        $("#update_" + id).show();
                        $("#product_" + id).hide();
                    },
                    success: function (data) {
                        if (data[0] == 'slow-stock') {
                            $("#product_" + id).show();
                            $("#alert_product_stock_" + id).show();
                            $("#alert_product_stock_" + id + " > p").html('No hay suficiente stock para agregar el producto <strong>' + data[1].name + '</strong> al carrito.');
                            $("#update_" + id).hide();
                        } else {
                            $("#product_" + id).show();
                            $("#update_" + id).hide();
                            var string = ($('#envio').html().replace('$', ''));
                            var envio = parseFloat(replaceAll(string, ',', ''));
                            var totalorder = numeral(data[1] + envio).format('$0,0.00');
                            var total = numeral(data[1]).format('$0,0.00');
                            var subtotal = numeral(data[2]).format('$0,0.00');
                            $('#total').html(total);
                            $('#total-order').html(totalorder);
                            $('#subtotal').html(subtotal);
                            $('#cart-product').html('');
                            $('#view-total-cart').html(subtotal);
                            $('#view-count').html(data['count']);
                            $.each(data[3], function (key, value) {
                                $.each(value.attributes, function (key, value) {
                                    if (value.option_name_1 != '') {
                                        $('#cart-product').append('<li>-' + (value.option_value_1) + (value.option_value_2) + (value.option_value_3) + '</li>');
                                    }
                                });
                                $('#cart-product').append('<li><a><b>' + value.name + '</b><span>x' + value.quantity + '  ' + numeral(value.price * value.quantity).format('$0,0.00') + '</span><a></li>');
                            });
                            $("#alert_product_stock_" + id).hide();
                            $('#product_quantity_' + id).val(data[3][id]['quantity']);
                            for (var i = 0; i < data.length; i++) {
                                var string = numeral(data[i]['quantity'] * data[i]['price']).format('$0,0.00');
                                $("#fila-subtotal_" + id).html(string);
                                $("#product_" + id).val(data[i]['quantity']);
                            }
                        }
                    }
                });
            }
        });
