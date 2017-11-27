<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	
	<title>@yield ('title') </title>
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular.js"></script>

	
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<script src="{{ asset('/angular/filtro.js') }}"></script>
	<script src="{{ asset('/js/forms.js') }}"></script>
	<script src="{{ asset('/js/venta.js') }}"></script>
	<script src="{{ asset('/js/reportes.js') }}"></script>

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
<body ng-app="filter"  ng-controller="filtro">

	<div class="preloader-background" id="carga">
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
	@yield('content')
	@include('recursos.footer')
</body>
</html>