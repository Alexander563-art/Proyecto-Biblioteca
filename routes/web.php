<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'InicioController@index');

route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    route::get('permiso', 'PermisoController@index')->name('permiso');
    route::get('crear', 'PermisoController@crear')->name('crear_permiso');
});
