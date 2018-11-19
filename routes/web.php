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

Route::get('/tea_page/{id}','ProductController@show');



Route::get('/teaware', function () {
   return view('pages.teaware');
});


Route::get('/shopping_cart', function () {
   return view('pages.shopping_cart');
});

Route::get('/sign_up', function () {
   return view('pages.sign_up');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//test route!!!!!
Route::get('/layouttest', function () {
   return view('pages.layouttest');
});
//
