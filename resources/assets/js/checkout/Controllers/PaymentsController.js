myApp.controller("paymentController" , ["$scope" , "Payment" , "$location" , "$rootScope",   function ($scope , Payment  , $location , $rootScope) {
    Payment.getPaymentMethod();

    $scope.doPayment = function (method) {
        Payment.doPayment('/'+method);
    }
}]);