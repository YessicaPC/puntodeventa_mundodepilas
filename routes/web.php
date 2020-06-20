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
Route::get('/RegTeinda', function () {
    return view('admin.RegistrarTienda');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/caja', 'HomeController@caja')->name('caja');
Route::get('/venta_dia', 'AdminControlador@venta_dia')->name('venta_dia');
Route::get('/ventasT', 'AdminControlador@ventasT')->name('ventasT');
Route::get('/ventasF', 'AdminControlador@ventasF')->name('ventasF');
Route::post('/AgregarTienda', 'AdminControlador@AgregarTienda')->name('AgregarTienda');
Route::get('/Tienda', 'AdminControlador@Tienda')->name('Tienda');

Route::post('/AgregarVenta', 'AccionesController@AgregarVenta')->name('AgregarVenta');
Route::post('/AgregarReparacion', 'AccionesController@AgregarReparacion')->name('AgregarReparacion');
Route::post('/AgregarGasto', 'AccionesController@AgregarGasto')->name('AgregarGasto');
Route::post('/AgregarPedido', 'AccionesController@AgregarPedido')->name('AgregarPedido');
//Route::post('/getModelos', 'AccionesController@getModelos')->name('getModelos');


