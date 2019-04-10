<?php

//use Illuminate\Http\Request;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/v2.0/clients', 'ClientController@Get');
Route::get('/v2.0/services', 'ServiceController@Get');
Route::get('/v2.0/requests', 'RequestController@Get');

Route::post('/v2.0/clients', 'ClientController@Create');
Route::post('/v2.0/services', 'ServiceController@Create');
Route::post('/v2.0/requests', 'RequestController@Create');

Route::put('/v2.0/clients/{id}', 'ClientController@Update');
Route::put('/v2.0/services/{id}', 'ServiceController@Update');
Route::put('/v2.0/requests/{id}', 'RequestController@Update');

Route::delete('/v2.0/clients/{id}', 'ClientController@Delete');
Route::delete('/v2.0/services/{id}', 'ServiceController@Delete');
Route::delete('/v2.0/requests/{id}', 'RequestController@Delete');
