var myApp =  angular.module('checkout' , ['ngRoute' , 'ngCookies']);

myApp.config(['$routeProvider' ,
    function ($routeProvider) {
        $routeProvider.when('/cart' , {
            templateUrl : "new-checkout/templates/steps/cart.html",
            controller : "cartController"
        });

        $routeProvider.when('/email' , {
            templateUrl : "new-checkout/templates/steps/email.html",
            controller : "emailController",
            authenticated : true
        });

        $routeProvider.when('/profile' , {
            templateUrl : "new-checkout/templates/steps/profile.html",
            controller : "profileController",
            authenticated : true
        });

        $routeProvider.when('/shipping' , {
            templateUrl :  "new-checkout/templates/steps/shipping.html",
            controller : "shippingController",
            authenticated : true
        });

        $routeProvider.when('/payment' , {
            templateUrl : "new-checkout/templates/steps/payment.html",
            controller : "paymentController",
            authenticated : true
        });
        
        $routeProvider.otherwise('/cart');
    }
]);

myApp.run(["$rootScope", "$location", 'User', "Cart",

    function($rootScope, $location, User, Cart) {
        /*GLOBAL VARIABLES*/
        angular.extend($rootScope , {
            formLogin : $('#login-form'),
            formLost  :   $('#lost-form'),
            formRegister : $('#register-form'),
            divForms : $('#div-forms'),
            modalAnimateTime : 300,
            msgAnimateTime : 150,
            msgShowTime : 2000,
            states : {}
        });
        /*Global Methods*/
        angular.extend($rootScope , {
            returnStep : function () {
               $location.path('/profile');
            },
            modalAnimate : function ($oldForm, $newForm) {
                var $oldH = $($oldForm.selector).height();
                var $newH = $($newForm.selector).height();
                $($rootScope.divForms.selector).css("height",$oldH);
                $($oldForm.selector).fadeToggle($rootScope.modalAnimateTime, function(){
                    $($rootScope.divForms.selector).animate({height: $newH}, $rootScope.modalAnimateTime, function(){
                        $($newForm.selector).fadeToggle($rootScope.modalAnimateTime);
                    });
                });
            },
            init : function () {
                if($rootScope.carts){
                    $location.path('/cart');
                }
                if (!$rootScope.user){
                    if ($rootScope.carts.customer.data._id == undefined){
                        $location.path('/email');
                    }else{
                        var user = $rootScope.carts.customer.data;
                        if (user.personal_info.first_name && user.personal_info.last_name &&  user.personal_info.phone &&  user.personal_info.identification &&  user.email){
                            $location.path('/shipping');
                        }else{
                            $location.path('/profile');
                        }
                    }
                }else{
                    $location.path('/profile');
                }
            }
        });
        $rootScope.$on("$routeChangeStart",
            function(event, next, current) {
                if (next.$$route.authenticated) {
                    if (!User.getAuthStatus()) {
                        alert('Debes Registrarte o Iniciar Sesion');
                        $location.path('/cart');
                    }
                }
            });
    }
]);
myApp.directive('convertToString', function() {
    return {
        require: 'ngModel',
        link: function(scope, element, attrs, ngModel) {
            ngModel.$parsers.push(function(val) {
                return parseInt(val, 10);
            });
            ngModel.$formatters.push(function(val) {
                return '' + val;
            });
        }
    };
});

//# sourceMappingURL=app.js.map
