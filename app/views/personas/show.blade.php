@extends('tamplates.maintemplate')

@section('contenido')

<div class="jumbotron">
@if(!$persona)
	<h1>La persona no existe</h1>
</div>	
@else	
	<h1>Vista de Persona: {{ $persona->nombre }}</h1>	
</div>
<div class="container text-center">
	<p>Nombre completo: {{ $persona->nombre }} {{ $persona->apellido }}</p>	
	<p>Apellido: {{ $persona->apellido }}</p>
	<p>Direccion: {{ $persona->direccion }}</p>
	<p>Telefono: {{ $persona->telefono }}</p>
	<p>Edad: {{ $persona->edad }}</p>
</div>

@endif
@stop