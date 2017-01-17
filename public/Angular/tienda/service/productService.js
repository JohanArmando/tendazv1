'use strict';
(function(){

    angular.module('app.productService',[])
        .factory('productService',function($http ){
            var config = {headers :  {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
                }
            };
            return {
                getIndexProducts : function (collection) {
                    collection = collection ? "&collection=" + collection : '';
                    return $http.get(BASEURL + '/products?client_secret=' + client_secret + '&client_id=' +client_id + collection, config);
                },

                getAllProducts : function () {
                    return $http.get(BASEURL + '/products/all?client_secret=' + client_secret + '&client_id=' +client_id , config);
                },

                getProductsByCategory : function (category) {
                    return $http.get(BASEURL + '/categories/' + category + '/products?client_secret=' + client_secret + '&client_id=' +client_id , config);
                },
                getProductBySlug : function (slug) {
                    return $http.get( BASEURL + '/products/' + slug + '?client_secret=' + client_secret + '&client_id=' +client_id , config);
                },
                getAncestorCategory : function (category) {
                    return $http.get( BASEURL + '/categories' + category + '?client_secret=' + client_secret + '&client_id=' +client_id , config);
                },
                getRelationsProducts: function (slug) {
                    return $http.get(BASEURL  + '/product-relations/' + slug + '?client_secret=' + client_secret + '&client_id=' +client_id , config)
                }
            }
        });
})();