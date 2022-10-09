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

Route::get('/test', function () {
    return view('bill.test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

#Stocks Managment
Route::get('/add', 'StockController@create')->name('new-stock');
Route::get('/view', 'StockController@index')->name('view-all-stock');
Route::post('/home', 'StockController@store')->name('add-product');
Route::get('/edit/{stock}', 'StockController@edit')->name('edit');
Route::get('/delete/{stock}', 'StockController@destroy');
Route::put('/view/{stock}', 'StockController@update');

#Billing 

Route::get('/billing', 'BillingController@index')->name('billing');


