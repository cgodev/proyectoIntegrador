@extends('master')
@section('title','Ventas.')
@section('content')
@include('recursos.navbarVentas')
<div class="section">
	<div class="row">
		<div class="col s12 m4 l5">
			<h3>Top 10 productos mas vendidos.</h3>
			<div class="collection">
			    <a href="#!" class="collection-item"><span class="badge">1</span>Alan</a>
			    <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
			    <a href="#!" class="collection-item">Alan</a>
			    <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a>
			</div>
			<a class="waves-effect waves-light btn modal-trigger" href="#modalClientes">Clientes.</a>
  			<a class="waves-effect waves-light btn modal-trigger" href="#modalVentas">Ventas.</a>	
		</div>
		<div class="col s12 m4 l5" >
			<h3>Tu Carro de compras</h3>
			<p>A continuacion un listado de lo que has comprado hasta ahora:</p>
			<div class="collection" ng-repeat="items in carrito">
			  <a class="collection-item"><span class="badge">@{{items.id}}</span>@{{items.nombre}}</a>
			</div>
  			<a class="waves-effect waves-light btn modal-trigger" href="#modalProductos">Consultar productos.</a>
  			<a class="waves-effect waves-light btn modal-trigger" href="#modalFacturar">Facturar venta</a>
		</div>
	</div>
</div>

<div id="modalProductos" class="modal" >
  	<div class="modal-content">
  		<center>
  			<h2>Almacen de productos.</h2>
  			<div>
	  			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-floating btn-large"><i class="material-icons">assignment_return</i></a>	
	  		</div>
  			</center>
	<div class="container">
		<div class = "row">
			<div class="col-sm-3 col-md-3 pull-right">
				<form class="navbar-form" role="search">
					<div class="input-group">
					    <input type="text" class="form-control" placeholder="Busqueda por nombre o id del producto." name="srch-term" id="srch-term" ng-model="termino">
					</div>
				</form>
			</div>
		</div>
		<div class="row">
		    <div class="col s12 m6" ng-repeat="items in productos track by $index | filter:termino ">
				<div class="card blue-grey darken-1" >
					<div class="card-content white-text">
						<center>
						  	<span class="card-title" id=nombreProd>@{{items.nombre}}</span>
						</center>
						<p id="idProd">@{{items.id}}</p>
						<p>@{{items.descripcion}}</p>
						<p>@{{items.precio | currency}}</p>
						<div class="input-field">
						    <i class="material-icons">shopping_cart</i>
						    <input id="icon_prefix" type="number" class="validate" placeholder="Cantidad" ng-model="cantidad">
						</div>
					</div>
					<div class="card-action">
					    <a class="waves-effect waves-blue btn-flat" ng-click="addToCar(items)">Agregar al carro</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>		

<div id="modalFacturar" class="modal">
	<div class="modal-content">
		<center>
			<h4>Datos para la facturación.</h4>		
		</center>
		<div class="row">
			<div class="input-field col s6">
				<input id="idCliente" type="text" class="validate">
				<label for="idCliente">Cedula del cliente.</label>
			</div>
					          
			<div class="input-field col s6">
				<input id="nombres" type="text" class="validate">
				<label for="nombres">Nombres</label>
			</div>
					          
			<div class="input-field col s6">
				<input id="apellidos" type="text" class="materialize-textarea validate"></input>
				<label for="apellidos">Apellidos</label>
			</div>

			<div class="input-field col s6">
				<input id="direccion" type="text" class="materialize-textarea validate"></input>
				<label for="direccion">Dirección</label>
			</div>

			<div class="input-field col s6">
				<input id="telefono" type="text" class="materialize-textarea validate"></input>
				<label for="telefono">Telefono</label>
			</div>

			<div class="input-field col s6">
				<input id="tipoPago" type="text" class="materialize-textarea validate"></input>
				<label for="tipoPago">Tipo de Pago.</label>
			</div>

			<div class="input-field col s6">
				<input id="ValorPago" type="text" class="materialize-textarea validate"></input>
				<label for="ValorPago">Valor.</label>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Registrar la venta</a>
	</div>
</div>


<!-- Modal Structure -->
<div id="modalClientes" class="modal modal-fixed-footer">
	<div class="modal-content">
		<center>
			<h2>Consulta de clientes</h2>
		</center>
        <ul class="collapsible" data-collapsible="accordion">
		  <li>
		    <div class="collapsible-header">
		      <i class="material-icons">filter_drama</i>
		      First
		      <span class="new badge">4</span></div>
		    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
		  </li>
		</ul>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-floating btn-large"><i class="material-icons">assignment_return</i></a>
    </div>
</div>

<div id="modalVentas" class="modal modal-fixed-footer">
	<div class="modal-content">
		<center>
			<h2>Consulta de facturas.</h2>
		</center>
        <ul class="collapsible" data-collapsible="accordion">
		  <li>
		    <div class="collapsible-header">
		      <i class="material-icons">filter_drama</i>
		      First
		      <span class="new badge">4</span></div>
		    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
		  </li>
		</ul>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-floating btn-large"><i class="material-icons">assignment_return</i></a>
    </div>
</div>
@endsection