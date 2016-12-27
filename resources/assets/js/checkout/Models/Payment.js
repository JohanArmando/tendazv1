myApp.factory('Payment' ,['$http', '$location' , "$rootScope" , "Cart",  function ($http , $location , $rootScope , Cart) {
    var paymentModel = {};
    paymentModel.getPaymentMethod = function () {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/payments/?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET"
        }).then(function(response) {
            $rootScope.payment_methods = response.data.data;
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    };  
    
    paymentModel.doPayment = function (method) {
        return $http({
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            url: baseUrl + '/payments' +  method + '/carts/' + Cart.getCartId()  + '?client_secret='  + client_secret + '&client_id=' + client_id,
            method: "GET"
        }).then(function(response) {
            $('#'+ method.replace('/','')).attr('disabled' , false);
            $('#'+ method.replace('/','')).text("Pagar Ahora");
            if (response.data.url){
                $MPC.openCheckout({
                    url: response.data.url,
                    mode: "modal",
                    onreturn: function(data) {
                        $location.reload();
                    }
                });
            }
        }).catch(function(response) {
            console.log(response);
        }).finally(function() {});
    };

    return paymentModel;
}]);