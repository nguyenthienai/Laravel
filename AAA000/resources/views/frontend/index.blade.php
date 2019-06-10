@extends('layouts.layoutsite')
@section('title','SocBabyShop')
@section('content')
<div id="wrap-inner">
	<div class="products">
		<h3>sản phẩm nổi bật</h3>
		@if (count($hotproduct))
		<div class="product-list row my-3">
			@foreach ($hotproduct as $product)
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
			@endif	 
		</div>                	                	
	</div>
	<div class="products my-3">
		<h3>sản phẩm mới</h3>
		@if (count($newproduct))
		<div class="product-list row my-3">
			@foreach ($newproduct as $product)
			<div class="product-item col-md-4 col-sm-6 col-xs-12 my-3">
				<a href="#">
					<img src="{{asset('images/products/' .$product->image)}}" class="img-thumbnail my-3">
				</a>
				<p><a href="#">{{$product->name}}</a></p>
				<h5 class="price">{{number_format($product->unitprice)}}</h5>	  
				<div class="marsk">
					<a href="{{route('product.detail', $product->id)}}">Xem chi tiết</a>
				</div>                                    
			</div>
			@endforeach
			@endif	 
		</div>                	                	
	</div>
	@endsection