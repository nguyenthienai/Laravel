<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
use Melihovv\ShoppingCart\CartItem;



class CartController extends Controller
{
    public function addCart($id)
    {
        $product = Product::find($id);
    	$a = Cart::add($id,$product->name,$product->unitprice,1);
        if ($a){
            return redirect ('cart/show');
        }
    }

   public function showCart()
    {	
        $a = Cart::Content();
       return view ('frontend.cart',compact('a'));
    }

    public function deleteCart($id)
    {
        Cart::destroy($id);
        //Cart::clear();
        return back();
    }
}
// 