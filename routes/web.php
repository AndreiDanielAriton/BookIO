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



Auth::routes();

Route::get('/user/{user_id}', 'UsersController@index')->name('user.show');
Route::get('/', 'SearchController@index')->name('search.show');
Route::get('/search', 'SearchController@index')->name('search.show');
Route::get('/book/delete/{id}','BookController@destroy')->name('book.destroy');
