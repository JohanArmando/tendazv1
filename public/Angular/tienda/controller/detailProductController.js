'use strict';
(function () {
    angular.module('app.detailProductController',[])
        .controller('detailProductController' , ["$scope" , "productService", "$filter" ,  function ($scope , productService , $filter  ) {
            productService.getProductBySlug(slug,uuid)
                .then(function (response) {
                    
                    var values = response.data.product.values.data;
                    $scope.product  = response.data.product;
                    console.log($scope.product);
                    $scope.properties = {};
                    for (var i = values.length - 1; i >= 0; i--) {


                        $scope.properties[values[i].property] = {
                            name: values[i].property,
                            values: []
                        };

                        for (var j = values.length - 1; j >= 0; j--) {
                            
                            if (values[i].property == values[j].property)
                            {
                                $scope.properties[values[i].property].values.push({'name':values[j].value});
                            }
                            
                        }

                    }
                    console.log($scope.properties);
                    productService.getRelationsProducts($scope.product.product_id)
                        .then(function (response) {
                            $scope.relations  = response.data.data;
                           //console.log($scope.relations);
                    });
                });
        }]);
})();