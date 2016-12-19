'use strict';
(function(){
    var app = angular.module('Customer', ['angularUtils.directives.dirPagination']);
    app.factory('servicioCustomer',function($http){
        return {
            get: function(){
                return $http.get( BASEURL + '/admin/customers/all');
            },
            getInfoBackup : function(){
                var customers =  localStorage.getItem('customers');
                if(!customers){
                    customers = [];
                }else{
                    customers = JSON.parse(customers);
                }
                return customers;
            },
            setInfoBackup : function(info){
                var customers = []
                customers = info;
                localStorage.setItem('customers' , JSON.stringify(customers));
            }
        }
    });
    app.filter('from', function() {
        return function(date) {
            return moment(date).format('l');
        }
    });

    app.controller('controladorClientes',['$scope','servicioCustomer', function ($scope , servicioCustomer) {
        $scope.pageSize = 10;
        $('.spin').removeClass('hidden');
        servicioCustomer.get()
            .success(function(response){
                servicioCustomer.setInfoBackup(response);
                $scope.customers = response.data;
                $('.spin').addClass('hidden');
            }).error(function (response) {
                response =  servicioCustomer.getInfoBackup();
                $scope.customers = response.data;
                $('.spin').addClass('hidden');
            });
    }]);
}());