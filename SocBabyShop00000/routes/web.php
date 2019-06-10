<?php

Route::get('/trangchu', 'frontend\HomeController@index')->name('home');
Route::get('/sanpham', 'frontend\ProductController@allproduct')->name('product.list');
Route::get('/sanpham/{slug}', 'frontend\ProductController@productcategory')->name('product.category');
Route::get('/detail/{id}', 'frontend\ProductController@productdetail')->name('product.detail');

Route::get('/cart', 'frontend\ProductController@cart')->name('product.cart');