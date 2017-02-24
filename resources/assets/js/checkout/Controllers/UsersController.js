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
