@extends('layouts.master')
@section('title', 'Quản Trị | Sửa bài viết')
@section('content')	
<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Bài Viết</h1>
		</div>
	</div><!--/.row-->
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Sửa bài viết</div>
				<div class="panel-body">
					<form action="{{route('post.store', $post->id)}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group" >
									<label>Tên bài viết</label>
									<input required type="text" name="name" class="form-control" value="{{$post->name}}">
								</div>
								<div class="form-group" >
									<label>Tóm tắt</label>
									<textarea required name="tomtat" cols="100">{{$post->tomtat}}</textarea>
									<script type="text/javascript">
										var editor = CKEDITOR.replace('tomtat',{
											language:'vi',
											filebrowserImageBrowseUrl: '../../backend/ckfinder/ckfinder.html?Type=Images',
											filebrowserFlashBrowseUrl: '../../backend/ckfinder/ckfinder.html?Type=Flash',
											filebrowserImageUploadUrl: '../../backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
											filebrowserFlashUploadUrl: '../../public/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
										});
									</script>
								</div>
								<div class="form-group" >
									<label>Ảnh bài viết</label>
									<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
									<img id="avatar" class="thumbnail" width="300px" src="{{asset('images/' .$post->img)}}">
								</div>

								<div class="form-group" >
									<label>Nội dung</label>
									<textarea required  class="ckeditor" name="noidung" cols="100"></textarea>
									<script type="text/javascript">
										var editor = CKEDITOR.replace('noidung',{
											language:'vi',
											filebrowserImageBrowseUrl: '../../backend/ckfinder/ckfinder.html?Type=Images',
											filebrowserFlashBrowseUrl: '../../backend/ckfinder/ckfinder.html?Type=Flash',
											filebrowserImageUploadUrl: '../../backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
											filebrowserFlashUploadUrl: '../../public/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
										});
									</script>
								</div>
								<input type="submit" name="edit" value="Sửa" class="btn btn-primary">
								<a href="{{route('home')}}" class="btn btn-danger">Quay lại</a>
							</div>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/chart.min.js')}}"></script>
<script src="{{asset('js/chart-data.js')}}"></script>
<script src="{{asset('js/easypiechart.js')}}"></script>
<script src="{{asset('js/easypiechart-data.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
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
