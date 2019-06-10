<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function allproduct()
    {
    	// $allcategory 	= Category::all();
    	$allproduct 	= Product::where('status',1)->orderBy('category_id')->get();
        $allproduct->load('category');
        
    	// return view('frontend.allproduct', compact('allproduct', 'allcategory'));
        return view('frontend.allproduct', compact('allproduct'));
    }

    public function productcategory($slug)
    {
    	$category 	= Category::where('slug',$slug)->get();
    	foreach ($category as $categoryid) 
    	{
    		$productcategory = Product::where(['status'=>1,'category_id'=>$categoryid->id])->orderBy('created_at')->paginate(6);
    	}	
    	return view('frontend.productcategory', compact('productcategory','categoryid'));
    }

    public function productdetail($id)
    {
    	$productdetail = Product::where('id',$id)->get();
    	foreach ($productdetail as $pro) {
    		$product = $pro;
    	}
    	$productother = Product::where('category_id', $product->category_id)->get();
    	return view('frontend.productdetail', compact('product','productother'));
    }




    public function cart()
    {
        return view('frontend.cart');
    }
}
