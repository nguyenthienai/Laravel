@extends('layouts.layoutsite')
@section('title','Sản Phẩm')
@section('other_css')
<link rel="stylesheet" href="{{asset('css/details.css')}}">
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
	<div id="comment">
		<h3>Bình luận</h3>
		<div class="col-md-9 comment">
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
					<button type="submit" class="btn btn-default">Gửi</button>
				</div>
			</form>
		</div>
	</div>
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