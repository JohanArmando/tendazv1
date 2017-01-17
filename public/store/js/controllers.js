myApp.controller('ForgotPasswordController' , ["$scope" , "Account" , function ($scope , Account) {
    angular.extend($scope ,{
        resetEmail : function (restorePassword) {
            if (restorePassword.$valid){
                var resetObj = {
                    email : $scope.reset.email
                };
                $scope.formSubmited = false;
                $j('.sentResetEmail').attr('disabled' , true).text("Enviando Correo.");
                Account.postSendResetLinkEmail(resetObj)
                    .then(function(response) {
                        $scope.errors = null;
                        $j('#modalRestorePassword').modal('toggle');
                        toastr["info"](response.data.status);
                        $j('.sentResetEmail').attr('disabled' , false).text("Enviar correo");
                }).catch(function(response) {
                    $scope.errors = response.data;
                    $j('.sentResetEmail').attr('disabled' , false).text("Enviar correo");
                }).finally(function() {});;
            }else{
                $scope.formSubmited = true;
            }
        }
    });

}]);
myApp.controller('ResetPasswordController' , ["$scope" , "Account" , "$location" , "User", function ($scope , Account , User) {
    angular.extend($scope ,{
         getParameterByName : function(name, url) {
            if (!url) {
                url = window.location.href;
            }
            name = name.replace(/[\[\]]/g, "\\$&");

            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        },
        resetPassword : function (resetPasswordForm) {
            if (resetPasswordForm.$valid){
                var resetObj = {
                    email : $scope.reset.email,
                    password : $scope.reset.password,
                    password_confirmation:$scope.reset.password_confirmation,
                    token : token
                };
                $scope.formSubmited = false;
                $j('.resetPassword').attr('disabled' , true).html("<i class='fa fa-refresh fa-spin  fa-fw'></i> Restableciendo Contraseña.");
               Account.postResetPassword(resetObj)
                    .then(function(response) {
                        $scope.errors = null;
                        toastr["info"](response.data.status);
                        
                        $j('.resetPassword').attr('disabled' , false).html("<i class='fa fa-refresh'> </i> Reestablecer Contraseña");
                    }).catch(function(response) {
                    $scope.errors = response.data;
                    $j('.resetPassword').attr('disabled' , false).html("<i class='fa fa-refresh'> </i> Reestablecer Contraseña");
                }).finally(function() {});
            }else{
                $scope.formSubmited = true;
            }
        }
    });
    
    
}]);
//# sourceMappingURL=controllers.js.map
