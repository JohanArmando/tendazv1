'use strict';
(function () {
    angular.module('app.detailProductController',[])
        .controller('detailProductController' , ["$scope" , "productService", "$filter" ,  function ($scope , productService , $filter  ) {
            productService.getProductBySlug(slug)
                .then(function (response) {
                    console.log(response);
                    $scope.product  = response.data.product ;
                    $scope.values  = response.data.values;
                    angular.forEach($scope.values , function (v , i) {
                        $scope.values[i].values = v.values.split(',');
                    });
                    $scope.detIndex = $scope.product.images.data.length;
                });
        }]);
})();