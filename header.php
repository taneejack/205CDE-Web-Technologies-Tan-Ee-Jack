<html>
<head>
<meta http-equiv="Content-Type"
content="text/html; charset-utf-8"/>
<title>
	<?php
		if (define('TITLE')) {
			print TITLE;
		}	else {
			print 'TravelSmart Vacation';
		}
	?>
</title>
<!-- Navigation bar created using bootstrap -->
	<link rel="stylesheet" type="text/css" href="index.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<div class="page-header">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Travelsmart</a>
				</div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="services.php">Our Services</a></li>
						<li><a href="tourpackages.php">Tour Packages</a></li>
						<li><a href="booking.php">Bookings</a></li>
						<li><a href="Admin.php">Admin Panel</a></li>
						
					</ul>
			</div>
		</nav>
</head>
<body>