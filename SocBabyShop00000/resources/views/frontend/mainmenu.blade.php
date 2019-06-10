<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
@php
use App\Models\Menu;
$listmenu1 = Menu::where(['parentid'=>0])->get();
@endphp
@if(count($listmenu1))
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<!-- <a class="navbar-brand" href="#">Navbar</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button> -->
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="megamenu skyblue">
			@foreach ($listmenu1 as $menu1)
				@php
					$listmenu2 = Menu::where('parentid',$menu1->id)->get();
				@endphp
				@if(count($listmenu2))
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="{{url($menu1->link)}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							{{$menu1->name}}
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							@foreach ($listmenu2 as $menu2)
								<a class="dropdown-item" href="{{url($menu2->link)}}">{{$menu2->name}}</a>
							@endforeach
						</div>
					</li>
				@else
					<li class="nav-item">
						<a class="color1" href="{{'/' .$menu1->link}}">{{$menu1->name}}</a>
					</li>
				@endif
			@endforeach
		</ul>
	</div>
</nav>
@endif
