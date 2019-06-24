<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;

class CustomerController extends Controller
{
    public function listCustomer()
    {
    	$customers = Customer::paginate(6);
    	return view ('backend.customer', compact('customers'));
    }

    public function createCustomer()
    {
    	return view ('backend.addcustomer');
    }

    public function docreateCustomer()
    {
    	$attribute = request()->all();
        Customer::create($attribute);
        return back();
    }

    public function editCustomer(Customer $customer)
    {
    	return view ('backend.editcustomer',compact('customer'));
    }

    public function storeCustomer(Customer $customer)
    {
        $attribute = request()->all();
        $customer->update($attribute);
        return redirect(route('customer.list'));
    }
    public function deleteCustomer(Customer $customer)
    {
    	$customer->delete();
        return back();
    }
}
