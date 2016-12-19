    'use strict';
(function () {
    angular.module('app.productIndexController',[])
        .filter('getById', function() {
            return function(input, id) {
                var i=0, len=input.length;
                for (; i<len; i++) {
                    if (+input[i].id == +id) {
                        return input[i];
                    }
                }
                return null;
            }
        })
        .controller('productIndexController' , ["$scope" , "productService" , "$filter" , function ($scope , productService , $filter) { 
            toastr.options = {
                "preventDuplicates": true,
                "closeButton": true,
            };
            productService.getIndexProducts()
                  .then(function(response) {
                      console.log(response);
                    angular.forEach(response.data.products , function(value , index){
                      if(value.special_price > 0){
                            response.data.products[index]['promotion_price_percent'] =  (((value.special_price * 100) / value.price)  * - 1);
                        }
                        
                     });
                    $scope.news = response.data.products;
            }).catch(function(response) {
                console.log(response);
            });
               
            productService.getIndexProducts('promotion')
                .then(function (response) {
                    angular.forEach(response.data.products , function(value , index){
                        if(value.special_price > 0){
                            response.data.products[index]['promotion_price_percent'] =  (((value.special_price * 100) / value.price)  * - 1);
                        }
                    });
                    $scope.promotions = response.data.products;
                });
            productService.getIndexProducts('feature')
                .then(function (response) {
                    angular.forEach(response.data.products , function(value , index){
                        if(value.special_price > 0){
                            response.data.products[index]['promotion_price_percent'] =  (((value.special_price * 100) / value.price)  * - 1);
                        }
                    });
                    $scope.features = response.data.products;
                });

            $scope.viewProduct = function (product) {
                $scope.detail = product;
                angular.forEach($scope.detail.variants, function (value , index ) {
                    $scope.detail.variants[index].properties = [];
                });
                angular.forEach($scope.detail.variants, function (value , index ) {
                    $scope.detail.variants[index].properties.push({'name' : value.option_name_1 , 'value' : value.option_value_1});
                    $scope.detail.variants[index].properties.push({'name' : value.option_name_2 , 'value' : value.option_value_2});
                    $scope.detail.variants[index].properties.push({'name' : value.option_name_3 , 'value' : value.option_value_3});
                });
                var filters = [];
                angular.forEach($scope.detail.variants, function(product) {
                    angular.forEach(product.properties, function(property) {
                        var existingFilter = _.findWhere(filters, { name: property.name });
                        if (existingFilter) {
                            var existingOption = _.findWhere(existingFilter.options, { value: $filter('lowercase')(property.value) });
                            if (existingOption) {
                                existingOption.count += 1;
                            } else {
                                existingFilter.options.push({ value: $filter('lowercase')(property.value), count: 1 });
                            }
                        } else {
                            var filter = {};
                            filter.name = property.name;
                            filter.options = [];
                            filter.options.push({ value: $filter('lowercase')(property.value) , count: 1 });
                            filters.push(filter);
                        }
                    });
                });
                $scope.filters = filters;
            }
        }]);
})();