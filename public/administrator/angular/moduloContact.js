'use strict';
(function(){
    var app = angular.module('MyAppContact', []);
    app.factory('contactService',function($http){
        return {
            get: function(){
                return $http.get( BASEURL + '/admin/contact/index');
            },
        }
    });
    app.controller('ContactController', ['$scope','contactService' , function ($scope , contactService) {
        contactService.get()
            .success(function (response) {
                console.log(response);
            });
    }]);
})();