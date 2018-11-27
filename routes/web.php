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


// Route::get('/teapage', function () {
//     return view('pages.teapage');
//
// });

Route::get('/homepage', function () {
   return view('pages.homepage');
});


// Route::get('/tea_choice', function () {
//    return view('pages.tea_choice');
// });
//new of above
Route::resource('/tea','TeaController');

// Route::get('/tea_page/{id}','ProductController@show');



Route::resource('/teaware', 'TeawareController');



Route::resource('/shopping_cart', 'ShoppingCartController')->middleware('auth');



Route::get('/sign_up', function () {
   return view('pages.sign_up');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//test route!!!!!
Route::get('/layouttest', function () {
   return view('pages.layouttest');
});

// Route::get('/checkout', function () {
//   return view ('pages.checkout')
// })
//
