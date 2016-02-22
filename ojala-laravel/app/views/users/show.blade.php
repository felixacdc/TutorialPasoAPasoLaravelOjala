@extends('layouts.default')

@section('contenido')

<h1>Show User {{ $user->first_name }} {{ $user->last_name }}</h1>

<div class="jumbotron text-center">
	<h2>{{ $user->first_name }} {{ $user->last_name }}</h2>
	<p>
		<strong>Email: </strong>{{$user->email}}<br>
	</p>
</div>

@stop
