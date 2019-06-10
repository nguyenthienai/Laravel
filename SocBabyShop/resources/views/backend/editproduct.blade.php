@extends('layouts.backend.master')
@section('title', 'Quản Trị | Sửa sản phẩm')
@section('content')	
<base href="{{asset('backend')}}/">
<script src="js/jquery-1.11.1.min.js"></script>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Sản phẩm</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Sửa sản phẩm</div>
				<div class="panel-body">
					<form action="{{route('product.store',$product->id)}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group" >
									<label>Tên sản phẩm</label>
									<input required type="text" name="name" class="form-control" value="{{$product->name}}">
								</div>
								<div class="form-group" >
									<label>Giá sản phẩm</label>
									<input required type="number" name="unitprice" class="form-control" value="{{$product->unitprice}}">
								</div>
								<div class="form-group" >
									<label>Giá khuyến mãi</label>
									<input required type="number" name="promotionprice" class="form-control" value="{{$product->promotionprice}}">
								</div>
								<div class="form-group" >
									<label>Ảnh sản phẩm</label>
									<input required id="img" type="file" name="image" class="form-control hidden" onchange="changeImg(this)">
									<img id="avatar" class="thumbnail" width="300px" src="{{asset('images/products/' .$product->image)}}">
								</div>
								<div class="form-group" >
									<label>Đơn vị tính</label>
									<input required type="text" name="unit" class="form-control" value="{{$product->unit}}">
								</div>
								<div class="form-group" >
									<label>Trạng thái</label>
									<select required name="status" class="form-control">
										<option value="1" {{$product->status === 1 ? "selected" : ""}}>Còn hàng</option>
										<option value="0" {{$product->status === 0 ? "selected" : ""}}>Hết hàng</option>
									</select>
								</div>
								<div class="form-group" >
									<label>Miêu tả</label>
									<textarea required name="description">{{$product->description}}"</textarea>
									<script type="text/javascript">
										var editor = CKEDITOR.replace('description',{
											language:'vi',
											filebrowserImageBrowseUrl: '../../backend/ckfinder/ckfinder.html?Type=Images',
											filebrowserFlashBrowseUrl: '../../backend/ckfinder/ckfinder.html?Type=Flash',
											filebrowserImageUploadUrl: '../../backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
											filebrowserFlashUploadUrl: '../../public/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
										});
									</script>
								</div>
								<div class="form-group" >
									<label>Loại sản phẩm</label>									
									<select required name="category_id" class="form-control">
										@foreach ($categories as $category)
											<option value="{{$category->id}}" {{$product->category->id === $category->id ? "selected" : ""}}>{{$category->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group" >
									<label>Sản phẩm nổi bật</label><br>
									Có: <input type="radio" name="hot" value="1" {{$product->hot === 1 ? "checked" : ""}}>
									Không: <input type="radio" name="hot" value="0" {{$product->hot === 0 ? "checked" : ""}}>
								</div>
								<input type="submit" name="edit" value="Sửa" class="btn btn-primary">
								<a href="{{route('product.list')}}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
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
	});
	function changeImg(input){
		    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		    if(input.files && input.files[0]){
		    	var reader = new FileReader();
		        //Sự kiện file đã được load vào website
		        reader.onload = function(e){
		            //Thay đổi đường dẫn ảnh
		            $('#avatar').attr('src',e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(document).ready(function() {
			$('#avatar').click(function(){
				$('#img').click();
			});
		});
	</script>	
	@endsection
