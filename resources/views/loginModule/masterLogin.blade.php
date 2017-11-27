<!DOCTYPE html>
<html>
<head>
	<title>@yield ('title') </title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<script src="{{ asset('/js/login/interactive.js') }}"></script>
  	<script src="{{ asset('/js/forms.js') }}"></script>

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