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

Route::get('prueba', function () { 
	return 'it is my first route...';
});

Route::get('createuser', function () { 
	$user = new Users;

	$user->first_name = "Felix";
	$user->last_name = "Méndez";
	$user->password = "794613";
	$user->email = "pfmata01@gmail.com";

	$user->save();

	return "The user is stored in the data base...";

});