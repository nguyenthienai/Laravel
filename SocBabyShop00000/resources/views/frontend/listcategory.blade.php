<link rel="stylesheet" href="css/category.css">
@php
use App\Models\Category;

$listcat = Category::where('parentid',0)->get();
@endphp
@if(count($listcat))
<ul id="menu">
	<li class="menu-item">DANH MỤC SẢN PHẨM</li>
	@foreach ($listcat as $cat)
		<li class="menu-item"><a class="color1" href="{{route('product.category', $cat->slug)}}">{{$cat->name}}</a></li>
	@endforeach
</ul>
@endif
