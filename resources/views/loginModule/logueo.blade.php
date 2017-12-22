@extends('loginModule/masterLogin')
@section('title','Login')
@section('content')
<body ng-app="router" >
  <div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 150px;" src="images/logo.gif" />
      <div class="section"></div>

      <h5 class="indigo-text">Ingrese sus credenciales para acceder al aplicativo.</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div> 
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='id' id='id' />
                <label for='email'>Ingrese su id de acceso.</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Ingrese su contraseña.</label>
              </div>
              <label style='float: right;'>
                <a class='pink-text' onclick="Materialize.toast('Comunicate con el departamento de sistemas para resolverlo', 4000)"><b>¿Olvidaste tu contraseña?</b></a>
              </label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button href="#!requestLogin" type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Ingresar</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>
    <div class="section"></div>
    <div class="section"></div>
  </main>

  
</body>

@endsection