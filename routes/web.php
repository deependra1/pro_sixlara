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
    return view('admin.dashboard.index');
});

Route::group(['prefix'  =>   'categories'], function() {

    Route::get('/', 'Admin\CategoryController@index')->name('admin.categories.index');
    Route::get('/create', 'Admin\CategoryController@create')->name('admin.categories.create');
    Route::post('/store', 'Admin\CategoryController@store')->name('admin.categories.store');
    Route::get('/{id}/edit', 'Admin\CategoryController@edit')->name('admin.categories.edit');
    Route::post('/update', 'Admin\CategoryController@update')->name('admin.categories.update');
    Route::get('/{id}/delete', 'Admin\CategoryController@delete')->name('admin.categories.delete');

});
