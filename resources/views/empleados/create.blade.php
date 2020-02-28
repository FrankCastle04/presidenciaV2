@extends('layout')

@section('title', 'Agregar empleado')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">


				@include('partials.validation-errors')

				<form class="bg-white py-3 px-4 shadow rounded"
					method="POST"
					action="{{ route('empleados.store') }}">
					<h1 class="display-5">Agregar nuevo empleado</h1>
					<hr>
					@include('empleados._form', ['btnText' => 'Guardar'])

				</form>
			</div>
		</div>
	</div>
@endsection