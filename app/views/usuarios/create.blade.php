@extends('tamplates.maintemplate')


@section('contenido')

<div class="jumbotron text-center">
	<h1>Registro</h1>	
</div>
<div class="container">
	{{ HTML::ul($errors->all(), array('class' =>'bg-danger')) }}

	{{ Form::open(array('url' => 'usuarios/login', 'class' => 'form-horizontal')) }}

		<div class="form-group">
			{{ Form::label('nombre', 'Nombre', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control', 'placeholder'=> 'Nombre')) }}	
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('username', 'Username', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder'=> 'Username')) }}	
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder'=> 'example@norwin.com')) }}	
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Contraseña', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::password('password', array('class' => 'form-control', 'placeholder'=> 'password')) }}	
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('password_confirmation', 'Confirmar Contraseña', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder'=> 'confirmar password')) }}	
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				{{ Form::submit('Registrarse' , array('class'=> 'btn btn-primary')) }}
			</div>	
		</div>

	{{ Form::close() }}
</div>

@stop	