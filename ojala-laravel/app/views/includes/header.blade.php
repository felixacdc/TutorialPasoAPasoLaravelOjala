<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('users') }}">User Warning</a>
	</div>

	<ul>
		<li>
			<a href="{{ URL::to('users') }}">View all users</a>
		</li>
		<li>
			<a href="{{ URL::to('users/createuser') }}">Create User</a>
		</li>
	</ul>
</nav>