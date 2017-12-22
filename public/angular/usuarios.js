var appUsers = angular.module('users',[]).controller('usr',function($scope,$http){
	$scope.usuarios = [];

	$http({
        method: 'GET',
        url: 'http://localhost/apiRestUsuarios/public/api/usuario'
    }).then(function successCallback(response) {
        $scope.usuarios = response.data;
        console.log($scope.usuarios);
        
    }, function errorCallback(response) {
        Materialize.toast('HA OCURRIDO UN ERROR AL CONSULTAR LA BASE DE DATOS', 4000);
    }); 


    $scope.publicUsuario = function(){

        var pass = document.getElementById("password").value;
        var pass2 = document.getElementById("password-confirm").value;
        if(pass === pass2){
            var dpto = "";
            if(document.getElementById("area").value === 1) dpto = "Ventas";
            else dpto = "Compras";
            var usuario = {
                id:document.getElementById("id").value,
                nombre: document.getElementById("nombres").value + document.getElementById("apellidos").value,
                area: dpto,
                pass: document.getElementById("password").value
            }

            $http.post('http://localhost/apiRestUsuarios/public/api/usuario/agregar',usuario).then(function(response){
                Materialize.toast('Usuario agregado satisfactoriamente.', 3000);
                console.log(response);
            },function errorCallback(response){
                Materialize.toast('Ha ocurrido un error: ' + response.status, 3000);
            })    
        }
        else Materialize.toast('LAS CONTRASEÑAS NO COINCIDEN.', 3000);
        
    }


});