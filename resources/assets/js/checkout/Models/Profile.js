myApp.factory("Profile" , ["$http" , "$rootScope" , "$location" , function ($http , $rootScope , $location) {
    var profileModel = [];
    profileModel.updateData = function (data) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/orders/' + $rootScope.carts.order_id  + '?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "PUT",
            data : data
        }).then(function(response) {
            $rootScope.carts = response.data.data;
            localStorage.setItem('orderData' , JSON.stringify($rootScope.carts.order.data.client));
            $location.path('/shipping');
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    }; 
    profileModel.getData = function () {
        return localStorage.getItem('orderData');
    };
    return profileModel;
}]);