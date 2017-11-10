@extends('master')
@section('title','Inventario.')
@section('content')
<div class="section " ng-app="filter" ng-controller="filtro">
	<div class = "row">
   <div class="col s6">
    <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; ; border: 10px solid #EEE;">
       <form class = "col s12">
         <center>
            <h5>Agregar un nuevo producto.</h5>
         </center>
         
            <div class = "row">
               <div class = "input-field col s6">
                  <i class = "material-icons prefix">local_drink</i>
                  <input placeholder = "Nombre producto." id = "nombre"
                     type = "text" class = "validate" required />
                  <label for = "nombre">Nombre producto.</label>
               </div>
               
               <div class = "input-field col s6">
               <i class="material-icons prefix" >text_format</i>      
                  <label for = "codigo">Codigo.</label>
                  <input id = "codigo" type = "text" placeholder = "codigo"
                     class = "validate" required />          
               </div>

               <div class = "input-field col s6">
               <i class="material-icons prefix" >sort-numeric</i>      
                  <label for = "cantidad">Cantidad.</label>
                  <input id = "cantidad" type = "text" placeholder = "cantidad."
                     class = "validate" required />          
               </div>


               <div class = "input-field col s6">
               <i class="material-icons prefix" >sort-numeric</i>      
                  <label for = "compra">Precio de compra.</label>
                  <input id = "compra" type = "text" placeholder = "Precio."
                     class = "validate" required />          
               </div>

               <div class = "input-field col s6">
               <i class="material-icons prefix" >sort-numeric</i>      
                  <label for = "venta">Precio de venta.</label>
                  <input id = "venta" type = "text" placeholder = "precio."
                     class = "validate" required />          
               </div>

               <div class = "input-field col s6">
                  <i class="material-icons prefix">description</i>
                  <input placeholder = "Descripcion del producto" id = "descripcion"
                     type = "text"/>
                  <label for = "descripcion">Descripcion.</label>
               </div>

            </div>
            
            <div class = "row">
            <center>
               <h5>Registro de proveedor.</h5>
            
               
               <div class = "input-field col s6">
               <i class="material-icons prefix">person_pin</i>
                  <input placeholder = "Nombre" id = "nombreProv" type = "text"
                     class = "validate">
                  <label for = "nombreProv">Nombre Proveedor</label>
               </div>
            
            
            
               <div class = "input-field col s6">
                  <i class = "material-icons prefix">mode_edit</i>
                  <input id = "id" class = "validate"></input>
                  <label for = "id">Nit o cedula.</label>
               </div>

              
               <ul id = "dropdown" class = "dropdown-content">
               <center>
                  <li><span class="badge">Ricardo Montolivo</span></li>
                  <li><span class="badge">Ricardo Quaresma</span></li>
                  <li><span class="badge">Cristiano Ronaldo</span></li>
                  <li><span class="badge">Lionel Messi</span></li>
               </center>
               </ul>
               
               <a class = "btn dropdown-button" href = "#" data-activates = "dropdown">Lista de proveedores registrados.
                  <i class = "mdi-navigation-arrow-drop-down right"></i></a>
                     </div>           
         </form>
    </div>
      
   </div>

   <div class="col s6">

   <form class="navbar-form" role="search">
      <div class="input-group">
             
      <input type="text" class="form-control" placeholder="Busqueda por nombre o id del producto." name="srch-term" id="srch-term" ng-model="termino">
      
      </div>
   </form>
      <div class="col s12 m6 "  ng-repeat="items in productos | filter:termino | orderBy : 'nombre'" >
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
            <center>
              <span class="card-title" id="producto">@{{items.nombre}}</span>
            </center>
              <p>@{{items.id}}</p>
              <p>@{{items.descripcion}}</p>
              <p>@{{items.precio | currency}}</p>
            </div>
            <div class="card-action">
              <a href="#">Editar</a>
              <a class="waves-effect waves-light btn modal-trigger" href="#modal1" onclick="destruir()">Eliminar</a>


              <div id="modal1" class="modal">
                  <div class="modal-content">
                  <center>
                    <h4 id="destroy"></h4>   
                  </center>
                <div class="modal-footer">
                  <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Confirmar</a>
                </div>
              </div>




            </div>
          </div>
        </div>

            </center>
            </div>
            
               
            </div>
	</div>
   <center>
      <div class="row">
        
      </div>
   </center> 
	</div>
</div>


@endsection