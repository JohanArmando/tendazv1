myApp.controller("navController" , ["$scope" , "User" , "$location" ,  function ($scope , User , $location ) {
    angular.extend($scope , {
       doLogout : function () {
           User.doUserLogout();
           $location.path('/cart');
           $scope.user = false;
       },
    });

}]);