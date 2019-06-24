<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddCustomerRequest;
use App\Product;
use App\Customer;
use App\Bill;
use App\BillDetail;
use Cart;
use Session;

use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function addCart($id)
    {
        $product = Product::find($id);
        Cart::add(['id'=>$id,'name'=>$product->name,'qty'=>1,'price'=>$product->unitprice, 'options'=>['img'=>$product->image]]);
        return back();
    }

    public function buynow($id)
    {
        $product = Product::find($id);
        Cart::add(['id'=>$id,'name'=>$product->name,'qty'=>1,'price'=>$product->unitprice, 'options'=>['img'=>$product->image]]);
        $products = Cart::Content();
        return redirect(route('cart.show'));
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
            Session::flash('success','Xóa khỏi giỏ hàng thành công!');
        }
        return back();
    }

    public function updateCart()
    {
        Cart::update(Request('rowId'), Request('qty'));
        return back();
    }

    public function showbill()
    {
       $total       = Cart::total();
       $cart        = Cart::content();
       return view('frontend.bill', compact('total','cart'));
   }

   public function postComplete(AddCustomerRequest $request)
   {
     $data['info']   = Request()->all();
     $email          = Request('email');
     $data['total']  = Cart::total();
     $data['cart']   = Cart::content();
    //  Mail::send('frontend.email', $data, function($message) use ($email){
    //     $message->from('www.thienainguyen.nta@gmail.com', 'Soc Baby Shop');
    //     $message->to($email, $email);
    //     $message->cc('thiendo.nta123@gmail.com', 'Thiện Ái');
    //     $message->subject('Xác nhận hóa đơn mua hàng SOCBABYSHOP.');
    // });

     $customer = Customer::create($data['info']);

     $bill = new Bill();
     $bill->customer_id = $customer->id;
     $bill->dateorder = $customer->created_at;
     $bill->total = str_replace(',', '', Cart::total());
     $bill->note = Request('note');
     $bill->save();

     foreach (Cart::content() as $key => $item) {
        $billdetail = new BillDetail();
        $billdetail->bill_id = $bill->id;
        $billdetail->product_id = $item->id;
        $billdetail->quantity = $item->qty;
        $billdetail->unitprice = $item->price;
        $billdetail->save();
    }
    Cart::destroy();
    return redirect('complete');
}

public function getComplete()
{
    return view ('frontend.complete');
}
}
// 