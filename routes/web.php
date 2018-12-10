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
Route::group(['prefix' => 'vincity'], function () {
    Route::group(['prefix' => 'en'], function () {
        Route::get('/', function () {
            return view('client.en.page.home');
        })->name('vincity.en');
    });

    Route::group(['prefix' => 'vn'], function () {
        Route::get('/', function () {
            return view('client.vn.page.home');
        })->name('vincity.vn');
    });
});

Route::group(['prefix' => 'vinpearl'], function () {
    Route::group(['prefix' => 'vn'], function () {
        Route::get('/', function () {
            return view('vinpearl.vn.page.home');
        })->name('vinpearl.vn');
    });
});

Route::group(['prefix' => 'condotel'], function () {
    Route::group(['prefix' => 'vn'], function () {
        Route::get('/', function () {
            return view('condotel.vn.page.home');
        })->name('condotel.vn');
    });
});
