@extends('layouts.layoutsite')
@section('title','Tìm Kiếm Sản Phẩm')
@section('content')
<div id="wrap-inner">
	<div class="products">

		@if (count($products))
		<h4>Kết quả tìm kiếm với từ khóa:  <span>{{$search}}</span></h4>
		<div class="product-list row my-3">
			@foreach ($products as $product)
			<div class="product-item col-md-4 col-sm-6 col-xs-12 my-3">
				<a href="#">
					<img src="{{asset('images/products/' .$product->image)}}" class="img-thumbnail">
				</a>
				<p><a href="#">{{$product->name}}</a></p>
				<h5 class="price">{{number_format($product->unitprice)}} VNĐ</h5>	  
				<div class="marsk">
					<a href="{{route('product.detail', $product->id)}}">Xem chi tiết</a>
				</div>                                    
			</div>
			@endforeach

		</div>
		<div class="row justify-content-center">{{$products -> links()}}</div>
		@else
		<h3>{{'Kết quả tìm kiếm vớitừ khóa ' .'"' .$search .'"'}}</h3>
		<h4>Sản phẩm chưa được cập nhật</h4>   
		@endif
     	                	
	</div>
	@endsection