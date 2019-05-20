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

Route::get('/','HomeController@index');

Route::get('/Login', function () {
    return view('Login');
});

//Route::get('/doLogin', function () {
//    return view('WelcomUser');
//});

Route::post('/doLogin', function (Illuminate\Http\Request $request) {
    if ($request->username === 'admin'
        && $request->pass === 'admin') {
        return view('WelcomUser');
    }

    return view('Login_Error');
});

Route::get('/cancelLogin','HomeController@index');
Route::get('/tryagain',function (){
    return view('Login');
});

