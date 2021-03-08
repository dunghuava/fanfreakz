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

// router dành cho trang giao diện
Route::get('/', function () {
    return view('web.default');
});

// router dành cho trang login / logout
Route::match(['get', 'post'],'admin/login','AccountController@login')->name('login');
Route::match(['get', 'post'],'admin/logout','AccountController@logout')->name('logout');

// nhóm router dành cho trang admin
Route::group(['prefix' => 'admin','middleware' => ['auth:web','checkloginadmin']], function () {
    Route::get('/','DasboardController@index');
    Route::group(['prefix' => 'category'], function () {
        Route::get('/','CategoryController@index')->name('category');
        Route::get('/{id}/delete','CategoryController@destroy');
        Route::match(['get', 'post'],'add','CategoryController@create');
        Route::match(['get', 'post'],'/{id}/edit','CategoryController@create');
    });
});
