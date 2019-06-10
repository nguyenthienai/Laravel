@php
use App\Models\Slider;

$listslider = Slider::where('status',1)->get();
@endphp
@if(count($listslider))
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner">
		@foreach($listslider as $slider)
			@if ($loop->first)
				<div class="carousel-item active">
					<img class="img-fluid" src="{{asset('images/slider/' .$slider->img)}}" alt="$slider->name">
				</div>
			@else
				<div class="carousel-item">
					<img class="img-fluid" src="{{asset('images/slider/' .$slider->img)}}" alt="$slider->name">
				</div>	
			@endif
		@endforeach	    
	</div>
	<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
@endif
