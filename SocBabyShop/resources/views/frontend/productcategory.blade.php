@extends('layouts.frontend.master')
@section('title','Sản Phẩm')
@section('content')
<nav aria-label="Page breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('home')}}"> Trang Chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="{{route('product.all')}}">Sản Phẩm</a></li>
			<li class="breadcrumb-item active" aria-current="page">{{$cat->name}}</li>
		</ol>
	</div>
</nav>
<div id="wrap-inner">
	<div class="products">	
		<div class="container">
			@if (count($productcategory))
			<div class="row">
				@foreach ($productcategory as $product)
				<div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">					
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
				<div class="row justify-content-center">{{$productcategory -> links()}}</div>
			</div>
			@endif
		</div>                                 		 
	</div>                	                	
</div>
@endsection