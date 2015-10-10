<?php



Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'lista-rol'], function ()
{

        Route::get('roles', [
                    'as' => 'roles.index',
                    'uses' => 'RolesController@index',
                ]);
    
   
});



Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'crear-rol'], function ()
{
    
        Route::get('roles/crear', [
                    'as' => 'roles.create',
                    'uses' => 'RolesController@create',
                ]);


        Route::post('roles/crear-guardar', [
                    'as' => 'roles.store',
                    'uses' => 'RolesController@store',
                ]);
    
    
});



Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'edita-rol'], function ()
{

        Route::get('roles/{id}/actualiza', [
                    'as' => 'roles.edit',
                    'uses' => 'RolesController@edit',
                ]);


        Route::patch('roles/{id}/actualiza-guarda', [
                    'as' => 'roles.update',
                    'uses' => 'RolesController@update',
                ]);

});





Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'elimina-rol'], function ()
{
    
        Route::get('roles/{id}/elimiar', [
                    'as' => 'roles.delete',
                    'uses' => 'RolesController@destroy',
                ]);
   
});


















