myApp.controller("profileController" , [ "$scope", "$rootScope" , "Profile", function ($scope , $rootScope , Profile ) {
    console.log($rootScope.carts);
    angular.extend($scope , {
       'sendDataClient' : function () {
           var usrObject = {
               'name' : $rootScope.carts.order.data.client.first_name,
               'last_name' : $rootScope.carts.order.data.client.last_name,
               'phone' : $rootScope.carts.order.data.client.phone.toString(),
               'identification' : $rootScope.carts.order.data.client.identification.toString()
           };
           Profile.updateData(usrObject);
       } 
    });

}]);