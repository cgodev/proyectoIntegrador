$('.dropdown-button').dropdown({
           inDuration: 300,
           outDuration: 225,
           constrain_width: true, 
           hover: true, 
           gutter: 0, 
           belowOrigin: false 
           }
);

window.onload = function(){
  var contenedor = document.getElementById('carga');
  contenedor.style.visibility = 'hidden';
  contenedor.style.opacity = '0';
}


