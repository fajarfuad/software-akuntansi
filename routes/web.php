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
Route::get('/login', function()
{
    return view('login');
});

Auth::routes();
Route::resource('kontak', 'KontakController');
Route::post('/kontak/update/{id}', 'KontakController@update');
Route::get('/kontak/destroy/{id}', 'KontakController@destroy');
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/setting/user', 'UserMgtController@index');
Route::post('/setting/user/akses/{id}', 'UserMgtController@akses');
Route::get('/setting/profile', 'ProfilController@index');
Route::get('/setting/item', function(){
  return view('item.item');
});
Route::get('/setting/item/create', function(){
  return view('item.create');
});

Route::get('/setting/mitra', 'MitraController@index');
Route::get('/setting/mitra/create', 'MitraController@create');
Route::get('/logout', function()
{
  Auth::logout();
  return redirect()->route('home');
});
//Akun
Route::get('/setting/akun', 'AkunController@index')->name('akun.index');
Route::post('/akun/create', 'AkunController@store');
Route::get('/akun/delete/{id}', 'AkunController@destroy');
Route::get('/akun/edit/{id}', function($id)
{
  $akun = App\Akun::find($id);
  return response()->json($akun);
});
Route::post('akun/update/{id}', 'AkunController@update');
//Gudang
Route::get('/setting/gudang', 'GudangController@index');
Route::post('/gudang/create', 'GudangController@store');
Route::get('/gudang/delete/{id}', 'GudangController@destroy');
Route::get('/gudang/edit/{id}', function($id)
{
  $akun = App\Gudang::find($id);
  return response()->json($akun);
});
Route::post('gudang/update/{id}', 'GudangController@update');
//Cabang
Route::get('/setting/cabang', 'CabangController@index');
Route::post('/cabang/create', 'CabangController@store');
Route::get('/cabang/delete/{id}', 'CabangController@destroy');
Route::get('/cabang/edit/{id}', function($id)
{
  $akun = App\Cabang::find($id);
  return response()->json($akun);
});
Route::post('cabang/update/{id}', 'CabangController@update');
