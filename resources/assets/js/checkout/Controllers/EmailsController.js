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
