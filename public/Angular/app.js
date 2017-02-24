    'use strict';
(function(){

    var myApp = angular.module('app',[
        'account',
        'ngSanitize',
        'app.Controller',
        'app.categoryTemplateController',
        'app.cartGlobalController',
        'app.productIndexController',
        'app.productController',
        'app.customerStoreController',
        'app.detailProductController',
        'app.directive',
        'app.service',
        'app.productService',
        'app.categoryService',
        'ui.bootstrap',
        'app.cartService',
        'app.customerService',
        'angularUtils.directives.dirPagination',
        'rzModule',
        'ngRoute' , 
        'ngCookies',
        'slick'], function($interpolateProvider){
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });

    myApp.run(function($rootScope ,  $http,cartService  ,$cookies) {
       $rootScope.cartId = localStorage.getItem('cart_id');
        $rootScope.cate = category;
        $rootScope.size = function(obj) {
            var size = 0, key;
            for (key in obj) {
                if (obj.hasOwnProperty(key)) size++;
            }
            return size;
        };
        $rootScope.add = function (cartId , item) {
            var localCart = localStorage.getItem('cart_id');
            if(!localCart){
                var cartStorage = {
                    method: 'POST',
                    url: BASEURL + '/carts?client_secret=' + client_secret + '&client_id=' + client_id,
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                }
                $http(cartStorage).then(function(response) {
                    localStorage.setItem('cart_id',response.data[0].shopping_cart.secure_key);
                    cartId = localStorage.getItem('cart_id');
                    $rootScope.addingToCart(cartId , item);
                }, function(error) {
                    console.log(error);
                });
            }else{  
                cartId = localStorage.getItem('cart_id');
                $rootScope.addingToCart(cartId , item);            
            }   
        };

        $rootScope.addingToCart = function(cartId , item){
             var data = {
                 'item_id'  : item._id,
                 'quantity' : item.quantity ? item.quantity : 1,
                 'customer_id' : angular.fromJson($cookies.get('auth')) ? angular.fromJson($cookies.get('auth'))._id : null
            };
            cartService.updateItemQuantity(cartId , data)
                .then(function (response) {
                    $rootScope.carts = response.data.data;
                    toastr["info"]("Item agregado al carrito");
                }).catch(function (response) {
                    toastr["warning"]("No hay suficiente cantidad del producto");
                    item.quantity = 1 ;
                });
        }
    });
})();