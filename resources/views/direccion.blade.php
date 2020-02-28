@extends('layout')

@section('title', 'Empleados')
@section('content')
 	<h1>Direccion</h1>

 	<form method="POST" action="{{ route('about') }}">
 		@csrf
 		<input name="municipio"
 		placeholder="Municipio"
 		value="Mexicaltzingo"><br>

 		<input name="localidad"
 		placeholder="Localidad"
 		value="Mexicaltzingo"><br>

 		<input name="calle"
 		placeholder="Calle"
 		value="Calzada del panteon"><br>

 		<input name="colonia"
 		placeholder="Colonia"
 		value="La Estacion"><br>

 		<input name="codigopostal"
 		placeholder="Codigo Postal"
 		value="52185"><br>

 		<input name="noext"
 		placeholder="No. Ext"
 		value="210"><br>

 		<input name="noint"
 		placeholder="No. Int"><br>

 		<button>Siguiente</button>
 	</form>

@endsection

