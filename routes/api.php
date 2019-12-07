
<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//acá se configuran todas las rutas que se van a conectar con APi, imap_fetchbody

Route::POST('/login', function(Request $request){
  return response()->json($request->all());
});

Route::get('/mesas', function (){
  return response()->json();
});
