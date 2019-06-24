@extends('layouts.frontend.master')
@section('title','Tìm Kiếm Sản Phẩm')
@section('content')
<nav aria-label="Page breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('home')}}"> Trang Chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
			<li class="breadcrumb-item active" aria-current="page">Kết Quả Tìm Kiếm</li>
		</ol>
	</div>
</nav>
<div id="wrap-inner">
	<div class="products">
		<div class="container">
			@if (count($products))
			<h5>Kết quả tìm kiếm với từ khóa:  <span>{{$search}}</span></h5>
			<div class="row">
				@foreach ($products as $product)
				<div class="col-md-3 col-sm-6 col-xs-6 col-lg-3">					
					<div class="card w-100">
						<a href="{{route('product.detail', $product->id)}}">
							<img src="{{asset('images/products/' .$product->image)}}" class="card-img-top zoom" alt="...">
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
			<div class="row justify-content-center">{{$products -> links()}}</div>
			@else
			<h3>{{'Kết quả tìm kiếm vớitừ khóa ' .'"' .$search .'"'}}</h3>
			<h5>Sản phẩm chưa được cập nhật</h5>   
			@endif
		</div> 	                	
	</div>
</div>
@endsection