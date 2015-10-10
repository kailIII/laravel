<?php

Route::get('permisos/ajax/{id}','PermisosController@permisos_ajax');
Route::get('permisos/asignar','PermisosController@asignar');
Route::get('permisos/desasignar','PermisosController@desasignar');



Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'lista-permiso'], function ()
{

        Route::get('permisos', [
                    'as' => 'permisos.index',
                    'uses' => 'PermisosController@index',
                ]);
    
   
});



Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'crear-permiso'], function ()
{
    
        Route::get('permisos/crear', [
                    'as' => 'permisos.create',
                    'uses' => 'PermisosController@create',
                ]);


        Route::post('permisos/crear-guardar', [
                    'as' => 'permisos.store',
                    'uses' => 'PermisosController@store',
                ]);
    
    
});



Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'edita-permiso'], function ()
{

        Route::get('permisos/{id}/actualiza', [
                    'as' => 'permisos.edit',
                    'uses' => 'PermisosController@edit',
                ]);


        Route::patch('permisos/{id}/actualiza-guarda', [
                    'as' => 'permisos.update',
                    'uses' => 'PermisosController@update',
                ]);

});





Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'elimina-permiso'], function ()
{
    
        Route::get('permisos/{id}/elimiar', [
                    'as' => 'permisos.delete',
                    'uses' => 'PermisosController@destroy',
                ]);
   
});













