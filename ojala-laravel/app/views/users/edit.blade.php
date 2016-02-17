@extends('layouts.default')

@section('contenido')
	
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h1>Edit User {{ $user->first_name }} {{ $user->last_name }}</h1>

			{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'post')) }}

				<div class="form-group">
					{{ Form::label('first_name', 'First Name') }}
					{{ Form::text('first_name', null, array('placeholder'=>'First Name', 'class'=>'form-control')) }}
					{{ $errors->first('first_name') }}
				</div>

				<div class="form-group">
					{{ Form::label('last_name', 'Last Name') }}
					{{ Form::text('last_name', null, array('placeholder'=>'Last Name', 'class'=>'form-control')) }}
					{{ $errors->first('last_name') }}
				</div>

				<div class="form-group">
					{{ Form::label('password', 'Password') }}
					{{ Form::password('password', array('placeholder'=>'Password', 'class'=>'form-control')) }}
					{{ $errors->first('password') }}
				</div>

				<div class="form-group">
					{{ Form::label('recover_password', 'Recover Password') }}
					{{ Form::password('recover_password', array('placeholder'=>'Recover Password', 'class'=>'form-control')) }}
					{{ $errors->first('recover_password') }}
				</div>

				<div class="form-group">
					{{ Form::label('email', 'Email') }}
					{{ Form::email('email', null, array('placeholder'=>'Email', 'class'=>'form-control', 'disabled' => 'disabled')) }}
					{{ $errors->first('email') }}
				</div>

			{{ Form::submit('Edit User', array('class' => 'btn btn-primary')) }}

			{{ Form::close() }}
		</div>
	</div>

@stop