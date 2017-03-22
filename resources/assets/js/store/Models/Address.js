myApp.factory('Address' , ['$http' , function ($http) {
    var address = [];

        address.get = function (_customerId) {
            return $http({
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                url: BASEURL + '/customers/' + _customerId + '/addresses' + '?client_secret='  + client_secret + '&client_id=' + client_id,
                method: "GET"
            });
        };

        address.getStates = function () {
            return $http({
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                url: BASEURL + '/states?client_secret='  + client_secret + '&client_id=' + client_id,
                method: "GET"
            });
        };

        address.getCities = function (id) {
            return $http({
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                url: BASEURL + '/cities/'+ id +'?client_secret='  + client_secret + '&client_id=' + client_id,
                method: "GET"
            });
        };

        address.update = function (_customerId, _addressId , _data) {
            return $http({
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                url: BASEURL + '/customers/' + _customerId  + '/addresses/' + _addressId + '?client_secret='  + client_secret + '&client_id=' + client_id,
                method: "PUT",
                data : _data
            })
        };
        address.main = function (_customerId, _addressId) {
            return $http({
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                url: BASEURL + '/customers/' + _customerId  + '/addresses/' + _addressId + '/main?client_secret='  + client_secret + '&client_id=' + client_id,
                method: "get"
            })
        };
        address.create = function (_customerId , _data) {
            return $http({
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                url: BASEURL + '/customers/' + _customerId  + '/addresses?client_secret='  + client_secret + '&client_id=' + client_id,
                method: "POST",
                data : _data
            })
        };
    return address;
}]);
