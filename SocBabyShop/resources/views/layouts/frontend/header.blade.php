<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
	.search-box {  
		margin-top: 26px;
		display: inline-block;  
		width: 100%;  
		border-radius: 3px;  
		padding: 4px 55px 4px 15px;  
		position: relative;  
		background: #fff;  
		border: 1px solid #ddd;  
		-webkit-transition: all 200ms ease-in-out;  
		-moz-transition: all 200ms ease-in-out;  
		transition: all 200ms ease-in-out;
	}

	.search-box.hovered, .search-box:hover, .search-box:active {  
		border: 1px solid #aaa;
	}

	.search-box input[type=text] { 
		border: none;  
		box-shadow: none;  
		display: inline-block;  
		padding: 0;  
		background: transparent;
	}

	.search-box input[type=text]:hover, .search-box input[type=text]:focus, .search-box input[type=text]:active {  
		box-shadow: none;
	}

	.search-box .search-btn {  
		position: absolute;  
		right: 2px;  
		top: 2px;  
		color: #aaa;  
		border-radius: 3px;  
		font-size: 21px;  
		padding: 5px 10px 1px;  
		-webkit-transition: all 200ms ease-in-out;  
		-moz-transition: all 200ms ease-in-out;  
		transition: all 200ms ease-in-out;
	}

	.search-box .search-btn:hover {  
		color: #fff;  
		background-color: #8FBE00;
	}

	.modal-header, h4, .close {
		background-color: #5cb85c;
		color:white !important;
		text-align: center;
		font-size: 30px;
	}
	.modal-footer {
		background-color: #f9f9f9;
	}
</style>
<!-- header -->
<header id="header">
	<div class="container">
		<div class="row">
			<div id="logo" class="col-md-4 col-sm-12 col-xs-12">
				<h1>
					<a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}"></a>
				</h1>
			</div>
			<div class="col-md-5 col-sm-12 col-xs-12">
				<div class="search-box"> 
					<form class="search-form" action="{{route('product.search')}}"> <input class="form-control" placeholder="Nhập từ khóa ..." type="text" name="search">
						<button class="btn btn-link search-btn"> <i class="glyphicon glyphicon-search"></i> 
						</button> 
					</form> 
				</div> 
			</div>
			<div id="cart" class="col-md-2 col-sm-12 col-xs-12">
				<nav><a id="pull" class="btn btn-danger" href="#">
					<i class="fa fa-bars"></i>
				</a></nav>				
				<a class="display" href="{{route('cart.show')}}">Giỏ hàng</a>
				<a href="{{route('cart.show')}}">{{Cart::count()}}</a>				    
			</div>
			<div class="col-md-1 col-sm-12 col-xs-12">
				<button type="button" class="btn btn-default btn-sm" id="myBtn">Login</button>
				@include('modals.modallogin')			
			</div>
		</div>			
	</div>
</header><!-- /header -->
<!-- endheader -->
