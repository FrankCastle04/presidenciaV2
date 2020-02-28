@extends('layout')

@section('title', $empleadItem->nombre)
@section('content')
	<div class="container">
		<div class="bg-white p-5 shadow rounded">
			<h2 class="display-6 mb-0">Datos del empleado</h2>

			<label>N°. de Empleado</label>
			<p class="text-secondary shadow rounded">
				{{ $empleadItem->noempleado }}
			</p>

			<label>Nombre</label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->nombre }}
			</p>

			<label>Apellidos</label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->apellidos}}
			</p>

			<label>Clave INE</label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->ine}}
			</p>

			<label>CURP</label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->curp}}
			</p>

			<label>Area de adscripcion</label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->areaadscr}}
			</p>

			<label>Cargo</label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->cargo}}
			</p>

			<label>RFC</label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->rfc}}
			</p>

			<h2 class="display-6 mb-0">Direccion</h2>

			<label>Calle</label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->calle}}
			</p>

			<label>Colonia</label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->colonia}}
			</p>

			<label>Codigo Postal</label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->cp}}
			</p>

			<label>Municipio</label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->municipio}}
			</p>

			<label>N° exterior</label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->noext}}
			</p>

			<label>N° interior</label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->noint}}
			</p>

			<h2 class="display-6 mb-0">Datos de contacto</h2>

			<label>Correo </label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->correo}}
			</p>

			<label>Num. de casa</label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->nocasa}}
			</p>

			<label>Número celular</label>
			<p class="text-secondary shadow rounded">
				{{  $empleadItem->nocelular}}
			</p>

			<div class="d-flex justify-content-between align-items-center">
				<a href="{{ route('empleados.index') }}">Regresar</a>

				@auth
					<div class="btn-group btn-group-sm">
						<a class="btn btn-primary"
							href="{{ route('empleados.edit', $empleadItem) }}">Editar</a>
						<a class="btn btn-danger"
							href="#"
							onclick="document.getElementById('delete-empleado').submit()"
							>Eliminar</a>
					</div>

					<form id="delete-empleado"
						 class="d-none"
						  method="POST"
						  action="{{ route('empleados.destroy', $empleadItem) }}">
						  @csrf @method('DELETE')
					</form>
					{{-- <form method="POST" action="{{ route('empleados.destroy', $empleadItem) }}"> --}}
			{{-- @csrf @method('DELETE') --}}
			{{-- <button>Eliminar</button> --}}
			{{-- </form> --}}
				@endauth
			</div>
		</div>
	</div>
@endsection