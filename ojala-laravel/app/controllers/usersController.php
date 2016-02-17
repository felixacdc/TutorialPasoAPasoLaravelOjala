<?php 

/**
* Controlador de Usuarios
*/
class UsersController extends BaseController
{
	
	public function user ()
	{
		return "Welcome to the controller for the users";
	}

	public function get_index () 
	{
		return "We are in the index";
	}

	public function get_we ()
	{
		return "We";
	}

	public function get_hello ($hello)
	{
		return "Hello " . $hello;
	}

	public function get_form ()
	{
		$variable = Form::open(array('url' => '/users/form', 'method' => 'post'));
		$variable.= Form::text('campo');
		$variable.= Form::submit('enviar');
		$variable.= Form::close();

		return $variable;

	}

	public function post_form ()
	{
		$campo = Input::get('campo');

		return 'The camp value is: ' . $campo;
	}
}