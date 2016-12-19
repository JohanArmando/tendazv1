myApp.factory('Coupon' , ["$http" , "Cart" , "$rootScope", function ($http , Cart , $rootScope) {
    var couponModel = {};
    couponModel.useCoupon = function (couponId) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/carts/' + Cart.getCartId() + '/coupons/' + couponId + '?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET"
        }).then(function(response) {
            $('#no-coupon').addClass('hidden');
            $('#yes-coupon').removeClass('hidden');
            $rootScope.carts = response.data.data;
        }).catch(function(response) {
            $('#no-coupon').removeClass('hidden');
            $('#yes-coupon').addClass('hidden');
        }).finally(function() {});
    };
    return couponModel;
}]);