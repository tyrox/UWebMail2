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
//routas para la autenticacion (default)
/*Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
*/
Route::get('/', 'FrontController@index');
Route::resource('index', 'FrontController');
Route::resource('user', 'UserController');
Route::get('user/authenticate/{id}', 'UserController@authenticate');

Route::resource('mail/sent', 'MailController@sent');
Route::get('mail', 'MailController@index'); //Ruta de inicio
Route::resource('mail', 'MailController');


Route::resource('log', 'LogController'); //Iniciar sesion
Route::get('logout', 'LogController@logout'); //Cerrar sesion
//Route::resource('home','MailController'); //Ruta del correo


