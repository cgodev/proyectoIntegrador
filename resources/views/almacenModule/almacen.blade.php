@extends('master')
@section('title','Inventario.')
@section('content')
<div class="section " >
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
               <i class="material-icons prefix" >attach_money</i>      
                  <label for = "compra">Precio de compra.</label>
                  <input id = "compra" type = "text" placeholder = "Precio."
                     class = "validate" required />          
               </div>

               <div class = "input-field col s6">
               <i class="material-icons prefix" >attach_money</i>      
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
                  <input placeholder = "Nit o cedula" id = "idProv" type = "text"
                     class = "validate">
                  <label for = "idProv">Nit o cedula</label>
               </div>

              <div >
                <a class='dropdown-button btn' href="#" data-beloworigin="false" data-activates='dropdown1'>PROVEEDORES EXISTENTES</a>

                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                  <center>
                    <li><a href="#"><span class="badge">Ricardo Montolivo</span></a></li>
                    <li><a href="#"><span class="badge">Ricardo Quaresma</span></a></li>
                    <li><a href="#"><span class="badge">Cristiano Ronaldo</span></a></li>
                    <li><a href="#"><span class="badge">Lionel Messi</span></a></li>
                  </center>
                </ul>
              </div>

            </div>
            <center>
              <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                <i class="material-icons right">send</i>
              </button>             
            </center>
              
         </form>
    </div>
      
   </div>

    

            </center>
	</div>
	</div>
  <div class="section">
  <center>
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1" onclick="destruir()">CONSULTAR PRODUCTOS DE ALMACEN</a>



  <div class="col s6"  ng-app="filter" ng-controller="filtro">
    <div id="modal1" class="modal">
      <div class="modal-content">
          
       <form class="navbar-form" role="search">
       <div class="input-group">
       <input type="text" class="form-control" placeholder="Busqueda de productos." ng-model="termino">
       </div>
       </form>
          <div class="col s12 m6"  >
            <form>
                    <div class="col s12 m6">
                      <div class="card blue-grey darken-1" ng-repeat="items in productos | filter:termino" >
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
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal2")">Eliminar</a>


                        <div id="modal2" class="modal">
                            <div class="modal-content">
                              <center>
                                <h4 id="destroy">¿ESTA SEGURO QUE DESEA ELIMINAR?</h4>
                              </center>
                              <div class="modal-footer">
                                <center>
                                  <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Confirmar</a>  
                                </center>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>


                <div class="modal-footer">
                  <center>
                    <a href="" class="modal-action modal-close waves-effect waves-red btn-flat">Volver</a>  
                  </center>
                </div>
              </div>
              
            </form>
              
      </div>
    </div>
  </div>
  </center>
    
  
</div>


@endsection