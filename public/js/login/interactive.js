$(document).ready(function(){
	Materialize.toast('ESTAS EN MODO SUPER USUARIO: ADMINISTRA BIEN LAS CREDENCIALES DE TUS USUARIOS!', 6000)
	$('.modal').modal({
	     dismissible: true, // Modal can be dismissed by clicking outside of the modal
	    opacity: .10, // Opacity of modal background
	    inDuration: 500, // Transition in duration
	    outDuration: 300, // Transition out duration
	    startingTop: '10%', // Starting top style attribute
	    endingTop: '10%', // Ending top style attribute
	});
	$('select').material_select();


});