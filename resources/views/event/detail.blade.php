
@extends('layouts.main')

@section('title')
  <title>Trang chủ</title>
@endsection

@section('css')
<link href="{{ asset('public\home\home.css') }}" rel="stylesheet"/>
@endsection


@section('content')
    
<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">{{ $event->event_name }}</h2>
						<div class="single-blog-post">
                            <h4>{{ $event->business_name }}</h4>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
								</ul>
							</div>
							{!! $event->content !!}
							<div class="pager-area">
								<ul class="pager pull-right">
									<li><a href="#">Pre</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div>
						</div>
					</div><!--/blog-post-area-->

</div>				
					
@endsection

@section('js')
  <!-- import thư viện JS -->
  <script src="{{ asset('public\cart\cart.js') }}"></script>
@endsection

