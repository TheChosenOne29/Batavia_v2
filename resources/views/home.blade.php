@extends('layouts.main')

@section('content')
	
<!-- Home -->
<div id="home" class="banner-area">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(./img/background02.jpg)"></div>
	<!-- /Backgound Image -->

	<div class="home-wrapper">

		<div class="col-md-10 col-md-offset-1 text-center">
			<div class="home-content">
				<h1 class="white-text">Welcome To Batavia Restaurant & Cafe</h1>
				<h4 class="white-text lead">An authentic Indonesian, Malay, Oriental cuisine with Halal certification.</h4>
				<a href="index.html#menu"><button class="main-button">Discover Menu</button></a>
			</div>
		</div>

	</div>

</div>
<!-- /Home -->

<!-- About -->
<div id="about" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<!-- section header -->
			<div class="section-header text-center">
				<h4 class="sub-title">About Us</h4>
				<h2 class="title">Batavia Restaurant & Cafe</h2>
			</div>
			<!-- /section header -->

			<!-- about content -->
			<div class="col-md-5">
				<h4 class="lead">Welcome to Batavia Restaurant & Cafe. Since ....</h4>
			</div>
			<!-- /about content -->

			<!-- about content -->
			<div class="col-md-7">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. </p>
			</div>
			<!-- /about content -->

			<!-- Gallery Slider -->
			<div class="col-md-12">
				<div id="Gallery" class="owl-carousel owl-theme">

					<!-- single column -->
					<div class="Gallery-item">

						<!-- single image -->
						<div class="Gallery-img" style="background-image:url(./img/image01.jpg)"></div>
						<!-- /single image -->

					</div>
					<!-- single column -->

					<!-- single column -->
					<div class="Gallery-item">

						<!-- single image -->
						<div class="Gallery-img" style="background-image:url(./img/image02.jpg)"></div>
						<!-- /single image -->

						<!-- single image -->
						<div class="Gallery-img" style="background-image:url(./img/image03.jpg)"></div>
						<!-- /single image -->

					</div>
					<!-- single column -->

					<!-- single column -->
					<div class="Gallery-item">

						<div class="item-column">
							<!-- single image -->
							<div class="Gallery-img" style="background-image:url(./img/image04.jpg)"></div>
							<!-- /single image -->

							<!-- single image -->
							<div class="Gallery-img" style="background-image:url(./img/image05.jpg)"></div>
							<!-- /single image -->
						</div>

						<div class="item-column">
							<!-- single image -->
							<div class="Gallery-img" style="background-image:url(./img/image06.jpg)"></div>
							<!-- /single image -->

							<!-- single image -->
							<div class="Gallery-img" style="background-image:url(./img/image07.jpg)"></div>
							<!-- /single image -->
						</div>

					</div>
					<!-- /single column -->

				</div>
			</div>
			<!-- /Gallery Slider -->


		</div>
		<!-- /row -->

	</div>
	<!-- /container -->

</div>
<!-- /About -->


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
				<li class="active"><a data-toggle="tab" href="#menu1">Dinner</a></li>
				<li><a data-toggle="tab" href="#menu1">Drinks</a></li>
				<li><a data-toggle="tab" href="#menu1">Launch</a></li>
				<li><a data-toggle="tab" href="#menu1">Dessert</a></li>
			</ul>
			<!-- /menu nav -->

			<!-- menu content -->
			<div id="menu-content" class="tab-content">

				<!-- menu1 -->
				<div id="menu1" class="tab-pane fade in active">
					<div class="col-md-6">

						<!-- single dish -->
						<div class="single-dish">
							<div class="single-dish-heading">
								<h4 class="name">Basted Rhubarb Mussels</h4>
								<h4 class="price">57£</h4>
							</div>
							<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
						</div>
						<!-- /single dish -->

						<!-- single dish -->
						<div class="single-dish">
							<div class="single-dish-heading">
								<h4 class="name">Steamed Chili Moussaka</h4>
								<h4 class="price">145£</h4>
							</div>
							<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
						</div>
						<!-- /single dish -->

						<!-- single dish -->
						<div class="single-dish">
							<div class="single-dish-heading">
								<h4 class="name">Blanched Fennel & Orange Lasagna</h4>
								<h4 class="price">79£</h4>
							</div>
							<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
						</div>
						<!-- /single dish -->

						<!-- single dish -->
						<div class="single-dish">
							<div class="single-dish-heading">
								<h4 class="name">Slow-Cooked Basil & Lime Ostrich</h4>
								<h4 class="price">57£</h4>
							</div>
							<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
						</div>
						<!-- /single dish -->

						<!-- single dish -->
						<div class="single-dish">
							<div class="single-dish-heading">
								<h4 class="name">Stuffed Oregano Chicken</h4>
								<h4 class="price">145£</h4>
							</div>
							<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
						</div>
						<!-- /single dish -->

					</div>

					<div class="col-md-6">

						<!-- single dish -->
						<div class="single-dish">
							<div class="single-dish-heading">
								<h4 class="name">Pressure-Fried Asparagus Chicken</h4>
								<h4 class="price">57£</h4>
							</div>
							<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
						</div>
						<!-- /single dish -->

						<!-- single dish -->
						<div class="single-dish">
							<div class="single-dish-heading">
								<h4 class="name">Tenderized Egg & Coconut Duck</h4>
								<h4 class="price">87£</h4>
							</div>
							<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
						</div>
						<!-- /single dish -->

						<!-- single dish -->
						<div class="single-dish">
							<div class="single-dish-heading">
								<h4 class="name">Milk Chocolate Gingerbread</h4>
								<h4 class="price">155£</h4>
							</div>
							<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
						</div>
						<!-- /single dish -->

						<!-- single dish -->
						<div class="single-dish">
							<div class="single-dish-heading">
								<h4 class="name">Simmered Mango & Pine Rabbit</h4>
								<h4 class="price">57£</h4>
							</div>
							<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
						</div>
						<!-- /single dish -->

						<!-- single dish -->
						<div class="single-dish">
							<div class="single-dish-heading">
								<h4 class="name">Red Wine Surprise</h4>
								<h4 class="price">87£</h4>
							</div>
							<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
						</div>
						<!-- /single dish -->

					</div>

				</div>
				<!-- /menu1 -->

			</div>
			<!-- /menu content -->

		</div>
		<!-- /row -->

	</div>
	<!-- /container -->

</div>
<!-- /Menu -->

<!-- Reservation -->
<div id="reservation" class="section">

	<!-- Backgound Image -->
	<div class="bg-image" style="background-image:url(./img/background03.jpg)"></div>
	<!-- /Backgound Image -->

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<!-- reservation form -->
			<div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
				<form class="reserve-form row">
					<div class="section-header text-center">
						<h4 class="sub-title">Reservation</h4>
						<h2 class="title white-text">Book Your Table</h2>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Name:</label>
							<input class="input" type="text" placeholder="Name" id="name">
						</div>
						<div class="form-group">
							<label for="phone">Phone:</label>
							<input class="input" type="tel" placeholder="Phone" id="phone">
						</div>
						<div class="form-group">
							<label for="date">Date:</label>
							<input class="input" type="text" placeholder="MM/DD/YYYY" id="date">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Email:</label>
							<input class="input" type="email" placeholder="Email" id="email">
						</div>
						<div class="form-group">
							<label for="number">Number of Guests:</label>
							<select class="input" id="number">
								<option>1 Person</option>
								<option>2 People</option>
								<option>3 People</option>
								<option>4 People</option>
								<option>5 People</option>
								<option>6 People</option>
							</select>
						</div>
						<div class="form-group">
							<label for="time">Time:</label>
							<input class="input" type="text" placeholder="HH:MM" id="time">
						</div>
					</div>

					<div class="col-md-12 text-center">
						<button class="main-button">Book Now</button>
					</div>

				</form>
			</div>
			<!-- /reservation form -->

			<!-- opening time -->
			<div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">
				<div class="opening-time row">
					<div class="section-header text-center">
						<h2 class="title white-text">Opening Time</h2>
					</div>
					<ul>
						<li>
							<h4 class="day">Sunday</h4>
							<h4 class="hours">10:00 am – 09:00 pm</h4>
						</li>
						<li>
							<h4 class="day">Monday</h4>
							<h4 class="hours">10:00 am – 09:00 pm</h4>
						</li>
						<li>
							<h4 class="day">Tuesday</h4>
							<h4 class="hours">10:00 am – 09:00 pm</h4>
						</li>
						<li>
							<h4 class="day">Wednesday</h4>
							<h4 class="hours">10:00 am – 09:00 pm</h4>
						</li>
						<li>
							<h4 class="day">Thursday</h4>
							<h4 class="hours">10:00 am – 09:00 pm</h4>
						</li>
						<li>
							<h4 class="day">Friday</h4>
							<h4 class="hours">10:00 am – 09:00 pm</h4>
						</li>
						<li>
							<h4 class="day">Saturday</h4>
							<h4 class="hours">10:00 am – 09:00 pm</h4>
						</li>
					</ul>
				</div>
			</div>
			<!-- /opening time -->

		</div>
		<!-- /row -->

	</div>
	<!-- /container -->

</div>
<!-- /Reservation -->

<!-- Events -->
<div id="events" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<!-- section header -->
			<div class="section-header text-center">
				<h4 class="sub-title">Special Event</h4>
				<h2 class="title">Upcoming Event</h2>
			</div>
			<!-- /section header -->

			<!-- single event -->
			<div class="col-md-6">
				<div class="event">
					<div class="event-img">
						<img src="./img/event01.jpg" alt="">
						<div class="event-day">
							<span>08<br>July</span>
						</div>
					</div>
					<div class="event-content">
						<p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
						<h3><a href="blog.html">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
						<p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
					</div>
				</div>
			</div>
			<!-- /single event -->

			<!-- single event -->
			<div class="col-md-6">
				<div class="event">
					<div class="event-img">
						<img src="./img/event02.jpg" alt="">
						<div class="event-day">
							<span>08<br>July</span>
						</div>
					</div>
					<div class="event-content">
						<p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
						<h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
						<p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
					</div>
				</div>
			</div>
			<!-- /single event -->

			<!-- single event -->
			<div class="col-md-6">
				<div class="event">
					<div class="event-img">
						<img src="./img/event02.jpg" alt="">
						<div class="event-day">
							<span>08<br>July</span>
						</div>
					</div>
					<div class="event-content">
						<p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
						<h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
						<p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
					</div>
				</div>
			</div>
			<!-- /single event -->

			<!-- single event -->
			<div class="col-md-6">
				<div class="event">
					<div class="event-img">
						<img src="./img/event01.jpg" alt="">
						<div class="event-day">
							<span>08<br>July</span>
						</div>
					</div>
					<div class="event-content">
						<p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
						<h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
						<p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
					</div>
				</div>
			</div>
			<!-- /single event -->

		</div>
		<!-- /row -->

	</div>
	<!-- /container -->

</div>
<!-- /Events -->

<!-- Contact -->
<div id="contact" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<div class="col-md-5 col-md-offset-7">
				<div class="section-header">
					<h4 class="sub-title">Contact Us</h4>
					<h2 class="title">Get In Touch</h2>
				</div>
				<div class="contact-content">
					<p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
					<h3>Tel: <a href="#">045-548-14-97</a></h3>
					<p>Address: 116 P. Ngọc Hà, Ngọc Hồ, Ba Đình, Hà Nội, Vietnam</p>
					<p>Email: <a href="#">Batavia@email.com</a></p>
					<ul class="list-inline">
						<li><p>Follow Us:</p></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
		<!-- /row -->

	</div>
	<!-- /container -->

	<!-- map -->
	<div id="map"></div>
	<!-- /map -->

</div>
<!-- Contact -->

@endsection