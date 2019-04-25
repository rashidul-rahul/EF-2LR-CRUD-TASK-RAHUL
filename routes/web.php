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
Route::get('/', 'HomeController@index')->name('home');
Route::get('admin', 'BlogController@admin')->name('admin');
Route::get('allBlog', 'BlogController@index')->name('blog');
Route::get('create', 'BlogController@create')->name('create');
Route::post('create', 'BlogController@store')->name('store');
Route::get('edit/{id}', 'BlogController@edit')->name('edit');
Route::post('update/{id}', 'BlogController@update')->name('update');
Route::delete('delete/{id}', 'BlogController@delete')->name('delete');
