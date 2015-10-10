<?php

Route::get('/', function()
{
    return view('welcome');
});


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => '$NAMESPACE_API_CONTROLLER$'], function ()
{
	Route::group(['prefix' => 'v1'], function ()
	{
        include_once Config::get('generator.path_api_routes');
	});
});











include('rutas/usuarios.php');
include('rutas/permisos.php');
include('rutas/roles.php');
include('rutas/cursos.php');
