myApp.controller("paymentController" , ["$scope" , "Payment" , "$location" , "$rootScope",   function ($scope , Payment  , $location , $rootScope) {
    Payment.getPaymentMethod();
    if(!$rootScope.shippingTrue){
        $location.path('/shipping');
    }
    $scope.doPayment = function (method) {
        $('#'+method).attr('disabled' , 'disabled');
        $('#'+method).text("Pagando");
        Payment.doPayment('/'+method);
    }
}]);