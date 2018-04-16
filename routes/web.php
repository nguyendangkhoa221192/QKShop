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

Route::group(['prefix' => 'shopping'], function() {
	// API Shopping bag
    Route::match(['get', 'post'], 'cart', 'Shopping\ShoppingController@buyProduct')->name('shoppingCart');
    Route::post('cart/update', 'Shopping\ShoppingController@updateProduct')->name('updateCart');
    Route::post('cart/remove', 'Shopping\ShoppingController@removeProduct')->name('removeCart');
    
    // API Love list
    Route::match(['get', 'post'], 'lovelist', 'Shopping\LoveListController@lovelist')->name('loveList');
});
