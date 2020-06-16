<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin.Registro');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/venta_dia', 'AdminControlador@venta_dia')->name('venta_dia');
Route::get('/ventasT', 'AdminControlador@ventasT')->name('ventasT');
Route::get('/ventasF', 'AdminControlador@ventasF')->name('ventasF');

Route::post('/AgregarVenta', 'AccionesController@AgregarVenta')->name('AgregarVenta');
Route::post('/AgregarGasto', 'AccionesController@AgregarGasto')->name('AgregarGasto');

