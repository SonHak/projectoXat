<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', 'noticiasController@mostrarNoticias');

Route::get('/login', function() {
	return view('auth.login');
});


Route::get('/logout', 'Auth\LoginController@logout');

Route::post('updateDenuncia', 'principalController@update');

Route::post('/createDenuncia', 'principalController@store');

Route::resource('/home','principalController');