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

    public function listCategory()
    {
    	$categories = Category::all();
    	return view ('backend.category', compact('categories'));
    }

    public function createCategory()
    {
    	 $attribute = request()->all();
        Category::create($attribute);
    	return back();
    }

    public function editCategory(Category $category)
    {
    	return view ('backend.editcategory', compact('category'));
    }

     public function storeCategory(Category $category)
    {
    	$attribute = request()->all();
        $category->update($attribute);
    	return redirect (route('category.list'));
    }

    public function deleteCategory(Category $category)
    {
    	$category->delete();
    	return back();
    }

    public function listProduct()
    {
    	$products = Product::orderBy('created_at','desc')->paginate(6);
    	return view ('backend.product', compact('products'));
    }

     public function createProduct()
    {
    	$categories = Category::all();
    	return view ('backend.addproduct', compact('categories'));
    }

     public function docreateProduct()
    {
    	$filename = Request('image')->getClientOriginalName();
    	$attribute = request()->all();
    	$attribute['image'] = $filename;
        Product::create($attribute);
        Request('image')->move('images/products',$filename);
    	return back();
    }

     public function deleteProduct(Product $product)
    {
    	$product->delete();
    	return back();
    }

    public function editProduct(Product $product)
    {
    	$categories = Category::all();
    	return view ('backend.editproduct', compact('product','categories'));
    }

    public function storeProduct(Product $product)
    {
    	$filename = Request('image')->getClientOriginalName();
    	$attribute = request()->all();
    	$attribute['image'] = $filename;
        $product->update($attribute);
    	Request('image')->move('images/products',$filename);
    	return redirect (route('product.list'));
    }
}
