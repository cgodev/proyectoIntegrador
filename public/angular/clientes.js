var appClientes = angular.module('clientes',[]).controller('cli',function($scope,$http){
	$scope.clientes = [];

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
            cedula:document.getLementById("idCliente").value,
            nombre:document.getElementById("nombres").value,
            apellido:document.getElementById("apellidos").value,
            direccion:document.getElementById("direccion").value,
            telefono:document.getElementById("telefono").value,
            }    

        $http.post('http://localhost/apiRestCliente/public/api/clientes/agregar',usuario).then(function(response){
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

        var tipoPago = {
            cedCliente:document.getLementById("cedula").value,
            plazo:document.getElementById("plazo").value,
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

         var venta = {
            cedula:document.getLementById("idCliente").value,
            user:document.getElementById("userId").value,
            fecha:date,
            valor:document.getElementById("valorPago").value,
            }

         $http.post('http://localhost/apiRestVentas/public/api/ventas/agregar',venta).then(function(response){
                    Materialize.toast('Venta satisfactoria.', 3000);
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

});

var appTipoPago = angular.module('tipoPago',[]).controller('Tp',function($scope,$http){

    $scope.tipoPago = [];

    $http({
        method: 'GET',
        url: 'http://localhost/apiRestTipoPago/public/api/tipoPago'
    }).then(function successCallback(response) {
        $scope.tipoPago = response.data;
        console.log($scope.tipoPago);
        
    }, function errorCallback(response) {
        Materialize.toast('HA OCURRIDO UN ERROR AL CONSULTAR LA BASE DE DATOS', 4000);
    });

    $scope.editPago = function(){

             var f = new Date();
             var date = f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
            
            var tipoPago = {
                cedCliente:document.getLementById("idCliente").value,
                plazo:document.getElementById("plazo").value,
                fecha:date,
                tipo:document.getElementById("tipoPago").value,
                estado:document.getElementById("estado").value, 
                }


            $http.post('http://localhost/apiRestTipoPago/public/api/tipoPago/actualizar/' + tipoPago.cedCliente ,tipoPago).then(function(response){
                Materialize.toast('Pago modificado correctamente.', 4000);
            },function errorCallback(response){
                Materialize.toast('Ha ocurrido un error: ' + response.status, 4000);
            })
        }


    $scope.deletePago = function(){


            $http.delete('http://localhost/apiRestPago/public/api/tipoPago/borrar/'+tipoPago.cedCliente).then(function(response){
                Materialize.toast('Producto eliminado satisfactoriamente.', 3000);
            },function errorCallback(response){
                Materialize.toast('Ha ocurrido un error: ' + response.status, 3000);
            })
        }

    $scope.confirmDelete = function(){
            var $toastContent = $('<span>¿Esta seguro de eliminar el pago?</span>').add($('<button class="btn-flat toast-action ng-click="deletePago()">Acepto</button>'));
            Materialize.toast($toastContent, 10000);
        }  




});

var appVentas = angular.module('ventas',[]).controller('ven',function($scope,$http){

    $scope.ventas = [];

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