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
		        	
		            <input type="text" class="form-control" placeholder="Busqueda por nombre o id del producto." name="srch-term" id="srch-term">
		 			<button class="btn btn-default" type="submit">
		                    <span>Filtrar</span>
		            </button>
		        </div>
		    </form>
		</div>
	</div>
	<div class="row">
      <div class="col s12 m6">
      	<div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Datos triviales</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
         </div>
      </div>
      <div class="col s12 m6">
      	<div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Datos triviales</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
         </div>
      </div>
      <div class="col s12 m6">
      	<div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Datos triviales</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
         </div>
      </div>
      <div class="col s12 m6">
      	<div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Datos triviales</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
         </div>
      </div>
      <div class="col s12 m6">
      	<div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Datos triviales</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
         </div>
      </div>
      <div class="col s12 m6">
      	<div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Datos triviales</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
         </div>
      </div>
      <div class="col s12 m6">
      	<div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Datos triviales</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
         </div>
      </div>
      <div class="col s12 m6">
      	<div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Datos triviales</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
         </div>
      </div>
      <div class="col s12 m6">
      	<div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Datos triviales</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
         </div>
      </div>
      <div class="col s12 m6">
      	<div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Datos triviales</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
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
  	<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Concretar venta.</a>	
  </center>
  

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
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
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Registrar la venta</a>
    </div>
  </div>
</div>
		
	            	
	    
</div>	

@endsection