@extends('layouts.layoutsite')
@section('title','Trang chủ')
@section('session_header')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">	
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Vietpro Shop - Home</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/cart.css">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
	$(function() {
		var pull        = $('#pull');
		menu        = $('nav ul');
		menuHeight  = menu.height();

		$(pull).on('click', function(e) {
			e.preventDefault();
			menu.slideToggle();
		});
	});

	$(window).resize(function(){
		var w = $(window).width();
		if(w > 320 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});
</script>
@endsection
@section('content')  


<!-- main -->
<section id="body">
	<div class="container">
		<div class="row">
			<div class="col-md-3" category>
				@includeIf('frontend.listcategory')
			</div>
			<div id="main" class="col-md-9">
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
								<tr>
									<td><img class="img-responsive" src="img/home/product-1.png"></td>
									<td>Galaxy S6 Edge (Quốc tế) hàng Like new 32GB</td>
									<td>
										<div class="form-group">
											<input class="form-control" type="number">
										</div>
									</td>
									<td><span class="price">6.590.000 đ</span></td>
									<td><span class="price">6.590.000 đ</span></td>
									<td><a href="#">Xóa</a></td>
								</tr>
								<tr>
									<td><img class="img-responsive" src="img/home/product-2.png"></td>
									<td>Galaxy S6 Edge (Quốc tế) hàng Like new 32GB</td>
									<td>
										<div class="form-group">
											<input class="form-control" type="number">
										</div>
									</td>
									<td><span class="price">6.590.000 đ</span></td>
									<td><span class="price">6.590.000 đ</span></td>
									<td><a href="#">Xóa</a></td>
								</tr>
							</table>
							<div class="row" id="total-price">
								<div class="col-md-6 col-sm-12 col-xs-12">										
									Tổng thanh toán: <span class="total-price">50.000.000 đ</span>																		
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<a href="#" class="my-btn btn">Mua tiếp</a>
									<a href="#" class="my-btn btn">Cập nhật</a>
									<a href="#" class="my-btn btn">Xóa giỏ hàng</a>
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
				<!-- end main -->
			</div>
		</div>
	</div>
</section>
<!-- endmain -->


@endsection