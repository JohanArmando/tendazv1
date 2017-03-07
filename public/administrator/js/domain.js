(function(){
    $(document).on('ready' , function () {
        $('#buyer-domain').on('click' , function () {
            $('#buyer-domain').addClass('hidden');
            var input = $('#basic-url');
            var domain = input.val();
            var tld = $('#select-domain').val();
            if('.'+domain.split('.')[domain.split('.').length - 1] != tld){
                input.val(domain + tld);
            }
            var string = input.val().split('.');
            var stringToSend = string[string.length - 2]+'.'+string[string.length - 1];
            var form = $('form[name=form-check-domain]');
            var url = form.find('input[name=url-check-domain]').val();
            var token = form.find('input[name=token-check-domain]').val();
            var arrayTLD = [];
            for(var x = 0 ; x <= 7 ; x++) {
                var length = $('#select-domain option').length;
                var pick = Math.floor(Math.random()*length);
                var val = $('#select-domain option').eq(pick).val();
                if(val != tld){
                    arrayTLD.push(val);
                }
            }
            var data = {'domain' : stringToSend , 'tld' : $.unique(arrayTLD)};
            $.ajax({
                url : url + '?client_secret='  + client_secret + '&client_id=' + client_id,
                headers : {'X-CSRF-TOKEN' : token },
                type : 'POST',
                dataType : 'json',
                data : data,
                beforeSend : function () {
                    $('#search').removeClass('hidden');
                },
                success : function (response) {

                    var ul = $('.not-available').find('ul');
                    if(!response.available){
                        $('#search').addClass('hidden');
                        $('.not-available').removeClass('hidden');
                        $.each(response[0] , function (key , value) {
                            if(value['@attributes']['Status'] == "OK"){
                                if(value['CommandResponse']['DomainCheckResult']['@attributes']['Available'] == 'true')
                                var li = '<li>' + value['CommandResponse']['DomainCheckResult']['@attributes']['Domain'] +'</li>'
                            }
                            ul.append(li);
                        });
                    }else{
                        $('#search').removeClass('hidden');
                        $('.not-available').addClass('hidden');
                        $('#bs-modal').modal('toggle');
                        $('#basic-url').val('');
                        var setup = $('.setup-billing');
                        setup.removeClass('hidden');
                        ul.html('');
                        //$('.payment-form').append(response.view);
                        function addFormFields(form, data) {
                            if (data != null) {
                                $.each(data, function (name, value) {
                                    if (value != null) {
                                        var input = $("<input />").attr("type", "hidden").attr("name", name).val(value);
                                        form.append(input);
                                    }
                                });
                            }
                        };
                        $.getJSON("https://api.ipify.org?format=jsonp&callback=?",function(){
                        }).success(function(json){
                            $.getJSON( "https://freegeoip.net/json/"+json.ip, function(data) {
                            })
                                .done(function(API) {
                                    data  = {
                                        'sid' : response.sid ,
                                        'mode' : '2CO' ,
                                        'x_receipt_link_url'  : 'http://tendaz.com/setting/domain/buy',
                                        "x_receipt_user" : response.user.uuid,
                                        "x_domain_true" : 1 ,
                                        "_domain_name" : response.domain,
                                        "_uuid_name" :  response.tld.uuid,
                                        'name' : response.user.name ,
                                        'address' : response.shop.state,
                                        'city' : API.city,
                                        'zip' : API.zip_code ? API.zip_code : '111461',
                                        'country' : API.country_name,
                                        'state'  : response.shop.state,
                                        'name_last' : response.user.last_name,
                                        "currency_code" : "USD",
                                        "lang" : "es_ib",
                                        "demo" : "Y",
                                        "card_holder_name" : "Domain Buy",
                                        'li_0_type' :'product' ,
                                        'li_0_name' : response.domain,
                                        'li_0_price' : response.tld.price ,
                                        'li_0_tangible' : 'Y' ,
                                        'li_1_type' : 'shipping' ,
                                        'li_1_name' : '' ,
                                        'li_1_price' : '' ,
                                        'card_holder_name' :'Domain' + response.domain ,
                                        'street_address' : response.shop.address_contact == '' ? 'NONE' : response.shop.address_contact,
                                        'street_address2' : '' ,
                                        'city' : API.region_name ,
                                        'state' :API.region_name     ,
                                        'zip' : API.zip == '' ? '111461' : API.zip,
                                        'country' : API.country_name ,
                                        'ship_name' : response.shop.address_contact == '' ? 'NONE' : response.shop.address_contact,
                                        'ship_street_address' : response.shop.address_contact == '' ? 'NONE' : response.shop.address_contact,
                                        'ship_street_address2' : '' ,
                                        'ship_city' : API.city ,
                                        'ship_state' : API.region_name ,
                                        'ship_zip' : API.zip_code == '' ? '111461' : API.zip_code,
                                        'ship_country' : API.country_name,
                                        'email' : response.user.email,
                                        'phone' : response.shop.phone_contact ? response.shop.phone_contact : '5555555',
                                        'tco_use_inline' : 1
                                    }
                                    /*var form = $('<form></form>');
                                    form.attr("action", "https://www.johinsdev.com/checkout/purchase");
                                    form.attr("method", "POST");
                                    form.attr("target", "tco_lightbox_iframe");
                                    form.attr("style", "display:none;");
                                    addFormFields(form, data);
                                    $("body").append(form);*/

                                    $('.tco_lightbox').remove();
                                    /*$.getScript( "https://www.johinsdev.com/static/checkout/javascript/direct.min.js", function( data, textStatus, jqxhr ) {
                                        setTimeout(function() {
                                            form.submit();
                                            form.remove();
                                        }, 1000);
                                    });*/
                                    setTimeout(function() {
                                        $('.preloader_general').addClass('hidden');
                                    }, 5500);
                                    $('#tco_lightbox').on('click' , '#button-content' , function () {
                                        alert('hola');
                                    });
                                })
                                .fail(function() {
                                    console.log( "error" );
                                })
                                .always(function() {
                                    console.log( "complete" );
                                });
                        });
                    }
                },
                error : function () {
                    alert('Hay un error en el servidor');
                    $('#search').addClass('hidden');
                }
            });
        });
        //funcion que cambian el select despues que en uno de los dominios se de select
        $('#basic-url').keyup(function(){
            var value = $(this).val();
            var lastCharacter = value.lastIndexOf('.');
            if( lastCharacter !=  -1 ){
                var position = value.lastIndexOf('.');
                var char = value.substr(position  , value.length - 1);
                $.each($('#select-domain option') , function (key , value ) {
                    if($(this).val() == char){
                        $('#select-domain').val($(this).val());
                    };
                });
            }
        });

        $('#select-domain').on('change' , function () {
            var tld = $(this).val();
            var value = $('#basic-url').val();
            var lastCharacter = value.lastIndexOf('.');
            if( lastCharacter !=  -1 ){
                var position = value.lastIndexOf('.');
                var newTld = value.substr(position  , value.length - 1);
                var newChar = value.substr(0  ,position);
                if(newChar == ''){
                    newTld = value.substr(position  , value.length);
                }
                var bool = 0;
                $.each($('#select-domain option') , function () {
                    if($(this).val() == newTld){
                        $('#basic-url').val(newChar + tld);
                        bool = 1;
                    }
                });
                if(!bool){
                    $('#basic-url').val(value + tld);
                }
            }else{
                $('#basic-url').val(value + tld);
            }
        });

        function complete(este){
            var name = este;
            var word = name.split('.');
            var www = '';
            if(word[0] == 'www' ){
                www = true;
            }
            $('#bs-modal-complete').modal('show');
            $('#domain-install').html(name);
            var domain = $('.domain tr td').first().text();
            if(www){
                var step = '2. Establece tu Cname Record par www a : <strong>' + domain + '</strong>';
            }else{
                var step = '2. Establecer tu Arecord a nuestra direccion IP: <strong>23.277.38.32</strong>';
            }
            $('#complete-second-step').html(step);
        };
        function deleteDomain(este){
            $('#bs-modal-delete').modal('show');
            var name = este.data('name');
            id = este.data('uuid');
            $('.delete-domain-name').html(name);
        }
        function deleteDomainSubmit(este){
            este.text('Eliminando ....');
            este.attr('disabled' , true);
            $('.closeDomain').remove();
            $('.close').remove();
            $('form[name=delete]').attr('action' , BASEURL + '/admin/configuration/domain/destroy/' + id).submit();
        }
        $('#table-domain').on('click' ,'.complete-install' , function () {
            complete($(this).data('name'));
        });
        $('.complete-install').on('click' , function () {
            complete($(this).data('name'));
        });
        var id = '';
        $('.domain-delete').on('click' , function () {
            deleteDomain($(this));
        });
        $('#table-domain').on('click' ,'.domain-delete', function () {
            deleteDomain($(this));
        });
        $('#delete-domain-submit').on('click' , function () {
            deleteDomainSubmit($(this) , id);
        });

        $('#table-domain').on('click', '#delete-domain-submit' , function () {
            deleteDomainSubmit($(this) , id);
        });
        $('#add-domain').on('click' , function () {
            var form = $('form[name=add_domain]');
            var url = form.attr('action');
            var token = form.data('token');
            var domain = form.find('input[name=domain]').val().replace(/[`~!@#$%^&*()_|+\-=?;:'",<>\{\}\[\]\\\/]/gi, '').replace('http','').replace('https','');
            var www = domain.split('.');
            var data = '';
            if(www[0] == 'www' || www[0] == ''){
                var removeItem = www[0];
                if(www[0] == ''){
                    var w = 0;
                    domain = 0;
                }else{
                    w = 1 ;
                }
                www = $.grep(www, function(value) {
                    return value != removeItem;
                });
                var subDomain = '';
                $.each(www , function (key , value) {
                    if(value != '') {
                        subDomain += value + '.';
                    }
                });
                data = {'www' : w , 'domain' : subDomain ,   'subDomain' : domain };
            }else if(www.length > 2 && www[0] != ''){
                data = {'www' : 1 , 'domain' : domain,   'subDomain' : domain };
            }else{
                data = {'www' : 0 , 'domain' : domain ,   'subDomain' : 0 };
            }
            if(data != ''){
                $.ajax({
                    url : url ,
                    method : 'POST',
                    dataType : 'json',
                    headers : {'X-CSRF-TOKEN' : token },
                    data : data,
                    beforeSend : function () {
                        $('.preloader_general').removeClass('hidden');
                    },
                    success : function (response) {
                        $('.preloader_general').addClass('hidden');
                        var alert = $('#error-domain');
                        if(response.domain){
                            alert.removeClass('hidden');
                            var errors = response.domain.length;
                            var catidad_error = '';
                            if(errors > 1){
                                catidad_error = 'Tienes ' + errors + ' errores';
                            }else{
                                catidad_error = 'Tienes ' + errors + ' error';
                            }
                            var errores = '';
                            $.each(response.domain , function (key , value) {
                                errores += '<li>' + value +  '</li>'
                            });
                            alert.children('div').find('h4 strong').html(catidad_error);
                            alert.children('div').find('ul').html(errores);
                        };
                        if(response[0] == 'true'){
                            var tab =  $('#table-domain tbody');
                            $.each(response[1] , function (key , value) {
                                var table  = '<tr style="border-style: hidden">';
                                if(value.name.split('.')[0] == 'www'){
                                    table += '<td style="padding-left: 30px"> <a href=' + '"'+ BASEURL + '/' + '/admin/configuration/domain/settings/' +value.uuid  + '"' + '>' + value.name + '</a></td>';
                                }else{
                                    table += '<td > <a href=' + '"'+ BASEURL + '/' + '/admin/configuration/domain/settings/' +value.uuid  + '"' + '>' + value.name + '</a></td>';
                                }
                                table += '<td><span class="label label-warning" style="color: black;">' + 'Instalacion requerida' + '</span></td>';
                                table += '<td><a class="btn btn-default btn-xs complete-install" data-name=' + '"' + value.name +'"' + '>Completar instalacion</a>';
                                table +=  '<button class="btn btn-danger btn-xs domain-delete" data-name=' +  '"' +  value.name  + '"' + 'data-uuid=' + '"' + value.uuid + '"' + '><i class="fa fa-times"></i></button></td>';
                                table += '</tr>'
                                var ul = $('#ul-domain');
                                var li = '<li>'  + value.secure + '://' + value.name + '</li>';
                                ul.append(li);
                                tab.append(table);
                            });
                            $('#p-dom').html('configuraci&oacute;n completa para ' +  (response[1].length+1) +' dominios Sus dominios personalizados no est&aacute;n apuntando a su tienda Shopify sin embargo :')
                            $('#p-dom-ssl').html('Los certificados SSL se solicitar&aacute; autom&aacute;ticamente para sus ' + (response[1].length+1) + ' dominios , una vez completada la configuraci&oacute;n</p>')
                            alert.addClass('hidden');
                            $('#bs-modal-add').modal('hide');
                            $('#modal-add-domain').remove();
                            var altura = $(document).height();
                            $("html, body").animate({scrollTop:altura+"px"});

                        }
                    },
                    error : function (errors) {
                        $('.preloader_general').addClass('hidden');
                        alert.removeClass('hidden');
                        alert.children('div').find('h4 strong').html('Error ! recargar el servidor');
                        alert.children('div').find('ul').html('<li>Hay ocurrido un error en el servidor</li>');
                    }
                });
            }
        });
    });
}());