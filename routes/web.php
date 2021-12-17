<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', 'App\Http\Controllers\CompraController@index');

Route::post('/dados-compra', 'App\Http\Controllers\DadosCompraController@index')->name('dados-compra.index');


Route::get('/product', 'App\Http\Controllers\productController@displayEmpty');

Route::get('/product/{id}', 'App\Http\Controllers\productController@display');

Route::post('/product', 'App\Http\Controllers\productController@displayEmpty');

Route::patch('/product/{id}', 'App\Http\Controllers\productController@edit');

Route::delete('/product/{id}', 'App\Http\Controllers\productController@delete');

Route::get('/user', 'App\Http\Controllers\productController@displayEmpty');

Route::get('/user/{id}', 'App\Http\Controllers\userController@display');

Route::post('/user', 'App\Http\Controllers\userController@displayEmpty');

Route::patch('/user/{id}', 'App\Http\Controllers\userController@edit');

Route::delete('/user/{id}', 'App\Http\Controllers\userController@delete');

Route::get('/purchase', 'App\Http\Controllers\purchaseController@displayEmpty');

Route::get('/purchase/{id}', 'App\Http\Controllers\purchaseController@display');

Route::get('/user/{userId}/purchase/{buyId}', 'App\Http\Controllers\purchaseController@buyStatus');

Route::post('/purchase', 'App\Http\Controllers\purchaseController@displayEmpty');

Route::patch('/purchase', 'App\Http\Controllers\purchaseController@edit');

Route::delete('/purchase', 'App\Http\Controllers\purchaseController@delete');