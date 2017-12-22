@extends('master')
@section('title','Inventario.')
@section('content')
<div class="section" ng-app ='filter' ng-controller = 'filtro'>
  <script type="text/javascript">
    Materialize.toast('RECUERDE REALIZAR PEDIDOS DE LOS PRODUCTOS AGOTADOS!', 6000);  
  </script>
  <center>
    <h1>BIENVENIDO AL ALMACEN DE PRODUCTOS.</h1>
  </center>
  
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
                     type = "text" class = "validate" required/>
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
                  <input id = "cantidad" type = "number" placeholder = "cantidad."
                     class = "validate" required />          
               </div>


               <div class = "input-field col s6">
               <i class="material-icons prefix" >attach_money</i>      
                  <label for = "compra">Precio de compra.</label>
                  <input id = "compra" type = "number" placeholder = "Precio."
                     class = "validate" required />          
               </div>

               <div class = "input-field col s6">
               <i class="material-icons prefix" >attach_money</i>      
                  <label for = "venta">Precio de venta.</label>
                  <input id = "venta" type = "number" placeholder = "precio."
                     class = "validate" required />          
               </div>

               <div class = "input-field col s6">
                  <i class="material-icons prefix">description</i>
                  <input placeholder = "Descripcion del producto" id = "descripcion"
                     type = "text" class = "validate" required/>
                  <label for = "descripcion">Descripcion.</label>
               </div>

            </div>
            
            <div class = "row">
            <center>
               <h5>Registro de proveedor.</h5>
               <div class = "input-field col s6">
               <i class="material-icons prefix">person_pin</i>
                  <input placeholder = "Nombre" id = "nombreProv" type = "text"
                     class = "validate" required>
                  <label for = "nombreProv">Nombre Proveedor</label>
               </div>
               <div class = "input-field col s6">
                  <i class = "material-icons prefix">mode_edit</i>
                  <input placeholder = "Nit o cedula" id = "idProv" type = "text"
                     class = "validate" required>
                  <label for = "idProv">Nit o cedula</label>
               </div>
               <div class = "input-field col s6">
                  <i class = "material-icons prefix">mode_edit</i>
                  <input placeholder = "Direccion" id = "dirProv" type = "text"
                     class = "validate" required>
                  <label for = "dirProv">Direccion</label>
               </div>
               <div class = "input-field col s6">
                  <i class = "material-icons prefix">mode_edit</i>
                  <input placeholder = "Telefono" id = "telProv" type = "text"
                     class = "validate" required>
                  <label for = "telProv">Telefono</label>
               </div>
              <div class="row">
                <h6>Consulte un proveedor</h6>
                <div class="col s12">
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">textsms</i>
                      <input type="text" id="autocomplete-input" class="autocomplete">
                      <label for="autocomplete-input">Consulte un proveedor.</label>
                    </div>
                  </div>
                </div>
            </div>
            <center>
              <button class="btn waves-effect waves-light" type="submit" name="action" ng-click="publicProduct()" >Registrar producto.
                <i class="material-icons right">send</i>
              </button>             
         </form>
    </div>
   </div>
   
	</div>
  <div class="row">
    <div class="col s6">
     <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; ; border: 10px solid #EEE;">
     <center>
       <h5>Productos agotados.</h5>
     </center>
        <div class="col s12 collection">
          <a href="#!" class="collection-item"><span class="badge red">Cantidad</span>Codigo</a>
        </div>
     </div>
   </div>
  </div>
	</div>

<div class="divider"></div>
<<<<<<< HEAD
<div class="section">
=======
<div class="section" ng-app="filter" ng-controller="filtro">
>>>>>>> 17b38c42744968e52c570008d4114b63fb364374
  <center>
    <a class="waves-effect waves-light btn modal-trigger" href="#modalProductos" onclick="Materialize.toast('¡SOLO MODIFIQUE LOS CAMPOS DESEADOS, LOS DEMAS DEBEN PERMANECER IGUAL!',4000)">Bodega de Productos.</a>
    <a class="waves-effect waves-light btn modal-trigger" href="#modalProveedores" onclick="Materialize.toast('¡SOLO MODIFIQUE LOS CAMPOS DESEADOS, LOS DEMAS DEBEN PERMANECER IGUAL!',4000)">Proveedores.</a>  
  </center>
</div>
<!-- Se declaran todos los modales -->
<div id="modalProductos" class="modal" ng-app="filter" ng-controller="filtro">
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
            <i class = "material-icons prefix">local_drink</i>
            <input placeholder = "Nombre producto." id = "nombre2"
            type = "text" class = "validate" required value="@{{items.nombre}}"/>
            <label for = "nombre2">Nombre producto.</label>
          </center>
<<<<<<< HEAD
          <p>@{{items.codigo}}</p>
          <p>@{{items.descripcion}}</p>
          <p>@{{items.precio | currency}}</p>
        </div>
        <div class="card-action">
          <a href="#" class="modal-action modal-close waves-effect waves-yellow btn">Editar</a>
          <a href="#" class="modal-action modal-close waves-effect waves-yellow btn" onclick="confirm();">Eliminar</a>

          <a class="waves-effect waves-light btn modal-trigger" href="#modalDelete">Eliminar</a>
              <div id="modalDelete" class="modal">
                <div class="modal-content">
                  <center>
                    <h4 id="destroy">¿ESTA SEGURO QUE DESEA ELIMINAR?</h4>
                  </center>
                  <div class="modal-footer">
                    <center>
                      <a href="#!" class="modal-action modal-close waves-effect waves-red btn">Confirmar</a>  
                    </center>
                  </div>
                </div>
              </div>
=======
          <!-- Se declaran los atributos de los productos productos -->
          <i class = "material-icons prefix">local_drink</i>
          <input placeholder = "Nombre producto." id = "codigo2"
          type = "text" class = "validate" required value="@{{items.codigo}}"/>
          <label for = "codigo2">Codigo producto.</label>

          <i class = "material-icons prefix">local_drink</i>
          <input placeholder = "Nombre producto." id = "descripcion2"
          type = "text" class = "validate" required value="@{{items.descripcion}}"/>
          <label for = "descripcion2">Nombre producto.</label>

          <i class = "material-icons prefix">local_drink</i>
          <input placeholder = "Nombre producto." id = "venta2"
          type = "number" class = "validate" required value="@{{items.precio | currency}}"/>
          <label for = "venta2">Precio de venta.</label>

          <i class = "material-icons prefix">local_drink</i>
          <input placeholder = "Nombre producto." id = "compra2"
          type = "number" class = "validate" required value="@{{items.costoCompra | currency}}"/>
          <label for = "compra2">Costo de compra.</label>

          <i class = "material-icons prefix">local_drink</i>
          <input placeholder = "Nombre producto." id = "cantidad2"
          type = "number" class = "validate" required value="@{{items.cantidad}}"/>
          <label for = "cantidad">Cantidad disponible.</label>

          <i class = "material-icons prefix">local_drink</i>
          <input placeholder = "Nombre producto." id = "idProv2"
          type = "text" class = "validate" required value="@{{items.nitProveedor}}"/>
          <label for = "idProv2">Dato proveedor.</label>
        </div>
        <div class="card-action">
          <a href="#" class="modal-action modal-close waves-effect waves-yellow btn" ng-click="editProduct()">Editar</a>
          <a href="#" class="modal-action modal-close waves-effect waves-yellow btn" ng-click="confirmDeleteProd()">Eliminar</a>
>>>>>>> 17b38c42744968e52c570008d4114b63fb364374
        </div>
      </div>
    </div>            
  </form>
  </div>
  </div>
</div>

<!-- Modal Structure -->
  <div id="modalProveedores" class="modal modal-fixed-footer" ng-app = "filter" ng-controller="filtro">
    <div class="modal-content">
      <center>
        <h3>Proveedores.</h3>
        <h4>Se presenta la lista de proveedores existentes.</h4>
      </center>
      
      <ul class="collapsible" data-collapsible="accordion" ng-repeat = 'items in proveedores'>
        <li>
          <div class="collapsible-header">
            <i class="material-icons">filter_drama</i>
            @{{items.nombre}}
            <span class="new badge">@{{items.nit}}</span></div>
          <div class="collapsible-body">
            <p>@{{items.direccion}}</p>
            <p>@{{items.telefono}}</p>
          </div>
        </li>
      </ul>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-light btn">Volver</a>
    </div>
  </div>
@endsection