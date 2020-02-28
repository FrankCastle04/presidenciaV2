@extends('layout')

@section('title', 'Empleado')
@section('content')
 	<h1>Empleado</h1>
 	<form method="POST" action="{{ route('about') }}">
 	@csrf
 	<label>Seleccione el área de adscripcion a la que pertenece</label><br>
 	<select name="area" id="area">
 			<option>
 					Presidencia
 			</option>
 			<option>
 					Secretaria del Ayuntamiento
 			</option>
 					Control Patrimonial
 			<option>
 					Archivo
 			</option>
 			<option>
 					Sindicatura
 			</option>
 			<option>
 					Regidurias
 			</option>
 			<option>
 					Comunicacion Social
 			</option>
 			<option>
 					Direccion de desarrollo economico
 			</option>
 			<option>
 					Coordinacion del instituto para la proteccion de los derechos de las mujeres
 			</option>
 			<option>
 					Direccion de ecologia y medio ambiente
 			</option>
 			<option>
 					Catastro
 			</option>
 			<option>
 					Planeacion y transparencia
 			</option>
 			<option>
 					Salud y poblacion
 			</option>
 			<option>
 					Desarrollo social
 			</option>

 	</select>
 	<br>
 	<input name="puesto"
 	placeholder="Puesto"><br>
 	<button>Siguiente</button>
 </form>
@endsection