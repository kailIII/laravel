<?php



Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'lista-curso'], function ()
{

        Route::get('cursos', [
                    'as' => 'cursos.index',
                    'uses' => 'cursosController@index',
                ]);
    
   
});



Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'crear-curso'], function ()
{
    
        Route::get('cursos/crear', [
                    'as' => 'cursos.create',
                    'uses' => 'cursosController@create',
                ]);


        Route::post('cursos/crear-guardar', [
                    'as' => 'cursos.store',
                    'uses' => 'cursosController@store',
                ]);
    
    
});



Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'edita-curso'], function ()
{

        Route::get('cursos/{id}/actualiza', [
                    'as' => 'cursos.edit',
                    'uses' => 'cursosController@edit',
                ]);


        Route::patch('cursos/{id}/actualiza-guarda', [
                    'as' => 'cursos.update',
                    'uses' => 'cursosController@update',
                ]);

});





Route::group(['middleware' => ['auth', 'entrust'],  'perms' => 'elimina-curso'], function ()
{
    
        Route::get('cursos/{id}/elimiar', [
                    'as' => 'cursos.delete',
                    'uses' => 'cursosController@destroy',
                ]);
   
});


















