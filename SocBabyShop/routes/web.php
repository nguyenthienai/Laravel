<?php

Route::get('/', 'FrontendController@index')->name('home');
Route::get('/sanpham/{id}', 'FrontendController@productcategory')->name('product.category');
Route::get('/detail/{product}', 'FrontendController@productdetail')->name('product.detail');
Route::post('/detail/{id}', 'FrontendController@postcomment')->name('comment.post');
Route::get('/sanpham', 'FrontendController@searchProduct')->name('product.search');

Route::group(['prefix'=>'cart'], function()
{
	Route::get('/add/{id}', 'CartController@addCart')->name('cart.add');
	Route::get('/show', 'CartController@showCart')->name('cart.show');
	Route::get('/delete/{id}', 'CartController@deleteCart')->name('cart.delete');
	Route::get('/update', 'CartController@updateCart')->name('cart.update');
	Route::post('/show', 'CartController@postComplete')->name('cart.complete');
});

Route::get('/complete', 'CartController@getComplete')->name('complete');

Route::group(['namespace'=>'Admin'], function(){
	Route::group(['prefix'=>'login', 'middleware'=>'CheckLogedIn'], function(){
		Route::get('/', 'LoginController@getLogin')->name('login');
		Route::post('/', 'LoginController@doLogin')->name('doLogin');

		});
	Route::get('/logout', 'BackendController@logout')->name('logout');

	Route::group(['prefix'=>'admin', 'middleware'=>'CheckLogedOut'], function(){
			Route::get('/home', 'BackendController@home')->name('admin.home');
			Route::group(['prefix'=>'category'], function(){
				Route::get('/', 'BackendController@listCategory')->name('category.list');
				Route::post('/create', 'BackendController@createCategory')->name('category.create');
				Route::get('/edit/{category}', 'BackendController@editCategory')->name('category.edit');
				Route::get('/delete/{category}', 'BackendController@deleteCategory')->name('category.delete');
				Route::patch('/edit/{category}', 'BackendController@storeCategory')->name('category.store');
			});

			Route::group(['prefix'=>'product'], function(){
				Route::get('/', 'BackendController@listProduct')->name('product.list');
				Route::get('/create', 'BackendController@createProduct')->name('product.create');
				Route::post('/docreate', 'BackendController@docreateProduct')->name('product.docreate');
				Route::get('/edit/{product}', 'BackendController@editProduct')->name('product.edit');
				Route::get('/delete/{product}', 'BackendController@deleteProduct')->name('product.delete');	
				Route::post('/doedit/{product}', 'BackendController@storeProduct')->name('product.store');
			});

			Route::group(['prefix'=>'customer'], function(){
				Route::get('/', 'CustomerController@listCustomer')->name('customer.list');
				Route::get('/create', 'CustomerController@listCustomer')->name('customer.create');
				Route::post('/docreate', 'CustomerController@listCustomer')->name('customer.docreate');
				Route::get('/edit/{customer}', 'CustomerController@listCustomer')->name('customer.edit');
				Route::get('/delete/{customer}', 'CustomerController@listCustomer')->name('customer.delete');	
				Route::post('/doedit/{customer}', 'CustomerController@listCustomer')->name('customer.store');
			});

			Route::group(['prefix'=>'comment'], function(){
				Route::get('/', 'CommentController@listComment')->name('comment.list');
				Route::get('/create', 'CommentController@listComment')->name('comment.create');
				Route::post('/docreate', 'CommentController@listComment')->name('comment.docreate');
				Route::get('/edit/{customer}', 'CommentController@listComment')->name('comment.edit');
				Route::get('/delete/{customer}', 'CommentController@listComment')->name('comment.delete');	
				Route::post('/doedit/{customer}', 'CommentController@listComment')->name('comment.store');
			});


	});
});