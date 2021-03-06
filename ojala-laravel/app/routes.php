<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('users', 'UsersController@get_index');

// Rutas para crear nuevos usuarios
Route::get('users/createuser', 'UsersController@get_form');
Route::post('users/createuser', 'UsersController@post_form');

// Editar usuarios
Route::get('users/{id}/edit', 'usersController@edit');
Route::post('users/{id}', 'UsersController@update');

# Ver Usuario existente
Route::get('users/{id}', 'UsersController@show');

# Eliminar un usuario
Route::get('users/drop/{id}', 'UsersController@drop');