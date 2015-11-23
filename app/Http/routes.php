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


Route::get('/', 'FrontController@index'); //Ruta de inicio

Route::resource('mail','MailController'); //Ruta del correo

Route::get('/register', 'FrontController@get_register');

Route::resource('log', 'LogController'); 
//Route::post('/register', 'RegisterController@post_register');
//{!!Form::open(['route'=>'mail.store','method' => 'POST', 'url' => 'register']!!}
//{!!Form::open(array('method' => 'POST', 'url' => 'register'))!!}
