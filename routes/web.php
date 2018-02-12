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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::match(['get', 'post'],'/' ,'Home\HomeController@index')->name('home');
Route::match(['get', 'post'],'/account' ,'Account\AccountController@index')->name('account');
Route::prefix('/account')->group(function() {
	Route::post('create', 'Account\AccountController@createUser')->name('createUser');
});
Auth::routes();

Route::get('/home', 'Home\HomeController@index')->name('home');
Route::get('/topic', 'Home\TopSliderController@index')->name('test');
