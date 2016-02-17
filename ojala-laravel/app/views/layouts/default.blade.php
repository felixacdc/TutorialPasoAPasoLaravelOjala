<!DOCTYPE html>
<html lang="es">
<head>
	@include('includes.head')
</head>
<body>
	
	<div class="container">

		@include('includes.header')
		
		@yield('contenido')

		@include('includes.footer')

	</div>

</body>
</html>