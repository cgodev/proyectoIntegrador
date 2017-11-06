<!DOCTYPE html>
<html>
<head>
	<title>@yield ('title') </title>

	<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script> 
	
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	
	<script src="{{ asset('/js/venta.js') }}"></script>
	

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script type="text/javascript">
		$(document).ready(function(){
	    $('.modal').modal({
	      dismissible: true, // Modal can be dismissed by clicking outside of the modal
	      opacity: .10, // Opacity of modal background
	      inDuration: 500, // Transition in duration
	      outDuration: 300, // Transition out duration
	      startingTop: '10%', // Starting top style attribute
	      endingTop: '10%', // Ending top style attribute
	    });
	 	 });
	</script>
</head>
<body>
	@include('recursos.navbar')
	@yield('content')
	@include('recursos.footer')
</body>
</html>