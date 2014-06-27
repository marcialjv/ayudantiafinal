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

/*Route::get('/', function()
{
	return View::make('hello');
});
*/
Route::resource('','BodegaController');
Route::resource('bodega','BodegaController');
Route::resource('producto','ProductoController');
Route::get('verproductos', 'BodegaController@verproductos');
Route::get('bodega/productosbodega/{id}', 'BodegaController@productosbodega');
Route::get('producto/create2/{id}', 'ProductoController@create2');


?>