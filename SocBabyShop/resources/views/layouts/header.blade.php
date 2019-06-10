<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
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
					<nav><a id="pull" class="btn btn-danger" href="#">
						<i class="fa fa-bars"></i>
					</a></nav>			
				</h1>
			</div>
			<div id="search" class="col-md-5 col-sm-12 col-xs-12">
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
			<div class="col-md-1">
				<div class="container">
					<button type="button" class="btn btn-default btn-sm" id="myBtn">Login</button>
					<!-- Modal -->
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">

								<div class="modal-header" style="padding:20px 35px;">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="row justify-content-center"><span class="glyphicon glyphicon-lock"></span> Login</h4>
								</div>

								<div class="modal-body" style="padding:40px 50px;">
									<form role="form" action="{{route('doLogin')}}" method="post">
										@csrf
										<fieldset>
											@includeIf('errors.errorlogin')
											<div class="form-group">
												<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" value="{{old('email')}}">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Password" name="password" type="password" value="">
											</div>
											<div class="checkbox">
												<label>
													<input name="remember" type="checkbox" value="Remember Me">Remember Me
												</label>
											</div>
											<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
										</fieldset>
									</form>
								</div>

								<div class="modal-footer">
									<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>								
								</div>
							</div>
						</div>
					</div>
				</div>
					<script>
						$(document).ready(function(){
							$("#myBtn").click(function(){
								$("#myModal").modal();
							});
						});
					</script>
			</div>
		</div>			
	</div>
</header><!-- /header -->
<!-- endheader -->
