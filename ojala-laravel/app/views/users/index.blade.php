@extends('layouts.default')

@section('contenido')
<div class="row">
	<div class="col-md-12">
		
		@if(Session::has('message'))
			<div class="alert alert-info">{{ Session::get('message') }}</div>
		@endif	

		<h1>All Users</h1>

		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Id</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Edit</th>
				</tr>
			</thead>

			<tbody>
				
				@foreach($users as $value)

					<tr>
						<td>{{ $value->id }}</td>
						<td>{{ $value->first_name }}</td>
						<td>{{ $value->last_name }}</td>
						<td>{{ $value->email }}</td>
						<td>
							<a href="{{ URL::to('users/' . $value->id . '/edit') }}" class="btn btn-small btn-info">Edit User</a>
						</td>
					</tr>
				
				@endforeach

			</tbody>
		</table>

	</div>
</div>
@stop