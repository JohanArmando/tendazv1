'use strict';
(function() {
    var app = angular.module('MyAppMercadoLibre', []);
    app.controller('MercadoLController', ['$scope', '$http', function($scope, $http) {
        $scope.pageSize = 10;
        $scope.showProducts = false;
        $scope.prueba = "Hola";
        $scope.nonEdition = true;
        $scope.edition = false;
        $scope.active = false;
        $scope.exportShow =false;
       $scope.mostrarExportar = function(){
         $scope.exportShow =true;
       }
        $scope.traer_productos = function() {
            // Simple GET request example:
            $http.get('https://api.mercadolibre.com/sites/MCO/categories')
                .success(function(data, status, headers, config) {
                    $scope.categories = data;
                    console.log(data)
                })
                .error(function(data, status, headers, config) {
                    // log error
                    console.log(data)
                });
            $http.get(BASEURL + '/admin/mercadolibre/products')
                .success(function(data, status, headers, config) {
                    $scope.productos = data.data;
                    console.log('productos de api -->')
                    console.log($scope.productos);
              
                })
                .error(function(data, status, headers, config) {
                    // log error
                    console.log(data)
                });
        }
       
         
        $scope.prueba = function(key){

}
        $scope.seleccionado = function(producto) {
          producto.visible = true;
        }
        $scope.visibleSelecctionado=false;
        $scope.enviarSeleccion = function(producto){
                $scope.visibleSelecctionado = true;
                console.log(producto);
               
        }
        $scope.cancelarSeleccion = function(producto){
                 producto.visible = false;
                 $scope.visibleSelecctionado = false;
        }
        $scope.traer_productos();
        $scope.editar = function() {
            $scope.nonEdition = false;
            $scope.edition = true;
        }
        $scope.cancelarEdicion = function(producto) {
            $scope.producto.stock = producto.stock;
            $scope.nonEdition = true;
            $scope.edition = false;

            console.localStorage(producto.stock);
            // $scope.traer_productos();
        }
        $scope.aceptarEdicion = function() {
            $scope.nonEdition = true;
            $scope.edition = false;
        }
        $scope.data = {};
        $scope.printdata = function() {
            console.log($scope.data);
        }

        $scope.printdata();
        $scope.exportar = function() {
            console.log('exportara');
            $scope.showProducts = true;
        }
       $scope.productosAgregados = [];
    
         $scope.agregarALista = function(producto){
             console.log(producto);
              $scope.productosAgregados.push({
                title:producto.name,
                price:10000,
                description:producto.description,
                listing_type_id:"gold_premium",
                condition:"new",
                pictures:[
                {
                    source:producto.image
                }
                ],
                category_id:"MCO1459",
                currency_id:"COP",
                available_quantity:producto.stock
              });
            console.log('Agrego!');
            console.log($scope.productosAgregados);
        }
        $scope.cancelSend = function() {
            $scope.productosAgregados = [];
            console.log($scope.productosAgregados);
        }
        $scope.sendToBack = function() {
            var datos = $scope.productosAgregados;
            $http.post(BASEURL + '/admin/mercadolibre/products', {

            })

            .then(function(response) {
                console.log(response);
            })

            .catch(function(error) {
                console.error('Error', error.data[0]);
                // An alert dialog
                $scope.errorLog();

            });
        }
        $scope.SelectCategories = [];
        $scope.editPrincipal = false;
        $scope.principal = false;
        $scope.selectCat = function(option,producto) {
           $scope.pinner_loading = true;
           console.log(producto);
           $scope.llave = producto;
           console.log($scope.llave);

            // Simple GET request example:
            $http.get('https://api.mercadolibre.com/categories/' + option.id)
                .success(function(data, status, headers, config) {
                    $scope.catSelected = data;

                    console.log("Break Point");
                    $scope.llave.promotion_price = data;
                    console.log($scope.llave);

                    $scope.SelectCategories.push($scope.catSelected);
                    $scope.editPrincipal = true;
                     $scope.pinner_loading = false;
                    $scope.principal = true;
                    for (var i = 0; i < $scope.SelectCategories.length; i++) {
                        $scope.sel = $scope.SelectCategories[i];
                        for (var i = 0; i < $scope.sel.children_categories.length; i++) {
                            $scope.ide = $scope.sel.children_categories[i].id;
                            console.log($scope.sel.children_categories[i].id);
                        }

                    }
                    console.log($scope.SelectCategories);
                })
                .error(function(data, status, headers, config) {
                    // log error
                    console.log(data);
                });


        }



        $scope.disableSub = false;
        $scope.pinner_loading = false;
        $scope.selectCatSucat = function(option, key) {
 $scope.pinner_loading = true;
            if (key + 2 <= $scope.SelectCategories.length) {
                for (var i = 0; i < $scope.SelectCategories.length; i++) {
                    $scope.SelectCategories.splice(key + 1, $scope.SelectCategories.length);
                    $scope.disableSub = key;
                }
                $scope.checkedItem = "SinCheckear";
                $scope.agregarASubcat(option, key);
            } else {
                $scope.agregarASubcat(option, key);
            }
        }
        $scope.agregarASubcat = function(option, key) {

            $http.get('https://api.mercadolibre.com/categories/' + option.id)
                .success(function(data, status, headers, config) {
                    $scope.catSelectedu = data;
                    if ($scope.catSelectedu.children_categories !== 'undefined' && $scope.catSelectedu.children_categories.length > 0) {
                        $scope.SelectCategories.push($scope.catSelectedu);
                        $scope.disableSub = option;
                        $scope.pinner_loading = false;
                        $scope.checkedItem = "SinCheckear";
                        for (var i = 0; i < $scope.SelectCategories.length; i++) {
                            $scope.sel = $scope.SelectCategories[i];
                            // console.log($scope.sel);
                            for (var i = 0; i < $scope.sel.children_categories.length; i++) {
                                $scope.ide = $scope.sel.children_categories[i].id;
                                // console.log($scope.sel.children_categories[i].id);
                            }

                        }
                    } else {
                       // $scope.SelectCategories.push($scope.catSelectedu);
                        $scope.checkedItem = "checkeado";
                        $scope.pinner_loading = false;
                        alert('El ultimo item es: ' + option.name);
                      

                    }

                    console.log($scope.SelectCategories);
                })
                .error(function(data, status, headers, config) {
                    // log error
                    console.log(data);
                });
        }
        $scope.editCat = function(key) {
            console.log($scope.SelectCategories.length);
            for (var i = 0; i < $scope.SelectCategories.length; i++) {
                $scope.SelectCategories.splice(key + 1, $scope.SelectCategories.length);
                $scope.disableSub = key;
            }


        }

        $scope.clearCat = function() {
            $scope.SelectCategories = [];
            $scope.editPrincipal = false;
            $scope.principal = false;
        }
       

    }]);
}());