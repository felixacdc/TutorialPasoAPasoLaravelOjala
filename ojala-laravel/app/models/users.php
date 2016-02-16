<?php 

/**
* Modelo de la tabla Usuario
*/
class Users extends Eloquent
{
	
	public function setPasswordAttribute($password)
	{
		$this->attributes['password'] = Hash::make($password);
	}
}