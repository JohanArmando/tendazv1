'use strict';
(function () {
    angular.module('app.categoryTemplateController',[])
        .controller('categoryTemplateController' , ["$scope" , "categoryService", function ($scope , categoryService) {
            categoryService.getAllCategories()
            .then(function(response) {
                console.log(response);
                 $scope.categories = response.data.categories;
            }).catch(function(response) {
                console.log(response);
            })
               
        }])
        .filter('slice', function() {
            return function(arr, start, end) {
                
            };
        });
})();