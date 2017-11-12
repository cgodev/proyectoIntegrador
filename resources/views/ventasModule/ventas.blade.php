@extends('master')
@section('title','Ventas.')
@section('content')
<div class="section">
	<center>
	<div class="container" ng-app="filter"  ng-controller="filtro">
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
      <div class="col s12 m6" ng-repeat="items in productos | filter:termino ">
      	<div class="card blue-grey darken-1" >
            <div class="card-content white-text">
            <center>
            	<span class="card-title">@{{items.nombre}}</span>
            </center>
              <p>@{{items.id}}</p>
              <p>@{{items.descripcion}}</p>
              <p>@{{items.precio | currency}}</p>
            </div>
            <div class="card-action">
              <a class="modal-action modal-close waves-effect waves-blue btn-flat" onclick="alert('Producto agregado al carro.')">Agregar al carro</a>
            </div>
         </div>
      </div>
      
      
    </div>
	</div>

	</center>
</div>


<div class="container">
	 <!-- Modal Trigger -->
  <center>
  	<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Facturar venta.</a>	
  </center>
  

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
    	<center>
    		<h4>Datos para la facturación.</h4>		
    	</center>
    	<div class="nav-wrapper">
      	<form>
        	<div class="input-field">
          		<input id="search" type="search" required>
          		<label class="label-icon" for="search"><i class="material-icons">search</i></label>
          		<i class="material-icons">close</i>
        	</div>
      	</form>
    	</div>


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
    
  </div>
</div>
		
	            	
	    
</div>	

@endsection