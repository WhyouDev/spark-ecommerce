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

// Admin Routes
Route::group(['middleware' => ['role:admin']], function () {

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
Route::get('/admin/category/json','CategoryController@categoryjson');
Route::get('/admin/category', 'CategoryController@index');
Route::get('/admin/category/add', 'CategoryController@add');
Route::post('/admin/category/store', 'CategoryController@store');
Route::get('/admin/category/edit/{id}','CategoryController@edit');
Route::post('/admin/category/storeedit/{id}', 'CategoryController@storeedit');
Route::delete('/admin/category/delete/{id}','CategoryController@delete');

// user management route
Route::get('/admin/user/json','UserController@userjson');
Route::get('/admin/user', 'UserController@index');
Route::get('/admin/user/add', 'UserController@add');
Route::post('/admin/user/store', 'UserController@store');
Route::get('/admin/user/edit/{id}','UserController@edit');
Route::post('/admin/user/storeedit/{id}', 'UserController@storeedit');
Route::delete('/admin/user/delete/{id}','UserController@delete');
});

//shop route
Route::get('/pages/shop','ShopController@viewShop');

//detail shop
Route::get('/pages/detailshop','DetailController@detailShop');

//cart
Route::get('/cart','CartController@cart');