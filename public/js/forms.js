$('.dropdown-button').dropdown({
           inDuration: 300,
           outDuration: 225,
           constrain_width: true, 
           hover: false, 
           gutter: 0, 
           belowOrigin: false 
           }
);

window.onload = function(){
  var contenedor = document.getElementById('carga');
  contenedor.style.visibility = 'hidden';
  contenedor.style.opacity = '0';
}

function addCar(){
  alert("Producto agregado al carro.");
}


$(document).ready(function(){
  function addCar(){
  alert("Producto agregado al carro.");
  }

});