<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield ('title') </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script> 
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular.js"></script>

	
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<script src="{{ asset('/angular/filtro.js') }}"></script>
	<script src="{{ asset('/js/venta.js') }}"></script>
	<script src="{{ asset('/js/reportes.js') }}"></script>
	<script src="{{ asset('/js/forms.js') }}"></script>
	

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	
	

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

	<div class="preloader-background">
	<div class="preloader-wrapper big active">
		<div class="spinner-layer spinner-blue-only">
			<div class="circle-clipper left">
				<div class="circle"></div>
			</div>
			<div class="gap-patch">
				<div class="circle"></div>
			</div>
			<div class="circle-clipper right">
				<div class="circle"></div>
			</div>
		</div>

	</div>
	</div>
	@include('recursos.navbar')
	@yield('content')
	@include('recursos.footer')
</body>
</html>