myApp.factory('Email' ,['$http', '$location' , "$rootScope" , "Cart",  function ($http , $location , $rootScope , Cart) {
    var emailModel = {};
    emailModel.doEmail = function (email) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/auth/email/' + email + '/' + Cart.getCartId() + '/?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET"
        }).then(function(response) {
            $rootScope.carts = response.data.data;
            $location.path('/profile');
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    };
    return emailModel;
}]);