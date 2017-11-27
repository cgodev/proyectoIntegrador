@extends('loginModule/masterLogin')
@section('title','Crear un usuario.')
@section('content')
<div class="section">
<center>
<img class="responsive-img" style="width: 150px;" src="images/logo.gif" />
<div class="container">
<div class="z-depth-1 grey lighten-4 row" style="display: inline-block; ; border: 1px solid #EEE;">

	<div id="register" class="col s12">
		<form class="col s12" method="post">
			<div class="form-container">
				<h3 class="teal-text" >Creacion de Usuario</h3>
				<div class="row">
					<div class="input-field col s6">
						<input id="nombres" type="text" class="validate">
						<label for="nombres">Nombres.</label>
					</div>
					<div class="input-field col s6">
						<input id="apellidos" type="text" class="validate">
						<label for="apellidos">Apellidos.</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<select>
						    <option value="" disabled selected>Seleccione un area</option>
						    <option value="1">Ventas</option>
						    <option value="2">Compras</option>
						</select>
						<label>Area</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" type="password" class="validate">
						<label for="password">Contraseña.</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password-confirm" type="password" class="validate">
						<label for="password-confirm">Confirme contraseña.</label>
					</div>
				</div>

				<div class="row">
					<center>
						<button class="btn waves-effect waves-light teal" type="submit" name="action">Registrar.</button>
					</center>
				</div>
				
				<div class="row divider"></div>

				<div class="row">
					<a class='btn waves-effect waves-yellow btn modal-trigger' href="#modalUsers"><b>Editar usuarios.</b></a>	
				</div>
			</div>
		</form>
	</div>
</div>
</div>
</div>



<!-- Se crea el modal para realizar la modificacion de un usuario -->

<div id="modalUsers" class="modal" >
  	<div class="modal-content">
  		<center>
  			<h2>Edicion de usuarios</h2>
  			<div>
	  			<a class="modal-action modal-close waves-effect waves-green btn-floating btn-large"><i class="material-icons">assignment_return</i></a>	
	  		</div>
  		</center>
		<div class="container">
			<div class = "row">
				<div class="col-sm-3 col-md-3 pull-right">
				    <form class="navbar-form" role="search">
						<div class="input-group">	
						    <input type="text" class="form-control" placeholder="Busqueda por nombre o id del usuario." name="srch-term" id="srch-term" ng-model="termino">
						</div>
					</form>
				</div>
			</div>

			<div class="row">
			   <ul class="collapsible" data-collapsible="accordion">
				  <li>
				    <div class="collapsible-header">
				      <i class="material-icons">filter_drama</i>
				      Usuario
				    </div>
				    <div class="collapsible-body">
					    <div class="row">
						    <form class="col s12">
						      <div class="row">
						        <div class="input-field col s6">
						          <i class="material-icons prefix">account_circle</i>
						          <input id="icon_prefix" type="text" class="validate">
						          <label for="icon_prefix">Nombre</label>
						        </div>
						        <div class="input-field col s6">
						          <i class="material-icons prefix">phone</i>
						          <input id="icon_telephone" type="tel" class="validate">
						          <label for="icon_telephone">Id de acceso</label>
						        </div>
						      </div>
						      <div class="row">
						        <div class="input-field col s6">
						          <i class="material-icons prefix">account_circle</i>
						          <input id="icon_prefix" type="text" class="validate">
						          <label for="icon_prefix">Contraseña</label>
						        </div>
						        <div class="input-field col s6">
								    <select>
								      <option value="" disabled selected>Seleccione un area</option>
								      <option value="1">Ventas</option>
								      <option value="2">Compras</option>
								    </select>
								    <label>Area</label>
								 </div>
						      </div>
						      <div class="row">
						      	<div>
						      	<center>
						      		<a class="waves-effect waves-green btn-floating btn-large"><i class="material-icons
						      		">edit</i></a>
						      		<a class="waves-effect waves-green btn-floating btn-large"><i class="material-icons
						      		">delete_forever</i></a>

						      	</center>
						      	</div>
						      </div>
						    </form>
						</div>
				    </div>
				  </li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection