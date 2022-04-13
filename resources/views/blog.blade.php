@extends('layouts.main')

@section('content')
	
<div class="banner-area">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(./img/background01.jpg)"></div>
	<!-- /Backgound Image -->	
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2 class="white-text title">Blog Post</h2>
		</div>
	</div>
</div>
</div>


<!-- Blog -->
<div id="blog" class="section">
	
	<!-- container -->
	<div class="container">
		
		<!-- row -->
		<div class="row">
			
			<!-- blog post -->
			@foreach ($dataEvents as $item)
			<div class="col-md-8 col-md-offset-2">
				
				<!-- blog post img -->
				{{-- <div class="blog-img">
					<img src="./img/blog-post.jpg" alt="">
					<div class="blog-day">
						<span>08<br>July</span>
					</div>
					<ul class="blog-meta">
						<li><i class="fa fa-user"></i>John Doe</li>
						<li><i class="fa fa-pencil"></i>Category</li>
						<li><i class="fa fa-comments"></i>3</li>
					</ul>
				</div>
				<!-- /blog post img --> --}}
				<!-- blog post content -->
				
				<div class="blog-content">
					<h3>{{ $item->title }}</h3>
					<p>{{ $item->body }}</p>
				</div>
				
				<!-- /blog post content -->
			</div>
		</div>
		<!-- /blog post -->
		
	</div>
	<!-- /row -->
	
</div>
<!-- /container -->

</div>
<!-- /Blog -->
@endforeach

@endsection