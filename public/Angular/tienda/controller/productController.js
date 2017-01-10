'use strict';
(function () {
    angular.module('app.productController',[])
        .controller('productController' , ["$scope" , "productService" , function ($scope , productService ) {
            toastr.options = {
                "preventDuplicates": true,
                "closeButton": true
            };
        
            if (!category){
                productService.getAllProducts()
                .then(function(response) {

                        angular.forEach(response.data.products , function(value , index){
                            if(value.special_price > 0){
                                response.data.products[index]['promotion_price_percent'] =  ((((value.special_price * 100) / value.price)-100)  * - 1);
                            }
                        });
                        console.log(response);
                        $scope.products = response.data.products;
                        $scope.sortBy = function(propertyName) {
                            $scope.reverse = ($scope.propertyName === propertyName) ? !$scope.reverse : false;
                        };
            }).catch(function(response) {
                console.log(response);
            });

                    
            }else{
                productService.getProductsByCategory(category)
                 .then(function(response) {
                   $scope.cate = category;
                        angular.forEach(response.data.products , function(value , index){
                            if(value.special_price > 0){
                                response.data.products[index]['promotion_price_percent'] =  ((((value.special_price * 100) / value.price)-100)  * - 1);
                            }
                        });
                        $scope.products = response.data.products;
                        $scope.sortBy = function(propertyName) {
                            $scope.reverse = ($scope.propertyName === propertyName) ? !$scope.reverse : false;
                        };
            }).catch(function(response) {
                console.log(response);
            });
                    
            }

            productService.getAncestorCategory(category)
               
                 .then(function(response) {
                  var slug = '';
                    angular.forEach(response.ancestor ,function (value , index) {
                        slug +=   value.slug + '/' ;
                        value.slugable = slug;
                    });
                    $scope.ancestors = response.ancestor;
            }).catch(function(response) {
                console.log(response);
            });
        }]);
})();