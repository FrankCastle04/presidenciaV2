@extends('layout')

@section('title', 'Empleados')
@section('content')
 	<h1>Empleados</h1>

 	<form>
 	{{-- <form method="POST" action="{{ route('about') }}"> --}}
 		@csrf
 		<input name="noemp"
 		placeholder="No. de empleado"
 		value="1"><br>

 		<input name="name"
 		placeholder="Nombre"
 		value="Francisco Javier"><br>

 		<input name="apellidos"
 		placeholder="Apellidos"
 		value="Morales Camacho"><br>

 		<input name="ine"
 		placeholder="Clave INE"
 		value="MRCMFR951204H600"><br>

 		<input name="curp"
 		placeholder="Clave CURP"
 		value="MOCF951204HMCRMR07"><br>

 		<input name="gradoacade"
 		placeholder="Grado academico"
 		value="Ing. en Informatica"><br>
 	<button>Siguiente</button>
@endsection