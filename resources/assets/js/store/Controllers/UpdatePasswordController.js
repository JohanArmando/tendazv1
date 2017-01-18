myApp.controller('UpdatePasswordController' , ["$scope" , "Account" , function ($scope , Account) {

    angular.extend($scope , {
        'doChangePassword' : function (changePasswordForm) {
            if (changePasswordForm.$valid){
            
            }else{
                $scope.formSubmited = true;
            }
        }
    });

}]);