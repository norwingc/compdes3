@extends('tamplates.maintemplate')
@section('contenido')

<div class="jumbotron">
	<h1>Crear nueva Persona</h1>	
</div>

<div class="container">
	{{ HTML::ul($errors->all(), array('class' =>'bg-danger')) }}

	{{ Form::open(array('url' => 'personas', 'class' => 'form-horizontal')) }}
		<div class="form-group">
			{{ Form::label('nombre', 'Nombre', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control', 'placeholder'=> 'Nombre de la persona')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('apellido', 'Apellidos', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::text('apellido', Input::old('apellido'), array('class' => 'form-control', 'placeholder'=> 'Apellidos de la persona')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('direccion', 'Direccion', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::text('direccion', Input::old('direccion'), array('class' => 'form-control', 'placeholder'=> 'Direccion de la persona')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('telefono', 'Telefono', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::text('telefono', Input::old('telefono'), array('class' => 'form-control', 'placeholder'=> 'Telefono de la persona')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('edad', 'Edad', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::text('edad', Input::old('edad'), array('class' => 'form-control', 'placeholder'=> 'Edad de la persona')) }}
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				{{ Form::submit('Agregar Persona' , array('class'=> 'btn btn-primary')) }}
			</div>	
		</div>
	{{ Form::close() }}
</div>

@stop