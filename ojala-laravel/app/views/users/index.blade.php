<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Administration Users</title>
	{{ HTML::style('css/bootstrap.css'); }}
</head>
<body>
	
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Id</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
						</tr>
					</thead>

					<tbody>
						
						@foreach($users as $value)

							<tr>
								<td>{{ $value->id }}</td>
								<td>{{ $value->first_name }}</td>
								<td>{{ $value->last_name }}</td>
								<td>{{ $value->email }}</td>
							</tr>
						
						@endforeach

					</tbody>
				</table>

			</div>
		</div>

	</div>

</body>
</html>