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
// Route::get('breeds',  'BreedController@index');
// Route::get('cats',  'CatController@index');
// Route::get('cats/{id}',  'CatController@destroy');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('cate', 'CategoryController@index');

// //tổng price all product
// Route::get('product/{categoryId}/total-price', 'ProductController@totalPrice');

// //list product theo categoryId
// Route::get('product/{category}', 'ProductController@index');

// // tính avg price của các product có categoryId =
// Route::get('product/{categoryId}/avg-price', 'ProductController@avgPrice');

// Route::get('category', 'CategoryController@index');

// Route::get('cats', [
// 	'uses' => 'CatController@index',
// 	'as' => 'cats.index',
// 	'prefix' => 'admin'
// 	]);

//rút gọn
Route::resource('cats', 'CatController');

//viết hết
Route::get('cats', 'CatController@index')->name('cats.index');
Route::get('cats/create', 'CatController@create')->name('cats.create');
Route::get('cats/{cat}', 'CatController@show')->name('cats.show');
Route::post('cats', 'CatController@store')->name('cats.store');
Route::get('cats/{cat}/edit', 'CatController@edit')->name('cats.edit');
Route::put('cats/{id}', 'CatController@update')->name('cats.update');
Route::delete('cats/{id}', 'CatController@destroy')->name('cats.destroy');

Route::resource('breeds', 'BreedController');
Route::get('breeds/{breed}', 'BreedController@show')->name('breeds.show');
Route::get('breeds/{breed}/edit', 'BreedController@edit')->name('breeds.edit');
Route::put('breeds/{id}', 'BreedController@update')->name('breeds.update');

Route::get('breeds/{id}/list-cats', 'BreedController@listCatByBreedId')->name('breeds.list_cats');



