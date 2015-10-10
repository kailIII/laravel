<?php



Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'lista-usuario'], function ()
{

        Route::get('usuarios', [
                    'as' => 'usuarios.index',
                    'uses' => 'UsuariosController@index',
                ]);
    
   
});



Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'crear-usuario'], function ()
{
    
        Route::get('usuarios/crear', [
                    'as' => 'usuarios.create',
                    'uses' => 'UsuariosController@crear',
                ]);


        Route::post('usuarios/crear-guardar', [
                    'as' => 'usuarios.store',
                    'uses' => 'UsuariosController@crear_guardar',
                ]);
    
    
});



Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'edita-usuario'], function ()
{

        Route::get('usuarios/{id}/actualiza', [
                    'as' => 'usuarios.edit',
                    'uses' => 'UsuariosController@actualiza',
                ]);


        Route::patch('usuarios/{id}/actualiza-guarda', [
                    'as' => 'usuarios.update',
                    'uses' => 'UsuariosController@actualiza_guarda',
                ]);

});





Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'elimina-usuario'], function ()
{
    
        Route::get('usuarios/{id}/delete', [
                    'as' => 'usuarios.delete',
                    'uses' => 'UsuariosController@eliminar',
                ]);
   
});






