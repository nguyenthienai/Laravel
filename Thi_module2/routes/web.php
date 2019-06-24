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

Route::get('/', 'BookController@index')->name('book.list');
Route::get('/detail/{book}', 'BookController@detailBooks')->name('book.detail');
Route::get('/createBook', 'BookController@createBooks')->name('book.create');
Route::post('/createBook/', 'BookController@docreateBooks')->name('book.docreate');
Route::delete('/delete/{book}', 'BookController@deleteBooks')->name('book.delete');
Route::post('/search', 'BookController@searchBookName')->name('book.findName');
