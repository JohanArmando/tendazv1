'use strict';
(function(){

    angular.module('app.service',[])
        .factory('Product',function($http){
            return {
                get: function(){
                    return $http.get(BASEURL + '/dataProducts');
                },
                productCategory: function(slug){
                    return $http.get(BASEURL + '/dataProductsCategories/'+ slug);
                },

                show: function(slug){
                    return $http.get(BASEURL + '/dataProducts/' + slug)
                },

                variants: function(slug){
                    return $http.get(BASEURL + '/dataProductsVariants/' + slug)
                },
                add: function(slug){
                    return $http.get(BASEURL + '/cart/add/'+ slug)
                },
                cart: function(){
                    return $http.get(BASEURL + '/cart/showAngular');
                },
                detailProduct : function (slug) {
                    return $http.get(BASEURL + '/products/show/' + slug);
                }
            }
        });
})();