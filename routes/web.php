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

Route::get('/', 'HomeController@index');
//===========PRODUCT
Route::get('/product', 'ProductController@index');
Route::get('/product-detail/{product}', 'ProductController@show');
Route::post('/product-store', 'ProductController@store');
Route::post('/product-update/{product}', 'ProductController@update');
Route::get('/product-delete/{product}', 'ProductController@destroy');
//===========CART
Route::get('/cart','CartController@index');
Route::get('/cart-checkout','CartController@checkout');
Route::get('/cart-delete/{product_in_cart}','CartController@remove');
Route::post('/cart-add/{product}','CartController@add');
//===========MISCELLENAOUS
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
//===========ADMIN
Route::get('/admin/product-detail/{product}', 'ProductController@adminShow');
Route::get('/admin/product-create', 'ProductController@create');
Route::get('/admin/product-edit/{product}', 'ProductController@edit');
Route::get('/admin', 'HomeController@admin');