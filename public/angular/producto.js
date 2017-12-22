
var appProducts = angular.module('productos',[]).controller('Products',function($http,$scope){

	$scope.productos;

	//Consumiendo la apiRest de productos
	$http({
        method: 'GET',
        url: 'http://localhost/apiRestAlmacen/public/api/productos'
    }).then(function successCallback(response) {
        $scope.productos = response.data;
        console.log($scope.productos);
    }, function errorCallback(response) {
        console.log("Error",response);
    }); 


	

});