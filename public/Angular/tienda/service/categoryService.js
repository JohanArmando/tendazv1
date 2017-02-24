'use strict';
(function(){
    angular.module('app.categoryService',[])
        .factory('categoryService',function($http){
            var config = {headers :  {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            }
            };
            return {
                getAllCategories: function(){
                    return $http.get(BASEURL + '/tree?client_secret=' + client_secret + '&client_id=' +client_id , config);
                },
            }
        });
})();