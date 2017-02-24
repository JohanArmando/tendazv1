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
    var app = angular.module('appWord', []);
    app.factory('servicioWord',function($http){
        return {
            data : function (id , data) {
                return $http.put(BASEURL + '/admin/shipping/word/'+ id ,  data );
            },
            show : function (id) {
                return $http.get(BASEURL + '/admin/shipping/word/'+ id );
            },
        }
    });
    app.controller('controladorMundo',['$scope','servicioWord', function ($scope , servicioWord) {
        $scope.modificar = function (id) {
            servicioWord.show(id)
                .success(function (response) {
                    console.log(response);
                    $scope.id = id;
                    $('#envios_resto_del_mundo').modal('show');
                    $('#modificar-word').show();
                    $('#agregar-word').hide()
                    $scope.send = response;
                });
        }
        $scope.update = function () {
            servicioWord.data($scope.id , $scope.send)
                .success(function (response) {
                    toastr["warning"]("<center><h4>Envio modificado correctamente</h4></center>");
                    setTimeout(function () {
                        window.location.reload();
                    },3000);
                });
        }
    }]);
}());