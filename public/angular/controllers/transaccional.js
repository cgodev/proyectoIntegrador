var transaccional = angular.module('transacciones',[]);

transaccional.controller('ventas',function($http,$scope){

	$scope.agotados = [];

	 $scope.editTransaccion = function(){

            var cant = document.getElementById("cantidad").value;//la variable cantidad proviene de las exitencias habidas --Carrito
            var cantAux = document.getElementById("cantidadPedidad").value;//la variable cantidadPedida proviene de las unidades que pidan

            cant-=cantAux;

            var transaccion = {
                ventaId:document.getElementById("ventaId").value,
                codigo: document.getElementById("productoId").value,
                cantidad:cant,
            }

            $http.post('http://localhost/apiRestAlmacen/public/api/productos/actualizar'+transaccion.codigo,transaccion).then(function(response){
                Materialize.toast('transaccion realizada satisfactoriamente.', 3000);
                console.log(response)


                if(cant>=0)
                {		
	                var transaccion ={
						                codigo:document.getElementById("productoId").value,
						                nombre:document.getElementById("nombreProducto").value,
						                cantidad:cant,
						               }
					$http.post('',transaccion).then(function(response){
	                Materialize.toast('agregado a inventario de inexistencias', 3000);
	                console.log(response)	               
                }    
      }

});