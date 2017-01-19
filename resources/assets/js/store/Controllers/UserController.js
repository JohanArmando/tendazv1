myApp.controller('UserController' , ['$scope' , 'Account' , '$cookies' , function ($scope , Account , $cookies) {
    
    /** METHODS **/
    angular.extend($scope , {
        'getUser' : function () {
            return Account.getUserObject();
        },
        changeElement : function (clase , disabled , text) {
            var button = document.getElementsByClassName(clase)[0];
            button.disabled = true;
            button.innerHTML = text;
        },
        'doUpdateProfile' : function (profileForm) {
            if (profileForm.$valid){
                var usrObject = {
                    'first_name' : $scope.user.personal_info.first_name,
                    'last_name' : $scope.user.personal_info.last_name,
                    'phone' : $scope.user.personal_info.phone,
                    'identification' : $scope.user.personal_info.identification
                };
                $scope.changeElement('updateProfile' , true , "Actualizando ...");
                Account.postUpdateProfile(usrObject, Account.getUserObject()._id)
                    .then(function (response) {
                        $scope.user = response.data.data;
                        $cookies.put('auth' , JSON.stringify(response.data.data) ,  {path: '/'});
                        toastr["info"]("Perfil Actualizado");
                        $scope.changeElement('updateProfile' , false , "Actualizar Datos");
                        $scope.errors = {};
                    }).catch(function (response) {
                    $scope.errors = response.data;
                    $scope.changeElement('updateProfile' , false , "Actualizar Datos");
                });
            }else{
                $scope.formSubmited = true;
            }
        }
    });
    
}]);