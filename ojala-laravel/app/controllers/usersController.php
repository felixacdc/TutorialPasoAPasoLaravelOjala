<?php 

/**
* Controlador de Usuarios
*/
class UsersController extends BaseController
{

	public function get_index () 
	{
		$users = Users::all();

		return View::make('users.index')->with('users', $users);
	}

	public function get_form ()
	{
		return View::make('users.createuser');
	}

	public function post_form ()
	{
		$data = Input::all();

		$rule = array(
			'first_name'       => 'required|min:3|max:100',
			'last_name'        => 'required|min:3|max:100',
			'email'            => 'required|min:6|max:100|unique:users,email',
			'password'         => 'required|min:6|max:100',
			'recover_password' => 'same:password' 
			);
		#same compara si las contraseñas son iguales

		$messages = array(
			'required' => 'Camp obligatory'
			);

		$validate = Validator::make($data, $rule, $messages);

		if ($validate->fails()) {
			return Redirect::back()->withErrors($validate);
		} else {
			$user = new Users;

			$user->first_name = Input::get('first_name');
			$user->last_name  = Input::get('last_name');
			$user->password   = Input::get('password');
			$user->email      = Input::get('email');
			$user->save();

			Session::flash('message', '¡Registered Properly!');
			return Redirect::to('users');
		}
	}

	public function edit ($id)
	{
		$user = Users::find($id);

		return View::make('users.edit')->with('user', $user);
	}

	public function update ($id)
	{
		$data = Input::all();

		$rule = array(
			'first_name'       => 'required|min:3|max:100',
			'last_name'        => 'required|min:3|max:100',
			'password'         => 'min:6|max:100',
			'recover_password' => 'same:password' 
			);
		#same compara si las contraseñas son iguales

		$messages = array(
			'required' => 'Camp obligatory'
			);

		$validate = Validator::make($data, $rule, $messages);

		if ($validate->fails()) {
			return Redirect::to('users/' . $id . '/edit')->withErrors($validate);
		} else {
			$user = Users::find($id);

			$user->first_name = Input::get('first_name');
			$user->last_name  = Input::get('last_name');
			$user->password   = Input::get('password');
			$user->save();

			Session::flash('message', '¡Updated Properly!');
			return Redirect::to('users');
		}
	}
}