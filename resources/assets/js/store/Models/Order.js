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
    
    return orderModel;
}]);