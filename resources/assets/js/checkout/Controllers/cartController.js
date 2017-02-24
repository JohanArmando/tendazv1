myApp.controller("cartController" , [ "$scope" , 'Cart' , "User" , "$location" , "$rootScope" , function ($scope ,Cart , User , $location , $rootScope) {
    angular.extend($scope , {
        cartId :   Cart.getCartId()
    });

    angular.extend($scope , {
        remove : function (item) {
            Cart.deleteItem($scope.cartId , item);
        },
        update : function (item ) {
            Cart.updateItem($scope.cartId , item );   
        },
        next : function () {
            var client = $rootScope.carts.order.data.client;
            if (client.first_name && client.last_name && client.phone && client.identification)
            {
                $location.path('/shipping');
            }else{
                $location.path('/profile');
            }
        }
    });
}]);