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

Route::get('index', function () {
    return view('index');
});

Route::get('/mesas', function ()
{
  return view('mesas');
});

Route::get('/lamparas', function ()
{
  return view('lamparas');
});

Route::get('/deco', function ()
{
  return view('deco');
});

Route::get('/canastos', function ()
{
  return view('canastos');
});

Route::get('/almohadones', function ()
{
  return view('almohadones');
});

Route::get('/cuadros', function ()
{
  return view('cuadros');
});

Route::get('/productos/{id}', function ()
{return view('detalledeproducto');
});

Route::get('/carrito', function ()
{return 'carrito';
});

Route::get('/perfil', function ()
{return 'perfil';
});

Route::get('/faqs', function ()
{
  return 'faqs';
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
