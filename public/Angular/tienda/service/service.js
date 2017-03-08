'use strict';
(function(){

    angular.module('app.service',[])
        .factory('Product',function($http){
            var config = {headers :  {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
                }
            };
            return {
                get: function(){
                    return $http.get(BASEURL + '/dataProducts', config);
                },
                productCategory: function(slug){
                    return $http.get(BASEURL + '/dataProductsCategories/'+ slug, config);
                },

                show: function(slug){
                    return $http.get(BASEURL + '/dataProducts/' + slug, config);
                },

                variants: function(slug){
                    return $http.get(BASEURL + '/dataProductsVariants/' + slug, config);
                },
                add: function(slug){
                    return $http.get(BASEURL + '/cart/add/'+ slug, config);
                },
                cart: function(){
                    return $http.get(BASEURL + '/cart/showAngular', config);
                },
                detailProduct : function (slug) {
                    return $http.get(BASEURL + '/products/show/' + slug, config);
                }
            }
        });
})();