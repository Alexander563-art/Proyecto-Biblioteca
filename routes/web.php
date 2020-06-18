<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'InicioController@index');

route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    route::get('permiso', 'PermisoController@index')->name('permiso');
    route::get('crear', 'PermisoController@crear')->name('crear_permiso');
    route::get('menu', 'MenuController@index')->name('menu');
    route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    route::post('menu', 'MenuController@guardar')->name('guardar_menu');
    route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');

    route::get('rol', 'RolController@index')->name('rol');
    route::get('rol/crear', 'RolController@crear')->name('crear_rol');
    Route::get('rol/{id}/editar', 'RolController@editar')->name('editar_rol');
    route::post('rol', 'RolController@guardar')->name('guardar_rol');
    Route::put('rol/{id}', 'RolController@actualizar')->name('actualizar_rol');
    Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar_rol');
});
