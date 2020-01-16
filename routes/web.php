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
Route::get('/store', 'Store@index');
Route::get('/store/register','RegisterController@register');
	

Route::get('/store/login','LoginController@login');
Route::post('/store/login','LoginController@login_action');

Route::get('/store/logout', 'LogoutController@logout');

Route::get('/store/orders', 'OrdersController@orders');

Route::get('/store/cart/add/{id}', 'CartItemInsert@cartItemInsert');
Route::get('/store/cart', 'CartItemInsert@cartdisplay');

Route::post('update-cart','CartItemInsert@update');
Route::post('remove-from-cart','CartItemInsert@remove');


Route::get('/store/checkout/{total}', 'CheckoutController@checkout');

Route::get('/store/order/{id}', 'OrdersController@order');


?>