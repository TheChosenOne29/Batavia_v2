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
			<div class="col-md-8 col-md-offset-2">

				<!-- blog post img -->
				<div class="blog-img">
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
				<!-- /blog post img -->

				<!-- blog post content -->
				<div class="blog-content">
					<h3>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</h3>
					<p>Ius sumo feugiat efficiantur at, vel te facete persecuti. Et audiam epicuri appareat cum, ne eruditi perpetua mel. Ceteros denique conceptam mel an, odio cibo nostrum cu ius, regione voluptua cum ea. Duo rationibus efficiendi sadipscing eu, per mazim adipisci ut, nemore nominavi sensibus sea cu. Ne clita volumus theophrastus mea, no pri efficiendi comprehensam.</p>
					<p>Et duo putant euripidis, nam eros epicuri id. At sed solet omnesque, ex saepe regione iracundia mea. Cum rebum rationibus ut, nihil eruditi sea no, quo insolens platonem delicatissimi cu. Per dicunt omittantur ea, possit legimus cu sit, vis enim putent te. Sea an eirmod theophrastus, eum cu everti iriure.</p>
					<p>Altera detraxit cum ex. Est perpetua voluptatum at. Ut vim noster accusamus. Sed prompta intellegam sadipscing id, ex eam quodsi aperiam. Eu his vero rebum iriure. Has te rebum noluisse, et vel vivendo sadipscing complectitur, eu erat debet dolorum quo.</p>
					<p>Eu usu aliquip vivendo. Impedit suscipit invidunt te vel, sale periculis id mea. Ne nec atqui paulo, ad vel zril saperet consequuntur, cu dolore facilisi vulputate mei. Mei copiosae voluptaria in, quo ut mazim possit vivendum. Per nulla theophrastus</p>
				</div>
				<!-- /blog post content -->

				<!-- blog post tags -->
				<div class="blog-tags">
					<a href="#">tasty</a>
					<a href="#">food</a>
					<a href="#">pizza</a>
					<a href="#">dinner</a>
					<a href="#">spon</a>
				</div>
				<!-- /blog post tags -->

				<!-- blog post share -->
				<div class="blog-share">
					<h4>Share Article:</h4>
					<a href="#" class="twitter"><i class="fa fa-twitter"></i>Twitter</a>
					<a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook</a>
					<a href="#" class="google"><i class="fa fa-google"></i>Google+</a>
				</div>
				<!-- /blog post share -->

				<!-- blog post nav -->
				<div class="blog-nav">
					<div class="row">

						<!-- previous post -->
						<div class="col-md-6">
							<div class="blog-previous">
								<a href="#">
									<img src="./img/blog01.jpg" alt="">
									<div>
										<span>Previous Post</span>
										<h4>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</h4>
									</div>
								</a>
							</div>
						</div>
						<!-- /previous nav -->

						<!-- next nav -->
						<div class="col-md-6">
							<div class="blog-next">
								<a href="#">
									<div>
										<span>Next Post</span>
										<h4>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</h4>
									</div>
									<img src="./img/blog02.jpg" alt="">
								</a>
							</div>
						</div>
						<!-- /next nav -->

					</div>
				</div>
				<!-- /blog post nav -->

				<!-- blog post comments -->
				<div class="blog-comments">
					<h3 class="title">Comments</h3>

					<!-- comment -->
					<div class="media">
						<div class="media-left">
							<img src="./img/avatar.png" alt="">
						</div>
						<div class="media-body">
							<div class="media-heading">
								<h4>John Doe <small>2 min ago</small><small><a href="#" class="pull-right"><i class="fa fa-reply"></i></a></small></h4>
							</div>
							<p>Eu usu aliquip vivendo. Impedit suscipit invidunt te vel, sale periculis id mea. Ne nec atqui paulo,</p>
						</div>

						<!-- comment -->
						<div class="media">
							<div class="media-left">
								<img src="./img/avatar.png" alt="">
							</div>
							<div class="media-body">
								<div class="media-heading">
									<h4>John Doe <small>2 min ago</small><small><a href="#" class="pull-right"><i class="fa fa-reply"></i></a></small></h4>
								</div>
								<p>Eu usu aliquip vivendo. Impedit suscipit invidunt te vel, sale periculis id mea. Ne nec atqui paulo,</p>
							</div>
						</div>
						<!-- /comment -->

					</div>
					<!-- /comment -->

					<!-- comment -->
					<div class="media">
						<div class="media-left">
							<img src="./img/avatar.png" alt="">
						</div>
						<div class="media-body">
							<div class="media-heading">
								<h4>John Doe <small>2 min ago</small><small><a href="#" class="pull-right"><i class="fa fa-reply"></i></a></small></h4>
							</div>
							<p>Eu usu aliquip vivendo. Impedit suscipit invidunt te vel, sale periculis id mea. Ne nec atqui paulo,</p>
						</div>
					</div>
					<!-- /comment -->

				</div>
				<!-- /blog post comments -->

				<!-- blog post reply -->
				<div class="blog-reply-form">
					<h3 class="title">Leave a Reply</h3>
					<form>
						<input class="input" placeholder="Name" type="text">
						<input class="input" placeholder="Email" type="email">
						<textarea class="input" placeholder="Message"></textarea>
					</form>
				</div>
				<!-- /blog post reply -->

			</div>
			<!-- /blog post -->

		</div>
		<!-- /row -->

	</div>
	<!-- /container -->

</div>
<!-- /Blog -->
	@endsection