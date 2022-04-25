<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Restaurant Batavia</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		{{-- Login Bootstrap --}}



		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
<body>
	<div class="bg-image bg-parallax overlay" style="background-image:url(./img/background02.jpg)"></div>
	<div class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="section-header text-center">
					<form action="/login" method="POST" class="reserve-form row">
					<h3 class="sub-title">Login to use your account</h3>
					<h2 class="title white-text">Batavia Restaurant & Cafe</h2>
					<div class="col-md-4 col-md-offset-4">
						@csrf
							<div class="form-group">
								<label for="email">E-mail</label>
								<input class="input" type="email" placeholder="Type your email here.." id="email" name="email" autofocus>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input class="input" type="password" placeholder="Type your password here.." id="password" name="password">
							</div>
							<button type="submit" class="main-button">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>