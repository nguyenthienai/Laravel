<?php

Route::prefix('customer')->group(function () {

Route::get('index', 'CustomerController@index')->name('index');

Route::get('create', 'CustomerController@create')->name('create');

Route::post('store', 'CustomerController@store');

Route::get('{id?}/show', 'CustomerController@show');

Route::get('{id}/edit', 'CustomerController@edit');

Route::patch('{id}/update', 'CustomerController@update');

Route::delete('{id}', 'CustomerController@destroy');

});
