'use strict';
(function(){
    var app = angular.module('appPagos', []);
    app.factory('servicioPagos',function($http){
        var config = {headers :  {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        }
        };
        return {
            index : function () {
                return $http.get(BASEURL + '/admin/setting/payments/'+ '?client_secret='  + client_secret + '&client_id=' + client_id, config);
            },
            update : function (id , data) {
                return $http({
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    url: apiUrl + '/payments/' + id  + '?client_secret='  + client_secret + '&client_id=' + client_id,
                    method: "PUT",
                    data : data
                });
            },   create : function ( data) {
                return $http({
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    url: apiUrl + '/payments' +  '?client_secret='  + client_secret + '&client_id=' + client_id,
                    method: "POST",
                    data : data
                });
            },
            show : function (id) {
                return $http.get(BASEURL + '/admin/setting/payments/'+ id + '?client_secret='  + client_secret + '&client_id=' + client_id, config);
            },
            deactivate : function(id){
                return $http.get(BASEURL + '/admin/setting/payments/desactivar/'+ id + '?client_secret='  + client_secret + '&client_id=' + client_id, config);
            }
        }
    });
    app.controller('controladorPagos',['$scope','servicioPagos', function ($scope , servicioPagos) {
        $scope.create = true;
        servicioPagos.index()
            .success(function (response) {
                $scope.payments = response.data;
            })
            .error(function(){

            });
        $scope.deactive = function(payment){
            spinner(true);
            servicioPagos.deactivate(payment.data ? payment.data.uuid : null)
                .success(function(response){
                    spinner(false);
                    $scope.payments = response.data;
                    toas('error' , '<h4><strong>' + payment.name + '</strong> desactivado correctamente.</h4>');
                })
                .error(function(){
                    spinner(false);
                    toas('error' , '<h4>hubo un error al desactivar <strong>' + payment.name + '</strong>.</h4>');
                });
        }
        $scope.modal_payment = function (payment , active) {
            $scope.payment = [];
            $scope.payment = payment;
            $scope.create = active;
            active == true ? $scope.payment['accion'] = 'Activar' : $scope.payment['accion'] =  'Modificar';
            var uuid = payment.data ? payment.data.id : null;
            servicioPagos.show(uuid)
                    .success(function(response){
                        createForm(payment.name , response);
                    })
                    .error(function(){

                });
        }
        $scope.submit = function(){
            spinner(true);
            servicioPagos.create($('#modalPayment').find('form').serializeObject($scope.payment.idReal))
                .success(function (response) {
                    spinner(false);
                    $scope.payments = response.data;
                    $('#modalPayment').modal('toggle');
                    var data = '';
                    $scope.payment['accion'] == 'Activar' ?  data = 'activados' :  data = 'actualizados';
                    toas('info' , '<h4>Datos de <strong>' + $scope.payment.name + '</strong> ' + data +' correctamente.</h4>');
                    location.reload();
                })
                .error(function(response){
                    spinner(false);
                    toas('info' , '<h4>Hubo un error al ' + $scope.payment.accion + ' <strong>' + $scope.payment.name + '</strong> .</h4>');
                });
        };
        $scope.update = function(){
            spinner(true);
            servicioPagos.update($scope.payment.data ? $scope.payment.data.uuid : null  , $('#modalPayment').find('form').serializeObject($scope.payment.idReal))
                .success(function (response) {
                    spinner(false);
                    $scope.payments = response.data;
                    $('#modalPayment').modal('toggle');
                    var data = '';
                    $scope.payment['accion'] == 'Activar' ?  data = 'activados' :  data = 'actualizados';
                    toas('info' , '<h4>Datos de <strong>' + $scope.payment.name + '</strong> ' + data +' correctamente.</h4>');
                    location.reload();
                })
                .error(function(response){
                    spinner(false);
                    toas('info' , '<h4>Hubo un error al ' + $scope.payment.accion + ' <strong>' + $scope.payment.name + '</strong> .</h4>');
                });
        };
        function spinner(show){
            show ?
                $('.preload').removeClass('hide') : $('.preload').addClass('hide');
        }
        function toas(type , message){
            toastr.options = {
                "positionClass": "toast-bottom-right",
            }
            toastr[type](message)
        }
        $.fn.serializeObject = function(id) {
            var o = {};
            var a = this.serializeArray();
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
            o['avaliable'] = 1;
            o['payment_form_id'] = id;
            return o;
        }
        function createForm(type , dataForm){
            var form = $('<form></form>');
            form.attr("action", BASEURL);
            form.attr("method", "POST");
            form.attr("id", type.replace(/\s/g,""));
            $("#modalPayment").find('.modal-body').html('');
            $("#modalPayment").find('.modal-body').append(form);
            data(type.replace(/\s/g,"") , dataForm);
        }

        function data(form , dataForm){
            $scope.form = dataForm;
            if(form == 'Payu'){
                var data = {
                    'merchant_id': {
                        'label' : 'Id Comercio' ,
                        'value' : dataForm ? dataForm.merchant_id : '',
                    },
                    'api_id': {
                        'label' : 'Id Cuenta' ,
                        'value' : dataForm ? dataForm.api_id : '',
                    },
                    'api_key': {
                        'label' : 'Api Key' ,
                        'value' : dataForm ? dataForm.api_key : '',
                    },
                }
            }
            if(form == 'Personalizado'){
                var data = {
                    'custom_name': {
                        'label' : 'Forma De Pago' ,
                        'value' : dataForm ? dataForm.custom_name : 'A convenir' ,
                    },
                    'instructions': {
                        'label' : 'Instrucciones para el comprador' ,
                        'value' : dataForm ? dataForm.instructions : 'Gracias por tu compra, nos pondremos en contacto por email para arreglar los detalles del pago.',
                    },
                    'discount': {
                        'label' : 'Descuento a ofrecer a los clientes' ,
                        'value' : dataForm ?  dataForm.discount : '0',
                    },
                }
            }
            if(form == 'MercadoPago'){
                var data = {
                    'api_id': {
                        'label' : 'Client Id' ,
                        'value' : dataForm ? dataForm.api_id : '' ,
                    },
                    'api_key': {
                        'label' : 'Client Secret' ,
                        'value' : dataForm ? dataForm.api_key : '',
                    },
                }
            }
            addFormFields(data , form.replace(/\s/g,""));
        }

        function addFormFields(data , form){
            if (data != null) {
                var formulario = $('#'+form);
                var count = 0;
                $.each(data, function (name, value) {
                    if (value != null) {
                        var form_group = $('<div></div>').addClass('form-group');
                        var label = $('<label></label>').text(value.label);
                        var  a = $('<a href=""><i class="hidden fa fa-exclamation-circle"></i></a>');
                        if(value.label == 'country'){
                            var input = $('<select name="options" id="country"></select>').attr("ng-model", name).val(value.value).addClass('form-control');
                            var split = [ {'BRL' : 'Brasil'} , {'ARS' : 'Argentina'}, { 'CLP' : 'Chile'},{ 'COP' : 'Colombia'},{'MXN' : 'Mexico'}, {'VEF' : 'Venezuela'}];
                            $.each(split, function(index, v) {
                                $.each(v , function (i , v) {
                                    var option = $('<option></option>');
                                    option.attr('value', v);
                                    if(value.value == v){
                                        option.attr('selected' , true);
                                    }
                                    option.text(v);
                                    option.text(v);
                                    option.val(i);
                                    input.append(option);
                                });
                            });
                        }else{
                            var input = $("<input />").attr("name", name).attr("ng-model", name).val(value.value).addClass('form-control');
                        }
                        form_group.append(label);
                        form_group.append(' ');
                        form_group.append(a);
                        form_group.append(input);
                        formulario.append(form_group);
                    }
                });
                formulario.append($("<input class='hidden' />").attr("name", 'payment_method_id').attr("ng-model", 'payment_method_id').val($scope.payment._id));
            }
        }
    }]);
}());