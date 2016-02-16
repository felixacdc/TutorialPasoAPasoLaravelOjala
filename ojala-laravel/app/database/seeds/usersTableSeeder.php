<?php 

/**
* Seders para tabla
*/
class UsersTableSeeder extends Seeder
{
	
	public function run ()
	{
		$user = new Users;

		$user->first_name = "Luis";
		$user->last_name = "Merida";
		$user->password = "794613";
		$user->email = "merilui@gmail.com";

		$user->save();

		$user = new Users;

		$user->first_name = "Ana";
		$user->last_name = "Cabrera";
		$user->password = "123456";
		$user->email = "anacab@gmail.com";

		$user->save();
	}
	
}