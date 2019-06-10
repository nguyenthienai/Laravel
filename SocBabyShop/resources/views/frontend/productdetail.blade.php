@extends('layouts.layoutsite')
@section('title','Sản Phẩm')
@section('other_css')
<link rel="stylesheet" href="{{asset('css/details.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@endsection
@section('content')
<div id="wrap-inner">
	<div id="product-info">
		<div class="clearfix"></div>
		<div class="row">
			<div id="product-img" class="col-md-6">
				<img src="{{asset('images/products/' .$product->image)}}" class="card-img-top my-4">
			</div>
			<div id="product-details" class="col-md-6">
				<h3>{{$product->name}}</h3>
				<p>Giá: <span class="price">{{number_format($product->unitprice)}} VNĐ</span></p>
				<h4>Mô Tả:</h4>
				<p>{{$product->description}}</p> 
				<p class="add-cart text-center"><a href="{{route('cart.add', $product->id)}}">Đặt hàng online</a></p>
			</div>
		</div>							
	</div>
	<div>
		<button type="button" class="btn btn-default btn-lg" id="myBtn1">Comment Now</button>
		<!-- Modal -->
		<div class="modal fade" id="myModal1" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<form action="{{route('comment.post', $product->id)}}" method="post">
							@csrf
							<div class="form-group">
								<label for="email">Email:</label>
								<input required type="email" class="form-control" id="email" name="email">
							</div>
							<div class="form-group">
								<label for="name">Tên:</label>
								<input required type="text" class="form-control" id="name" name="name">
							</div>
							<div class="form-group">
								<label for="cm">Bình luận:</label>
								<textarea required rows="10" id="cm" class="form-control" name="content" rows="10"></textarea>
							</div>
							<div class="form-group text-right">
								<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Gửi</button>
							</div>
						</form>
					</div>
				</div>     
			</div>
		</div> 
	</div>

	<script>
		$(document).ready(function(){
			$("#myBtn1").click(function(){
				$("#myModal1").modal();
			});
		});
	</script>

	<div id="comment-list">
		@foreach($comments as $comment)
		<ul>
			<li class="com-title">
				{{$comment->name}}
				<br>
				<span>{{date('d/m/Y H:i', strtotime($comment->created_at))}}</span>	
			</li>
			<li class="com-details">
				{{$comment->content}}
			</li>
		</ul>
		@endforeach
	</div>
</div>	
@endsection