@extends('layout')

@section('title', 'Agregar empleado')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">


				@include('partials.validation-errors')

				<form class="bg-white py-3 px-4 shadow rounded"
					method="POST"
					action="{{ route('empleados.update', $empleadItem) }}">
					 @method('PATCH')
					 <h1>Editar empleado</h1>
					@include('empleados._form', ['btnText' => 'Actualizar'])

				</form>
			</div>
		</div>
	</div>
@endsection