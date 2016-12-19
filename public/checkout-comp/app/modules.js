var myApp = angular.module('checkout', [
    'ngRoute',
    'ui.router',
    'angular-steps'
]);


myApp.controller('checkoutController', ['$scope', '$http', function($scope, $http, usuarioslist, $state) {

    $scope.logeado = false;

    var tokens = angular.fromJson(window.localStorage['token'] || '[]');
    var carts = angular.fromJson(window.localStorage['cart'] || '[]');

    $scope.persistencia = function() {
        window.localStorage['token'] = angular.toJson(tokens);
        window.localStorage['cart'] = angular.toJson(carts);
    }
  
  


   $scope.crearUsuario = function(usuarioDatos) {
        tokens.push(usuarioDatos);
        $scope.persistencia();
    }

    $scope.crearCarrito = function(carritoDatos) {
        carts.push(carritoDatos);
        $scope.persistencia();
    } 
    $scope.registrar = function() {
        var req = {
            method: 'POST',
            url: 'http://api.tendaz.dev/auth/register?client_secret=' + client_secret + '&client_id=' + cient_id,
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            data: {
                email: $scope.RegisterMail,
                password: $scope.RegisterPassword,
                password_confirmation: $scope.RegisterPasswordConfirmation,
                name: $scope.RegisterName,
                last_name: $scope.RegisterLastName
            }
        }

        $http(req).then(function(response) {
            console.log(response);

            console.log("Registró!");
        }, function(error) {
            console.log(error);
            console.log("Awwww no registró  :(");
        });


    }


    $scope.greeting = 'Hola!';
    $scope.empresaFactura = false;
    $scope.envioData = false;
    $scope.usuarioData = false;
    $scope.direccionigual = true;
    $scope.tarjetaData = false;
    $scope.datosUsuario = [];
    $scope.formulario = {};
    // $scope.identificacionNombre = "";
    // $scope.identificacionCorreo = "";
    // $scope.identificacionApellidos = "";
    // $scope.identificacionCedula = "";
    // $scope.identificacionTelefono = "";
    $scope.datosIdentificacion = function() {
        $scope.envioData = true;
        $scope.usuarioData = true;
        $scope.datosUsuario.push($scope.formulario);
        console.log($scope.datosUsuario);
    }
    $scope.facturaEmpresa = function() {
        if ($scope.empresaFactura == false) {
            $scope.empresaFactura = true;
        } else {
            $scope.empresaFactura = false;
        }
    }
    $scope.datosDireccion = function() {
        if ($scope.envioData == true) {
            $scope.envioData = false;
        } else {}
        $scope.empresaFactura = false;
    }
    if ($scope.tarjetaData == false) {
        $scope.tarjetaData = true;
    } else {
        $scope.tarjetaData = false;
    }


    $scope.persistir = function() {
        $scope.usuario = usuarioslist.getUsuario();
        console.log($scope.usuario);
    }


    $scope.ingresar = function() {

        var req = {
            method: 'POST',
            url: 'http://api.tendaz.dev/auth/login?client_secret=' + client_secret + '&client_id=' + cient_id,
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            data: {
                email: $scope.LoginMail,
                password: $scope.LoginPassword
            }
        }

        $http(req).then(function(response, data) {
            localStorage.clear();
            $scope.tokenLocal = response.data.token;
            console.log("Nuevo token " + $scope.tokenLocal);
            console.log("Ingreso!");
            var usuarioDatos =  $scope.tokenLocal;

            $scope.crearUsuario(usuarioDatos);
            
            $scope.getUsuario();

        }, function(error) {
            console.log(error);
            $scope.logeado = false;
            console.log("Awwww no ingresó  :(");
        });




    }
   




    $scope.tabs = [{
        title: 'Tarjeta de crédito',
        url: 'one.tpl.html'
    }, {
        title: 'Pago con PSE',
        url: 'two.tpl.html'
    }, {
        title: 'Efecty/Baloto',
        url: 'three.tpl.html'
    }];

    $scope.currentTab = 'one.tpl.html';

    $scope.getUsuario = function() {
      
       var cartForSend = carts ? carts : '';  
       console.log(cartForSend);       
            for (var i = 0; i < tokens.length; i++) {

                console.log(tokens[i]);
                $scope.toke = tokens[i];
            }

            if ($scope.toke) {
                var traerUser = {
                    method: 'GET',
                    url: 'http://api.tendaz.dev/auth/me/' + cartForSend + '?token=' + $scope.toke + '&client_secret=' + client_secret + '&client_id=' + cient_id,
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                }

                $http(traerUser).then(function(response) {
                    console.log(response);
                    var usuarioDatos =  response.data._id;
                    $scope.crearUsuario(usuarioDatos);
                    $scope.tokenLocal = response._id;
                    $scope.user = response.data;                  
                    var carritoDatos =  $scope.user.cart_id;
                    $scope.crearCarrito(carritoDatos);
                    $scope.logeado = true;
                }, function(error) {
                    console.log(error);
                    $scope.logeado = false;
                    if (error.data.error == "token_invalid") {


                           var refreshUser = {
                    method: 'GET',
                    url: 'http://api.tendaz.dev/auth/refresh/?token=' + $scope.toke + '&client_secret=' + client_secret + '&client_id=' + cient_id,
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                }

                $http(refreshUser).then(function(response) {
                    console.log(response);
                    var usuarioDatos =  response.data._id;
                    $scope.crearUsuario(usuarioDatos);
                    $scope.getUsuario();
                }, function(error) {
                    console.log(error);
                });



                    }
                });
            } else {
                console.log("no hay tokens");
                $scope.logeado = false;
            }


        },
        $scope.getUsuario();
    $scope.cerrarSesion = function() {
        localStorage.clear();
        location.reload();

    }
    $scope.onClickTab = function(tab) {
        $scope.currentTab = tab.url;
    }

    $scope.isActiveTab = function(tabUrl) {
        return tabUrl == $scope.currentTab;
    }

}]);