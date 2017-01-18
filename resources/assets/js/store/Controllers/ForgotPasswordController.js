myApp.controller('ForgotPasswordController' , ["$scope" , "Account" , function ($scope , Account) {
    angular.extend($scope ,{
        changeElement : function (clase , disabled , text) {
            var button = document.getElementsByClassName(clase)[0];
            button.disabled = disabled;
            button.innerHTML = text;
        },
        resetEmail : function (restorePassword) {

            if (restorePassword.$valid){
                var resetObj = {
                    email : $scope.reset.email
                };
                $scope.changeElement('sentResetEmail' , true , "Enviando Correo.");
                $scope.formSubmited = false;
                Account.postSendResetLinkEmail(resetObj)
                    .then(function(response) {
                        $scope.errors = null;
                        toastr["info"](response.data.status);
                        $scope.changeElement('sentResetEmail' , false , "Enviar correo");
                }).catch(function(response) {
                    $scope.errors = response.data;
                    $scope.changeElement('sentResetEmail' , false , "Enviar correo");
                }).finally(function() {});;
            }else{
                $scope.formSubmited = true;
            }
        }
    });

}]);