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
    return view('default');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/setting/user', 'UserMgtController@index');
Route::get('/setting/profile', 'ProfilController@index');
Route::get('/setting/item', function(){
  return view('item.item');
});

Route::get('/setting/supplier', 'SupplierController@index');
Route::get('/setting/supplier/create', 'SupplierController@create');
Route::get('/setting/costumer', 'CostumerController@index');
