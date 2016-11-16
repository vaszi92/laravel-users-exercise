<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('', 'UsersController@index');
Route::get('home', 'UsersController@index');
Route::resource('users', 'UsersController');
//Route::get('users', 'UsersController@search');

Route::get('results', 'SearchesController@search');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
