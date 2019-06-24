<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Bill;
use App\BillDetail;

class BillController extends Controller
{
	public function listBill()
	{
		$bills = Bill::orderby('dateorder','desc')->paginate(15);
		return view ('backend.bill', compact('bills'));
	}

	public function deleteBill(Bill $bill)
	{
		$bill->delete();
		Session::flash('success', "'Xóa hóa đơn của khách hàng '{$bill->customer->name}' thành công !'");
		return back();
	}

	public function detailBill(Bill $bill)
	{
		$billdetails = BillDetail::where('bill_id',$bill->id)->get();
		return view('backend.billdetail', compact('bill','billdetails'));
	}
}
