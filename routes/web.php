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
Route::get('/customer',[

'uses'=>'CustomerController@index',

]);
Route::get('/addorder/{item_name}/{item_price}/{item_qty}/{totla}/{cus_id}',['uses'=>'OrderController@AddOrder']);
Route::get('/getOrders','OrderController@getOrders');