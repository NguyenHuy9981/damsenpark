@php
 $baseUrl = 'http://localhost/Shopping4/';
@endphp

<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						@foreach ($sliders as $key => $slider)
							<li data-target="#slider-carousel" data-slide-to="0" class="{{$key == 0 ? 'active' : ''}}"></li>
							
							@endforeach
						</ol>
						
						<div class="carousel-inner">
							@foreach ($sliders as $key => $slider)
							<div class="item {{$key == 0 ? 'active' : ''}}">
								<div class="col-sm-6">
									<h1><span>Shopping4</span></h1>
									<h2>{{ $slider->name }}</h2>
									<p>{{ $slider->description }}</p>
									<button type="button" class="btn btn-default get">Xem ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="{{ config('app.base-url') . $slider->image_path }}" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							@endforeach
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->