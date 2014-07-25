@extends('tamplates.maintemplate')


@section('contenido')

<div class="jumbotron">
	<h1>Iniciar session</h1>	
</div>

@if(Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

	<div class="container">
		{{ Form::open(array('url' => 'usuarios/validar', 'class' => 'form-horizontal')) }}
			<div class="form-group">
			{{ Form::label('username', 'Usuario', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder'=> 'Usuario')) }}	
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Contraseña', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-6">
				{{ Form::password('password', array('class' => 'form-control', 'placeholder'=> 'Contraseña')) }}	
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				{{ Form::submit('Inicar Session' , array('class'=> 'btn btn-primary')) }}
			</div>	
		</div>

		{{ Form::close() }}
		
	</div>
@stop