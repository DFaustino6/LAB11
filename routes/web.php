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
Route::get('/store', 'IndexController@index');
Route::get('/store/register','RegisterController@register');
Route::post('/store/register','RegisterController@register_action');

Route::get('/store/login','LoginController@login');
Route::post('/store/login','LoginController@login_action');

Route::get('/store/logout', 'LogoutController@logout');

?>