<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Customer;
use Cart;

use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function addCart($id)
    {
        $product = Product::find($id);
    	Cart::add(['id'=>$id,'name'=>$product->name,'qty'=>1,'price'=>$product->unitprice, 'options'=>['img'=>$product->image]]);
        return redirect ('cart/show');
    }

   public function showCart()
    {	
        $products = Cart::Content();
       return view ('frontend.cart',compact('products'));
    }

    public function deleteCart($id)
    {
        if ($id === 'all'){
            Cart::destroy();
        }
        else {
            Cart::remove($id);
        }
        return back();
    }

    public function updateCart()
    {
        Cart::update(Request('rowId'), Request('qty'));
        return back();
    }

    public function postComplete()
    {
        $data['info']   = Request()->all();
        $email          = Request('email');
        $data['total']  = Cart::total();
        $data['cart']   = Cart::content();
        Mail::send('frontend.email', $data, function($message) use ($email){
            $message->from('www.thienainguyen.nta@gmail.com', 'Soc Baby Shop');
            $message->to($email, $email);
            $message->cc('thiendo.nta123@gmail.com', 'Thiện Ái');
            $message->subject('Xác nhận hóa đơn mua hàng SOCBABYSHOP.');
        });
        Cart::destroy();
        Customer::create($data['info']);
        return redirect('complete');
    }

    public function getComplete()
    {
        return view ('frontend.complete');
    }
}
// 