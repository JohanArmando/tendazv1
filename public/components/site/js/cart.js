$(document).on('ready',function(){
    var path = $('#pathLoad').val();
    var token =  $('#token').val();
    var cart =  $('#cart-product');
    var data = {'_token' : token};
    $.ajax({
        url: path,
        headers: {'X-CSRF-TOKEN': token},
        type: 'GET',
        dataType: 'json',
        success:function(data){
            if(data.carts != ''){

               $('#view-total-cart').html(numeral(data['subtotal']).format('$0,0.00'));
               $("#view-count").html(data['count']);
               $('#cart-product').html('');
               $.each(data.carts,function(key,value) {
                   $.each(value.attributes,function(key , value ){
                       if(value.option_name_1 != ''){
                           $('#cart-product').append('<li>-'+ (value.option_value_1) + (value.option_value_2) + (value.option_value_3) + '</li>');
                       }
                   })
                   $('#cart-product').append('<li><a><b>'+ value.name +'</b><span>x'+  value.quantity + '  ' +numeral(value.price * value.quantity).format('$0,0.00')+'</span><a></li>');
               })
           }else{
                $("#view-total-cart").html('$ 0');
                $("#view-count").html(0);

                $('#cart-product').append('<li><a><b>No hay productos </b></span><a></li>');

           }
        },
        error:function(msj){
        }
    });
});