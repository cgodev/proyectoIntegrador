var transaccional = angular.module('transacciones',[]);

transaccional.controller('almacen',function($http,$scope){
	$scope.agotados = [];

	$http({
        method: 'GET',
        url: 'http://localhost/apiRestAlmacen/public/api/productosAg'
    }).then(function successCallback(response) {
        $scope.agotados = response.data;        
    }, function errorCallback(response) {
        Materialize.toast('HA OCURRIDO UN ERROR AL CONSULTAR LA BASE DE DATOS', 4000);
    }); 

    if($scope.agotados.length === 0){
    	//destroy all on api mongo
    }
    else{
    	//for que modifique las cantidades almacenadas en la no relacional
    }
});