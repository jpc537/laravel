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

Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );
Route::get('contact', ['as' => 'contact', 'uses' => 'MailController@index'] );

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::post('home','HomeController@reservar');

Route::group(['prefix'=>'admin','middleware'=>['auth','is_admin'],'namespace'=>'admin'],function(){

	Route::resource('users','UserController');

	Route::resource('pistas','PistaController');

	Route::resource('reservas','ReservasController');

});

Route::get('admin', 'AdminController@index');
Route::get('subir', 'SubirController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
