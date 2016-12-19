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
                return $http.put(BASEURL + '/admin/setting/payments/'+ id + '?client_secret='  + client_secret + '&client_id=' + client_id, config);
            },
            show : function (id) {
                return $http.get(BASEURL + '/admin/setting/payments/'+ id , data +'?client_secret='  + client_secret + '&client_id=' + client_id, config);
            },
            deactivate : function(id){
                return $http.get(BASEURL + '/admin/setting/payments/desactivar/'+ id + '?client_secret='  + client_secret + '&client_id=' + client_id, config);
            }
        }
    });
    app.controller('controladorPagos',['$scope','servicioPagos', function ($scope , servicioPagos) {
        servicioPagos.index()
            .success(function (response) {
               $scope.payments = response.data;
               console.log($scope.payments);
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
               active == true ? $scope.payment['accion'] = 'Activar' : $scope.payment['accion'] =  'Modificar';
                var uuid = payment.data ? payment.data.uuid : null;
               servicioPagos.show(uuid)
                   .success(function(response){
                       console.log(response);
                           createForm(payment.name , response.payment);
                   })
                   .error(function(){

                   });
        }

        $scope.submit = function(){
            spinner(true);

            servicioPagos.update($scope.payment.data ? $scope.payment.data.uuid : null , $('#modalPayment').find('form').serializeObject($scope.payment.idReal))
                .success(function (response) {
                    spinner(false);
                    $scope.payments = response.data;
                    $('#modalPayment').modal('toggle');
                    var data = '';
                    $scope.payment['accion'] == 'Activar' ?  data = 'activados' :  data = 'actualizados';
                    toas('info' , '<h4>Datos de <strong>' + $scope.payment.name + '</strong> ' + data +' correctamente.</h4>');
                })
                .error(function(){
                    spinner(false);
                    toas('info' , '<h4>Hubo un error al ' + $scope.payment.accion + ' <strong>' + $scope.payment.name + '</strong> .</h4>');
                });
        }
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
            form.attr("id", type);
            $("#modalPayment").find('.modal-body').html('');
            $("#modalPayment").find('.modal-body').append(form);
            data(type , dataForm);
        }

        function data(form , dataForm){
            $scope.form = dataForm;
            if(form == 'Payu'){
                var data = {
                        'merchant_id': {
                            'label' : 'Id Comercio' ,
                            'value' : dataForm ? dataForm.merchant_id : '',
                        },
                        'account_id': {
                            'label' : 'Id Cuenta' ,
                            'value' : dataForm ? dataForm.account_id : '',
                        },
                        'api_key': {
                            'label' : 'Api Key' ,
                            'value' : dataForm ? dataForm.api_key : '',
                        },
                }
            }
            if(form == 'Epay'){
                var data = {
                    'merchant_id': {
                        'label' : 'Id Comercio' ,
                        'value' : dataForm ? dataForm.merchant_id : '' ,
                    },
                    'account_id': {
                        'label' : 'Id Cuenta' ,
                        'value' : dataForm ? dataForm.account_id : '',
                    },
                    'api_key': {
                        'label' : 'Api Key' ,
                        'value' : dataForm ?  dataForm.api_key : '',
                    },
                }
            }
            if(form == 'Personal'){
                var data = {
                    'payment_form': {
                        'label' : 'Forma De Pago' ,
                        'value' : dataForm ? dataForm.payment_form : 'A convenir' ,
                    },
                    'description': {
                        'label' : 'Instrucciones para el comprador' ,
                        'value' : dataForm ? dataForm.description : 'Gracias por tu compra, nos pondremos en contacto por email para arreglar los detalles del pago.',
                    },
                    'discount': {
                        'label' : 'Descuento a ofrecer a los clientes' ,
                        'value' : dataForm ?  dataForm.discount : '0',
                    },
                }
            }
            if(form == 'Mercado pago'){
                var data = {
                    'client_id': {
                        'label' : 'Client Id' ,
                        'value' : dataForm ? dataForm.client_id : '' ,
                    },
                    'client_secret': {
                        'label' : 'Client Secret' ,
                        'value' : dataForm ? dataForm.client_secret : '',
                    },
                    'country': {
                        'label' : 'Country' ,
                        'value' : dataForm ?  dataForm.options : 'Brasil',
                    },
                }
            }
            addFormFields(data , form);
        }

        function addFormFields(data , form){
            if (data != null) {
                var formulario = $('#'+form);
                var count = 0;
                $.each(data, function (name, value) {
                    if (value != null) {
                        var form_group = $('<div></div>').addClass('form-group');
                        var label = $('<label></label>').text(value.label);
                        var  a = $('<a href=""><i class="fa fa-exclamation-circle"></i></a>');
                        if(value.label == 'Country'){
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
            }
        }
    }]);
}());