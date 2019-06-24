<?php

Route::get('/', 'FrontendController@index')->name('home');
Route::get('/product/{cat}', 'FrontendController@productcategory')->name('product.category');
Route::get('/detail/{product}', 'FrontendController@productdetail')->name('product.detail');
Route::post('/detail/{id}', 'FrontendController@postcomment')->name('comment.post');
Route::get('/product', 'FrontendController@searchProduct')->name('product.search');
Route::get('/allproduct', 'FrontendController@allProduct')->name('product.all');

Route::group(['prefix'=>'cart'], function()
{
	Route::get('/add/{id}', 'CartController@addCart')->name('cart.add');
	Route::get('/addnow/{id}', 'CartController@buynow')->name('buynow');
	Route::get('/show', 'CartController@showCart')->name('cart.show');
	Route::get('/delete/{id}', 'CartController@deleteCart')->name('cart.delete');
	Route::get('/update', 'CartController@updateCart')->name('cart.update');
	Route::post('/show', 'CartController@postComplete')->name('cart.complete');
	// Route::post('/showbill', 'CartController@showbill')->name('bill.show');
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

		Route::group(['prefix'=>'user'], function(){
			Route::get('/', 'UserController@listUser')->name('user.list');
			Route::post('/checkuser', 'UserController@checkUser')->name('user.check');
			Route::post('/checkcreate', 'UserController@checkCreate')->name('user.checkcreate');
			Route::get('/create', 'UserController@create')->name('user.createuser');
			Route::post('/create', 'UserController@createUser')->name('user.create');
			Route::post('/editpass', 'UserController@storePass')->name('user.storepass');
			Route::get('/edit', 'UserController@editUser')->name('user.edit');
			Route::get('/delete', 'UserController@deleteUser')->name('user.delete');	
			Route::post('/store', 'UserController@storeUser')->name('user.store');
			Route::get('/infouser', 'UserController@infoUser')->name('user.info');
		});

		Route::group(['prefix'=>'category'], function(){
			Route::patch('/edit/{category}', 'CategoryController@storeCategory')->name('category.store');
			Route::get('/', 'CategoryController@listCategory')->name('category.list');
			Route::post('/create', 'CategoryController@createCategory')->name('category.create');
			Route::get('/edit/{category}', 'CategoryController@editCategory')->name('category.edit');
			Route::get('/delete/{category}', 'CategoryController@deleteCategory')->name('category.delete');
			
		});

		Route::group(['prefix'=>'product'], function(){
			Route::patch('/doedit/{product}', 'ProductController@storeProduct')->name('product.store');
			Route::get('/', 'ProductController@listProduct')->name('product.list');
			Route::get('/create', 'ProductController@createProduct')->name('product.create');
			Route::post('/docreate', 'ProductController@docreateProduct')->name('product.docreate');
			Route::get('/edit/{product}', 'ProductController@editProduct')->name('product.edit');
			Route::get('/delete/{product}', 'ProductController@deleteProduct')->name('product.delete');	
			
		});

		Route::group(['prefix'=>'customer'], function(){
			Route::get('/', 'CustomerController@listCustomer')->name('customer.list');
			Route::get('/create', 'CustomerController@createCustomer')->name('customer.create');
			Route::post('/docreate', 'CustomerController@docreateCustomer')->name('customer.docreate');
			Route::get('/edit/{customer}', 'CustomerController@editCustomer')->name('customer.edit');
			Route::get('/delete/{customer}', 'CustomerController@deleteCustomer')->name('customer.delete');	
			Route::post('/store/{customer}', 'CustomerController@storeCustomer')->name('customer.store');
		});

		Route::group(['prefix'=>'comment'], function(){
			Route::get('/', 'CommentController@listComment')->name('comment.list');
			Route::get('/delete/{comment}', 'CommentController@deleteComment')->name('comment.delete');	
		});

		Route::group(['prefix'=>'bill'], function(){
			Route::get('/', 'BillController@listBill')->name('bill.list');
			Route::get('/bill/{bill}', 'BillController@detailBill')->name('bill.detail');
			Route::get('/delete/{bill}', 'BillController@deleteBill')->name('bill.delete');
		});

	});
});