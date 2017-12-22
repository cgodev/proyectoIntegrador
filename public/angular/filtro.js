
var app = angular.module('filter',[]).controller('filtro',function($http,$scope){
	$scope.carrito = [];
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

    //Consumiendo la apiRest de proveedores y productos al tiempo
    $scope.publicProduct = function(){
    	//Preparando y añadiendo el producto.
    	$scope.proveedores = [];

    	$http.get('http://localhost/apiRestProveedores/public/api/proveedores').then(function(respuesta){
    		$scope.proveedores = respuesta.data;
    	})

	   	//validamos si el proveedor existe o no para hacer la transaccion respectiva.
	   		var proveedor = {
	   			nit: document.getElementById("idProv").value,
	   			nombre: document.getElementById("nombreProv").value,
	   			direccion: document.getElementById("dirProv").value,
	   			telefono: document.getElementById("telProv").value,
	   		}

	   		var producto = {
	   			codigo:document.getElementById("codigo").value,
				nitProveedor: document.getElementById("idProv").value,
				nombre: document.getElementById("nombre").value,
				descripcion : document.getElementById("descripcion").value,
				cantidad: parseInt(document.getElementById("cantidad").value),
				precio: parseFloat(document.getElementById("venta").value),
				costoCompra: parseFloat(document.getElementById("compra").value) 
	   		}

	   		$http.post('http://localhost/apiRestProveedores/public/api/proveedor/add',proveedor).then(function(response){
	   			console.log("Transaccion Satisfactoria proveedor");
	   			console.log(response);
	   		},function errorCallback(response){
	   			console.log("Fuck:" + response);
	   		})

			$http.post('http://localhost/apiRestAlmacen/public/api/productos/add',producto).then(function(response){
	   			console.log("Transaccion Satisfactoria producto");
	   			console.log(response);
	   			promesa();
	   		})	   		

	   	}     	
    


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


	var promesa = function(){
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

	}



	$scope.editProduct = function(){
		var producto = {
	   		codigo:document.getElementById("codigo2").value,
			nitProveedor: document.getElementById("idProv2").value,
			nombre: document.getElementById("nombre2").value,
			descripcion : document.getElementById("descripcion2").value,
			cantidad: parseInt(document.getElementById("cantidad2").value),
			precio: parseFloat(document.getElementById("venta2").value),
			costoCompra: parseFloat(document.getElementById("compra2").value) 
	   	}

	   	$http.put('http://localhost/apiRestAlmacen/public/api/productos/actualizar/' + producto.codigo ,producto).then(function(response){
	   		Materialize.toast('Producto modificado correctamente.', 4000);
	   	},function errorCallback(response){
	   		Materialize.toast('Ha ocurrido un error: ' + response.status, 4000);
	   	})
	};


	$scope.deleteProducto = function(){


        $http.delete('http://localhost/apiRestAlmacen/public/api/productos/destroy/'+producto.id , prodcuto).then(function(response){
            Materialize.toast('Producto eliminado satisfactoriamente.', 3000);
        },function errorCallback(response){
            Materialize.toast('Ha ocurrido un error: ' + response.status, 3000);
        })
    };

    $scope.confirmDeleteProd = function(){
        var $toastContent = $('<span>¿Esta seguro de eliminar el producto?</span>').add($('<button class="btn-flat toast-action ng-click="deleteProducto()">Acepto</button>'));
        Materialize.toast($toastContent, 10000);
    };



    //Transacciones para los proveedores
    $scope.proveedores = [];

	$http({
        method: 'GET',
        url: 'http://localhost/apiRestProveedores/public/api/proveedores'
    }).then(function successCallback(response) {
        $scope.proveedores = response.data;
        console.log($scope.proveedores);
    }, function errorCallback(response) {
        console.log("Error",response);
    }); 


    $scope.editProveedor = function(){
        var proveedor = {
            nit: document.getElementById("idProv").value,
            nombre: document.getElementById("nombreProv").value,
            direccion: document.getElementById("dirProv").value,
            telefono: document.getElementById("telProv").value,
        }

        $http.put('http://localhost/apiRestProveedores/public/api/proveedor/actualizar/' + proveedor.nit ,proveedor).then(function(response){
            Materialize.toast('Proveedor modificado correctamente.', 4000);
        },function errorCallback(response){
            Materialize.toast('Ha ocurrido un error: ' + response.status, 4000);
        })
    }


    $scope.deleteProveedor = function(){

        var proveedor = {
            nit: document.getElementById("idProv").value,
            nombre: document.getElementById("nombreProv").value,
            direccion: document.getElementById("dirProv").value,
            telefono: document.getElementById("telProv").value,
        }

        $http.delete('http://localhost/apiRestAlmacen/public/api/productos/destroy/'+proveedor.nit , proveedor).then(function(response){
            Materialize.toast('Proveedor eliminado satisfactoriamente.', 3000);
        },function errorCallback(response){
            Materialize.toast('Ha ocurrido un error: ' + response.status, 3000);
        })
    }

    $scope.confirmDeleteProv = function(){
        var $toastContent = $('<span>¿Esta seguro de eliminar el proveedor?</span>').add($('<button class="btn-flat toast-action ng-click="deleteProducto()">Acepto</button>'));
        Materialize.toast($toastContent, 10000);
    }
});