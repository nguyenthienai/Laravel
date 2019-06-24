@extends('layouts.frontend.master')
@section('title','SocBabyShop')
@section('content')
<div id="wrap-inner">
	<div class="products">	
		<div class="container">
			<h3>Sản Phẩm Mới</h3>
			<div class="row">
				@foreach ($newproduct as $product)
				<div id="onmobile" class="col-md-3 col-sm-6 col-xs-6 col-lg-3">	
					<div class="card w-100">
						<a href="{{route('product.detail', $product->id)}}">
							<img src="{{asset('images/products/' .$product->image)}}" class="card-img-top zoom" title="{{$product->name}}" alt="{{$product->name}}">
						</a>
						<div class="card-body">
							<h5 class="card-title text-center">{{$product->name}}</h5>
							<h5 class="price text-center text-danger">{{number_format($product->unitprice)}} VNĐ</h5>
							<a href="{{route('cart.add',$product->id)}}" class="form-control btn btn-success">Mua</a>
						</div>						
					</div>		
				</div>
				@endforeach
			</div>

			<h3>Sản Phẩm Nổi Bật</h3>
			<div class="row">
				@foreach ($hotproduct as $product)
				<div id="onmobile" class="col-md-3 col-sm-6 col-xs-6">					
					<div class="card w-100">
						<a href="{{route('product.detail', $product->id)}}">
							<img src="{{asset('images/products/' .$product->image)}}" class="card-img-top zoom" title="{{$product->name}}" alt="{{$product->name}}">
						</a>
						<div class="card-body">
							<h5 class="card-title text-center">{{$product->name}}</h5>
							<h5 class="price text-center text-danger">{{number_format($product->unitprice)}} VNĐ</h5>
							<a href="{{route('cart.add',$product->id)}}" class="form-control btn btn-success">Mua</a>
						</div>						
					</div>		
				</div>
				@endforeach
			</div>
		</div>                                 		 
	</div>                	                	
</div>
@endsection