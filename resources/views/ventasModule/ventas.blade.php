@extends('master')
@section('title','Ventas.')
@section('content')
<div class="section">
	<center>
	<div class="container">
	<div class = "row">
		<div class="col-sm-3 col-md-3 pull-right">
		    <form class="navbar-form" role="search">
		        <div class="input-group">
		        	<i class="material-icons prefix">search</i>
		            <input type="text" class="form-control" placeholder="Busqueda por nombre o id del producto." name="srch-term" id="srch-term">
		            <label for="srch-term">Filtro para busqueda de productos</label>
		            <div class="input-group-btn">
		                <button class="btn btn-default" type="submit">
		                    <span>Filtrar</span>
		                </button>
		            </div>
		        </div>
		    </form>
		</div>
	</div>
	</div>

	<!-- Modal Trigger -->
	<a href="#modal1" class="btn modal-trigger">Ir a caja.</button>
	
	</center>

		
	<div class="container">
		  
	
		
	<!-- Modal Structure -->
	<div class="container">
	  <div id="modal1" class="modal">

	    <div class="modal-content">
	      <div class="modal-header">
	      	<h4>Datos para la facturación.</h4>
	      </div>

	      <div class="row">
	          <div class="row modal-form-row">
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
	          </div>             
	      </div>
	    </div>
	    <div class="modal-footer">
      		<a href="" class="modal-action modal-close waves-effect waves-green btn-flat ">Registrar la venta</a>
    	</div>
	  </div>
	</div>	
</div>

@endsection