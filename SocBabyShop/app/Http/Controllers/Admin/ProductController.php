<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\AddProductRequest;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Session;

class ProductController extends Controller
{
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

     public function docreateProduct(AddProductRequest $request)
    {
    	$filename = Request('image')->getClientOriginalName();
    	$attribute = request()->all();
    	$attribute['image'] = $filename;
        Product::create($attribute);
        Request('image')->move('images/products',$filename);
        Session::flash('success', 'Thêm mới sản phẩm thành công !');
    	return back();
    }

     public function deleteProduct(Product $product)
    {
    	$product->delete();
        Session::flash('success','Xóa sản phẩm ' .$product->name .'thành công!');
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
        Session::flash('success','Sửa sản phẩm thành công!');
    	return redirect (route('product.list'));
    }
}
