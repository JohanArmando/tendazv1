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