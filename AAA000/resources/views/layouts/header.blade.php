<!-- header -->
<header id="header">
	<div class="container">
		<div class="row">
			<div id="logo" class="col-md-4 col-sm-12 col-xs-12">
				<h1>
					<a href="#"><img src="{{asset('images/logo.png')}}"></a>						
					<nav><a id="pull" class="btn btn-danger" href="#">
						<i class="fa fa-bars"></i>
					</a></nav>			
				</h1>
			</div>
			<div id="search" class="col-md-6 col-sm-12 col-xs-12">
				<form action="{{route('product.search')}}" method="get">
					@csrf
					<input type="text" name="search" placeholder="Nhập từ khóa ...">
					<input type="submit" name="submit" value="Tìm Kiếm">
				</form>
			</div>
			<div id="cart" class="col-md-2 col-sm-12 col-xs-12">				
				<a class="display" href="{{route('cart.show')}}">Giỏ hàng</a>
				<a href="{{route('cart.show')}}">{{Cart::count()}}</a>				    
			</div>
		</div>			
	</div>
</header><!-- /header -->
	<!-- endheader -->