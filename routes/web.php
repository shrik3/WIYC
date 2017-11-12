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
Route::get('/hometest', 'HomeController@test')->name('home');
Route::get('/book','BookController@index');
// Route::get('/book/{id}','BookController@show');
// Route::get('/test','TestController@test');
// Route::resource('/review','ReviewController');
Route::get('adoption','AdoptionController@index');
Route::get('adoption/{id}','AdoptionController@show');



Route::group(['middleware'=>'auth','namespace'=>'Admin','prefix'=>'admin'],function(){
    // Route::Resource('/book','BookController');
    // Route::get('order/','OrderController@index');
    // Route::get('mark/paid/{id}','OrderController@mark_as_paid');
    // Route::get('mark/pended/{id}','OrderController@mark_as_pended');
    // Route::get('order/delete/{id}','OrderController@delete');
});

Route::group(['middleware'=>'auth','namespace'=>'User','prefix'=>'my'],function(){
    // Route::get('order','OrderController@index');
    // Route::get('order/new/{id}','OrderController@new_order');
    // Route::post('order/new/{id}','OrderController@store_order');
    // Route::get('order/confirm/{id}','OrderController@confirm');
    // Route::get('/','ProfileController@index');

});

Route::group(['middleware'=>'auth'],function(){
    Route::get('comment/new/{id}','CommentController@new');
    Route::post('comment/new/{id}','CommentController@store');
});
