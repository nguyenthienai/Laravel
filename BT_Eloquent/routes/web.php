<?php

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'authors'], function()
{
	Route::get('/authors', 'AuthorController@listAuthors')->name('author.list');
	Route::get('/create', 'AuthorController@createAuthors')->name('author.create');
	Route::post('/create', 'AuthorController@do_createAuthors')->name('author.do_create');
	Route::get('/edit/{authors}', 'AuthorController@editAuthors')->name('author.edit');
	Route::patch('/edit/{authors}', 'AuthorController@storeAuthors')->name('author.store');
	Route::delete('/delete/{authors}', 'AuthorController@deleteAuthors')->name('author.delete');
});

Route::group(['prefix'=>'books'], function()
{
	Route::get('/books', 'BookController@listBooks')->name('book.list');
	Route::get('/createBook', 'BookController@createBooks')->name('book.create');
	Route::post('/createBook/', 'BookController@do_createBooks')->name('book.do_create');
	Route::get('/edit/{books}', 'BookController@editBooks')->name('book.edit');
	Route::patch('/edit/{books}', 'BookController@storeBooks')->name('book.store');
	Route::delete('/delete/{books}', 'BookController@deleteBooks')->name('book.delete');
});