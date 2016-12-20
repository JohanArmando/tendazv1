myApp.factory("Shipping" , ["$http" , "User", "$rootScope" , "Cart", function ($http , User , $rootScope , Cart) {
   var address = {};

    address.getAddresses = function () {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/carts/'+ Cart.getCartId() +'/customers/' + User.getUserId() + '/addresses?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET",
        }).then(function(response) {
            $rootScope.addresses = response.data.data;
        }).catch(function(response) {
            $rootScope.states = response.data;
        }).finally(function() {});
    };

    address.getStates = function () {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/states?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET",
        }).then(function(response) {
            $rootScope.states = response.data.states;
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    };
    address.getCities = function (id) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/cities/'+ id +'?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET",
        }).then(function(response) {
            $rootScope.cities = response.data.cities;
            $rootScope.defaultCity = response.data.cities[0];
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    };

    address.create = function (data) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/carts/' + Cart.getCartId() +'/customers/' + User.getUserId()  + '/addresses?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "POST",
            data : data
        }).then(function(response) {
            $rootScope.addresses = response.data.data;
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});  
    };
     address.getShippingMethod = function () {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/carts/' + Cart.getCartId() +'/shipping?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET"
        }).then(function(response) {
            $rootScope.shipping_methods = response.data.data;
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    };

    address.doShippingMethod = function (data) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url:  baseUrl + '/orders/' + $rootScope.carts.order_id  + '?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "PUT",
            data : data
        }).then(function(response) {
            $rootScope.carts = response.data.data;
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    };  
    
    address.assignShipping = function (data) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url:  baseUrl + '/orders/' + $rootScope.carts.order_id  + '?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "PUT",
            data : data
        }).then(function(response) {
            console.log(response);
            $rootScope.carts = response.data.data;
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    };

    return address;
}]);