<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "hotel";
	
	
	$con = new mysqli($dbhost, $dbuser, $dbpass,$db);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hotel Fixe &mdash; CheckOut</title>
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
						<h1 id="fh5co-logo"><a href="index.html">Listing</a></h1>
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
									<a href="/hotel">Home</a>
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
								<li class="active"><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			
		</div>
		<div id="fh5co-contact" class="fh5co-section animate-box">
			<div class="container">
				<form action="success.php" method="POST">
					<div class="row">
						<div class="col-md-12">
							<?php
								$result = mysqli_query($con, "SELECT * FROM HOTEL WHERE ID_HOTEL = " .$_POST['hotel_id']);
								
								$row = $result->fetch_row();
							?>
							<select name="hotel_id" id="cars" class="form-control">
								<?php 
									
									$result = mysqli_query($con, "SELECT * FROM HOTEL");
									while($row = $result->fetch_row()) {
										if($row[0] == $_POST["hotel_id"]) {
											echo "<option value=" .$row[0]." selected>" .$row[2]. ", " .$row[1]. "</option>";
										} else {
											echo "<option value=" .$row[0].">" .$row[2]. ", " .$row[1]. "</option>";
										}
									}
								?>
							</select>
							<div class="row mt-5">
								<div class="col-md-3">
									<?php 
										echo "<input type='datetime-local' class='form-control' placeholder='Check In' name='check_in' required value=" .$_POST["check_in"]. ">";
									?>
								</div>
								<div class="col-md-3">
									<?php 
										echo "<input type='datetime-local' class='form-control' placeholder='Check Out' name='check_out' required value=" .$_POST["check_out"]. ">";
									?>
								</div>
							</div>
							<div class="row mt-5">
								<div class="col-md-3">
									<input type="number" max="999" class="form-control" placeholder="Nº do quarto" name="n_quarto" required>
								</div>
								<div class="col-md-9">
									<input type="text" max="999" class="form-control" placeholder="Tipo do quarto" name="type_quarto" required>
								</div>
							</div>
							<input type="number" max="99999999" class="form-control mt-5" placeholder="Cartão de Cidadão" name="cc" required>
							<input type="text" class="form-control mt-5" placeholder="Nome" name="name" required>
							<input type="number" max="999999999" class="form-control mt-5" placeholder="Nº do contribuinte" name="contribuinte" required>
							<input type="number" max="99" class="form-control mt-5" placeholder="idade" name="idade" required>
							<button class="btn btn-primary btn-lg mt-5">Checkout</buton>
						</div>
					</div>
				</form>
			</div>
		</div>

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

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

