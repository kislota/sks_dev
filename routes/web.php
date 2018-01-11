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
Route::get('/orders/{orders}/{name}','Crm\OrdersController@show')->name('orders.show.client');
Route::get('/orders/{name}/create','Crm\OrdersController@create')->name('orders.create.client');
Route::get('/orders/{name}','Crm\OrdersController@index')->name('orders.index.client');
Route::resource('/orders','Crm\OrdersController');
//Route::resource('/kassa','Crm\KassaController');
//Route::resource('/shops','Crm\ShopsController');
//Route::resource('/parts','Crm\PartsController');
//Route::resource('/clients','Crm\ClientsController');
//Route::resource('/reports','Crm\ReportsController');
//Route::resource('/historys','Crm\HistorysController');
//Route::resource('/trash','Crm\TrashController');
//Route::resource('/purchases','Crm\PurchasesController');
//Route::resource('/admin/settings','Crm\Admin\SettingsController');
//Route::resource('/admin/admins','Crm\Admin\AdminsController');
Route::get('/', function () {
    return view('site');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
