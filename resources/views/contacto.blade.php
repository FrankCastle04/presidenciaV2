@extends('layout')

@section('title', 'Empleados')
@section('content')
 	<h1>Contacto</h1>
<form method="POST" action="{{ route('about') }}">
	@csrf

	<input type="email" name="correo"
	placeholder="Correo Electronico"
	value="franklamp09@gmail.com"><br>

	<input name="nocelular"
	placeholder="No. Celular"
	value="7229049931"><br>

	<input name="nocasa"
	placeholder="No. telefonico de Casa"
	value="2632982"><br>

	<button>Guardar</button>
	</form>

 @endsection