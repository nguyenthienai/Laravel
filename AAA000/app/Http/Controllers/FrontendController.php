<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Comment;

class FrontendController extends Controller
{
	public function index()
	{
		$hotproduct = Product::where('hot',1)->orderby('created_at','desc')->take(6)->get();
		$newproduct = Product::where('status',1)->orderby('created_at','desc')->take(6)->get();
		return view('frontend.index', compact('hotproduct','newproduct'));
	}

	public function productcategory($id)
	{
		$productcategory = Product::where(['status'=>1,'category_id'=>$id])->orderBy('created_at')->paginate(6);
		return view('frontend.productcategory', compact('productcategory'));
	}

	public function productdetail(Product $product)
	{
		$comments = Comment::where('product_id', $product->id)->get();
		return view ('frontend.productdetail', compact('product','comments'));
	}

	public function postcomment($id)
	{
		$comment = new Comment();
		$comment->email = Request('email');
		$comment->name = Request('name');
		$comment->content = Request('content');
		$comment->product_id = $id;
		$comment->save();
		return back();
	}

	public function searchProduct()
    {   
        $search = request('search');
        $products = Product::where('name','like','%'. $search .'%')->paginate(9);
        if(!empty($search)){
        	return view('frontend.searchresult', compact('products','search'));
        }
        else {
        	return back();
        }
    }
}
