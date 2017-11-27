<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->  

    <script type="text/javascript">
      $(document).ready(function(){
        $(".button-collapse").sideNav();
      });

    </script>
  </head>
  <body>
    <nav>
      <div class="nav-wrapper light-green darken-4">
        <a href="#!" class="brand-logo">PETROLEOS S.S.</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/proyectoIntegrador/public/reportes">Reportes.</a></li>
          <li><a href="/proyectoIntegrador/public/ventas">Ventas</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="/proyectoIntegrador/public/reportes">Reportes.</a></li>
          <li><a href="/proyectoIntegrador/public/ventas">Ventas</a></li>
        </ul>
      </div>
    </nav>
  </body>