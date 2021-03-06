@extends('layouts.frontend.master')
@section('title',"Hoàn thành")
@section('content')
<link rel="stylesheet" href="css/complete.css">
<div id="wrap-inner">
	<div id="complete">
		<p class="info">Quý khách đã đặt hàng thành công!</p>
		<p>• Hóa đơn mua hàng của Quý khách đã được chuyển đến Địa chỉ Email có trong phần Thông tin Khách hàng của chúng Tôi</p>
		<p>• Sản phẩm của Quý khách sẽ được chuyển đến Địa có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.</p>
		<p>• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng</p>
		<p>• Trụ sở chính: 115 Văn Thánh - Huế</p>
		<p>Cám ơn Quý khách đã sử dụng Sản phẩm của SocBabyShop!</p>
		<!-- <p>Xem lại đơn hàng của Quý Khách <a href="#">Bấm Vào Đây</a></p> -->
	</div>
	<p class="text-right return"><a href="{{route('home')}}">Quay lại trang chủ</a></p>
</div>	
@endsection