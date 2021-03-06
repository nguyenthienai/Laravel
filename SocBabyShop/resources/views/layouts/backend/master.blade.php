<!DOCTYPE html>
<html>
<head>
<base href="{{asset('backend')}}/">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">SocBabyShop Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{Auth::user()->name}} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{route('user.info')}}"><svg class="glyph stroked cancel"><use xlink:href="(#stroked-cancel)"></use></svg>Thông Tin Tài Khoản</a></li>
							<li><a href="{{route('logout')}}"><svg class="glyph stroked cancel"><use xlink:href="(#stroked-cancel)"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-md-3 col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"><h2>DashBoard</h2></li>
			<li class="active catzoom"><a href="{{route('admin.home')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li class="catzoom"><a href="{{route('user.list')}}"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Quản Trị Viên</a></li>
			<li class="catzoom"><a href="{{route('product.list')}}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg></use></svg> Sản phẩm</a></li>
			<li class="catzoom"><a href="{{route('category.list')}}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Danh mục</a></li>
			<li class="catzoom"><a href="{{route('customer.list')}}"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Khách Hàng</a></li>
			<li class="catzoom"><a href="{{route('comment.list')}}"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg> Bình Luận</a></li>
			<li class="catzoom"><a href="{{route('bill.list')}}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Hóa Đơn</a></li>
		</ul>	
	</div><!--/.sidebar-->

	@yield('content')

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>