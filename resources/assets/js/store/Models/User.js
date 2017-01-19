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
            method: "POST",
        });
    };
    
    UserModel.postResetPassword = function (_data) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: BASEURL + '/password/reset/' + '?client_secret='  + client_secret + '&client_id=' + client_id,
            data : _data,
            method: "POST",
        });
    };
    
    
    return UserModel;
}]);