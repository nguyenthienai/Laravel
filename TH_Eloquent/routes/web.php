<?php

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'authors'], function()
{
	Route::get('/authors', 'AuthorController@listAuthors')->name('author.list');
	Route::get('/create', 'AuthorController@createAuthors')->name('author.create');
	Route::post('/create', 'AuthorController@do_createAuthors')->name('author.do_create');
	Route::get('/edit/{author}', 'AuthorController@editAuthors')->name('author.edit');
	Route::patch('/edit/{author}', 'AuthorController@storeAuthors')->name('author.store');
	Route::delete('/delete/{author}', 'AuthorController@deleteAuthors')->name('author.delete');
	Route::get('/{country?}', 'AuthorController@fillterAuthorCountry')->name('author.fillter');
	Route::post('/find', 'AuthorController@findAuthorName')->name('author.findName');
});

Route::group(['prefix'=>'books'], function()
{
	Route::get('/books', 'BookController@listBooks')->name('book.list');
	Route::get('/createBook', 'BookController@createBooks')->name('book.create');
	Route::post('/createBook/', 'BookController@do_createBooks')->name('book.do_create');
	Route::get('/edit/{book}', 'BookController@editBooks')->name('book.edit');
	Route::patch('/edit/{book}', 'BookController@storeBooks')->name('book.store');
	Route::delete('/delete/{book}', 'BookController@deleteBooks')->name('book.delete');
	Route::get('/{authorid?}', 'BookController@fillterBookAuthorName')->name('book.fillter');
	Route::post('/find', 'BookController@findBookName')->name('book.findName');
});