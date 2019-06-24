<?php

Route::get('/', 'PostController@index')->name('home');
Route::get('/create', 'PostController@create')->name('post.create');
Route::post('/docreate', 'PostController@docreate')->name('post.docreate');
Route::get('/edit/{post}', 'PostController@edit')->name('post.edit');
Route::get('/delete/{post}', 'PostController@delete')->name('post.delete');
Route::post('/edit/{post}', 'PostController@store')->name('post.store');
Route::get('/detail/{post}', 'PostController@detail')->name('post.detail');
