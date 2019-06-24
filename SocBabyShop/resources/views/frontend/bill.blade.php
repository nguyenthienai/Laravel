@extends('layouts.frontend.master')
@section('title','Sản Phẩm')
@section('other_css')
<link rel="stylesheet" href="{{asset('css/cart.css')}}">
<script type="text/javascript">
	function updateCart(qty,rowId)
	{
		$.get(
			'{{route('cart.update')}}',
			{qty:qty, rowId:rowId},
			function(){
				location.reload();
			}
			)
	}
</script>
@endsection
@section('content')
<nav aria-label="Page breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('home')}}">Trang Chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page">Giỏ Hàng</li>

		</ol>
	</div>
</nav>
<div id="wrap-inner">
	<div id="list-cart">
		<h3>Đơn Hàng Của Quý Khách</h3>
		<form>
			<table class="table table-bordered .table-responsive text-center">
				<tr class="active">
					<td width="22.222%">Tên sản phẩm</td>
					<td width="22.222%">Số lượng</td>
					<td width="16.6665%">Đơn giá</td>
					<td width="16.6665%">Thành tiền</td>				
				</tr>
				@foreach ($cart as $item)
				<tr>
					<td>{{$item->name}}</td>
					<td>{{$item->qty}}</td>
					<td><span class="price">{{number_format($item->price)}} đ</span></td>
					<td><span class="price">{{number_format($item->qty*$item->price)}} đ</span></td>
				</tr>
				@endforeach

			</table>
			<div class="row" id="total-price">									
				Tổng thanh toán: <span class="total-price"> {{$total}} đ</span>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<a href="{{route('cart.complete')}}" class="my-btn btn">Đặt Hàng Ngay</a>
			</div>
			<div>
				<a href="{{route('cart.show')}}" class="my-btn btn">Hủy Đơn Hàng</a>
			</div>
		</form>             	                	
	</div>
</div>
@endsection