'use strict';
(function(){

    var app = angular.module('appManual', ['angularUtils.directives.dirPagination']);

    app.factory('serviceShippingMethod',function($http){
        var config = {headers :  {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        }
        };
        return {
            get: function () {
                return $http.get(BASEURL + '/admin/setting/shippings'+ '?client_secret='  + client_secret + '&client_id=' + client_id, config);
            },
            delete : function (shippingId) {
                return $http.delete(BASEURL + '/admin/setting/shippings/'+ shippingId +'?client_secret='  + client_secret + '&client_id=' + client_id, config);
            },
            create : function (data) {
                return $http.post(BASEURL + '/admin/setting/shippings' + '?client_secret='  + client_secret + '&client_id=' + client_id, data , config);
            },
            update : function (data , shippingId) {
                return $http.put(BASEURL + '/admin/setting/shippings/' + shippingId + '?client_secret='  + client_secret + '&client_id=' + client_id, data , config);
            },
            getLocals : function () {
                return $http.get(BASEURL + '/admin/setting/locals'+ '?client_secret='  + client_secret + '&client_id=' + client_id, config);
            },
            createLocal : function (data) {
                return $http.post(BASEURL + '/admin/setting/locals' + '?client_secret='  + client_secret + '&client_id=' + client_id, data , config);
            },
            deleteLocal : function (localId) {
                return $http.delete(BASEURL + '/admin/setting/locals/'+ localId +'?client_secret='  + client_secret + '&client_id=' + client_id, config);
            },
            updateLocal : function (data , localId) {
                return $http.put(BASEURL + '/admin/setting/locals/' + localId + '?client_secret='  + client_secret + '&client_id=' + client_id, data , config);
            }
        }
    });

    app.controller('shippingController',['$scope','serviceShippingMethod', function ($scope , serviceShippingMethod) {
        $scope.shipping = {};
        $scope.local = {};
        $scope.showEdit = false;
        $scope.showEditLocal = false;
        serviceShippingMethod.get()
            .then(function (response) {
                console.log(response);
               $scope.shippingMethods = response.data.data;
            });

        serviceShippingMethod.getLocals()
            .then(function (response) {
                console.log(response);
               $scope.locals = response.data.data;
            });

        $scope.delete = function (method) {
            serviceShippingMethod.delete(method._id)
                .then(function (response) {
                    console.log(response);
                    var index = $scope.shippingMethods.indexOf(method);
                    $scope.shippingMethods.splice(index,1);
                    toastr["info"]("Enhorabuena! Metodo eliminado");
                });
        };

        $scope.deleteLocal = function (local) {
            serviceShippingMethod.deleteLocal(local._id)
                .then(function (response) {
                    var index = $scope.locals.indexOf(local);
                    $scope.locals.splice(index,1);
                    toastr["info"]("Enhorabuena! Local eliminado");
                });
        };

        $scope.create = function () {
            var data = $scope.getData();
            serviceShippingMethod.create(data)
                .then(function (response) {
                    $('#shppingMethod').modal('toggle');
                    $scope.shippingMethods.push(response.data.data);
                    toastr["info"]("Enhorabuena! Metodo Creado");
                });
        };

        $scope.createLocal = function () {
            serviceShippingMethod.createLocal($scope.local)
                .then(function (response) {
                    $('#nuevo_local').modal('toggle');
                    $scope.locals.push(response.data.data);
                    toastr["info"]("Enhorabuena! Local Creado");
                });
        };

        $scope.edit = function (method) {
            $scope.showEdit = true;
            var index = $scope.shippingMethods.indexOf(method);
            $scope.shipping = $scope.shippingMethods[index];
        };

        $scope.editLocal = function (local) {
            $scope.showEditLocal = true;
            var index = $scope.locals.indexOf(local);
            $scope.local = $scope.locals[index];
        };
        
        $scope.updateLocal = function (local) {
            serviceShippingMethod.updateLocal($scope.local ,  $scope.local._id)
                .then(function (response) {
                    $('#nuevo_local').modal('toggle');
                    var index = $scope.locals.indexOf($scope.local);
                    $scope.locals[index] = response.data.data;
                    toastr["info"]("Enhorabuena! Local Editado");
                });
        };
          
        $scope.update = function (method) {
            var data = $scope.getData();
            serviceShippingMethod.update(data ,  $scope.shipping._id)
                .then(function (response) {
                    $('#shppingMethod').modal('toggle');
                    var index = $scope.shippingMethods.indexOf($scope.shipping);
                    $scope.shippingMethods[index] = response.data.data;
                    toastr["info"]("Enhorabuena! Metodo Editado");
                });
        };
        
        $scope.getData = function () {
            var data = {
                'name' : $scope.shipping.name,
                'cost' : $scope.shipping.cost ? $scope.shipping.cost : 0,
                'max_price' : $scope.shipping.max_price ? $scope.shipping.max_price :-1,
                'min_price' : $scope.shipping.min_price ? $scope.shipping.min_price : -1,
                'max_weight' : $scope.shipping.max_weight ? $scope.shipping.max_weight : -1,
                'min_weight' : $scope.shipping.min_weight ? $scope.shipping.min_weight : -1,
            };
            return data;
        }

    }]);

}());