var router = angular.module("router", ["ngRoute"]);

router.config(function($routeProvider,$http,$scope) {
  $routeProvider
  .when("/requestLogin", {
    //templateUrl : "../../resources/views/almacenModule/almacen.blade.php" aca deberia de colocar el codigo para 
    //redirigir si es valido el usuario. PERO NO FUNCIONA EL NG ROUTE :(
  })
  .when("/red", {
    templateUrl : "red.htm"
  })
  .when("/green", {
    templateUrl : "green.htm"
  })
  .when("/blue", {
    templateUrl : "blue.htm"
  });
});