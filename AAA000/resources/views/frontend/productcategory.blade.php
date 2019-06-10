@extends('layouts.layoutsite')
@section('title','Sản Phẩm')
@section('content')
	<div id="wrap-inner">
		<div class="products my-3">
			@if (count($productcategory))
				<div class="product-list row">
					@foreach ($productcategory as $product)
					<div class="product-item col-md-4 my-3">
						<a href="#">
							<img src="{{asset('images/products/' .$product->image)}}" class="img-thumbnail">
						</a>
						<p><a href="#">{{$product->name}}</a></p>
						<h5 class="price">{{number_format($product->unitprice)}}</h5>	  
						<div class="marsk">
							<a href="{{route('product.detail', $product->id)}}">Xem chi tiết</a>
						</div>                                    
					</div>
					@endforeach 
				</div> 
				<div class="row justify-content-center">{{$productcategory -> links()}}</div>
			@endif	          	
		</div>
	</div>	
@endsection