myApp.controller("OrderController" ,[ "$scope" , "Account" , "Order" , function ($scope , Account , Order) {
    /*  METHODS */
    
    angular.extend($scope , {
       'getOrders' : function () {
           Order.getOrder(Account.getUserObject()._id).then(function (response) {
               $scope.orders = response.data.data;
           }).catch(function (response) {
               console.log(response);
           });
       },
        'showOrder' : function () {
            Order.show(order_id).then(function (response) {
                console.log(response);
                $scope.order = response.data.data;
            }).catch(function (response) {
                console.log(response);
            });
        }
    });

    $scope.pageSize = 10;
    $scope.currentPage = 1;
    $scope.getOrders();

    if (order_id){
        $scope.showOrder();
    }
}]);