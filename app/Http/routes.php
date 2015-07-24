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

Route::get('/', 'IndexController@index');
Route::get('mision', 'MisionController@index');
Route::get('quienes-somos', 'QuienesController@index');
Route::get('trabajo', 'TrabajoController@index');
Route::get('articulos', 'ArticulosController@index');
Route::get('bibliografia', 'BibliografiaController@index');
Route::get('links', 'LinksController@index');
Route::get('catalogo', 'CatalogoController@index');
Route::get('contacto', 'ContactoController@index');
Route::get('gracias', 'GraciasController@index');

Route::post('postcontacto','ContactformController@store');

