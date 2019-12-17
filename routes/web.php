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
Route::post('/store/register','RegisterController@register_action');

Route::get('/store/login','LoginController@login');
Route::post('/store/login','LoginController@login_action');

Route::get('/store/logout', 'LogoutController@logout');

Route::get('/store/orders', 'OrdersController@orders');

Route::get('/store/cart/add/{id}', 'CartItemInsert@cartItemInsert');
Route::get('/store/cart', 'CartItemInsert@cartdisplay');

Route::patch('update-cart','CartItemInsert@update');
Route::delete('remove-from-cart','CartItemInsert@remove');


Route::get('/store/checkout', 'CheckoutController@checkout');




?>