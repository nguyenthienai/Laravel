<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','HomeController@index');

Route::post('/change', function (Illuminate\Http\Request $request) {
    $array = ['love'=>'yêu', 'dog'=>'con chó', 'cat'=>'con mèo'];
    $input = $request->input;
    $dis = true;
    $res =0;
    return view('Dictionary', compact(['input','dis','array','res']));
});
