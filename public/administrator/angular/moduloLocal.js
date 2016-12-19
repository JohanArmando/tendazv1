'use strict';
(function(){
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-full-width",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "slideDown",
        "hideMethod": "slideUp"
    };
    var app = angular.module('appLocal', []);
    app.factory('servicioLocal',function($http){
        return {
            data : function (id , data) {
                return $http.put(BASEURL + '/admin/shipping/'+ id ,  data );
            },
            show : function (id) {
                return $http.get(BASEURL + '/admin/shipping/'+ id );
            },
        }
    });
    app.controller('controladorLocal',['$scope','servicioLocal', function ($scope , servicioLocal) {
        $scope.modificar = function (id) {
            servicioLocal.show(id)
                .success(function (response) {
                    $scope.id = id;
                    $('#nuevo_local').modal('show');
                    $('#modificar').show();
                    $('#agregar').hide()
                    $scope.local = response;
                });
        }
        $scope.update = function () {
            servicioLocal.data($scope.id , $scope.local)
                .success(function (response) {
                    toastr["warning"]("<center><h4>Local modificado correctamente</h4></center>");
                    setTimeout(function () {
                        window.location.reload();
                    },3000);
                });
        }
    }]);
}());