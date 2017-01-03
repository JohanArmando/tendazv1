'use strict';
(function(){
    var app = angular.module('Product', ['angularUtils.directives.dirPagination','ngSanitize','angular-confirm', 'ui.bootstrap',  'focus-if']);
    app.factory('serviceProduct',function($http){
        var config = {headers :  {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
            }
        };
        return {
            get: function(){
                return $http.get( BASEURL + '/admin/products?include=variants&client_secret='  + client_secret + '&client_id=' + client_id, config);
            },
            delete : function(id){
                return $http.delete( BASEURL + '/admin/products/' + id + '?client_secret='  + client_secret + '&client_id=' + client_id, config);
            },
            update: function(id , data){
                return $http.put( BASEURL + '/admin/products/'+id + '?client_secret='  + client_secret + '&client_id=' + client_id, data ,  config);
            },   
            updateVariant: function(id , data){
                return $http.put( BASEURL + '/admin/products/'+id+'/variant ' + '?client_secret='  + client_secret + '&client_id=' + client_id, data ,  config);
            },
            getInfoBackup : function(){
                var products =  localStorage.getItem('products');
                if(!products){
                    products = [];
                }else{
                    products = JSON.parse(products);
                }
                return products;
            },
            setInfoBackup : function(info){
                var products = []
                products = info;
                localStorage.setItem('products' , JSON.stringify(products));
            },
        }
    });
    app.filter('html',function($sce){
        return function(input){
            return input < 0 ? $sce.trustAsHtml('&infin;') : $sce.trustAsHtml(String(input));
        }
    });
    app.filter('stockFilter' , function () {
        return function(items, search , product) {
            product.show = true;
            if (!search) {
                return items;
            }

            var stock =  parseInt(search);
            if (!Number.isInteger(stock)) {
                return items;
            }
            var showProduct = product.variants.filter(function(element, index, array) {
                if(element.stock < 0){
                    return false;
                }else{
                    return element.stock <= stock;
                }
            });
            product.show = (showProduct.length > 0) ? true : false;
            return items.filter(function(element, index, array) {
                if(element.stock < 0){
                    return false;
                }else{
                    return element.stock <= stock;
                }
            });
        };
    });
    app.filter('variant',function(){
        return function(input , option) {
            var bool = option ? true : false;
            return   bool ? input + ' /' : input + '';
        }
    });
    app.directive('myEnter', function () {
        return function (scope, element, attrs) {
            element.bind("keydown keypress", function (event) {
                if(event.which === 13) {
                    scope.$apply(function (){

                        scope.$eval(attrs.myEnter);
                    });
                    event.preventDefault();
                }
            });
        };
    });
    app.controller('controllerProducts',['$scope','serviceProduct', function ($scope , serviceProduct) {
        $scope.store = store;
        $scope.preload = true;
        $scope.urlBase = BASEURL;
        $scope.shareFacebook = function(product){
            var share_url = angular.element(document).find('#share_facebook' + product.id).data('share-url');
            var url = "http://facebook.com/sharer/sharer.php?app_id=107147892676939&sdk=joey&u=" + share_url;
            window.open(url,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
        }
        $scope.shareTwitter = function(product){
            var tweet= angular.element(document).find('#share_twitter' + product.id).data('description');
            var url =  "https://twitter.com/intent/tweet?url=" + angular.element(document).find('#share_twitter' + product.id).data('share-url') +"&text=" + tweet;
            window.open(url,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
        }
        $scope.shareGoogle = function(product){
            var url = "https://plus.google.com/share?url=" + angular.element(document).find('#share_google' + product.id).data('share-url');
            window.open(url,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=200,width=600')
        }
        $scope.update = function (variant , attr) {
            var input = angular.element(document).find('#variant_'+ attr +variant.id);
            if(input.val() != parseInt(variant[attr]) && input.val() ){
                if(attr == 'price_promotion'){
                    variant['promotion_price'] = input.val().replace('.','').replace(',','.');
                }else{
                    variant[attr] = input.val().replace('.','').replace(',','.');
                }
                toastr['success']("Precio modificado correctamente");
                if(attr == 'stock'){
                    toastr['success']("Stock modificado correctamente");
                }else{
                    input.parent().parent().find('span').html('<i style="color: white" class="fa fa-circle-o-notch fa-spin  fa-fw"></i>');
                }
                serviceProduct.updateVariant(variant.id ,  variant)
                    .success(function (response) {
                    });
            }
        }
        $scope.pageSize = 10;
        $scope.delete = function(id , $index) {
            $scope.preload = true;
            serviceProduct.delete(id)
                .success(function(response){
                    $scope.preload = false;
                    toastr["success"]("Producto " + $scope.products[$index].name + " eliminado de forma correcta!")
                    $scope.products.splice($index , 1 );
                })
        };

        //Variablers para el selct de stock
        $scope.stocks = [
            {
                'text'  : 'Sin Stock',
                'value' : '0',
                'selected' : true
            },
            {
                'text'  : '1 Unidad o menos',
                'value' : '1'
            },
            {
                'text'  : '2 Unidades o menos',
                'value' : '2'
            },
            {
                'text'  : '3 Unidades o menos',
                'value' : '3'
            },
            {
                'text'  : '4 Unidades o menos',
                'value' : '4'
            },
            {
                'text'  : '5 Unidades o menos',
                'value' : '5'
            },
            {
                'text'  : '10 Unidades o menos',
                'value' : '10'
            },
            {
                'text'  : '15 Unidades o menos',
                'value' : '15'
            },
            {
                'text'  : '20 Unidades o menos',
                'value' : '20'
            }
        ];
        $scope.showInput = function (product , attr) {
            product.span = {
            };
            var input = angular.element(document).find('#variant_'+ attr +product.id).val();
            angular.forEach($scope.products, function(value, key) {
                angular.forEach(value.variants, function(v, k) {
                    v.span = {};
                });
            });
            product.span[attr]= true;
        };
        $scope.selecteds = function () {
            var cuenta = 0;
            angular.forEach($scope.products , function (product) {
                cuenta += product.select ? 1 : 0;
            });
            return cuenta;
        };
        $scope.allSelects = function () {
                $scope.all =  $scope.confirmed ? true : false;
                angular.forEach($scope.products , function (product) {
                    product.select = $scope.confirmed ? 1 : 0;
                });
        };
        $scope.updateSelect = function (accion) {
            var data = [];
            angular.forEach($scope.products , function (product) {
                if($scope.accion == 'publish'){
                    product.publish = true;
                }
                if($scope.accion == 'draft'){
                    product.publish  = false;
                }
                product.select ? data.push(product) : '';
            });
            if($scope.accion == 'destroy'){
                angular.forEach(data , function (value , index) {
                    serviceProduct.delete(value.product_id)
                        .success(function(response){
                            $scope.preload = false;
                            toastr["success"]("Producto " + $scope.products[$index].name + " eliminado de forma correcta!")
                            $scope.products.splice($index , 1 );
                        })
                    var pos = $scope.products.indexOf(index);
                    $scope.products.splice(index);
                });
                toastr['success']("Productos eliminados correctamente");
            }else{
                angular.forEach(data , function (value , index) {
                   serviceProduct.update(value.id , value)
                       .success(function (response) {
                          value.select = 0;
                       });
                });
                $scope.confirmed = 0;
                $scope.all = 0;
                toastr['success']("Productos Editados correctamente");
            }
        };
        serviceProduct.get()
            .success(function(response){
                console.log(response);
                var categories = [];
                angular.forEach(response.data, function(value, key) {
                    angular.forEach(value.categories, function(v, k) {
                        categories.push(v);
                    });
                });
                if(categories){
                    $scope.categories = categories;
                }
                serviceProduct.setInfoBackup(response.data);
                $scope.preload = false;
                $scope.products = response.products;
            }).error(function (response) {
                var categories = [];
                $scope.preload = false;
                $scope.products = serviceProduct.getInfoBackup();
                angular.forEach( $scope.products, function(value, key) {
                    angular.forEach(value.categories, function(v, k) {
                        categories.push(v);
                    });
                });

                if(categories){
                    $scope.categories = categories;
                }
            });

    }]);
}());