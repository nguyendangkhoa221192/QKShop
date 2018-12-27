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
Route::get('', 'Home\HomeController@index')->name('index');
Route::redirect('/home', '/')->name('home');

Auth::routes();

Route::group(['prefix' => 'shopping'], function() {
	// API Shopping bag
    Route::group(['prefix' => 'cart', 'as' => 'cart'], function() {
        Route::get('', 'Shopping\ShoppingController@index')->name('_index');
        Route::post('update', 'Shopping\ShoppingController@buyProduct')->name('_update');
        Route::post('update_qty', 'Shopping\ShoppingController@removeProduct')->name('_update_qty');
        Route::post('remove', 'Shopping\ShoppingController@removeProduct')->name('_remove');
    });
    
    // API Love list
    Route::group(['prefix' => 'lovelist', 'as' => 'lovelist'], function() {
        Route::get('', 'Shopping\LoveListController@index')->name('_index');
    	Route::post('add', 'Shopping\LoveListController@lovelist')->name('_add');
    });
});

Route::get('/account', 'Account\AccountController@index')->name('account');