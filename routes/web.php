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

Route::get('/', 'Controller@logueo');
Route::get('/login', 'Controller@logueo');
Route::get('/createuser','Controller@createuser');
Route::get('/almacen','Controller@almacen');
Route::get('/ventas','Controller@ventas');
Route::get('/reportes','Controller@reportes');

