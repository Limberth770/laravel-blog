<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
	Route::get('/permiso','PermisoController@index')->name('permiso');
	Route::get('/permiso/crear','PermisoController@create')->name('crear_permiso');
	Route::post('/permiso/store','PermisoController@store')->name('store_permiso');
	Route::get('/permiso/editar','PermisoController@edit')->name('editar_permiso');
});