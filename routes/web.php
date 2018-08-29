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
    return redirect('/vn');
});

Route::group(['prefix' => 'en'], function () {
    Route::get('/', function () {
        return view('client.en.page.home');
    })->name('en');
});

Route::group(['prefix' => 'vn'], function () {
    Route::get('/', function () {
        return view('client.vn.page.home');
    })->name('vn');
});
