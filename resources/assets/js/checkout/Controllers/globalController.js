myApp.controller('globalController' , ["$scope" , "User", "$rootScope" , "$location" , "Cart", function ($scope , User , $rootScope , $location , Cart) {
    $scope.global = {};
    $scope.global.navUrl = 'new-checkout/templates/partials/nav.html';
    $scope.global.stepUrl = 'new-checkout/templates/partials/steps.html';
    $scope.global.footerUrl = 'new-checkout/templates/partials/footer.html';
    $scope.global.resumeUrl = 'new-checkout/templates/partials/resume.html';
    angular.extend($rootScope , {
        user : User.getUserObject(),
        carts : Cart.getItems(Cart.getCartId()),
        shipping_methods : [],
        ship : [],
        payment_methods : [],
    }); 
    
    angular.extend($rootScope , {
        'prev' : function (path) {
            $location.path(path);
        }
    });

    angular.extend($scope , {
        nextStep : function (step) {
            if(step == 'email'){
              $rootScope.init();
            }
        },
        checkActiveLink: function(routeLink) {
            if(routeLink.indexOf($location.path()) !== -1) {
                return 'active';
            }
        }
    });
}]);