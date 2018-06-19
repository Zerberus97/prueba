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

Route::resource('/profesor', 'EjemploController');
Route::post('/profesor', 'EjemploController@store');

Route::resource('/sala', 'SalaController');
Route::post('/salac','SalaController@store');

Route::resource('/registro', 'RegistroController');
Route::post('/registroc','RegistroController@store');
Route::get('/registro/{id}', 'RegistroController@show');
