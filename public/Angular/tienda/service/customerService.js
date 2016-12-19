'use strict';
(function () {
    angular.module('app.customerService',[ ])
        .factory('User',function($http , $location , $cookies , $rootScope ){
            // return {
            //         newsletter: function(email){
            //             return $http.post(BASEURL + '/store/newsletter' , email);
            //     },
            // }
             var userModel = {};
    userModel.doLogin = function (data) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: BASEURL + '/auth/login/?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "POST",
            data: {
                email: data.email,
                password: data.password
            }
        }).then(function(response) {
        	console.log("Ingreso a la tienda");
            $location.path('/cart');
            $cookies.put('auth' , JSON.stringify(response.data));
            localStorage.setItem('cart_id',response.data.cart_id);
            // $('#sign-up').modal('toggle');
            location.reload();
        }).catch(function(response) {
                $('.bg-danger').removeClass('hidden').text(response.data);
        }).finally(function() {});
    };
    userModel.doRegister = function (data) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: BASEURL + '/auth/register/?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "POST",
            data: data,
        }).then(function(response) {
            $cookies.put('auth' , JSON.stringify(response.data));
            localStorage.setItem('cart_id',response.data.cart_id);
            $location.path('/cart');
        }).catch(function(response) {
            var danger = $('.bg-danger');
            danger.removeClass('hidden');
            danger.html("<ul></ul>");
            angular.forEach(response.data , function (value , index) {
                danger.find("ul").append("<li>" + value + "</li>");
            });
        }).finally(function() {});  
    };
    userModel.getAuthStatus = function() {
        var status = $cookies.get('auth');
        if (status) {
            return true;
        } else {
            return false;
        }
    };

    userModel.getUserObject = function () {
        var usrObject = angular.fromJson($cookies.get('auth'));
        return usrObject;
    };

    userModel.doUserLogout = function () {
        $cookies.remove('auth');
    };
    
    userModel.doEmail = function (email) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: BASEURL + '/auth/email/' + email + '/' + Cart.getCartId() + '/?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET",
        }).then(function(response) {
            $rootScope.carts = response.data.data;
            $location.path('/profile');
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    };
     userModel.updateData = function (data) {
            return $http({
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                url: BASEURL + '/auth/me/' + $rootScope.carts.customer.data._id  + '/?client_secret='  + client_secret + '&client_id=' + client_id,
                method: "PUT",
                data : data,
            }).then(function(response) {
                $location.path('/shipping');
                $rootScope.carts = response.data.data;
            }).catch(function(response) {
                console.log(response);
            }).finally(function() {});
        };

    return userModel;

        });
})();

