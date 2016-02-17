<?php 

/**
* Modelo de la tabla Usuario
*/
class Users extends Eloquent
{
	
	public function setPasswordAttribute($password)
	{
		# Evita que el password se encripte y se cambie en la DB si esta vacio
		if ( ! empty($password)) {
			$this->attributes['password'] = Hash::make($password);
		}
	}
}