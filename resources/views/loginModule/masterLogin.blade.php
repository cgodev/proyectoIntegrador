<!DOCTYPE html>
<html>
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
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.6/angular-route.js"></script>
	



	
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<script src="{{ asset('/js/login/interactive.js') }}"></script>
  	<script src="{{ asset('/js/forms.js') }}"></script>
  	<script src="{{ asset('/angular/usuarios.js') }}"></script>
  	<script src="{{ asset('/angular/filtro.js') }}"></script>
  	


</head>
<body>
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
</body>
</html>