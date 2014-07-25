@extends('tamplates.maintemplate')

@section('contenido')

<div class="jumbotron">
@if(!$persona)
	<h1>La persona no existe</h1>
</div>
@else	
	<h1>Editanto la persona: {{ $persona->nombre }}</h1>	
</div>
<div class="container">
	{{ HTML::ul($errors->all(), array('class' =>'bg-danger')) }}

	{{ Form::model($persona, array('route' => array('personas.update', $persona->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
		<div class="form-group">
			{{ Form::label('nombre', 'Nombre', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::text('nombre', Input::old('nombre') ? Input::old('nombre'): $persona->nombre, array('class' => 'form-control', 'placeholder'=> 'Nombre de la persona')) }}	
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('apellido', 'Apellido', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::text('apellido', Input::old('apellido') ? Input::old('apellido'): $persona->apellido, array('class' => 'form-control', 'placeholder'=> 'Apellido de la persona')) }}	
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('direccion', 'Direccion', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::text('direccion', Input::old('direccion') ? Input::old('direccion'): $persona->direccion, array('class' => 'form-control', 'placeholder'=> 'Direccion de la persona')) }}	
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('telefono', 'Telefono', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::text('telefono', Input::old('telefono') ? Input::old('telefono'): $persona->telefono, array('class' => 'form-control', 'placeholder'=> 'Telefono de la persona')) }}	
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('edad', 'Edad', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::text('edad', Input::old('edad') ? Input::old('edad'): $persona->edad, array('class' => 'form-control', 'placeholder'=> 'Edad de la persona')) }}	
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				{{ Form::submit('Editar Persona' , array('class'=> 'btn btn-primary')) }}
			</div>	
		</div>
	{{ Form::close() }}
</div>

@endif
	
@stop