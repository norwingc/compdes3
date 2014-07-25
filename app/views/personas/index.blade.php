@extends('tamplates.maintemplate')

@section('contenido')

<div class="jumbotron">
	<h1>Lista de Personas</h1>	
</div>
@if(Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="container">
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Nombres</td>
					<td>Apellidos</td>
					<td>Direccion</td>
					<td>Telefono</td>
					<td>Edad</td>
					@if(Auth::check())
						<td>Acciones</td>
					@endif
				</tr>
			</thead>
			<tbody>
				@foreach($personas as $key => $value)
					<tr>
						<td>{{ $value->nombre }}</td>
						<td>{{ $value->apellido }}</td>
						<td>{{ $value->direccion }}</td>
						<td>{{ $value->telefono }}</td>
						<td>{{ $value->edad }}</td>
						@if(Auth::check())
							<td>							

								{{ Form::open(array('url' => 'personas/'. $value->id, 'class' => 'pull-right')) }}
									{{ Form::hidden('_method', 'DELETE') }}
									{{ Form::submit('Borrar esta persona', array('class' => 'btn btn-warning')) }}
								{{ Form::close() }}

								<a href="{{ URL::to('personas/' . $value->id) }}" class="btn btn-small btn-success">Ver Persona</a>
									
								<a href="{{ URL::to('personas/' .$value->id. '/edit') }}" class="btn btn-small btn-success">Editar Persona</a>															

							</td>
						@endif
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>	

@stop