<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "hotel";
	
	
	$con = new mysqli($dbhost, $dbuser, $dbpass,$db);
?>

<!DOCTYPE html>
<html class="no-js"> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hotel Fixe&mdash; home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php">Listing</a></h1>

						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="listing.html" class="fh5co-sub-ddown">Listing</a>
									<ul class="fh5co-sub-menu">
										<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
										<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
										<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
										<li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
										<li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
										<li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="fh5co-sub-ddown">Dropdown</a>
									 <ul class="fh5co-sub-menu">
									 	<li><a href="left-sidebar.html">Web Development</a></li>
									 	<li><a href="right-sidebar.html">Branding &amp; Identity</a></li>
										<li>
											<a href="#" class="fh5co-sub-ddown">Free HTML5</a>
											<ul class="fh5co-sub-menu">
												<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
												<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
												<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
												<li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
												<li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
												<li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
											</ul>
										</li>
										<li><a href="#">UI Animation</a></li>
										<li><a href="#">Copywriting</a></li>
										<li><a href="#">Photography</a></li> 
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			
		</div>
		
		
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
				<form class="desc animate-box" method="POST" action="checkout.php">
					<h2>Travel Around The World.</h2>
					<div class="reserve-inputs">
						<select name="hotel_id" id="cars" class="input-text">
							<?php 
							
								$result = mysqli_query($con, "SELECT * FROM HOTEL");
								while($row = $result->fetch_row()) {
									echo "<option value=" .$row[0].">" .$row[2]. ", " .$row[1]. "</option>";
								}
							?>
						</select>
						<input name="check_in" class="input-text ml-5" type="datetime-local" placeholder="Check In">
						<input name="check_out" class="input-text ml-5" type="datetime-local" placeholder="Check Out">
					</div>
					<button class="btn mt-5 reserve">RESERVE</button>
				</form>
			</div>

		</div>


		<div class="fh5co-listing">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="images/img-1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Paris</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="images/img-2.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>New York</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="images/img-3.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>London</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<!-- END 3 row -->

					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="images/img-4.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Amsterdam</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="images/img-5.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Australia</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item">
							<img src="images/img-6.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Japan</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<!-- END 3 row -->


				</div>
			</div>
		</div>


		<div class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 fh5co-news">
						<h3>News</h3>
						<ul>
							<li>
								<a href="#">
									<span class="fh5co-date">Sep. 10, 2016</span>
									<h3>Newly done Bridge of London</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit!</p>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fh5co-date">Sep. 10, 2016</span>
									<h3>Newly done Bridge of London</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit!</p>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fh5co-date">Sep. 10, 2016</span>
									<h3>Newly done Bridge of London</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit!</p>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-6 fh5co-testimonial">
						<img src="images/cover_bg_1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive mb20">
						<img src="images/cover_bg_1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2016 Free Html5 <a href="#">Listing</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

