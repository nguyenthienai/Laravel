@extends('layouts.layoutsite')
@section('title','Sản Phẩm')
@section('content')
<nav aria-label="Page breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Trang Chủ</li>
			<li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
		</ol>
	</div>
</nav>
<section class="clearfix maincontent">
	<div class="container">
		<div class="row">
			<div class="col-md-3" category>
				@includeIf('frontend.listcategory')
			</div>
			<div class="col-md-9" slider>
				<div class="row">
					@foreach ($allproduct as $product)
					
							<div class="col-md-4">
							<div class="card w-100">
								<a href="{{route('product.detail', $product->id)}}">
									<img src="{{asset('images/products/' .$product->image)}}" class="card-img-top" alt="...">
								</a>
								<div class="card-body">
									<h5 class="card-title text-center">{{$product->name}}</h5>
									<h5 class="price text-center text-danger">{{number_format($product->unitprice)}} VNĐ</h5>
									<h5 class="card-title">Giá khuyến mãi: {{$product->promotionprice}} VNĐ</h5>
									<a href="#" class="form-control btn btn-success">Mua</a>
								</div>
							</div>
						</div><!--end col-md-3-->
						
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>	
@endsection