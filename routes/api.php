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

Route::get('cats', 'API\CatController@index');
//Api list cats by breed id
Route::get('breeds/{id}/cats', 'API\BreedController@listCatsByBreedId');
Route::post('cats', 'API\CatController@store')->name('api.cats.store');
