'use strict';
(function () {
    angular.module('app.cartGlobalController',[])
        .controller('cartGlobalController' , ["$scope" , "cartService" , "$timeout" , "$rootScope", function ($scope , cartService , $timeout , $rootScope) {
            toastr.options = {
                "closeButton": true,
            }
            $scope.store = store;
            $scope.BASEURL = BASEURL;
            $scope.showCart = {'loading' : false};
            cartService.getAllProductsForCart($rootScope.cartId)
                .then(function (response) {
                    $scope.carts = response.data.data;
                    angular.forEach($scope.carts.products.data , function (v , i) {
                        angular.forEach(v.values.data , function (value, index) {
                            
                        })
                    })
                });
            $scope.updateQuantityCart = function (cartId , item) {
                $scope.toggleLoading(true);
                var data = {
                    'item_id'   : item._id,
                    'quantity'  : item.quantity  
                };
                cartService.updateItemQuantity(cartId , data)
                    .then(function (response) {
                        $scope.carts = response.data.data;
                    })
                    .catch(function (response) {
                        $scope.carts = response.data.data;
                        toastr["warning"]("No hay suficiente stock para el producto " + item.name);
                    });
                $timeout(function () {
                    $scope.toggleLoading(false);
                } , 1000);
            };
            $scope.emptyCart = function (cartId) {
                cartService.emptyCart(cartId)
                    .then(function () {
                        $scope.carts = {};
                        toastr["info"]("El carrito ahora esta vacio");
                    });
            };

            $scope.destroy = function (cartId ,item ){
                $scope.toggleLoading(true);
                cartService.deleteItem(cartId , item._id)
                    .then(function (response) {
                        var index= $scope.carts.products.data.indexOf(item);
                        $scope.carts.products.data.splice(index,1);
                        $scope.quantity =  response.quantity;
                        $timeout(function () {
                            $scope.toggleLoading(false);
                        } , 1000)
                    });
            };
            $scope.toggleLoading = function (show) {
                $scope.showCart.loading = show;
            }
        }])
        .filter('capitalize', function() {
        return function(input) {
            return (!!input) ? input.charAt(0).toUpperCase() + input.substr(1).toLowerCase() : '';
        }
    });
})();
