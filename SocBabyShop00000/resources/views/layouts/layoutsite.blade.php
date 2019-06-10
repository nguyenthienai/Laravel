<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>
	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/layoutsite.css')}}">
	<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
	@yield('session_header')
</head>
<body>
	<section class="clearfix topbar bg-topbar">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					Bán hàng trực tuyến 0779900558
				</div>
				<div class="col-md-6" text-right>
					Thông tin khuyên mãi  Tra cứu đơn hàng  Yêu thích
				</div>
			</div>
		</div>
	</section><!--end topbar-->

	<section class="clearfix header">
		<div class="container">
			<div class="row my-3">
				<div class="col-md-2 logo">
					<img class="img-fluid" src="{{asset('images/logo.jpg')}}" alt="logo">
				</div>
				<div class="col-md-4 search">
					<form class="form-inline my-2 my-lg-0">
					      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					    </form>
				</div>
				<div class="col-md-3 accountcart">
					account
				</div>
				<div id="cart" class="col-md-3 cart">
					<a class="display" href="#">Giỏ hàng</a>
					<a href="#"><img src="images/cart.png" alt=""></a>
					<a href="#">6</a>
				</div>
			</div>
		</div>
	</section><!--end header-->

	<section class="clearfix mainmenu">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					
				</div>
				<div class="col-md-9">
					<!-- main menu-->
					@includeIf('frontend.mainmenu')
					<!-- end main menu-->
				</div>
			</div>
		</div>
	</section><!--end mainmenu-->
	@yield('content')
	<section class="clearfix footer1 border-top my-3 py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-3">c1</div>
				<div class="col-md-3">c2</div>
				<div class="col-md-3">c3</div>
				<div class="col-md-3">c4</div>
			</div>
		</div>
	</section><!--end footer1-->

	<section class="clearfix footer2 border-top my-3 py-3">
		<div class="container">
			<div class="row">
				<div class="col-md">c1</div>
				<div class="col-md">c2</div>
				<div class="col-md">c3</div>
				<div class="col-md">c4</div>
				<div class="col-md">c5</div>
			</div>
		</div>
	</section><!--end footer2-->

	<section class="clearfix copyright bg-topbar border-top my-3">
		<div class="container">
			Design by : Soc Baby Shop
		</div>
	</section><!--end copyright-->
	<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	@yield('session_footer')
</body>
</html>