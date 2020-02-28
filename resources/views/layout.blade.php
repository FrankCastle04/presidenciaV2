<!DOCTYPE html>
<html>
<head>
	<title> @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="/css/app.css">
	<script src="/js/app.js" defer></script>
	{{-- <style>
		.active a {
			color: red;
			text-decoration: none;
		}
	</style> --}}
</head>
<body>
	{{-- Esto de abajo dice la direccion de la clase nab.bar.php ubicada en resources/views/partials/nav-blade.php --}}
	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		<header>
			@include('partials.nav')
			@include('partials.session-status')
		</header>

		<main class="py-3">
			@yield('content')
		</main>
		<footer class="bg-white
						text-center
						text-black-50
						py-3
						shadow">
			{{ config('app.name') }} | Copyright @ Francisco Javier Morales Camacho {{ date('Y') }}
		</footer>
	</div>
</body>
</html>