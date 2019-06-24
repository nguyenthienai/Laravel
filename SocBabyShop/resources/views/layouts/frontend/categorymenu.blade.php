<style type="text/css">
	.menu:hover{
		background-color: #66cccc;	
	}
</style>
@php
use App\Category;

$listcat = Category::where('parentid',0)->get();
@endphp
@if(count($listcat))
<nav id="menu">
    <ul>
    	<li class="menu-item">DANH MỤC SẢN PHẨM</li>
    	@foreach ($listcat as $cat)
    		<!-- <li class="menu-item menu"><a class="color1" href="{{route('product.category',$cat->id)}}">{{$cat->name}}</a></li> -->
    		<a class="color1" href="{{route('product.category',$cat->id)}}"><li class="menu-item menu">{{$cat->name}}</li></a>
    	@endforeach
    </ul>
</nav>
@endif
