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
        changeElement : function (clase , disabled , text) {
            var button = document.getElementsByClassName(clase)[0];
            button.disabled = disabled;
            button.innerHTML = text;
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
                $scope.changeElement('resetPassword' , true , "<i class='fa fa-refresh fa-spin  fa-fw'></i> Restableciendo Contraseña.");
               Account.postResetPassword(resetObj)
                    .then(function(response) {
                        $scope.errors = null;
                        toastr["info"](response.data.status);
                        $scope.changeElement('resetPassword' , false , "<i class='fa fa-refresh'></i>Reestablecer Contraseña");
                    }).catch(function(response) {
                    $scope.errors = response.data;
                    $scope.changeElement('resetPassword' , false , "<i class='fa fa-refresh'></i>Reestablecer Contraseña");
                }).finally(function() {});
            }else{
                $scope.formSubmited = true;
            }
        }
    });
    
    
}]);
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
myApp.controller('UserController' , ['$scope' , 'Account' , '$cookies' , function ($scope , Account , $cookies) {

    /** METHODS **/
    angular.extend($scope , {
        'getUser' : function () {
            return Account.getUserObject();
        },
        changeElement : function (clase , disabled , text) {
            var button = document.getElementsByClassName(clase)[0];
            button.disabled = disabled;
            button.innerHTML = text;
        },
        'doUpdateProfile' : function (profileForm) {
            if (profileForm.$valid){
                var usrObject = {
                    'name' : $scope.user.personal_info.first_name,
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
                        $('#modalActualizar').modal('toggle');
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
myApp.controller("OrderController" ,[ "$scope" , "Account" , "Order" , function ($scope , Account , Order) {
    /*  METHODS */
    
    angular.extend($scope , {
       'getOrders' : function () {
           Order.getOrder(Account.getUserObject()._id).then(function (response) {
               $scope.orders = response.data.data;
           }).catch(function (response) {
               console.log(response);
           });
       },
        'showOrder' : function () {
            Order.show(order_id).then(function (response) {
                console.log(response);
                $scope.order = response.data.data;
            }).catch(function (response) {
                console.log(response);
            });
        }
    });

    $scope.pageSize = 10;
    $scope.currentPage = 1;
    $scope.getOrders();

    if (order_id){
        $scope.showOrder();
    }
}]);
myApp.controller('AddressController' , ['$scope' , 'Address' , 'Account' , function ($scope , Address , Account) {

    /** VARIABLES **/
    angular.extend($scope , {
        'addresses' : '',
        'address' :'',
        'state': '',
        'city': '',
        'create' : ''
    });

    /** METHODS **/
    angular.extend($scope , {
        'index' : function () {
            Address.get(Account.getUserObject()._id)
                .then(function (response) {
                    $scope.addresses = response.data.data;
                    console.log(response);
                }).catch(function (response) {
                    console.log(response);
            });
        },
        'created' : function () {
            $scope.create = true;
            $scope.address = {};
        },
        'edit' : function (i) {
            $scope.create = false;
            $scope.index = i;
            $scope.address = $scope.addresses[i];
            $scope.address.state['id'] = $scope.address.state._id;
            $scope.state = $scope.address.state;
            $scope.changeState($scope.state.id);
            $scope.address.city['id'] = $scope.address.city._id;
            $scope.city = $scope.address.city;
        },
        
        'getStates' : function () {
            Address.getStates()
                .then(function(response) {
                    $scope.states = response.data.states;
                    $scope.state = response.data.states[0];
                    $scope.changeState($scope.state.id);
            }).catch(function(response) {
                console.log(response);
            }).finally(function() {});
        },
        
        'changeState' : function () {
            Address.getCities($scope.state.id)
                .then(function(response) {
                    $scope.cities = response.data.cities;
                    $scope.city = response.data.cities[0];
                }).catch(function(response) {
                console.log(response);
            }).finally(function() {});
        },

        createOrUpdate : function () {
            var addressObject = {
                street : $scope.address.street,
                complement : $scope.address.complement,
                neighborhood	 : $scope.address.neighborhood	,
                city_id	 : $scope.city.id,
                state_id	 : $scope.state.id,
                country_id : 50
            };
            if ($scope.create) {
                Address.create(Account.getUserObject()._id  , addressObject )
                    .then(function (response) {
                        $scope.addresses.push(response.data.data[0]);
                        toastr["info"]("Direccion Creada");
                        $('#modalAddress').modal('toggle');
                    }).catch(function () {
                    console.log(response);
                });
            } else {
                Address.update(Account.getUserObject()._id , $scope.address._id ,addressObject )
                    .then(function (response) {
                        $scope.addresses[$scope.index]  = response.data.data[0];
                        toastr["info"]("Direccion actualizada");
                        $('#modalAddress').modal('toggle');
                    }).catch(function () {
                        console.log(response);
                });
            }
        }
    });

    $scope.index();
    $scope.getStates();
}]);
//# sourceMappingURL=controllers.js.map
