'use strict';
(function(){
    var app = angular.module('MyApp', ['confirm-click','ui.tree']);
    app.factory('servicioCategoria',['$http', function ($http) {

    }]);
    app.factory('servicioCategoria',function($http){
        var config = {headers :  {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
            }
        };
        return {
            get: function(){
                return $http.get( BASEURL + '/admin/categories?client_secret=' + client_secret + '&client_id=' + client_id, config);
            },
            guardar : function (data) {
                return $http.post( BASEURL + '/admin/categories?client_secret=' + client_secret + '&client_id=' + client_id, data , config);
            },
            delete : function(id){
                return $http.delete(BASEURL + '/admin/categories/'  + id +  '?client_secret=' + client_secret + '&client_id=' + client_id , config)
            }
        }
    });
        app.directive('ngConfirmClick', [
            function(){
                return {
                    link: function (scope, element, attr) {
                        var msg = attr.ngConfirmClick || "Are you sure?";
                        var clickAction = attr.confirmedClick;
                        element.bind('click',function (event) {
                            if ( window.confirm(msg) ) {
                                scope.$eval(clickAction)
                            }
                        });
                    }
                };
            }])
    app.controller('Categorias',['$scope','servicioCategoria', function ($scope , servicioCategoria) {

            $scope.tree2 = [];
            $scope.actualizar = function (scope) {
              $scope.category = scope.$modelValue;
            };
            $scope.update = function (scope) {
                $scope.node = $scope.category;
                $scope.mostrar = 1;
                $('#editModalCategory').modal('toggle');
            };
            servicioCategoria.get()
                .success(function (response) {
                    if(response[0].length <= 0 ){
                        $scope.mensaje = {'title' : 'No tienes ninguna categoria creada' , 'show' : 0};
                    }else{
                        $scope.tree2 =  response[0];
                        $scope.mensaje = {'title' : '' , 'show' : 1};
                    }

            });
            $scope.actual = function () {
                if($scope.tree2.length == 0){
                    $scope.mensaje = {'title' : 'No tienes ninguna categoria creada' , 'show' : 0};
                    $scope.mostrar = 0;
                }
            };
            $scope.remove = function () {
                servicioCategoria.delete($scope.category.uuid)
                    .success(function(response){
                        $scope.mostrar = 1;
                        toastr["warning"]("<center><h4>Categoria : " + $scope.category.name +" eliminada correctamente</h4></center>");
                        if(response.length <= 0 ){
                            $scope.mensaje = {'title' : 'No tienes ninguna categoria creada' , 'show' : 0};
                        }else{
                            $scope.tree2 =  response;
                            $scope.mensaje = {'title' : '' , 'show' : 1};
                        }
                        $scope.mostrar = 0;
                    });
            };
            $scope.nueva = function(){
                $scope.tree2.push({ 'name' : '' , 'children':[]});
                $scope.mensaje = {'title' : '' , 'show' : 1};
            };
            $scope.toggle = function (scope) {
                scope.toggle();
            };
            $scope.guardar = function(){
                $scope.msj = { 'title' : 'Guardando los cambios' , 'disabled' : 1};
                servicioCategoria.guardar(angular.toJson($scope.tree2))
                    .success(function (response) {
                        console.log(response);
                        $scope.tree2 = response;
                        toastr["success"]("Datos agregados correctamente");
                        $scope.mostrar = 0;
                        $scope.msj = { 'title' : 'Guardar datos' , 'disabled' : 0};
                    });
            };
            $scope.cambiar = function () {
              $scope.mostrar = 1;
            };
            $scope.newSubItem = function (scope) {
                $scope.mostrar = 1;
                var nodeData = scope.$modelValue;
                nodeData.children.push({
                    name: nodeData.name + '.' + (nodeData.children.length + 1),
                    children: []
                });
            };
        $scope.stop = 'stop';
        }]);
}());