<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Comment;
use App\Customer;
use Auth;

class BackendController extends Controller
{
	public function home()
    {
        $product = Product::count('id');
        $comment = Comment::count('id');
        $customer = Customer::count('id');
        $category = Category::count('id');
    	return view ('backend.home', compact('product','comment','customer','category'));
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect(route('home'));
    }   
}
