@extends('layouts.layoutsite')
@section('title','Trang chủ')
@section('session_header')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection
@section('content')
<section class="clearfix maincontent">
	<div class="container">
		<div class="row" listcategoryslider>
			<div class="col-md-3" category>
				@includeIf('frontend.listcategory')
			</div>
			<div class="col-md-9" slider>
				@includeIf('frontend.slider')
			</div>
		</div>
		<h3>Sản Phẩm Mới Nhất</h3>
		@if (count($newproduct))
			<div class="row" productcategory>
				@foreach ($newproduct as $product)
					<div class="col-md-3">
						<div class="card w-100">
							<a href="{{route('product.detail', $product->id)}}">
							  <img src="{{asset('images/products/' .$product->image)}}" class="card-img-top" alt="...">
							</a>
							  <div class="card-body">
								    <h5 class="card-title text-center">{{$product->name}}</h5>
								    <h5 class="price text-center text-danger">{{number_format($product->unitprice)}} VNĐ</h5>
								    <h5 class="card-title">Giá khuyến mãi: {{$product->promotionprice}} VNĐ</h5>
								    <a href="{{route('product.cart')}}" class="form-control btn btn-success">Mua</a>
							  </div>
						</div>
					</div><!--end col-md-3--> 
				@endforeach
			</div><!--end product category-->
			<div class="row justify-content-center my-3">{{$newproduct -> links()}}</div>
		@endif
	</div>
</section>	
@endsection