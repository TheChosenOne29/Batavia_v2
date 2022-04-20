<!-- Menu -->
<div id="menu" class="section">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(./img/background01.jpg)"></div>
	<!-- /Backgound Image -->

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<div class="section-header text-center">
				<h4 class="sub-title">Discover</h4>
				<h2 class="title white-text">Our Menu</h2>
			</div>

			<!-- menu nav -->
			<ul class="menu-nav">
				<li class="active"><a data-toggle="tab" href="#menu1">Light bites</a></li>
				<li><a data-toggle="tab" href="#menu2">Appetizer</a></li>
				<li><a data-toggle="tab" href="#menu3">Main Course</a></li>
				<li><a data-toggle="tab" href="#menu4">Desserts</a></li>
				<li><a data-toggle="tab" href="#menu5">Drinks</a></li>
			</ul>
			<!-- /menu nav -->

			<!-- menu content -->
			<div id="menu-content" class="tab-content">

				<!-- menu1 -->
				<div id="menu1" class="tab-pane fade in active">
					<div class="col-md-12">
						@foreach ($dataMenu1 as $item)
							
						<!-- single dish -->
						<div class="single-dish">
							<div class="single-dish-heading">
								<h4 class="name">{{ $item -> name }}</h4>
								<h4 class="price">{{ $item -> price}} ₫</h4>
							</div>
							<p>{{ $item -> desc}}</p>
						</div>
						<!-- /single dish -->
						
						@endforeach
					</div>

				</div>
				<!-- /menu1 -->

				<!-- menu2 -->
				<div id="menu2" class="tab-pane fade in active">
					<div class="col-md-12">
						@foreach ($dataMenu2 as $item)
							
						<!-- single dish -->
						<div class="single-dish">
							<div class="single-dish-heading">
								<h4 class="name">{{ $item -> name }}</h4>
								<h4 class="price">{{ $item -> price}} ₫</h4>
							</div>
							<p>{{ $item -> desc}}</p>
						</div>
						<!-- /single dish -->
						
						@endforeach
					</div>

				</div>
				<!-- /menu2 -->

				<!-- menu3 -->
				<div id="menu3" class="tab-pane fade in active">
					<div class="col-md-12">
						@foreach ($dataMenu3 as $item)
							
						<!-- single dish -->
						<div class="single-dish">
							<div class="single-dish-heading">
								<h4 class="name">{{ $item -> name }}</h4>
								<h4 class="price">{{ $item -> price}} ₫</h4>
							</div>
							<p>{{ $item -> desc}}</p>
						</div>
						<!-- /single dish -->
						
						@endforeach
					</div>

				</div>
				<!-- /menu3 -->

				<!-- menu4 -->
				<div id="menu4" class="tab-pane fade in active">
					<div class="col-md-12">
						@foreach ($dataMenu4 as $item)
							
						<!-- single dish -->
						<div class="single-dish">
							<div class="single-dish-heading">
								<h4 class="name">{{ $item -> name }}</h4>
								<h4 class="price">{{ $item -> price}} ₫</h4>
							</div>
							<p>{{ $item -> desc}}</p>
						</div>
						<!-- /single dish -->
						
						@endforeach
					</div>

				</div>
				<!-- /menu4 -->

				<!-- menu5 -->
				<div id="menu5" class="tab-pane fade in active">
					<div class="col-md-12">
						@foreach ($dataMenu5 as $item)
							
						<!-- single dish -->
						<div class="single-dish">
							<div class="single-dish-heading">
								<h4 class="name">{{ $item -> name }}</h4>
								<h4 class="price">{{ $item -> price}} ₫</h4>
							</div>
							<p>{{ $item -> desc}}</p>
						</div>
						<!-- /single dish -->
						
						@endforeach
					</div>

				</div>
				<!-- /menu5 -->

			</div>
			<!-- /menu content -->

		</div>
		<!-- /row -->

	</div>
	<!-- /container -->

</div>
<!-- /Menu -->