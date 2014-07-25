<!DOCTYPE html>
<html lan="es">
<head>
	<title>Primer Crud Larevel</title>
	<meta charset="utf-8">
	{{ HTML::style('css/bootstrap.min.css') }}
</head>
<body>
	<div class="container">
		<div class="header">
			<ul class="nav nav-pills pull-right">				
				<li class="dropdown">
					 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personas <b class="caret"></b></a>
					 <ul class="dropdown-menu">
					 	<li>{{ HTML::link('personas', 'Lista de Personas') }}</li>
						<li>{{ HTML::link('personas/create', 'Agregar Persona') }}</li>	
					 </ul>
				</li>
				<li class="dropdown">
					@if(Auth::check())
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->username }}  <b class="caret"></b></a>
						 <ul class="dropdown-menu">
						 	<li>{{ HTML::link('usuarios/logout', 'Logout') }}</li>							
						 </ul>
					@else
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario <b class="caret"></b></a>
						 <ul class="dropdown-menu">
						 	<li>{{ HTML::link('login', 'Login') }}</li>
							<li>{{ HTML::link('usuarios/registrar', 'Registrar') }}</li>	
						 </ul>
					@endif
				</li>												
			</ul>
			<a href="{{ URL::to('/') }}"><h3 class="text-muted">Inicio</h3></a>
		</div>
		
		@yield('contenido')

		<div class="footer">
			<p>&copy; Norwin Guerrero</p>
		</div>
	</div>

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

	{{ HTML::script('js/bootstrap.min.js') }}

</body>
</html>