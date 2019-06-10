@php
use App\Product;

$products = Product::where('status',1)->orderby('created_at','desc')->take(6)->get();
@endphp
@foreach($products as $product)
<div id="banner-l" class="text-center">
	<div class="banner-l-item">
		<a href="{{route('product.detail', $product->id)}}"><img src="{{asset('images/products/' .$product->image)}}" alt="" class="img-thumbnail"></a>
	</div>
</div>
@endforeach
