<?php

Route::group(['prefix' => 'customers'], function () {
    Route::get('/','CustomerController@index')->name('customers.index');
});
