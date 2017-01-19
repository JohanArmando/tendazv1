myApp.factory('Account' , ["$http" , "$cookies", function ($http ,$cookies) {
    var UserModel = [];
    UserModel.getAuthStatus = function() {
        var status = $cookies.get('auth');
        if (status) {
            return true;
        } else {
            return false;
        }
    };

    UserModel.getUserObject = function () {
        var usrObject = angular.fromJson($cookies.get('auth'));
        return usrObject;
    };

    UserModel.postSendResetLinkEmail = function (_data) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: BASEURL + '/password/email' + '?client_secret='  + client_secret + '&client_id=' + client_id,
            data : _data,
            method: "POST"
        });
    };
    
    UserModel.postResetPassword = function (_data) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: BASEURL + '/password/reset' + '?client_secret='  + client_secret + '&client_id=' + client_id,
            data : _data,
            method: "POST",
        });
    };

    UserModel.postChangePassword = function (_data , _authId) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: BASEURL + '/auth/'  + _authId + '/password' + '?client_secret='  + client_secret + '&client_id=' + client_id,
            data : _data,
            method: "PUT"
        });
    };

    UserModel.postUpdateProfile = function (_data , _authId) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: BASEURL + '/auth/'  + _authId  + '?client_secret='  + client_secret + '&client_id=' + client_id,
            data : _data,
            method: "PUT"
        });
    };


    return UserModel;
}]);
myApp.factory("Order" , ["$http" , function ($http) {
    var orderModel = [];
    
    orderModel.getOrder = function (_userId) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: BASEURL + '/customers/' + _userId + '/orders' + '?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET"
        });  
    };
    
    orderModel.show = function (_orderId) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: BASEURL + '/orders/' +  _orderId  + '?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET"
        });
    };
    return orderModel;
}]);
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
//# sourceMappingURL=models.js.map
