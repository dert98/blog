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
Route::get('/', 'PagesController@welcome')->name('welcome');
Route::get('welcome', 'PagesController@welcome')->name('welcome');
Route::post('nosotros','PagesController@agregar')->name('nosotros.agregar');

Route::get('contacto', 'PagesController@contacto')->name('contacto');

Route::get('detalle/{id}', 'PagesController@detalle')->name('detalle');
Route::get('modificar/{id}', 'PagesController@modificar')->name('modificar');
Route::put('update/{id}', 'PagesController@update' )->name('update');
Route::delete('eliminar/{id}', 'PagesController@eliminar')->name('eliminar');

Route::get('nosotros', 'PagesController@vernotas')->name('nosotros');
Route::get('login2', 'PagesController@login2')->middleware('auth.basic')->name('login2');

Route::resource('datos', 'datosController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
