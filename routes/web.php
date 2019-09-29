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

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('/bom/{product_id?}','BomController@index');

Route::get('mrp', function () {
    return view('mrp');
});
Route::get('inventoryProduct', function () {
    return view('inventoryProduct');
});
Route::get('grn', function () {
    return view('grn');
});
Route::get('transaction', function () {
    return view('transaction');
});
Route::get('history', function () {
    return view('history');
});
Route::get('/inventoryRaw','rawMaterialController@index');
Route::post('/create','rawMaterialController@create');

Route::get('/inventoryProduct','ProductController@index');
Route::post('/product/create','ProductController@create');

Route::get('mps', function () {
    return view('mps');
});

Route::get('customer','CustomerController@index');
Route::post('/customer/create','customerController@create');
Route::get('/customer/{id}/edit','customerController@edit');
Route::post('/customer/{id}/update','customerController@update');

Route::get('supplier','SupplierController@index');
Route::post('/supplier/create','supplierController@create');
Route::get('/supplier/{id}/edit','supplierController@edit');
Route::post('/supplier/{id}/update','supplierController@update');

Route::get('orderRaw', function () {
    return view('orderRaw');
});

Route::get('orderProduct', function () {
    return view('orderProduct');
});

