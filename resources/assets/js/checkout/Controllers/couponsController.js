myApp.controller("couponController" , [ "$scope"  , "Coupon" , function ($scope , Coupon) {
    $scope.coupon = {};
    angular.extend($scope , {
        'useCoupon' : function () {
            Coupon.useCoupon($scope.coupon.code);
        }
    });
}]);