window.$ = window.jQuery = require('../../../../node_modules/jquery/dist/jquery');
function preloader(){
    "use strict";
    $(".preloader_image_general").fadeOut();
    $(".preloader_general").delay(200).fadeOut("slow").delay(200, function(){
        $(this).remove();
    });
}
$(document).on('ready' , function () {
    preloader();
});
$(document).on('ready' , function () {
    function toJsonData(data){
        var o = {};
        var a = data;
        $.each(a, function() {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    }
    var form = $('form[name=form-register]');
    var button = form.find('button');
    var initalText = button.text();
    var serialize = form.serializeArray();
    var inputNameStore = form.find('input[name=name_store]');
    var data = toJsonData(serialize);
    var url = form.attr('action');
    var method = form.attr('method');
    var urlValidateStore = BASEURL + '/' + 'auth/register/validate-store/';
    var validatorStoreMethod = 'GET';
    inputNameStore.keyup(function () {
        var name_store = $(this).val();
        var div = $('.name_store');
        if(name_store == ''){
            div.html('');
        }else{
            $.ajax({
                url : urlValidateStore + name_store,
                method : validatorStoreMethod,
                dataType : 'json',
                headers : {'X-CSRF-TOKEN' : data._token },
                beforeSend : function () {
                    div.html('');
                    div.append('<i class="fa fa-spinner fa-2x" style="color : orange"></i>');
                },
                success : function (response) {
                    console.log(response);
                    div.css({'color' : 'orange' , 'margin-bottom' : '10px'});
                    div.html('<h4>La direcci&oacute;n de tu tienda ser&aacute;: ' + 'http://' + response + '.{{$domain_reseller}}</h4>');
                    form.append('<input name="store" type="hidden" value= ' + '"' + response +'"'+ '>')
                }
            });
        }
    });
    button.on('click' , function (e) {
        form.submit();
        if($(this).hasClass('disabled')){
            alert('Completa todos los campos');
        }else{
            var div = document.createElement('div');
            div.style.height = "100%";
            div.style.position= 'fixed';
            div.style.backgroundColor= '#ffffff';
            div.style.top= '0';
            div.style.right= '0';
            div.style.left = '0';
            div.style.bottom = '0';
            div.style.zIndex = '13000';
            div.id = 'preload-create';
            var html = document.getElementsByTagName('body')[0];
            html.appendChild(div);
            var subDiv = document.createElement('div');
            subDiv.style.width = '250px';
            subDiv.style.height = '100px';
            subDiv.style.position = 'absolute';
            subDiv.style.left = '42%';
            subDiv.style.top = '45%';
            subDiv.style.background = 'url(' + BASEURL + '/tendaz/img/login.gif' + ') no-repeat 50% 50% transparent';
            subDiv.style.margin = '-40px 0 0 -40px';
            subDiv.id = 'preload-image-create';
            var divParent = document.getElementById('preload-create');
            div.appendChild(subDiv);
            var  p = document.createElement('p');
            p.style.fontSize = '1.6em';
            p.style.width = '300px';
            p.style.color = '#000';
            p.style.marginLeft = '40px';
            p.style.marginTop = '-40px';
            p.id = 'p-id';
            var divParent = document.getElementById('preload-image-create');
            divParent.appendChild(p);
            var text = document.createTextNode('Creando tu tienda ....');
            var pParent = document.getElementById('p-id');
            pParent.appendChild(text);
            form.submit();
        }
    });
});
var form = $('#form-login');
var btn = form.find('button');
var initialtext = btn.text();

btn.on('click' , function (e) {
    e.preventDefault();
    btn.attr('disabled' , true);
    btn.text('Redirigiendo a tu tienda ......');
    $('.preloader').removeClass('hidden');
    form.submit();
});
require('../../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap');
require('./components/validator.min');
require('./components/slick.min');
require('./repute-scripts');
require('./components/jquery.bootstrap-autohidingnavbar.min');
require('./slider/wowslider');
require('./slider/script');