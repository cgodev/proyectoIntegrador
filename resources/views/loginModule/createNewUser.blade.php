@extends('loginModule/masterLogin')
@section('title','Crear un usuario.')
@section('content')
<div class="section">
<center>
<div class="container">
<div class="z-depth-1 grey lighten-4 row" style="display: inline-block; ; border: 1px solid #EEE;">

	<div id="register" class="col s12">
		<form class="col s12">
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
						<input id="area" type="text" class="validate">
						<label for="area">Area empresarial.</label>
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
				<center>
					<button class="btn waves-effect waves-light teal" type="submit" name="action">Registrar.</button>
				</center>
			</div>
		</form>
	</div>
			</div>
		</div>
	</div>
	</center>
	<div class="section"></div>
    <div class="section"></div>
</div>
@endsection