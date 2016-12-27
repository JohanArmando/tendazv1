myApp.controller('UsersController' , ['$scope' ,  '$location' , 'User', '$rootScope' , function ($scope , $location , User ,$rootScope ) {
    /*Variables*/
    angular.extend($scope , {
        errorDiv : false,
        errorMessages : []
    });

    angular.extend($scope , {
       doLogin : function (loginForm) {
           if (loginForm.$valid){
               var usrObj = {
                   email : $scope.login.email,
                   password : $scope.login.password
               };
               $scope.formSubmited = false;
               User.doLogin(usrObj);
           }else{
               $scope.formSubmited = true;
           }
       },
        doRegister : function (registerForm) {
            if (registerForm.$valid){
                var usrObj = {
                    email : $scope.register.email,
                    name : $scope.register.name,
                    last_name : $scope.register.last_name,
                    password : $scope.register.password,
                    password_confirmation : $scope.register.password_confirmation
                };
                $scope.formSubmited = false;
                User.doRegister(usrObj);
            }else{
                $scope.formSubmited = true;
            }
        },
        doLogout : function () {
            User.doUserLogout();
            $location.path('/cart');
        },
        showFormRegister : function () {
            $rootScope.modalAnimate($rootScope.formLogin, $rootScope.formRegister);
        },
        showFormLogin : function () {
            $rootScope.modalAnimate($rootScope.formRegister, $rootScope.formLogin);
        },
        closeModalLogin : function () {
            $location.path('/cart');
        }
    });
}]);

myApp.controller('globalController' , ["$scope" , "User", "$rootScope" , "$location" , "Cart", function ($scope , User , $rootScope , $location , Cart) {
    $scope.global = {};
    $scope.global.navUrl = 'new-checkout/templates/partials/nav.html';
    $scope.global.stepUrl = 'new-checkout/templates/partials/steps.html';
    $scope.global.footerUrl = 'new-checkout/templates/partials/footer.html';
    $scope.global.resumeUrl = 'new-checkout/templates/partials/resume.html';
    angular.extend($rootScope , {
        user : User.getUserObject(),
        carts : Cart.getItems(Cart.getCartId()),
        shipping_methods : [],
        ship : [],
        payment_methods : [],
    }); 
    
    angular.extend($rootScope , {
        'prev' : function (path) {
            $location.path(path);
        }
    });

    angular.extend($scope , {
        nextStep : function (step) {
            if(step == 'email'){
              $rootScope.init();
            }
        },
        checkActiveLink: function(routeLink) {
            if(routeLink.indexOf($location.path()) !== -1) {
                return 'active';
            }
        }
    });
}]);
myApp.controller("navController" , ["$scope" , "User" , "$location" ,  function ($scope , User , $location ) {
    angular.extend($scope , {
    	
       doLogout : function () {
           User.doUserLogout();
           $location.path('/cart');
           $scope.user = false;
       },
    });

}]);
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
myApp.controller("couponController" , [ "$scope"  , "Coupon" , function ($scope , Coupon) {
    $scope.coupon = {};
    angular.extend($scope , {
        'useCoupon' : function () {
            Coupon.useCoupon($scope.coupon.code);
        }
    });
}]);
myApp.controller("emailController" , ["$scope" , "Email" , "$location" , "User" , function ($scope , Email , $location , User ) {
    
    /*METHODS*/
    if (User.getUserObject()){
        $location.path('/profile');
    }

    angular.extend($scope , {
        sendEmail : function (emailForm) {
            if (emailForm.$valid){
                $scope.formSubmited = false;
                Email.doEmail($scope.email);
            }else{
                $scope.formSubmited = true;
            }
        }
    });
    
}]);

myApp.controller("profileController" , [ "$scope", "$rootScope" , "Profile", function ($scope , $rootScope , Profile ) {
    
    angular.extend($scope , {
       'sendDataClient' : function () {
           var usrObject = {
               'name' : $rootScope.carts.order.data.client.first_name,
               'last_name' : $rootScope.carts.order.data.client.last_name,
               'phone' : $rootScope.carts.order.data.client.phone.toString(),
               'identification' : $rootScope.carts.order.data.client.identification.toString()
           };
           Profile.updateData(usrObject);
       } 
    });

}]);
myApp.controller("shippingController" , ["$scope" , "Shipping" , "$location" , "$rootScope",   function ($scope , Shipping  , $location , $rootScope) {

    /*METHODS*/
    angular.extend($scope , {
        'newAddress' : false,
        'address' : {}
    });
    $rootScope.states.defaultState = {'id' : 710 , 'name' : 'Distrito Capital de Bogotá'};

    angular.extend($scope , {
        'goToPay' : function () {
            if($rootScope.carts.shippingAddress.data._id){
                var ordObject = {
                    'shipping_address_id'  : $rootScope.carts.shippingAddress.data._id
                };
                Shipping.assignShipping(ordObject)
                $location.path('/payment');
            }else{
                if(!$rootScope.carts.shippingMethod.data._id){
                    alert('Escoge un metodo de envio');
                }else{
                    alert('Escoge una direccion');
                }
            }
        },
       'getAddresses' : function () {
           Shipping.getAddresses();
       },
        'getShippingValue' : function () {
            Shipping.getShippingValue();
        },
        'addressCreate' : function () {
           $scope.newAddress = !$scope.newAddress;
        },
        'getStates' : function () {
            Shipping.getStates();
        },
        'changeState' : function () {
            Shipping.getCities($rootScope.states.defaultState.id);
        },
        'doAddress' : function () {
            var addrObject = {
              'name'  : $scope.address.name,
              'street' : $scope.address.street,
              'complement' : $scope.address.complement,
              'country_id' : 50,
              'state_id' : $scope.states.defaultState.id,
              'city_id' : $scope.defaultCity.id,
              'receiverName' : $rootScope.states.defaultState.id
            };
            Shipping.create(addrObject).then(function () {
                $scope.addressCreate();
            });
        },
        'changeShipping' : function () {
            var ordObject = {
              'shipping_method_id'  : $rootScope.carts.shippingMethod.data._id
            };
            Shipping.doShippingMethod(ordObject);
        }
    });
    /*GET TOTAL SHIPPING*/
    $scope.getShippingValue();
    
    /*VARIABLES*/
    $scope.getStates();
    $scope.getAddresses();
}]);
myApp.controller("paymentController" , ["$scope" , "Payment" , "$location" , "$rootScope",   function ($scope , Payment  , $location , $rootScope) {
    Payment.getPaymentMethod();

    $scope.doPayment = function (method) {
        Payment.doPayment('/'+method);
    }
}]);
//# sourceMappingURL=controllers.js.map
