
var app = angular.module('filter',[]).controller('filtro',function($scope){
	$scope.productos =
	[
		{"nombre":"Gasolina UP","descripcion":"Gasolina sin procesamiento por galones.","precio":"15000","id":"ABC123"},
		{"nombre":"Plastico No 2","descripcion":"Plastico sin procesar especial para bolsas (metro cuadrado).","precio":"2000","id":"FMJ123"},
		{"nombre":"Azufre","descripcion":"Azufre puro (por kilo),","precio":"1000"},
		{"nombre":"Plastico No 1","descripcion":"Plastico procesado especial para carpas (metro cuadrado)","precio":"50000","id":"HQ2344"},
		{"nombre":"Jabon petronilo","descripcion":"Jabon puro sin olor.","precio":"500","id":"KSKALA"},
		{"nombre":"Destapador de tuberias.","descripcion":"Fabricado con petroleo, destapa cualquier tipo de tuberia.","precio":"7500","id":"ABC5335"},
		{"nombre":"Tela petronila","descripcion":"Tela hecha con petroleo sin procesar. (metro cuadrado)","precio":"10000","id":"002345"},
		{"nombre":"Thinner","descripcion":"Rebajador de pinturas. (litro)","precio":"1800"},
		{"nombre":"Aceite Motul para Aviones","descripcion":"Vuela sin preocupaciones (Galon)","precio":"2500000","id":"JAKS9022"},
	]
});


