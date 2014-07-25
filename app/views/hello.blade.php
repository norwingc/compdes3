@extends('tamplates.maintemplate')

@section('contenido')

<div class="jumbotron">
	<h1>Primer Crud Con Larevel</h1>	
</div>
<div class="container text-center">
@if(Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
{{ HTML::ul($errors->all(), array('class' =>'bg-danger')) }}
</div>
@stop
