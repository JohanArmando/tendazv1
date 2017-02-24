myApp.controller('UpdatePasswordController' , ["$scope" , "Account", "$timeout" , function ($scope , Account , $timeout) {

    $scope.changePasswordForm = {};

    angular.extend($scope , {
        changeElement : function (clase , disabled , text) {
            var button = document.getElementsByClassName(clase)[0];
            button.disabled = disabled;
            button.innerHTML = text;
        },
        'doChangePassword' : function (changePassword) {
            if (changePassword.$valid){
                var usrObject = {
                    'current_password' : $scope.changePasswordForm.current_password,
                    'password' : $scope.changePasswordForm.password,
                    'password_confirmation' : $scope.changePasswordForm.password_confirmation
                };
                $scope.changeElement('changePasswordButton' , true , "Actualizando ...");
                Account.postChangePassword(usrObject, Account.getUserObject()._id)
                    .then(function (response) {
                        toastr["info"](response.data.status);
                        $scope.changeElement('changePasswordButton' , false , "Actualizar Contraseña");
                        $scope.changePasswordForm = {};
                        $scope.errors
                    }).catch(function (response) {
                        $scope.errors = response.data;
                        $scope.changeElement('changePasswordButton' , false , "Actualizar Contraseña");
                    });
            }else{
                $scope.formSubmited = true;
            }
        }
    });

}]);