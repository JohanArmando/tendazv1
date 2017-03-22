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
        },

        'main' : function (i) {
          $scope.index = i;
          $scope.address = $scope.addresses[i];
          Address.main(Account.getUserObject()._id ,$scope.address._id)
                .then(function (response) {
                  Address.get(Account.getUserObject()._id)
                      .then(function (response) {
                          $scope.addresses = response.data.data;
                          console.log(response);
                      }).catch(function (response) {
                          console.log(response);
                  });
                  toastr["info"]("Direccion actualizada");

              }).catch(function () {
                  console.log(response);
          });
        }
    });

    $scope.index();
    $scope.getStates();
}]);
