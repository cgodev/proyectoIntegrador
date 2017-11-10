@extends('master')
@section('title','Reportes.')
@section('content')
<div class="container">
	<div class = "row">
         <form class = "col s12">
            <div class = "row">
            <center>
            	<h5>REPORTES.</h5>
            </center>
            
               <select>
                  <option value = "" disabled selected>Elige un reporte a crear.</option>
                  <option value = "1">Resumen anual ventas.</option>
                  <option value = "2">Top 10 Vendidos.</option>
                  <option value = "3">Producto menos vendido.</option>
               </select>
               <center>
               	<button class="waves-effect waves-yellow  btn-large">Generar reporte.</button>
               </center>
                              
            </div>
		 </form>
	 </div>	
</div>

@endsection