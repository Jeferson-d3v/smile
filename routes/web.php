<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', 'App\Http\Controllers\CompraController@index');
Route::post('/dados-compra', 'App\Http\Controllers\DadosCompraController@index')->name('dados-compra.index');
