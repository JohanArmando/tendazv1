myApp.factory("Cart" , [ "$http" , "$rootScope", function ($http , $rootScope) {
    var cart = [];
    cart.getCartId = function () {
       return localStorage.getItem('cart_id');
    };

    cart.setCartId = function (cartId) {
        localStorage.setItem('cart_id' , cartId);
    };

    cart.getItems = function (cartId) {
        if (!cartId){
            return [];
        }
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/carts/' + cartId + '/items?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET",
        }).then(function(response) {
            console.log(response.data.data);
           $rootScope.carts = response.data.data;
           $rootScope.shopData = $rootScope.carts.shop.data;
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    };

    cart.deleteItem = function (cartId , item) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/carts/'+ cartId +'/items/'+ item._id + '?client_secret=' + client_secret + '&client_id=' +client_id,
            method: "DELETE",
        }).then(function(response) {
            $rootScope.carts = response.data.data;
        }).catch(function(response) {
            var index= $rootScope.carts.products.data.indexOf(item);
            $rootScope.carts.products.data.splice(index,1);
        }).finally(function() {});
    };

    cart.updateItem = function (cartId , item) {
        var data = {
            'item_id'   : item._id,
            'quantity'  : item.quantity
        };
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/carts/' + cartId + '/items?client_secret=' + client_secret + '&client_id=' +client_id,
            method: "POST",
            data : data,
        }).then(function(response) {
            $rootScope.carts = response.data.data;
            console.log(response);
        }).catch(function(response) {
            $rootScope.carts = response.data.data;
            $('.updateItem').animate({
                height: 'toggle'
            }).removeClass('hidden').find('.alert').text('Lo siento no hay suficiente stock para '+ item.name);
            setTimeout(function () {
                $('.updateItem').animate({ height: 'toggle'} , 1000);
            } , 7000)
        }).finally(function() {});
    };
    return cart;
}]);