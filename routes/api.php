<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Http\Controllers\Api\V1'], function ($api) {

        $api->get('/home', 'HomeController@index');
        $api->get('/book','BookController@index');
        $api->get('/book/{id}','BookController@show');

        // 用户相关
        $api->post('/user/register', 'UserController@register');
        // 需要鉴权
        $api->group(['middleware' => 'api.auth', 'namespace' => 'Admin','prefix'=>'admin'], function ($api) {
            //admin

            $api->Resource('/book','BookController');
            $api->get('order/','OrderController@index');
            $api->get('mark/paid/{id}','OrderController@mark_as_paid');
            $api->get('mark/pended/{id}','OrderController@mark_as_pended');
            $api->get('order/delete/{id}','OrderController@delete');

        });

        $api->group(['middleware' => 'api.auth', 'namespace' => 'User','prefix'=>'my'], function ($api) {
            $api->get('order','OrderController@index');
            $api->get('order/new/{id}','OrderController@new_order');
            $api->post('order/new/{id}','OrderController@store_order');
            $api->get('order/confirm/{id}','OrderController@confirm');
            $api->get('/','ProfileController@index');
        });
    });
});
