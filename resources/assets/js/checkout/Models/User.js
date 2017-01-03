myApp.factory('User' ,['$http', '$location', '$cookies' , "$rootScope" , "Cart",  function ($http , $location , $cookies , $rootScope , Cart) {
    var userModel = {};

    userModel.doLogin = function (data) {
        var cartId = localStorage.getItem('cart_id') ? '/'+localStorage.getItem('cart_id') : '';
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/auth/login'+ cartId +'?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "POST",
            data: {
                email: data.email,
                password: data.password
            }
        }).then(function(response) {
            $location.path('/cart');
            $cookies.put('auth' , JSON.stringify(response.data));
            Cart.setCartId(response.data.cart_id);
            $('#sign-up').modal('toggle');
            location.reload();
        }).catch(function(response) {
                $('.bg-danger').removeClass('hidden').text(response.data);
        })
    };

    userModel.doRegister = function (data) {
        var cartId = localStorage.getItem('cart_id') ? '/'+localStorage.getItem('cart_id') : '';
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/auth/register' + cartId     + '?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "POST",
            data: data,
        }).then(function(response) {
            $location.path('/cart');
            $cookies.put('auth' , JSON.stringify(response.data));
            Cart.setCartId(response.data.cart_id);
            $('#sign-up').modal('toggle');
            location.reload();
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
            url: baseUrl + '/auth/email/' + email + '/' + Cart.getCartId() + '/?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET",
        }).then(function(response) {
            $rootScope.carts = response.data.data;
            $location.path('/profile');
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    };
    
    userModel.getUserId = function () {
      if (userModel.getUserObject()){
          return userModel.getUserObject()._id;
      }else{
          return Cart.getItems(Cart.getCartId()).data.data.customer.data._id;
      } 
    };
   
    return userModel;
}]);