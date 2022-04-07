
@extends('layouts.main')

@section('title')
  <title>Trang chủ</title>
@endsection

@section('css')
<link href="{{ asset('public\home\home.css') }}" rel="stylesheet"/>
<style>
	.slider-bot {
    	margin-bottom: 150px;
	}

	.slider-top {
    	margin-top: 100px;
	}
</style>
@endsection


@section('content')
    
	<div class="wrapper">

    <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12 slider-bot">    			   			
					<h2 class="title text-center">Sự kiện nổi bật</h2>    			    				    				
					
					<div id="slider-carousel" class="carousel slide slider-top" data-ride="carousel">
						<ol class="carousel-indicators">
						@foreach ($events as $key => $event)
							<li data-target="#slider-carousel" data-slide-to="0" class="{{$key == 0 ? 'active' : ''}}"></li>
							
						@endforeach
						</ol>
						
						<div class="carousel-inner">
							@foreach ($events as $key => $event)
							<div class="item {{$key == 0 ? 'active' : ''}}">
								<div class="col-sm-6">
									<h1><span>Little & Little</span></h1>
									<h2>{{ $event->event_name }}</h2>
									<p>{{ $event->business_name }}</p>
									<a class="btn btn-default get" href="{{ route('eventDetail', $event->id) }}" role="button">Xem ngay</a>
								</div>
								<div class="col-sm-6">
									<img src="{{ config('app.base_url') . $event->core_image }}" class="girl img-responsive" alt="" />
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
    </div><!--/#contact-page-->
					
	</div>				
					
@endsection

@section('js')
  <!-- import thư viện JS -->
  <script src="{{ asset('public\cart\cart.js') }}"></script>
@endsection

