<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
class HomeController extends Controller
{
    public function index()
    {
    	$newproduct = Product::where('status',1)->orderBy('created_at','desc')->paginate(4);
    	return view('frontend.home', compact('newproduct'));
    }
}
