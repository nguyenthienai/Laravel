<?php
Route::get('/', function () {
    echo "<h2>This is Home page</h2>";
});

Route::get('/about', function () {
    echo "<h2>This is About page</h2>";
});

Route::get('/contact', function () {
    echo "<h2>This is Contact page</h2>";
});

Route::get('/user', function () {
    return view('user', ['name'=>'Masud Alam']);
});

Route::get('/user/{name}', function ($name) {
    echo "<h2>User name is $name</h2>";
});

Route::get('/user-name/{name?}', function ($name = 'Sohel') {
    echo "<h2>User name is $name</h2>";
});

Route::get('/','HomeController@index');
