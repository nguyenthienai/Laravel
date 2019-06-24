@extends('layouts.frontend.master')
@section('title','Sản Phẩm')
@section('other_css')
<link rel="stylesheet" href="{{asset('css/details.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@endsection
@section('content')
<nav aria-label="Page breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('home')}}"> Trang Chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="{{route('product.all')}}">Sản Phẩm</a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="{{route('product.category',$product->category->id)}}">{{$product->category->name}}</a></li>
			<li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
		</ol>
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<a href="optionallink.html">
			<img src="{{asset('images/products/' .$product->image)}}" class="thumbnail">
		</a>
		</div>
		<div class="col-md-8">
			<h3>{{$product->name}}</h3>
			<p>Giá: <span class="price">{{number_format($product->unitprice)}} VNĐ</span></p>
			<h5>Mô Tả:</h5>
			<p>{{$product->description}}</p> 
			<a class="btn btn-success" href="{{route('cart.add', $product->id)}}">Thêm Vào Giỏ Hàng</a>
			<a class="btn btn-success" href="{{route('buynow', $product->id)}}">Mua Ngay</a>
		</div>
	</div>
	<div>
		<button type="button" class="btn btn-default btn-lg" id="myBtn1">Comment Now</button>
		@include('modals.modalcomment')
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