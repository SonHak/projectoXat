<?php

use Illuminate\Http\Request;
use App\Controllers\principalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('ajaxRequest', 'principalController@ajaxRequest');

Route::post('ajaxCategorias', 'noticiasController@categoriaSeleccionada');

Route::post('noticiasRequest', 'principalController@formularioNoticia');

Route::post('recibirMensajes', 'principalController@recibirMensajes');