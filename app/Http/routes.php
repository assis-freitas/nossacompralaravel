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

Route::get('/', function () {
    return view('welcome');
});

/*
|
|	Rotas de Grupos
|
*/

Route::get('grupos', 'GruposController@index');

Route::post('grupos', 'GruposController@store');

Route::put('grupos/editar/{id}', 'GruposController@update');

Route::delete('grupos/excluir/{id}', 'GruposController@destroy');

Route::get('grupos/novo', 'GruposController@create');

Route::get('grupos/editar/{id}', 'GruposController@edit');

Route::get('grupos/excluir/{id}', 'GruposController@delete');

/*
|
|	Rotas de Listas
|
*/

Route::get('grupos/{idGrupo}/listas', 'ListasController@index');