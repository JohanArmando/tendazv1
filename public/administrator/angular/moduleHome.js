'use strict';
(function(){
    var app = angular.module('Orders', ['googlechart']);
    app.factory('serviceHome',function($http , $window){
        var localStorage = $window.localStorage;
        return {
            all: function(){
                return $http.get( BASEURL + '/admin/home/orders');
            },
            orderStatus : function () {
                return $http.get( BASEURL + '/admin/home/orders-status');
            },
            getInfoBackup : function(){
              var orders =  localStorage.getItem('orders');
                if(!orders){
                    orders = [];
                }else{
                    orders = JSON.parse(orders);
                }
                return orders;
            },
            setInfoBackup : function(info){
                var orders = []
                orders = info;
                localStorage.setItem('orders' , JSON.stringify(orders));
            }
        }
    });
    app.controller('controllerHome',['$scope','serviceHome', function ($scope , serviceHome) {
        serviceHome.all()
            .success(function(response){
                $scope.myChartObject = {};

                $scope.myChartObject.type = "PieChart";

                $scope.onions = [
                    {v: "Onions"},
                    {v: 3},
                ];

                $scope.myChartObject.data = {
                    "cols":
                        [
                            {id: "t", label: "Fecha", type: "string"},
                            {id: "s", label: "Ordenes", type: "number"}
                        ],
                    "rows" :
                        [

                        ]
                };
                angular.forEach(response.orders , function(value , key ){
                    $scope.myChartObject.data.rows.push(
                        {c:
                            [
                                {v: key},
                                {v: value.length},
                            ]
                        }
                    );
                });
                $scope.myChartObject.options = {
                    'title': 'Ordenes de estos ultimos ocho dias.'
                };
                $scope.myChartObjectBar = {};

                $scope.myChartObjectBar.type = "ColumnChart";

                $scope.onions = [
                    {v: "Onions"},
                    {v: 3},
                ];

                $scope.myChartObjectBar.data = {"cols": [
                    {id: "t", label: "Fecha", type: "string"},
                    {id: "s", label: "Ventas($)", type: "number"}
                ], "rows": [

                ]};
                angular.forEach(response.orders , function(value , key ){
                    var total = 0;
                    angular.forEach(value , function (v , k) {
                       total += parseFloat(v.total);
                    });
                    $scope.myChartObjectBar.data.rows.push({c:
                        [
                            {v: key},
                            {v: total},
                        ]
                    })
                });
                $scope.myChartObjectBar.options = {
                    'title': 'Tus ganancias de la semana'
                };
            });
    }]);
    app.controller('controllerHomeOrders',['$scope','serviceHome', function ($scope , serviceHome) {
        serviceHome.orderStatus()
            .success(function (response) {
                updateStatics(response , $scope , serviceHome);
            })
            .error(function (response) {
                response = serviceHome.getInfoBackup();
                updateStatics(response , $scope , serviceHome);
            });
        function updateStatics(response , $scope ,serviceHome ){
            serviceHome.setInfoBackup(response);
            function getMonday(d) {
                d = new Date(d);
                var day = d.getDay(),
                    diff = d.getDate() - day + (day == 0 ? -6:1);
                return new Date(d.setDate(diff));
            }
            $scope.orderToday = 0;
            $scope.orderYesyerday = 0;
            $scope.last = 0;
            $scope.orderMonth = 0;
            $scope.orderWeek = 0;
            $scope.ordersSend = 0;
            $scope.ordersCancel = 0;
            $scope.ordersBack = 0;
            var date = new Date(), y = date.getFullYear(), m = date.getMonth();
            var firstDayOfMonth = new Date(y, m, 1);
            var lastDayOfMonth = new Date(y, m + 1, 0);
            var firstDayOfWeek = moment(getMonday(new Date())).format('Y-MM-DD');
            var lastDayOfWeek = moment(getMonday(new Date())).add(6, 'days').format('Y-MM-DD');
            angular.forEach(response.orders , function(value , key ){
                //Clasifica las ordenes por dia yoday yesterday more lasst
                key == moment().format('Y-MM-DD') ?
                    $scope.orderToday =   value.length : key == moment().subtract(1, 'days').format('Y-MM-DD') ?
                    $scope.orderYesyerday =   value.length : $scope.last += value.length;
                //suma el total del mes
                if( key >= moment(firstDayOfMonth).format('Y-MM-DD') && key <= moment(lastDayOfMonth).format('Y-MM-DD')){
                    angular.forEach(value , function(v , k ){
                        v.status == 'archivar' || v.status == 'Re abrir' || v.status == 'Cancelar' || v.status == 'Devuelto' ?
                            $scope.orderMonth += parseFloat(v.total) : '';
                    });
                }
                //suma el total de la semana
                if( key >= moment(firstDayOfWeek).format('Y-MM-DD') && key <= moment(lastDayOfWeek).format('Y-MM-DD')){
                    angular.forEach(value , function(v , k ){
                        v.status == 'archivar' || v.status == 'Re abrir' || v.status == 'Cancelar' || v.status == 'Devuelto'?
                            $scope.orderWeek += parseFloat(v.total) : '';
                    });
                }

                //ordenes devuletas cancelasdas y enviadas
                angular.forEach(value , function(v , k ){
                    if(v.status == 'Re abrir' || v.status == 'archivar'){
                        $scope.ordersSend += 1;
                    }
                    if(v.status == 'Cancelar'){
                        $scope.ordersCancel += 1;
                    }

                    if(v.status == 'Devuelto'){
                        $scope.ordersBack  += 1;
                    }
                });
            });
        }
    }]);

}());