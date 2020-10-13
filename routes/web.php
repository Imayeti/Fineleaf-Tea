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
Route::get('/tea', function(){
  dd(Input::all());
});

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/homepage', function () {
   return view('pages.homepage');
});


Route::resource('/tea','TeaController');

Route::resource('/teaware', 'TeawareController');

Route::resource('/shopping_cart', 'ShoppingCartController')->middleware('auth');

Route::get('/sign_up', function () {
   return view('pages.sign_up');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/orders', 'OrdersController@index')->middleware('auth');

Route::get('/gifts', 'GiftsController@index')->middleware('auth');
Route::get('/gifts/{id}', 'GiftsController@show')->middleware('auth');
Route::patch('/gifts/{id}', 'GiftsController@Update')->middleware('auth');

Route::get('/search', 'SearchController@index');

Route::post('/review', 'ReviewController@store')->middleware('auth');
