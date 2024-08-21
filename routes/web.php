<?php

use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name("contact.index");
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
// order matters -------------------------
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");

Route::get('/products/created', 'App\Http\Controllers\ProductController@created')->name('product.created');

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");

