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

Route::post('/calculator_discount', function (Illuminate\Http\Request $request){
    $description        = $request->description;
    $price              = $request->price;
    $discount_percent   = $request->discount_percent;
    $discountAmount     = $price * $discount_percent * 0.1;
    $discountPrice      = $price - $discountAmount;

    return view('DisplayDiscount', compact(['description', 'price', 'discount_percent', 'discountAmount', 'discountPrice']));

});



