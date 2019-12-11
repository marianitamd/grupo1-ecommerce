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

Route::get('/almohadones', 'AlmohadonesController@listado');


Route::get('/canastos', 'CanastosController@listado');

Route::get('/carrito', 'ShopCartsController@listado');

Route::get('/cuadros', 'CuadrosController@listado');

Route::get('/deco', 'DecosController@listado');

Route::get('/detalledeproducto/{id}', 'DetalledeproductoController@detalle');

Route::get('/faqs', function ()
{return view('faqs');
});

Route::get('index', 'IndexController@listado');

Route::get('/lamparas', 'LamparasController@listado');

Route::get('/mesas', 'MesasController@listado');

Route::get('/perfil', 'PerfilController@listado');

Route::get('/shopCart', 'ShopCartsController@listado');

Route::get('/init', function (){
  artisan::call('storage:link');
  return 'ready!';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
