@extends('layouts.layoutsite')
@section('title','Sản Phẩm')
@section('other_css')
<link rel="stylesheet" href="{{asset('css/cart.css')}}">
@endsection
@section('content')
<div id="wrap-inner">
						<div id="list-cart">
							<h3>Giỏ hàng</h3>
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
									@foreach($a as $item)
										<tr>
										<td><img class="img-responsive" src=""></td>
										<td>{{$item->name}}</td>
										<td>
											<div class="form-group">
												<input class="form-control" type="number" value="{{$item->quantity}}">
											</div>
										</td>
										<td><span class="price">{{$item->price}} đ</span></td>
										<td><span class="price">{{$item->quantity*$item->price}} đ</span></td>
										<td><a href="{{route('cart.delete',$item->uniqueId)}}">Xóa</a></td>
									</tr>
									@endforeach
									
									
								</table>
								<div class="row" id="total-price">
									<div class="col-md-6 col-sm-12 col-xs-12">										
											Tổng thanh toán: <span class="total-price">{{Cart::getTotal()}} đ</span>
																													
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<a href="{{route('home')}}" class="my-btn btn">Mua tiếp</a>
										<a href="{{route('cart.show')}}" class="my-btn btn">Cập nhật</a>
										<a href="{{route('cart.delete','all')}}" class="my-btn btn">Xóa giỏ hàng</a>
									</div>
								</div>
							</form>             	                	
						</div>

						<div id="xac-nhan">
							<h3>Xác nhận mua hàng</h3>
							<form>
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
									<label for="add">Địa chỉ:</label>
									<input required type="text" class="form-control" id="add" name="add">
								</div>
								<div class="form-group text-right">
									<button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
								</div>
							</form>
						</div>
					</div>
@endsection