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
		<h3>Giỏ hàng</h3>
		<div>@include('success.success')</div>
		<div>@include('errors.error')</div>
		@if (Cart::count()>0)
		<form>
			<table class="table table-bordered .table-responsive text-center">
				<tr class="active">
					<td width="11.111%">Ảnh mô tả</td>
					<td width="22.222%">Tên sản phẩm</td>
					<td width="22.222%">Số lượng</td>
					<td width="16.6665%">Đơn giá</td>
					<td width="16.6665%">Thành tiền</td>
					<td width="11.112%">Xóa</td>
				</tr>
				@foreach($products as $item)
				<tr>
					<td><img class="img-responsive" src="{{asset('/images/products/' .$item->options->img)}}"></td>
					<td>{{$item->name}}</td>
					<td>
						<div class="form-group">
							<input class="form-control" type="number" value="{{$item->qty}}" onchange="updateCart(this.value,'{{$item->rowId}}')">
						</div>
					</td>
					<td><span class="price">{{number_format($item->price)}} đ</span></td>
					<td><span class="price">{{number_format($item->qty*$item->price)}} đ</span></td>
					<td><a href="{{route('cart.delete',$item->rowId)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?')">Xóa</a></td>
				</tr>
				@endforeach
		
			</table>
			<div class="row" id="total-price">
				<div class="col-md-6 col-sm-12 col-xs-12">						
					Tổng thanh toán: <span class="total-price">{{Cart::total()}} đ</span>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<a href="{{route('home')}}" class="my-btn btn">Mua tiếp</a>
					<a href="" class="my-btn btn">Cập nhật</a>
					<a href="{{route('cart.delete','all')}}" class="my-btn btn" onclick="return confirm('Bạn có chắc chắn muốn xóa giỏ hàng?')">Xóa giỏ hàng</a>
				</div>
			</div>
		</form>             	                	
	</div>

	<div class="row ">
	<div id="xac-nhan" class="col-md-7">
		<h3>Xác nhận mua hàng</h3>
		<form action="{{route('cart.complete')}}" method="post">
			@csrf
			<div class="form-group">
				<label for="email">Email address:</label>
				<input required type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="name">Họ và tên:</label>
				<input required type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="phone">Số điện thoại:</label>
				<input required type="number" class="form-control" id="phone" name="phone">
			</div>
			<div class="form-group">
				<label for="address">Địa chỉ:</label>
				<input required type="text" class="form-control" id="add" name="address">
			</div>
				<div class="form-group">
				<label for="address">Ghi chú:</label>
				<textarea type="text" class="form-control" id="add" name="note"></textarea>
			</div>
			<div class="form-group text-right">
				<button id='myBtn2' type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
			</div>
		</form>
	</div>
	</div>
	@else
	<h5>Giỏ hàng rỗng !</h5>
	@endif
</div>
@endsection