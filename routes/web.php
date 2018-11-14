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

// list breed
Route::get('breeds',  'BreedController@index');
Route::get('cats',  'CatController@index');
Route::get('cats/{id}',  'CatController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('cate', 'CategoryController@index');

//tổng price all product
Route::get('product/{categoryId}/total-price', 'ProductController@totalPrice');

//list product theo categoryId
Route::get('product/{category}', 'ProductController@index');

// tính avg price của các product có categoryId =
Route::get('product/{categoryId}/avg-price', 'ProductController@avgPrice');

Route::get('category', 'CategoryController@index');

// Route::resource('cats', 'CatController');
// Route::resource('breeds', 'BreedController');



