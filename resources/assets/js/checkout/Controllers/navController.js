myApp.controller("navController" , ["$scope" , "User" , "$location" ,  function ($scope , User , $location ) {
    angular.extend($scope , {
    	       return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/carts/' + cartId + '/items?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET",
        }).then(function(response) {
           $rootScope.carts = response.data.data;
           $rootScope.shopData = $rootScope.carts.shop.data;
           console.log( $rootScope.shopData);
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    };
       doLogout : function () {
           User.doUserLogout();
           $location.path('/cart');
           $scope.user = false;
       },
    });

}]);