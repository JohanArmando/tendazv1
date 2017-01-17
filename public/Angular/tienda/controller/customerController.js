'use strict';
(function () {
    angular.module('app.customerStoreController',[])
        .controller('customerStoreController' , ["$http", "$location", "$cookies" ,"User", "$rootScope" , function ($http , $location , $cookies , $rootScope ,$scope,User) {
          /*Variables*/
            $scope.errores = false;
            $scope.hideErrors = function(){
                $scope.errores = false;
            }
    angular.extend($scope , {
        errorDiv : false,
        errorMessages : []
    });
       $scope.getUserObject = function () {
        $scope.usuario =  angular.fromJson($cookies.get('auth'));
        
    };
     $scope.getUserObject();
     $scope.cerrarSesion = function(){
        $cookies.remove('auth');
        location.reload();
     }
   $scope.formLog = {};
   $scope.registerFormR = {};
    angular.extend($scope , {
         doLogin: function (loginForm){
             var cartId = localStorage.getItem('cart_id') ? '/'+localStorage.getItem('cart_id') : '';
                    var toLog = {
            method: 'POST',
            url:  BASEURL + '/auth/login' +cartId  +'?client_secret=' + client_secret + '&client_id=' + client_id,
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            data: {
                 email :$scope.formLog.loginMail,
                password :$scope.formLog.loginPassword
            }
        }

        $http(toLog).then(function(response) {
            $cookies.put('auth' , JSON.stringify(response.data) , {path: '/'});
             localStorage.setItem('cart_id',response.data.cart_id);
               location.reload();
        }, function(error) {
            $scope.erroreslogin = error.data;
            $scope.errormail = $scope.errores.email;
            $scope.errorpassword = $scope.errores.password;
            $scope.errores = true;
        });


       
       },
        doRegister : function (registerFormR) {
            if (registerFormR.$valid){
                var cartId = localStorage.getItem('cart_id') ? '/'+localStorage.getItem('cart_id') : '';
                //alert(cartId);
                        var toLog = {
            method: 'POST',
            url: BASEURL + '/auth/register' + cartId + '?client_secret=' + client_secret + '&client_id=' + client_id,
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            data: {
                    email         : $scope.registerFormR.RegisterMail,
                    password                  : $scope.registerFormR.RegisterPassword,
                    password_confirmation     : $scope.registerFormR.RegisterPasswordConfirm,
                    name          : $scope.registerFormR.RegisterName,
                    last_name     : $scope.registerFormR.RegisterLastName
            }
        }

        $http(toLog).then(function(response) {
            $cookies.put('auth' , JSON.stringify(response.data) , {path: '/'});
             localStorage.setItem('cart_id',response.data.cart_id);
               location.reload();
        }, function(error) {
            $scope.errores = error.data;
            $scope.errorname = $scope.errores.name;
            $scope.errorlast = $scope.errores.last_name;
            $scope.errormail = $scope.errores.email;
            $scope.errorpassword = $scope.errores.password;
            $scope.errores = true;
        });

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
        },
        sendEmail : function (emailForm) {
            if (emailForm.$valid){
                $scope.formSubmited = false;
                User.doEmail($scope.email);
            }else{
                $scope.formSubmited = true;
            }
        },
        updateProfile : function () {
            var usrObject = {
                'name' : $rootScope.carts.customer.data.personal_info.first_name,
                'last_name' : $rootScope.carts.customer.data.personal_info.last_name,
                'phone' : $rootScope.carts.customer.data.personal_info.phone.toString(),
                'identification' : $rootScope.carts.customer.data.personal_info.identification.toString(),
                'email' : $rootScope.carts.customer.data.email
            }
            User.updateData(usrObject);
        }
    });
        }]);
})();
