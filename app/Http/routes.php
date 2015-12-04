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

Route::get('grupos', ['middleware' => 'auth', 'uses' => 'GruposController@index']);

Route::post('grupos', ['middleware' => 'auth', 'uses' => 'GruposController@store']);

Route::put('grupos/editar/{id}', ['middleware' => 'auth', 'uses' => 'GruposController@update']);

Route::delete('grupos/excluir/{id}', ['middleware' => 'auth', 'uses' => 'GruposController@destroy']);

Route::get('grupos/novo',['middleware' => 'auth', 'uses' => 'GruposController@create']);

Route::get('grupos/editar/{id}', ['middleware' => 'auth', 'uses' => 'GruposController@edit']);

Route::get('grupos/excluir/{id}', ['middleware' => 'auth', 'uses' => 'GruposController@delete']);

/*
|
|	Rotas de Membros
|
*/

Route::get('grupos/{id}/membros', 'MembrosController@index');

Route::post('grupos/{id}/membros', 'MembrosController@index');




/*
|
|	Rotas de Listas
|
*/

Route::get('grupos/{idGrupo}/listas', ['middleware' => 'auth', 'uses' => 'ListasController@index']);

Route::get('grupos/{idGrupo}/listas/novo', ['middleware' => 'auth', 'uses' => 'ListasController@create']);

Route::post('grupos/{idGrupo}/listas/novo', ['middleware' => 'auth', 'uses' => 'ListasController@store']);

Route::put('grupos/{idGrupo}/listas/editar/{id}', ['middleware' => 'auth', 'uses' => 'ListasController@update']);

Route::delete('grupos/{idGrupo}/listas/excluir/{id}', ['middleware' => 'auth', 'uses' => 'ListasController@destroy']);

Route::get('grupos/{idGrupo}/listas/editar/{id}', ['middleware' => 'auth', 'uses' => 'ListasController@edit']);

Route::get('grupos/{idGrupo}/listas/excluir/{id}', ['middleware' => 'auth', 'uses' => 'ListasController@delete']);

/*
|
|	Rotas de Itens
|
*/

Route::get('grupos/{idGrupo}/listas/{idLista}/itens', ['middleware' => 'auth', 'uses' => 'ItemsController@index']);

Route::get('grupos/{idGrupo}/listas/{idLista}/itens/novo', ['middleware' => 'auth', 'uses' => 'ItemsController@create']);

Route::post('grupos/{idGrupo}/listas/{idLista}/itens/novo', ['middleware' => 'auth', 'uses' => 'ItemsController@store']);

Route::put('grupos/{idGrupo}/listas/{idLista}/itens/editar/{id}', ['middleware' => 'auth', 'uses' => 'ItemsController@update']);

Route::delete('grupos/{idGrupo}/listas/{idLista}/itens/excluir/{id}', ['middleware' => 'auth', 'uses' => 'ItemsController@destroy']);

Route::get('grupos/{idGrupo}/listas/{idLista}/itens/editar/{id}', ['middleware' => 'auth', 'uses' => 'ItemsController@edit']);

Route::get('grupos/{idGrupo}/listas/{idLista}/itens/excluir/{id}', ['middleware' => 'auth', 'uses' => 'ItemsController@delete']);

// Authentication routes...
Route::post('/entrar', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('cadastrar', 'Auth\AuthController@getRegister');
Route::post('cadastrar', 'Auth\AuthController@postRegister');