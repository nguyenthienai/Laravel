<?php

Route::get('/', 'FrontendController@index')->name('home');
Route::get('/sanpham/{id}', 'FrontendController@productcategory')->name('product.category');
Route::get('/detail/{product}', 'FrontendController@productdetail')->name('product.detail');
Route::post('/detail/{id}', 'FrontendController@postcomment')->name('comment.post');
Route::get('/sanpham', 'FrontendController@searchProduct')->name('product.search');

Route::group(['prefix'=>'cart'], function()
{
	Route::get('/show', 'CartController@showCart')->name('cart.show');
	Route::get('/add/{id}', 'CartController@addCart')->name('cart.add');
	Route::get('/delete/{id}', 'CartController@deleteCart')->name('cart.delete');
});