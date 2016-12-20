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
    //guardar el customer id en una cookie par evitar una peticion mass
    return userModel;
}]);
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
           $rootScope.carts = response.data.data;
                console.log(response);
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
            var index= $rootScope.carts.products.data.indexOf(item);
            $rootScope.carts.products.data.splice(index,1);
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
myApp.factory('Coupon' , ["$http" , "Cart" , "$rootScope", function ($http , Cart , $rootScope) {
    var couponModel = {};
    couponModel.useCoupon = function (couponId) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/carts/' + Cart.getCartId() + '/coupons/' + couponId + '?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET"
        }).then(function(response) {
            $('#no-coupon').addClass('hidden');
            $('#yes-coupon').removeClass('hidden');
            $rootScope.carts = response.data.data;
        }).catch(function(response) {
            $('#no-coupon').removeClass('hidden');
            $('#yes-coupon').addClass('hidden');
        }).finally(function() {});
    };
    return couponModel;
}]);
myApp.factory('Email' ,['$http', '$location' , "$rootScope" , "Cart",  function ($http , $location , $rootScope , Cart) {
    var emailModel = {};
    emailModel.doEmail = function (email) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/auth/email/' + email + '/' + Cart.getCartId() + '/?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET"
        }).then(function(response) {
            $rootScope.carts = response.data.data;
            $location.path('/profile');
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    };
    return emailModel;
}]);
myApp.factory("Profile" , ["$http" , "$rootScope" , "$location" , function ($http , $rootScope , $location) {
    var profileModel = [];
    profileModel.updateData = function (data) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/orders/' + $rootScope.carts.order_id  + '?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "PUT",
            data : data
        }).then(function(response) {
            $rootScope.carts = response.data.data;
            $location.path('/shipping');
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    }; 
    
    return profileModel;
}]);
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
myApp.factory('Payment' ,['$http', '$location' , "$rootScope" , "Cart",  function ($http , $location , $rootScope , Cart) {
    var paymentModel = {};
    paymentModel.getPaymentMethod = function () {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/payments/?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET"
        }).then(function(response) {
            $rootScope.payment_methods = response.data.data;
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    };  
    
    paymentModel.doPayment = function (method) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/payments' +  method + '/carts/' + Cart.getCartId()  + '?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET"
        }).then(function(response) {
            if (response.data.url){
                localStorage.removeItem('cart_id');
                $MPC.openCheckout({
                    url: response.data.url,
                    mode: "modal",
                    onreturn: function(data) {
                        $location.reload();
                    }
                });
            }
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    };

    return paymentModel;
}]);
//# sourceMappingURL=models.js.map
