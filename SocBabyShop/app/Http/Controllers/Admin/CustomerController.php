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
    	
    }

     public function docreateCustomer()
    {
    	
    }

     public function editCustomer()
    {
    	
    }

     public function delelteCustomer()
    {
    	
    }
}
