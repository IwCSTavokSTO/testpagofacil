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
    return view('pagofacil');
});

Route::post('transaction', 'MakeTransaction@store')->name('transaction');
Route::post('verify', 'verifyTransaction@index')->name('verify');
