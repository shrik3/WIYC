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
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/book','BookController@index');
Route::get('/book/{id}','BookController@show');
Route::get('/test','TestController@test');
Route::resource('/review','ReviewController');

Route::group(['middleware'=>'auth','namespace'=>'Admin','prefix'=>'admin'],function(){
    Route::Resource('/book','BookController');
    Route::get('order/list','OrderController@index');
});

Route::group(['middleware'=>'auth','namespace'=>'User','prefix'=>'my'],function(){
    Route::get('order','OrderController@index');
    Route::get('order/new/{id}','OrderController@new_order');
    Route::post('order/new/{id}','OrderController@store_order');

    Route::get('/','ProfileController@index');

});
