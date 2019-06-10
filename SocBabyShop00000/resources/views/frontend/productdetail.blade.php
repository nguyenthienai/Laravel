@extends('layouts.layoutsite')
@section('title','Sản Phẩm')
@section('content')
<nav aria-label="Page breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">Trang Chủ</li>
			<li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
			<li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
		</ol>
	</div>
</nav>
<section class="clearfix maincontent">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row" productinfo>
					<div class="col-md-6">
						<img src="{{asset('images/products/' .$product->image)}}" class="card-img-top" alt="...">
					</div>
					<div class="col-md-6">
						<h1 class="">{{$product->name}}</h1>
						<h3 class="price text-danger">{{number_format($product->unitprice)}} VNĐ</h3>
						<h5>Mô tả</h5>
						<p>{{$product->description}}</p>
						<div class="form-inline">
							<input type="number" min="1" value="1" class="form-control">
							<button type="button" class="btn btn-sm btn-success">Thêm vào giỏ hàng</button>
						</div>
					</div>
				</div>
				<div class="row text-center my-3" productdetail>
					<div class="col-md-6">
						<h6>{{$product->name}}</h6>
					</div>
				</div>

				<h3>Sản Phẩm Cùng Loại</h3>
				<div class="row" productother>
					@foreach ($productother as $product)					
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