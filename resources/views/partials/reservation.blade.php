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
				<form action="/reservation/store" method="POST" class="reserve-form row" >
					@csrf
					<div class="section-header text-center">
						<h4 class="sub-title">Reservation</h4>
						<h2 class="title white-text">Book Your Table</h2>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Name:</label>
							<input class="input" type="text" placeholder="Name" id="name" name="name">
						</div>
						<div class="form-group">
							<label for="phone">Phone:</label>
							<input class="input" type="tel" placeholder="Phone" id="phone" name="phone">
						</div>
						<div class="form-group">
							<label for="date">Date:</label>
							<input class="input" type="date" placeholder="DD/MM/YYYY" id="date" name="date">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Email:</label>
							<input class="input" type="email" placeholder="Email" id="email" name="email">
						</div>
						<div class="form-group">
							<label for="number">Number of Guests:</label>
							<select class="input" id="number" name="guest">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
							</select>
						</div>
						<div class="form-group">
							<label for="time">Time:</label>
							<input class="input" type="time" placeholder="HH:MM" id="time" name="time">
						</div>
					</div>

					<div class="col-md-12 text-center">
						<button type="submit" class="main-button">Book Now</button>
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