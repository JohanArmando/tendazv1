'use strict';
(function(){
    var app = angular.module('appVentas', ['angularUtils.directives.dirPagination' , 'xeditable']);
    var config = {
        headers :  {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        }
    };
    app.run(function(editableOptions) {
        editableOptions.theme = 'bs3'; // bootstrap3 theme. Can be also 'bs2', 'default'
    });
    app.factory('servicioVentas',function($http){
        return {
            get: function(){
                return $http.get( BASEURL + '/admin/orders' + '?client_secret='  + client_secret + '&client_id=' + client_id, config);
            },
            update : function (id , data) {
                return $http.put(BASEURL + '/admin/orders/'+ id , data);
            },
            show : function(id){
                return $http.get(BASEURL + '/admin/orders/'+ id );
        }
        }
    });
    app.filter('myDateFormat', function myDateFormat(){
        moment.locale('es');
        return function(dateString, format) {
            return moment(dateString).format(format);
        };
    });
    app.controller('controladorVentas',['$scope','servicioVentas', '$filter' , '$http' ,function ($scope , servicioVentas , $filter , $http) {
        $scope.change = function (order , e) {
          $(e.target).text('Marcando ....').css('width' , '100%').attr('disabled' , true);
          servicioVentas.update(order.id , order)
              .success(function (response) {
                  console.log(response);
                  //console.log(response);
                  //var res= change_response(response);
                  //$scope.ordenes = res.data;
              });
        };
        $scope.pageSize = '10';
        servicioVentas.get()
            .success(function(response){
                $scope.orders = response.orders;
                $scope.statuses = [];

                $scope.loadGroups = function() {
                    return $scope.statuses.length
                        ? null : 
                        $http.get('/admin/orders/status?client_secret=' + client_secret + '&client_id=' + client_id , config)
                            .success(function(data) {
                                $scope.statuses = data[0];
                        });
                };
                $scope.showStatus = function(order) {
                    var selected = [];
                    if ($scope.statuses.length == 0){
                        $scope.loadGroups()
                    };
                    if(order.status.id) {
                        selected = $filter('filter')($scope.statuses, { id : order.status.id});
                    }
                    return selected.length ? selected[0].name : 'Not set';
                };
                $scope.update = function(orderId, data) {
                    var data = {
                      'status_id' : data
                    };
                    return $http.put('/admin/orders/' + orderId + '?client_secret=' + client_secret + '&client_id=' + client_id,  data , config);
                };
            });

    }]);
}());