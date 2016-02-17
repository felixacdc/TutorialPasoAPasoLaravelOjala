@extends('layouts.default')

@section('contenido')
	
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h1>Create User</h1>

			{{ Form::open(array('url' => 'users/createuser', 'method' => 'post')) }}

				<div class="form-group">
					{{ Form::label('first_name', 'First Name') }}
					{{ Form::text('first_name', Input::old('first_name'), array('placeholder'=>'First Name', 'class'=>'form-control')) }}
					{{ $errors->first('first_name') }}
				</div>

				<div class="form-group">
					{{ Form::label('last_name', 'Last Name') }}
					{{ Form::text('last_name', Input::old('last_name'), array('placeholder'=>'Last Name', 'class'=>'form-control')) }}
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
					{{ Form::email('email', Input::old('email'), array('placeholder'=>'Email', 'class'=>'form-control')) }}
					{{ $errors->first('email') }}
				</div>

			{{ Form::submit('Create User', array('class' => 'btn btn-primary')) }}

			{{ Form::close() }}
		</div>
	</div>

@stop