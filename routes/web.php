<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('home.about');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name('contact.index');
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
// order matters -------------------------
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name('product.save');

Route::get('/products/created', 'App\Http\Controllers\ProductController@created')->name('product.created');

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');

// ----- Cart -----
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");
Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name("cart.removeAll");

Route::get('/image', 'App\Http\Controllers\ImageController@index')->name("image.index");
Route::post('/image/save', 'App\Http\Controllers\ImageController@save')->name("image.save");

// ----- No DI -----
Route::get('/image-not-di', 'App\Http\Controllers\ImageNotDIController@index')->name("imagenotdi.index");
Route::post('/image-not-di/save', 'App\Http\Controllers\ImageNotDIController@save')->name("imagenotdi.save");
