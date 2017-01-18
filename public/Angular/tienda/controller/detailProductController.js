'use strict';
(function () {
    angular.module('app.detailProductController',[])
        .controller('detailProductController' , ["$scope" , "productService", "$filter" ,  function ($scope , productService , $filter  ) {
            productService.getProductBySlug(slug)
                .then(function (response) {
                    $scope.product  = response.data.product;
                    productService.getRelationsProducts($scope.product.product_id)
                        .then(function (response) {
                            $scope.relations  = response.data.data;
                            console.log($scope.relations);
                    });
                });
        }]);
})();