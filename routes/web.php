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

Route::get('bom', function () {
    return view('bom');
});

Route::get('mrp', function () {
    return view('mrp');
});
Route::get('inventoryProduct', function () {
    return view('inventoryProduct');
});
Route::get('/inventoryRaw','rawMaterialController@index');
Route::post('/rm/create','rawMaterialController@create');

Route::get('/inventoryProduct','ProductController@index');
Route::post('/product/create','ProductController@create');

Route::get('mps', function () {
    return view('mps');
});

Route::get('orderRaw', function () {
    return view('orderRaw');
});


