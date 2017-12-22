
var app = angular.module('filter',[]).controller('filtro',function($http,$scope){
	$scope.carrito = [];
	$scope.productos;
	$scope.clientes = [];
	$scope.ventas = [];

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

    //Consumiendo Todos los clientes
    $http({
        method: 'GET',
        url: 'http://localhost/apiRestCliente/public/api/clientes'
    }).then(function successCallback(response) {
        $scope.clientes = response.data;
        console.log($scope.clientes);
        
    }, function errorCallback(response) {
        Materialize.toast('HA OCURRIDO UN ERROR AL CONSULTAR LA BASE DE DATOS', 4000);
    }); 


    $scope.publicCliente = function(){

        var cliente = {
            cedula:document.getElementById("idCliente").value,
            nombre:document.getElementById("nombres").value,
            apellido:document.getElementById("apellidos").value,
            direccion:document.getElementById("direccion").value,
            telefono:document.getElementById("telefono").value,
            }    

        $http.post('http://localhost/apiRestCliente/public/api/clientes/agregar',cliente).then(function(response){
                    Materialize.toast('cliente agregado satisfactoriamente.', 3000);
                    console.log(response);
                },function errorCallback(response){
                    Materialize.toast('Ha ocurrido un error: ' + response.status, 3000);
                })

        
        var f = new Date();
        var date = f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();

        var est;
        if(document.getElementById("tipoPago").value == "credito")
        {
            est = true;
        }
        else
            est = false;

         var venta = {
            cedula:document.getElementById("idCliente").value,
            user:document.getElementById("userId").value,
            fecha:date,
            valor:document.getElementById("ValorPago").value,
            }

         $http.post('http://localhost/apiRestVentas/public/api/ventas/agregar',venta).then(function(response){
                    Materialize.toast('Venta satisfactoria.', 3000);
                    console.log(response);
                },function errorCallback(response){
                    Materialize.toast('Ha ocurrido un error: ' + response.status, 3000);
                })


          var tipoPago = {
            cedCliente:document.getElementById("idCliente").value,
            //plazo:document.getElementById("plazo").value,
            fecha:date,
            tipo:document.getElementById("tipoPago").value,
            estado:est,
            }    

        $http.post('http://localhost/apiRestTipoPago/public/api/tipoPago/agregar',tipoPago).then(function(response){
                    Materialize.toast('pago agregado satisfactoriamente.', 3000);
                    console.log(response);
                },function errorCallback(response){
                    Materialize.toast('Ha ocurrido un error: ' + response.status, 3000);
                })                      
        }

        $scope.editCliente = function(){
        var cliente = {
            cedula:document.getElementById("idCliente2").value,
            nombre: document.getElementById("nombre2").value,
            apellido:document.getElementById("apellidos2").value,
            direccion:document.getElementById("direccion2").value,
            telefono:document.getElementById("telefono2").value, 
        }

        $http.post('http://localhost/apiRestCliente/public/api/clientes/actualizar/' + cliente.cedula ,cliente).then(function(response){
            Materialize.toast('Cliente modificado correctamente.', 4000);
        },function errorCallback(response){
            Materialize.toast('Ha ocurrido un error: ' + response.status, 4000);
        })
    }

     $scope.deleteCliente = function(){


        $http.delete('http://localhost/apiRestCliente/public/api/clientes/borrar/'+cliente.cedula , cliente).then(function(response){
            Materialize.toast('Producto eliminado satisfactoriamente.', 3000);
        },function errorCallback(response){
            Materialize.toast('Ha ocurrido un error: ' + response.status, 3000);
        })
    }

    $scope.confirmDelete = function(){
        var $toastContent = $('<span>¿Esta seguro de eliminar el cliente?</span>').add($('<button class="btn-flat toast-action ng-click="deleteCliente()">Acepto</button>'));
        Materialize.toast($toastContent, 10000);
    }       




    //Consumiendo la apiRest de proveedores y productos al tiempo
    $scope.publicProduct = function(){
    	//Preparando y añadiendo el producto.
    	$scope.proveedores = [];
    	var producto = {
    		"codigo" : document.getElementById("codigo").value,
    		"nombre": document.getElementById("nombre").value,
    		"cantidad": document.getElementById("cantidad").value,
    		"costoCompra": document.getElementById("compra").value,
    		"precio": document.getElementById("venta").value,
    		"descripcion": document.getElementById("descripcion").value,
    		"nitProveedor": document.getElementById("idProv").value	
    	};

    	$http.get('http://localhost/apiRestProveedores/public/api/proveedores').then(function(respuesta){
    		$scope.proveedores = respuesta.data;
    	})


	    var provs = $scope.proveedores;
	    var validate = true;
	    console.log(provs.length);

	    for (var i = 0; i < provs.length; i++) {
	        if(provs[i].nit === producto.nitProveedor)
	        {
	        	validate = false;
	        }
	   	}

	   	//validamos si el proveedor existe o no para hacer la transaccion respectiva.
	   	if(validate)
	   	{
	   		console.log("is true");
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

	   		//publica el producto y el proveedor
	   	}
	   	else{
	   		//publica solo el producto
	   		console.log("is false");
	   		var producto = {
	   			codigo:document.getElementById("codigo").value,
				nitProveedor: document.getElementById("idProv").value,
				nombre: document.getElementById("nombre").value,
				descripcion : document.getElementById("descripcion").value,
				cantidad: document.getElementById("cantidad").value,
				precio: document.getElementById("venta").value,
				costoCompra: document.getElementById("compra").value
	   		}

	   		$http.post('http://localhost/apiRestAlmacen/public/api/productos/add',producto).then(function(response){
	   			console.log("Transaccion Satisfactoria producto");
	   			console.log(response);
	   			promesa();
	   		})

	   	}     	
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

	$http({
        method: 'GET',
        url: 'http://localhost/apiRestVentas/public/api/ventas'
    }).then(function successCallback(response) {
        $scope.ventas = response.data;
        console.log($scope.ventas);
        
    }, function errorCallback(response) {
        Materialize.toast('HA OCURRIDO UN ERROR AL CONSULTAR LA BASE DE DATOS', 4000);
    });

    $scope.editVenta = function(){

             var f = new Date();
             var date = f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
            
            var venta = {
            cedula:document.getLementById("idCliente").value,
            user:document.getElementById("userId").value,
            fecha:date,
            valor:document.getElementById("valorPago").value,
            }


            $http.post('http://localhost/apiRestVentas/public/api/ventas/actualizar/' + ventas.cedCliente ,venta).then(function(response){
                Materialize.toast('Pago modificado correctamente.', 4000);
            },function errorCallback(response){
                Materialize.toast('Ha ocurrido un error: ' + response.status, 4000);
            })
        }


    $scope.deleteVenta = function(){


            $http.delete('http://localhost/apiRestVentas/public/api/ventas/borrar/'+ventas.cedCliente).then(function(response){
                Materialize.toast('Venta eliminada satisfactoriamente.', 3000);
            },function errorCallback(response){
                Materialize.toast('Ha ocurrido un error: ' + response.status, 3000);
            })
        }

    $scope.confirmDelete = function(){
            var $toastContent = $('<span>¿Esta seguro de eliminar la venta?</span>').add($('<button class="btn-flat toast-action ng-click="deletePago()">Acepto</button>'));
            Materialize.toast($toastContent, 10000);
        } 
});


