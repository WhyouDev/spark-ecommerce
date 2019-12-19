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

// homepage route
Route::view('/', 'homepage');

// login route
Auth::routes();

// dashboard route
Route::get('/admin', 'HomeController@index')->name('home');

// products route
Route::get('/admin/product/json','ProductController@productjson');
Route::get('/admin/product', 'ProductController@index');
Route::get('/admin/product/add', 'ProductController@add');
Route::post('/admin/product/store', 'ProductController@store');
Route::get('/admin/product/edit/{id}','ProductController@edit');
Route::post('/admin/product/storeedit/{id}', 'ProductController@storeedit');
Route::delete('/admin/product/delete/{id}','ProductController@delete');

// categories route
Route::get('/admin/category', 'ProductController@index');

// transaction route

//shop route
Route::get('/pages/shop','ShopController@viewShop');