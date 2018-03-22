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

//Stock Shares Routes
Route::get('/shares', '\App\Http\Controllers\StockShares\StockSharesController@index')->name('shares');
Route::get('/sharePurchase', '\App\Http\Controllers\StockShares\StockSharesController@showPurchaseForm');
Route::post('/sharePurchase', '\App\Http\Controllers\StockShares\StockSharesController@save')->name('sharePurchase');
Route::post('/shares/delete', '\App\Http\Controllers\StockShares\StockSharesController@remove')->name('deleteShare');
