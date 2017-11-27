
var app = angular.module('filter',[]).controller('filtro',function($scope){
	$scope.carrito = [];
	$scope.productos =
	[
		{"nombre":"Gasolina UP","descripcion":"Gasolina sin procesamiento por galones.","precio":"15000","id":"ABC123","cantidad":200},
		{"nombre":"Plastico No 2","descripcion":"Plastico sin procesar especial para bolsas (metro cuadrado).","precio":"2000","id":"FMJ123","cantidad":200},
		{"nombre":"Azufre","descripcion":"Azufre puro (por kilo),","precio":"1000","cantidad":200},
		{"nombre":"Plastico No 1","descripcion":"Plastico procesado especial para carpas (metro cuadrado)","precio":"50000","id":"HQ2344","cantidad":200},
		{"nombre":"Jabon petronilo","descripcion":"Jabon puro sin olor.","precio":"500","id":"KSKALA","cantidad":200},
		{"nombre":"Destapador de tuberias.","descripcion":"Fabricado con petroleo, destapa cualquier tipo de tuberia.","precio":"7500","id":"ABC5335","cantidad":200},
		{"nombre":"Tela petronila","descripcion":"Tela hecha con petroleo sin procesar. (metro cuadrado)","precio":"10000","id":"002345","cantidad":200},
		{"nombre":"Thinner","descripcion":"Rebajador de pinturas. (litro)","precio":"1800","id":"XD92920","cantidad":200},
		{"nombre":"Aceite Motul para Aviones","descripcion":"Vuela sin preocupaciones (Galon)","precio":"2500000","id":"JAKS9022","cantidad":200},
	]

	$scope.addToCar = function(item){
		console.log(item);
		var addToCar =  $scope.productos.indexOf(item); //Este es el numero del item en el array de la data.
		console.log($scope.cantidad);
		$scope.carrito.push($scope.productos[addToCar]);//Aca se construye el objeto para el carro de compras.
		delete productos[addToCar];
		for (var i = 0; i < $scope.productos.length; i++) {
			console.log($scope.productos[i]);
		}
	  	Materialize.toast('Producto agregado al carro.', 4000);//Notificacion del carro.
	}
});


