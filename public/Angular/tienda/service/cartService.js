'use strict';
(function(){

    angular.module('app.cartService',[])
        .factory('cartService',function($http ){
            var config = {headers :  {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            }
            };
            return {
                getAllProductsForCart: function(cartId){
                    return $http.get(BASEURL + '/carts/'+ cartId +'/items?client_secret=' + client_secret + '&client_id=' +client_id , config);
                },
                updateItemQuantity: function (cartId , data) {
                    return $http.post( BASEURL + '/carts/' + cartId + '/items?client_secret=' + client_secret + '&client_id=' +client_id , data , config);
                },
                emptyCart: function (cartId) {
                    return $http.delete( BASEURL + '/carts/'+ cartId +'?client_secret=' + client_secret + '&client_id=' +client_id , config);
                },
                deleteItem: function (cartId ,itemId) {
                    return $http.delete( BASEURL + '/carts/'+ cartId +'/items/'+ itemId + '?client_secret=' + client_secret + '&client_id=' +client_id ,config)
                }
            }
        });
})();