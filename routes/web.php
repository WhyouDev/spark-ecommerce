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
Route::get('/admin/product/tambah', 'ProductController@add');
Route::get('/admin/product/edit/{id}','ProductController@edit');
Route::get('/admin/product/delete/{id}','ProductController@delete');

// categories route

// transaction route

//shop route
Route::get('/pages/shop','ShopController@viewShop');