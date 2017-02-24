(function(){
'use strict';

angular.module(
  'tendaz'
  )
  .config(
    [ '$stateProvider', '$urlRouterProvider',
      function ($stateProvider, $urlRouterProvider, $http) {
        $urlRouterProvider
          .otherwise('/');

        $stateProvider

        .state('app', {

          url: '',

          views: {
            'header': {
              templateUrl: 'templates/'+theme+'/app/layout/header.html'
            },
            'content@' : {
              templateUrl: 'templates/'+theme+'/app/components/home/home.html',
              controller: function($http) {
                var vm = this;
                 vm.myInterval = 5000;
                vm.noWrapSlides = false;
                vm.active = 0;
               
                $http({
  method: 'GET',
  url: 'http://sub.tendaz.app:8000/api/products'
}).then(function successCallback(response) {
    // this callback will be called asynchronously
    // when the response is available
     vm.productos = response.data;
     console.log(vm.productos);
  }, function errorCallback(response) {
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  });
                
                var slides = vm.slides = [
                {'id': 0,
                  'image': 'https://www.coliseoweb.com/content/images/2016/04/skatecc.jpg',
                  'text':'Texto de prueba slider',
                },
                {'id': 1,
                  'image': 'http://jovenes.guanajuato.gob.mx/wp-content/uploads/2015/12/Thumbnail-Lugares-para-andar-de-Skate.jpg',
                  'text':'Texto de prueba slider1',
                }
                ];
                var currIndex = 0;


             
                

                
              },
              controllerAs: 'vm'
            }

            // 'container':{ 
            //   templateUrl: 'templates/'+theme+'/app/components/home/home.html',

            // }
          }
        })


      }
    ]
  )


})();