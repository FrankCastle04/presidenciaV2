@extends('layout')

@section('title', 'Empleado')
@section('content')

<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
			<h1 class="display-4 mb-0">Empleados</h1>

			</p>
			@auth
				<a class="btn btn-primary"
					href="{{ route('empleados.create') }}"
					>Agregar empleado
				</a>
			@endauth
	</div>
	<hr>
		<p class="lead text-secondary">
				Lista de empleados
		<ul class="list-group">        {{-- $projects as $project--}}
			@forelse($emplead as $empleadItem)
					<li class="list-group-item border-0 mb-3 shadow-sm">

							<a class="d-flex justify-content-between align-items-center"
								href="{{ route('empleados.show', $empleadItem) }}">
								<span class="text-secondary font-weight-bold">
									{{ $empleadItem->noempleado }}
								</span>

								<span class="text-black-50">
									{{$empleadItem->apellidos}}
									{{$empleadItem->nombre}}
								</span>
							</a>
				</li>
			@empty
				<li class="list-group-item border-0 mb-3 shadow-sm">
					No hay empleados por mostrar
				</li>
			@endforelse
			{{-- $projects ->links()--}}
			{{ $emplead->links() }}
		</ul>
</div>
@endsection