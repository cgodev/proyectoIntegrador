  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });

function destruir()
{
	var destroy = $(document).getElementById(producto).value;
	console.log('destroy');
 	document.getElementById('destroy').innerHTML= "¿Esta seguro que desea eliminar" + destroy +"?";	
}
 