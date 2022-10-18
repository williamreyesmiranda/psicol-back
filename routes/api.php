<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//ver todas las boletas
Route::get('boletas/verBoletas','App\Http\Controllers\BoletaController@index');

//registrar boleta
Route::post('boletas/registrarBoleta','App\Http\Controllers\BoletaController@store');

//actualizar boleta
Route::put('boletas/actualizarBoleta','App\Http\Controllers\BoletaController@update');

//eliminar registro de boleta
Route::delete('boletas/eliminarBoleta/{id}','App\Http\Controllers\BoletaController@destroy');
